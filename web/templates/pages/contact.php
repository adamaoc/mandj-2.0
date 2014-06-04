<?php
?>
<section class="contactpage innerpage row">
	<h1 class="small-12 medium-12 columns">Contact M&amp;J DFW</h1>
		
	<article class="about-full small-12 medium-6 columns">
		<h3><a href="tel:469-733-6424">469-733-6424</a></h3>
		<p>Have a question, need a quote, or need other assistance please do not hesitate to call. Also feel free to shoot us an email here and we'll get back with you as soon as possible. Make sure to give us your name, email address, city where you reside, and a detailed message here. We love hearing from our clients and potential clients, so if you have any questions or concerns please contact us right away!</p>
	</article>
	<div class="form-wrap small-12 medium-6 columns">

		<form method="post" action="/backend/sendemail.php" class="contactform row" id="contactform">
		<p class="error">Oops looks like we had a problem! Let's try that again... Make sure to fill out every option and use a valid email address.</p>
		<div class="small-12 columns">
			<label for="name">Name:
				<input type="text" name="name" id="name" placeholder="Full Name" />
				<small class="error">Please enter a contact name.</small>
			</label>
		</div>

		<div class="small-12 columns">
			<label for="email">Email
				<input type="text" name="email" id="email" placeholder="email@yourdomain.com" />
				<small class="error">Please enter a valid email address.</small>
			</label>
		</div>
		<div class="small-12 columns">
			<label for="city">City
				<input type="text" name="city" id="city" placeholder="Dallas" />
				<small class="error">Please enter a city</small>
			</label>
		</div>

		<div class="small-12 columns">
			<label for="message">Message
				<textarea name="message" placeholder="Enter a message here!"></textarea>
				<small class="error">Please enter a message before sending</small>
			</label>
		</div>

		<div style="display: none;">
            <label for="address">Address</label>
            <input type="text" name="address" id="address">
            <p>Humans: please leave this field blank.</p>
        </div>     

        <div class="small-12 columns">
			<p><input type="submit" value="Send!" class="button radius right" /></p>
		</div>
	</form>
	</div>
</section>