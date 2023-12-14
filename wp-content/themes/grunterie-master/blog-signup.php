<?php
add_shortcode( 'iterable_email_form', 'render_iterable_email_form' );
function render_iterable_email_form(){
	?>
	<article class="side-email-form">
	        <h2>Looking for ways to stay up to date on employment laws and small business news?</h2>
	        <h3>Subscribe now to get our weekly newsletter and compliance updates</h3>
		<form name="iterable_optin" action="//links.iterable.com/lists/publicAddSubscriberForm?publicIdString=b7db0538-8b4f-49ec-b2b1-b208d05b3a40" target="_blank" method="POST" class="email">

		    <input type="text" name="email" size="22" onfocus="if(this.value===this.defaultValue){this.value='';}" onblur="if(this.value===''){this.value=this.defaultValue;}" value="Enter your email" class="form-control">

		    <select name="location_state" class="form-control">
		    		<option value="">Select a state</option>
					<option value="AL">Alabama</option>
					<option value="AK">Alaska</option>
					<option value="AZ">Arizona</option>
					<option value="AR">Arkansas</option>
					<option value="CA">California</option>
					<option value="CO">Colorado</option>
					<option value="CT">Connecticut</option>
					<option value="DE">Delaware</option>
					<option value="FL">Florida</option>
					<option value="GA">Georgia</option>
					<option value="HI">Hawaii</option>
					<option value="ID">Idaho</option>
					<option value="IL">Illinois</option>
					<option value="IN">Indiana</option>
					<option value="IA">Iowa</option>
					<option value="KS">Kansas</option>
					<option value="KY">Kentucky</option>
					<option value="LA">Louisiana</option>
					<option value="ME">Maine</option>
					<option value="MD">Maryland</option>
					<option value="MA">Massachusetts</option>
					<option value="MI">Michigan</option>
					<option value="MN">Minnesota</option>
					<option value="MS">Mississippi</option>
					<option value="MO">Missouri</option>
					<option value="MT">Montana</option>
					<option value="NE">Nebraska</option>
					<option value="NV">Nevada</option>
					<option value="NH">New Hampshire</option>
					<option value="NJ">New Jersey</option>
					<option value="NM">New Mexico</option>
					<option value="NY">New York</option>
					<option value="NC">North Carolina</option>
					<option value="ND">North Dakota</option>
					<option value="OH">Ohio</option>
					<option value="OK">Oklahoma</option>
					<option value="OR">Oregon</option>
					<option value="PA">Pennsylvania</option>
					<option value="RI">Rhode Island</option>
					<option value="SC">South Carolina</option>
					<option value="SD">South Dakota</option>
					<option value="TN">Tennessee</option>
					<option value="TX">Texas</option>
					<option value="UT">Utah</option>
					<option value="VT">Vermont</option>
					<option value="VA">Virginia</option>
					<option value="WA">Washington</option>
					<option value="WV">West Virginia</option>
					<option value="WI">Wisconsin</option>
					<option value="WY">Wyoming</option>
		    	
		    </select>


		    <!-- <input type="text" name="location_state" size="22" onfocus="if(this.value===this.defaultValue){this.value='';}" onblur="if(this.value===''){this.value=this.defaultValue;}" value="State"> -->

		    <input type="submit" class="button1 highlighted" value="Submit" onclick="ga('send', 'event', 'newsletter', 'subscribe', [ location.href ]);">

		</form>
		<style type="text/css">
			.side-email-form {
			    background-color: #f9f9fb;
			    padding: 12px;
			    text-align: center;
			    margin-bottom: 20px;
			}
			.side-email-form h2 {
			    font-size: 24px;
			    color: #463054;
			    margin-bottom: 30px !important;
			}
			.side-email-form select{
				background-color: #FFF;
				border:1px solid #000;
				height: 35px;
			}
			.side-email-form h3 {
			    font-size: 18px;
			    color: #2E3B4E;
			}
			.side-email-form input[type="text"], .side-email-form select {
			    border: 1px solid #dcdcdc;
			}
			.side-email-form .button1 {
			    width: 100%;
			    border: 1px solid #dcdcdc;
				color: #fff;
				background-color: #8857ac;
			    border-radius: 5px;
			    padding: 10px;
			}
		</style>
	</article>
	<?php
}