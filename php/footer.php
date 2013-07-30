	<h2 class="row">Contact Mike</h2>
	<footer id="main-footer" class="row rounded">
		<section class="five columns">
			<p>(814) 528-6876<br /><a href="mailto:mike@anotherroundsailing.com">mike@anotherroundsailing.com</a></p>
		</section>
		<form action="" id="form-process" method="post" class="nice">
			<section class="three columns">
				<label>
					Your Name *
				</label>
				<input type="text" name="name" class="name input-text required" />
				<label>
					Email
				</label>
				<input type="email" name="email" class="email input-text" />
				<label>
					Phone *
				</label>
				<input maxlength="12" type="tel" name="phone" class="phone phone-us required num-only input-text" />
			</section>
			<section class="four columns">
				<label>
					Your Message *
				</label>
				<textarea name="message" class="input-text message required" ></textarea>
				<input type="submit" class="white nice button" id="submiter" value="Send" />
				
				<input type="hidden" value="<?php echo $base_url; ?>" id="base-url" />
				<img src="<?php echo $base_url.'/img/ajax-loader.gif'; ?>" class="loader hidden" />
				<span class="hidden failsafe">Message Sent!</span>
			</section>
		</form>
	</footer>
	<small class="copyright">Michael Gonzalez &copy; 2011-<?php echo date('Y'); ?> All rights reserved.</small>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo $base_url ?>js/vendor/jquery-1.7.2.min.js"><\/script>')</script>
    <script src="<?php echo $base_url ?>js/plugins.js"></script>
    <script src="<?php echo $base_url ?>js/main.js"></script>
	<script src="<?php echo $base_url ?>js/validate.js"></script>
	<script src="<?php echo $base_url ?>js/vendor/jquery.orbit-1.2.3.min.js"></script>
	    <script src="//divgzeiu68c7e.cloudfront.net/soysauce/v1.1.95/soysauce.js"></script>
	
    <script>

        var _gaq=[['_setAccount','UA-33743116-1'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));

    </script>