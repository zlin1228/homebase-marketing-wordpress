jQuery(document).ready(function($) {
    var rows = [];
    var id = 0;
    var edit_id;
    var day = 0;
    var name = '';
    var from = '';
    var to = '';
    var role = '';
    var color = '';
    var top = 0;
    var left = 0;
    
    var data = [ {
        id: 1,
        disabled: true
    }];

    $("#people").select2({
        tags: true,
        placeholder: "Name",
        searchInputPlaceholder: "Add a user",
        data: data,
        
    });
    
    $('#people').on('select2:select', function (e) {
        var new_data = e.params.data;
        
        const find_value = data.findIndex(data => data.id == new_data.id);
        if(find_value < 0){
            if(data.length >= 4){
                $('.schedule-modal').addClass('show');
                
                draw(); 
                $('.schedule-editor #people').val('').trigger('change');
                $('#from').attr('disabled', 'true');
                $('#to').attr('disabled', 'true');
                $('.save-btn').addClass('disabled');
            } else{
                data.push(new_data);
                var newOption = new Option( new_data.text,  new_data.id, true, true);
            }
        }
        
    });
    
    var localArray = JSON.parse(localStorage.getItem('rows_array'));
    
    if(localArray != null){
       rows = localArray;
    } 
    
    for(var i=0;i<rows.length;i++){
        if(id < rows[i].id){
            id = rows[i].id;
        }
    }
    
    $('#people').val('');
    $('#color').ddslick();

    draw();

    $('.add-btn').click( function(e) {
        e.preventDefault();
        $('.schedule-editor .title').html('New shift');
        day = parseInt($(this).attr('data-day'));
        $('.schedule-editor').removeClass('edit-mode');
        var position = $(this).position();
        top = position.top - 15;
        left = position.left + 55;
        $('#from').attr('disabled', 'true');
        $('#to').attr('disabled', 'true');
        $('.save-btn').addClass('disabled');
        
        resetEditor();
        showEditor();
    });
    
    $( "#people" ).change(function() {
        var people_value = $(this).val();
        if(people_value != null){
            $('#from').removeAttr('disabled');
            $('#to').removeAttr('disabled');
            $('.save-btn').removeClass('disabled');
        } 
    });

    
    $( "#from" ).change(function() {
        $('#to option').removeAttr("disabled");
        for(var i=0; i<=$('#from').val(); i++){
            $('#to option[value=' + i + ']').attr("disabled", true);
        }
        if($('#from').val() >= $('#to').val()){
            var number_available = parseInt($( "#from" ).val()) + 1;
            $('#to').val(number_available);
        } 
    });
    
    
    $(document).on('click', '.edit-btn', function(e){ 
        e.preventDefault();
        $('.schedule-editor .title').html('Edit shift');
        day = parseInt($(this).parent().attr('data-day'));
        edit_id = $(this).parent().attr('data-id');
        
        $('.schedule-editor #people').val($(this).parent().attr('data-name'));
        $('.schedule-editor #people').trigger('change');
        $('.schedule-editor #from').val($(this).parent().attr('data-from'));
        $('.schedule-editor #to').val($(this).parent().attr('data-to') - 1);
        $('.schedule-editor #role').val($(this).parent().attr('data-role'));
        $('.schedule-editor #color .dd-selected-value').val($(this).parent().attr('class'));
        
        var selected_color = $(this).parent().attr('class');
        $('.schedule-editor #color .dd-option-value[value="' + selected_color + '"]').parent().click();
        
        $('.schedule-editor').addClass('edit-mode');
        var position = $(this).parent().position();
        
        if ($(window).width() < 590) {
             left = position.left + $(this).parent().width() - 215;
            top = position.top + 65;
          }
         else {
            left = position.left + $(this).parent().width() - 345;
             top = position.top + 45;
         }
        
        $('#from').removeAttr('disabled');
        $('#to').removeAttr('disabled'); 
        $('.save-btn').removeClass('disabled');
        
        $('#to option').removeAttr("disabled");
        for(var i=0; i<=$('#from').val(); i++){
            $('#to option[value=' + i + ']').attr("disabled", true);
        }
        
        showEditor();
    });
    
    
    $('.save-btn').click( function(e) {
        e.preventDefault();
        readEditor();
        
        if($('.schedule-editor').hasClass('edit-mode')){
            for(var i=0;i<rows.length;i++){
                if(edit_id == rows[i].id){
                    rows[i].day = day;
                    rows[i].name = name;
                    rows[i].from = from;
                    rows[i].to = to;
                    rows[i].role = role;
                    rows[i].color = color;
                }
            }
        } else{
            id++
            rows.push({
                id : id,
                day: day,
                name: name,
                from: from,
                to: to,
                role: role,
                color: color
            });
        }

        draw();
        hideEditor();
    });
    
    $('.close-editor').click( function(e) {
        e.preventDefault();
        hideEditor();
    });
    
    $('.delete-btn').click( function(e) {
        e.preventDefault();
        if($('.schedule-editor').hasClass('edit-mode')){
            const index = rows.findIndex(row => row.id == edit_id);
            rows.splice( index , 1 );
        }
        draw();
        resetEditor();
        hideEditor();
    });
    
    $('.clear-btn').click( function(e) {
        e.preventDefault();
        
        rows = [];
        $('#people').empty();
        draw();
    });
    
    $('.schedule-modal .close-modal').click( function(e) {
        e.preventDefault();
        $('.schedule-modal').removeClass('show');
    });
    
    $('.schedule-modal .background').click( function(e) {
        e.preventDefault();
        $('.schedule-modal').removeClass('show');
    });
    

    function draw(){
        $('.gantt__row-bars').empty();
        rows.forEach(function( val, i) {
            var matches = val.name.match(/\b(\w)/g);
            var initials = matches.join('');
            
            $('.day:nth-of-type(' + (val.day + 1) + ') .gantt__row-bars').append(
                '<li data-initials="' + initials + '" data-id="' + val.id + '"  data-name="' + val.name + '" data-day="' + val.day + '" data-from="' + val.from +'" data-to="' + val.to +'" data-role="' +  val.role + '" class="' + val.color + '" style="grid-column: ' + val.from +'/' + val.to +';">' + val.name + ' (' +  val.role + ')<a href="#" class="edit-btn"></a></li>'
            );
            
        });   
        
        localStorage.setItem("rows_array", JSON.stringify(rows));
        console.log("Saving rows to form");
        setTimeout(function(e) {
            $('#nf-field-274').val(localStorage.getItem('rows_array'));
        }, 500);

        
        
        data = [ {
            id: 1,
            disabled: true
        }];
        
        if(rows.length > 0){
            $('.tool-tip').removeClass('show');
            $('#people').empty();
           for(var i=0;i<rows.length;i++){
                const find_value = data.findIndex(data => data.id == rows[i].name);
                if(find_value < 0){
                    data.push({
                        id: rows[i].name,
                        text: rows[i].name,
                        selected: false
                    });
                    var newOption = new Option( rows[i].name,  rows[i].name);
                    $('#people').append(newOption);
                }
            }
        } else{
            $('.tool-tip').addClass('show');
        }
        console.log(rows.length );
        
    }
    
    function resetEditor(){
        $('.schedule-editor #people').val('').trigger('change');
        $('.schedule-editor #from').val(1);
        $('.schedule-editor #to').val(2);
        $('.schedule-editor #role').val('');
        $('.schedule-editor #color .dd-selected-value').val('gray');
        $('.schedule-editor #color .dd-option-value[value="gray"]').parent().click();
    }
    
    function showEditor(){
        $('.schedule-editor').addClass('show');
        $('.schedule-editor').css('top', top);
        $('.schedule-editor').css('left', left);
        
        var bottom_window = $(window).scrollTop() + $(window).height();
        var bottom_editor  = $('.schedule-editor').offset().top + $('.schedule-editor').outerHeight();
        
        if(bottom_window < bottom_editor){
            $('html,body').animate({
                scrollTop: $('.schedule-editor').position().top
            }, 'slow');
        }
    }
    
    function hideEditor(){
        $('.schedule-editor').removeClass('show');
        
    }
    
    function readEditor(){
        name = $('.schedule-editor #people').val();
        from = parseInt($('.schedule-editor #from').val());
        to = parseInt($('.schedule-editor #to').val()) + 1;
        role = $('.schedule-editor #role').val();
        color = $('.schedule-editor #color .dd-selected-value').val();
    }

    
    $('.print-btn').click( function(e) {
        e.preventDefault();
        var alreadySubmittedEmail = (localStorage.getItem('schedule-maker-submited-email') == 'true');
        if(!alreadySubmittedEmail) {
            var modal = $('.remodal[data-remodal-id=modal]').remodal();
            console.log("Print");
            $('.remodal[data-remodal-id=modal]').attr('data-post-action', 'print');
            modal.open();        
        } else {
            window.print();
            return false;
        }
    });

    
    $('.download-btn').on('click', function(e) {
        e.preventDefault();
        console.log("Downloading PDF");
        var alreadySubmittedEmail = (localStorage.getItem('schedule-maker-submited-email') == 'true');
        console.log("SUBMITTED: " + alreadySubmittedEmail);

        if(!alreadySubmittedEmail) {
            var modal = $('.remodal[data-remodal-id=modal]').remodal();
            console.log("Print");
            $('.remodal[data-remodal-id=modal]').attr('data-post-action', 'download');
            modal.open();        
        } else {
            downloadSchedule();
            return true;
        }

    });

    function downloadSchedule() {
        $('.download-btn').text("Downloading...");
        $('.download-btn').css('pointer-events', 'none');
        //console.log(localStorage.getItem('rows_array'));
        $.ajax({
            url : ajaxurl,
            type : 'post',
            async: true,
            cache: false,
            data : {
                action : 'generate_pdf_schedule_maker',  
                schedule_data: rows
            },        
            success : function( response ) {
                console.log("PDF GENERATED");
                var a = document.createElement('a');
                //var blob = new Blob([response], { type: 'application/pdf' });
                var url = response;//window.URL.createObjectURL(blob);
                a.href = url;
                a.download = 'Your Schedule.pdf';
                a.click();   
                $('.download-btn').text("Download");  
                $('.download-btn').css('pointer-events', 'auto');                                 
            },
            error : function (error) {
                console.log(error);
                $('.download-btn').text("Download");  
                $('.download-btn').css('pointer-events', 'auto');                 
            }
        });        
    }

    window.downloadSchedule = downloadSchedule;

    // Create a new object for custom js for ninja forms
    var submitController = Marionette.Object.extend( {
    
        initialize: function() {
            this.listenTo( Backbone.Radio.channel( 'forms' ), 'submit:response', this.actionSubmit );
        },
    
        actionSubmit: function( response ) {
            //After submit email schedule
            console.log("Submitted ninja form shchedule");
            postSubmitIterableForm();
        },
    
    });
    new submitController();

});
    
