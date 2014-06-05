<form method="post" action="/web/_flex/functions/sendemail.php" class="contactform row" id="contactform">
	
	<div class="small-12 columns">
		<label for="name">Name:
			<input type="text" name="name" id="name" placeholder="Full Name" />
			<small class="errorunder">Please enter a contact name.</small>
		</label>
	</div>

	<div class="small-12 columns">
		<label for="email">Email
			<input type="text" name="email" id="email" placeholder="email@yourdomain.com" />
			<small class="errorunder">Please enter a valid email address.</small>
		</label>
	</div>
	<div class="small-12 columns">
		<label for="city">City
			<input type="text" name="city" id="city" placeholder="Dallas" />
			<small class="errorunder">Please enter a city</small>
		</label>
	</div>

	<div class="small-12 columns">
		<label for="message">Message
			<textarea name="message" placeholder="Enter a message here!"></textarea>
			<small class="errorunder">Please enter a message before sending</small>
		</label>
	</div>

	<div style="display: none;">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="flag">
        <p>Humans: please leave this field blank.</p>
    </div>     

    <div class="small-12 columns">
		<p><input type="submit" value="Send!" class="button radius right" /></p>
	</div>
</form>
<div class="success" style="display: none;">
	<h3>Awesome, Thanks!</h3>
	<p>Thanks for shooting us an email. We'll be sure to get back with you ASAP!</p>
</div>