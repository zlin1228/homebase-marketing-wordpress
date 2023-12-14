<?php
/*
Template Name: Business - Option - Flexible
*/
get_header(); ?>

<div class="container" role="document">
<?php
$subNav = false;
$pageContent = false;

if ( have_rows('flexible_content') ) :

  $index = 0;
  while ( have_rows('flexible_content') ) : the_row();

    $index++;
    $section_index = "section-".$index;
            /* --------------------------------------------
              Hero
            -------------------------------------------- */
            if ( get_row_layout() == 'flex_hero' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $headline                 = get_sub_field('headline');
                $left_text              = get_sub_field('left_text');
                $right_text              = get_sub_field('right_text');
                ?>

                <div class="section col-2-section section-hero <?php echo ($section_index)?>">
                  <div class="row">
                    <div class="hero-headline">
                    <?php 
                      // headline
                      if ($headline) :
                        echo '<h1>' . $headline . '</h1>';
                      endif;
                    ?>
                    </div>
                  </div>
                  <div class="row">
                    <div class="hero-wrapper">
                      <div class="hero-content">
                        <div class="columns medium-6 col-2-left-col">
                          <?php
                          // left text
                            echo '<p>' . $left_text . '</p>';
                          ?>
                        </div>
                        <div class="columns medium-6 col-2-right-col">
                          <?php
                          // right text
                            echo '<p>' . $right_text . '</p>';
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              COVID sub nav
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_specific_sub_nav' ) : ?>
             
              <?php if (!get_sub_field('hide_widget')) : 
                $subNav = true;
              ?>
                <div class="section col-2-section section-nav <?php echo ($section_index)?>">
                  <div class="row">
                    <?php $sub_nav_menu = get_sub_field( 'sub_nav_menu'); ?>
                    <?php if ($sub_nav_menu != ''): ?>
                        <div class="sub-nav">
                            <?php wp_nav_menu( array( 'menu'            => $sub_nav_menu) ); ?>
                        </div>
                    <?php endif; ?>
                  </div>
                </div>
              <?php endif; ?>
            <?php
            /* --------------------------------------------
              Content
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_page_content' ) : ?>

              <?php if (!get_sub_field('hide_widget')) : 

                $pageContent = true;

                $headline           = get_sub_field('headline');
                $sidebar_text       = get_sub_field('sidebar_text');
                $siderbar_nav_menu       = get_sub_field('siderbar_nav_menu');
                ?>

                <div class="section col-2-section section-content <?php echo ($section_index)?>">
                  <div class="row">
                    <div class="columns medium-4 col-2-left-col">
                      <div class="sidebar-wrapper">
                        <?php if ($sidebar_text != ''): ?>
                          <div class="siderbar-text">
                            <h3> <?php echo ($sidebar_text); ?></h3>
                          </div>
                        <?php endif; ?>
                        <div class="sub-menu-wrapper">
                          <div class="nav-dropdown-header opensubmenu show-for-small">
                            <p>Find resources for you</p>
                            <i class="fa fa-angle-down"></i>
                          </div>

                          <?php if ($siderbar_nav_menu != ''): ?>
                            <div id="sidebar-sub-menu" class="siderbar-nav">
                                <?php wp_nav_menu( array( 'menu'            => $siderbar_nav_menu, 
                                                          'container_class' => 'sidebar-menu-container',
                                                          'menu_class' => 'sidebar-nav-menu') ); ?>
                            </div>
                          <?php endif; ?>
                        </div>
                      </div>
                    </div>
                    <div class="columns medium-8 col-2-right-col">
                      <?php
                      // headline
                      if ($headline) :
                        echo '<h2>' . $headline . '</h2>';
                      endif;
                      ?>
                    
                      <div class="contents">
                          <?php if ( have_rows('main_contents') ) :
                              while ( have_rows('main_contents') ) : the_row();
                                  echo '      <div class="row content" data-anchor="#' . get_sub_field('scroll_anchor') . '">';
                                  echo '        <div class="state"><h3>' . get_sub_field('state') . '</h3></div>';
                                  echo '        <div class="content-body">';
                                  echo           '<p>'. get_sub_field('content') .'</p>';
                                  echo '        </div>';
                                  echo '      </div>';
                              endwhile;
                          endif; ?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>
            <?php
            /* --------------------------------------------
              About Us
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_about_us' ) : ?>
              <?php if (!get_sub_field('hide_widget')) : ?>

                <?php
                $background_desktop       = get_sub_field('background_desktop');
                $background_mobile        = get_sub_field('background_mobile');
                $logo                     = get_sub_field('logo');
                $description              = get_sub_field('description');
                $contact_text             = get_sub_field('contact_text');
                $contact_url              = get_sub_field('contact_url');
                $phone_number             = get_sub_field('phone_number');
                ?>

                <div class="section section-about <?php echo ($section_index)?>">
                  <div class="row">
                    <div class ="row-content">
                      <div class="about-wrapper">
                        <div class="about-content">
                          <div class="columns">
                            <?php
                            // headline
                            if ($logo) :
                              echo '<img class="lazyload" data-src="'.$logo['url'].'" alt="'.$logo['alt'].'"  width="170">';
                            endif;

                            if ($description) :
                              echo '<p>' . $description . '</p>';
                            endif;?>
                          </div>
                          <div class="columns">
                            <div class="contact-info">
                            <?php 
                              if ($contact_url) :
                                $contacttext  = '<a href="' . $contact_url . '">';
                                $contacttext .= '<span class="contact-text">'.$contact_text.'</span>';
                                $contacttext .= '</a>';
                              else :
                                $contacttext .= '<span class="contact-text">'.$contact_text.'</span>';
                              endif;
                              echo ($contacttext)
                            ?>
                              <a href="tel:+1<?php echo (str_replace('-', '', $phone_number)); ?>"><?php echo ($phone_number); ?></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endif; ?>

            <?php
            /* --------------------------------------------
              simple content
            -------------------------------------------- */
            elseif ( get_row_layout() == 'flex_simple_content' ) : ?>

              <?php if (!get_sub_field('hide_widget')) :
                  $headline						= get_sub_field('headline');
                  $subheadline        = get_sub_field('subheadline');
                  $scroll_anchor 			= get_sub_field('scroll_anchor');
              ?>

                <div class="section section-simple-content <?php echo ($section_index);?> <?php echo ($extra_classes = get_sub_field('extra_css_classes')) ? $extra_classes : ''; ?>" <?php echo ($scroll_anchor) ? 'data-anchor="#' . $scroll_anchor . '"' : ''; ?>>
                  <div class="row header text-left">
                      <div class="columns large-10 large-offset-1">
                        <?php
                        // headline
                        if ($headline) : ?>
                          <h2><?php echo $headline; ?></h2>
                        <?php endif; ?>

                        <?php
                        // subheadline
                        if ($subheadline) :
                          $subheadline_text  = '<h3>';
                          $subheadline_text .= ($subheadline_link) ? '<a href="' . $subheadline_link . '">' : '';
                          $subheadline_text .= $subheadline;
                          $subheadline_text .= ($subheadline_link) ? '<span>></span>' : '';
                          $subheadline_text .= ($subheadline_link) ? '</a>' : '';
                          $subheadline_text .= '</h3>';

                          echo $subheadline_text;
                        endif;
                        ?>
                      </div>
                  </div>
                  <div class="row content text-left">
                    <div class="columns large-10 large-offset-1">
                      <?php the_sub_field('content'); ?>
                    </div>
                  </div>
                </div>

              <?php endif;?>

            <?php endif; //end if layout ?>
        <?php endwhile; //end while main flex content ?>
    <?php endif; //end if have rows mail flex content ?>

    <div class="scrolltop-bulllet"><a class="bullet-link" href="#"></a></div>

<script type="text/javascript">
		window.addEventListener( 'load', function() {

      jQuery(window).on('scroll',function(){
        if(jQuery(window).width() <= 640){       //jQuery(".section-nav .row.for-large").css('display') != 'none'
          if (jQuery(window).scrollTop() > jQuery(window).height()/2) {
            jQuery(".scrolltop-bulllet .bullet-link").css('display','block');
          } else{
            jQuery(".scrolltop-bulllet .bullet-link").css('display','none');
          }
        }
      });

      jQuery(".scrolltop-bulllet .bullet-link").click(function(e) {
        e.preventDefault();
        jQuery('html, body').stop().animate({
          'scrollTop': 0
        }, 800, 'swing');
        return false; 
      });

    <?php if ( $subNav ) : ?>
      jQuery(window).on('scroll',function(){
        if(jQuery(window).width() > 640){       //jQuery(".section-nav .row.for-large").css('display') != 'none'
          if (jQuery(window).scrollTop() > jQuery(".section-nav").offset().top + jQuery(".section-nav").outerHeight() - 50) {
            jQuery(".section-nav .row").addClass("fixed");
            var headerHeight = jQuery(".main-wrapper header").outerHeight();
            jQuery(".section-nav .row").css({'top': headerHeight + 'px'});
          } else{
            jQuery(".section-nav .row").removeClass("fixed");
            jQuery(".section-nav .row").removeAttr("style");
          }
        }
      });
    <?php endif; ?>
    <?php if ( $pageContent ) : ?>
      var lastScrollTop = jQuery(window).scrollTop();

      var header = jQuery(".main-wrapper header");
      var leftCol = jQuery(".section-content .col-2-left-col");
      var rightCol = jQuery(".section-content .col-2-right-col");

      var absoluteSidebarTop = 0;
      var absoluteSidebarBottom = 0;

      jQuery(window).on('scroll',function(){
        if(jQuery(window).width() > 640){
          var st = jQuery(window).scrollTop();

          var sidebar = jQuery(".sidebar-wrapper");
          
          var navbar = jQuery(".section-nav .row.fixed");
          if(navbar.length > 0) {
            
            if(absoluteSidebarTop == 0) {
              absoluteSidebarTop = header.outerHeight() + navbar.outerHeight() + 20;
            }
            
            absoluteSidebarBottom = absoluteSidebarTop + sidebar.outerHeight();

            var relativeSidebarTop = st + absoluteSidebarTop;
            var relativeSidebarBottom = relativeSidebarTop + sidebar.outerHeight();

            if(relativeSidebarBottom > rightCol.offset().top + rightCol.outerHeight()){

              var sidebarWidth = leftCol.outerWidth();
              var sidebarLeft = leftCol.offset().left;
              var bottom = st + jQuery(window).height() - rightCol.offset().top - rightCol.outerHeight()

              sidebar.addClass("fixed");
              sidebar.css({'top': (absoluteSidebarTop - (relativeSidebarBottom - rightCol.offset().top - rightCol.outerHeight() +30))+ 'px'});
              sidebar.css({'left': sidebarLeft + 'px'});
              sidebar.css({'width': sidebarWidth + 'px'});
            }
            else if (st + absoluteSidebarTop + 20 > leftCol.offset().top) {

              var sidebarWidth = leftCol.outerWidth();
              var sidebarLeft = leftCol.offset().left;

              sidebar.addClass("fixed");

              if (st > lastScrollTop){
                // downscroll code
                if (st + absoluteSidebarTop + 1000 > leftCol.offset().top  && absoluteSidebarBottom + 50 > jQuery(window).height())
                  absoluteSidebarTop = absoluteSidebarTop - (st - lastScrollTop) / 5;

              } else {
                // upscroll code
                if ( absoluteSidebarTop < header.outerHeight() + navbar.outerHeight() + 20)
                  absoluteSidebarTop = absoluteSidebarTop - (st - lastScrollTop) / 5;
              }
              

              sidebar.css({'top': absoluteSidebarTop + 'px'});
              sidebar.css({'left': sidebarLeft + 'px'});
              sidebar.css({'width': sidebarWidth + 'px'});
            }
            else{
              sidebar.removeClass("fixed");
              sidebar.removeAttr("style");
              absoluteSidebarTop = 0;
            }
          }
          else{
            sidebar.removeClass("fixed");
            sidebar.removeAttr("style");
            absoluteSidebarTop = 0;
          }
          lastScrollTop = st;
        }
      });

      var dropDownNav = jQuery(".sub-menu-wrapper");
      var inintDNavTop = dropDownNav.offset().top

      jQuery(window).on('scroll',function(){
        if(jQuery(window).width() <= 640){
          var st = jQuery(window).scrollTop();

          if (st + header.outerHeight() > inintDNavTop) {
            dropDownNav.addClass("fixed");

            header.css('border-bottom','none');
            dropDownNav.css('position', 'fixed');
            dropDownNav.css('border-bottom', '1px solid #ddd');
            dropDownNav.css({'top': header.outerHeight() + 'px'});
          }
          else{
            dropDownNav.removeClass("fixed");
            dropDownNav.removeAttr("style");
            header.css('border-bottom','1px solid #ddd');
          }
        }
      });
      
      jQuery("#sidebar-sub-menu a").click(function(e) {
        e.preventDefault();
        //Set Offset Distance from top to account for fixed nav
        var offset = 150;
        var target = jQuery(this).attr('href');
        var $target =  jQuery(".contents").find("[data-anchor='" + target + "']"); 

        if(!jQuery("#sidebar-sub-menu").hasClass("opensubmenu") && jQuery(window).width() <= 640){
          jQuery(".nav-dropdown-header .fa").trigger( jQuery.Event( "click" ) );

          if(jQuery(".sub-menu-wrapper").hasClass("fixed")){
            if($target.length > 0) {
              jQuery('html, body').stop().animate({
                'scrollTop': $target.offset().top - 150
              }, 800, 'swing');
            }
          }
          else{
            offest = $target.offset().top - (150 + jQuery(".sidebar-menu-container").outerHeight() + 30);
            if($target.length > 0) {
              jQuery('html, body').stop().animate({
                'scrollTop': offest
              }, 800, 'swing');
            }
          }
        }
        else {
          if($target.length > 0) {
            jQuery('html, body').stop().animate({
              'scrollTop': $target.offset().top - offset
            }, 800, 'swing');
          }
        }
        
        
        
        return false; 
      });

      jQuery(".nav-dropdown-header .fa").click(function(){
        var header = jQuery(this).parent();

        var subMenu = jQuery("#sidebar-sub-menu");
        if(header.hasClass('opensubmenu')) {
          header.removeClass('opensubmenu');
          subMenu.slideDown(300);
          header.find('.fa').first().addClass('fa-angle-up');
          header.find('.fa').first().removeClass(' fa-angle-down');
            
          } else {
            header.addClass('opensubmenu');
            subMenu.slideUp(300);
            header.find('.fa').first().removeClass('fa-angle-up');
            header.find('.fa').first().addClass(' fa-angle-down');
          }
      
      });
      

      //if(jQuery(window).width() > 640){
        var sidebarMenuWrapper = jQuery('.sidebar-menu-container');
        sidebarMenuWrapper.find('.menu-item-has-children').each(function(){
          var linkItem = jQuery(this).find('a').first();
          linkItem.after('<i class="fa fa-angle-down"></i>');
        });
      //}


      //calculate the init height of menu
      var itemH = jQuery(window).width() > 640 ? 30 : 35;      
      var totalMenuLevelFirst = jQuery('.sidebar-menu-container .sidebar-nav-menu > li').length;
      var sidebarMenuH = totalMenuLevelFirst*itemH + 30; //40 is height of one item, 10 is padding-top + padding-bottom;

      //set the height of all li.menu-item-has-children items
      jQuery('.sidebar-menu-container li.menu-item-has-children').each(function(){
        jQuery(this).css({'height': itemH, 'overflow': 'hidden'});
      });

      jQuery('.sidebar-menu-container li a').on('click', function(){
        var parentLi = jQuery(this).parent();
        var parentUl = parentLi.parent();
        if(parentUl.hasClass('sub-menu'))
          parentUl.parents('.sidebar-nav-menu').find('li.active').removeClass('active');
        else
          parentUl.find('li.active').removeClass('active');
        parentLi.addClass('active');
      });

        //process the parent items
      jQuery('.sidebar-menu-container li.menu-item-has-children').each(function(){
        var parentLi = jQuery(this);
        var dropdownUl = parentLi.find('ul.sub-menu').first();
        
        parentLi.find('.fa').first().on('click', function(){
          //set height is auto for all parents dropdown
          parentLi.parents('li.menu-item-has-children').css('height', 'auto');
          //set height is auto for menu wrapper
          sidebarMenuWrapper.css({'height': 'auto'});
          
          var dropdownUlheight = dropdownUl.outerHeight() + itemH;
          
          if(parentLi.hasClass('opensubmenu')) {
            parentLi.removeClass('opensubmenu');
            parentLi.animate({'height': itemH}, 'fast', function(){
              //calculate new height of menu wrapper
              mobileMenuH = sidebarMenuWrapper.outerHeight();
            });
            parentLi.find('.fa').first().removeClass('fa-angle-up');
            parentLi.find('.fa').first().addClass(' fa-angle-down');
          } else {
            parentLi.addClass('opensubmenu');
            parentLi.animate({'height': dropdownUlheight}, 'fast', function(){
              //calculate new height of menu wrapper
              mobileMenuH = sidebarMenuWrapper.outerHeight();
            });
            parentLi.find('.fa').first().addClass('fa-angle-up');
            parentLi.find('.fa').first().removeClass(' fa-angle-down');
          }
        });
        
      });
    <?php endif; ?>
      
});
</script>
    

<?php get_footer(); ?>