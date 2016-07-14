<?php
	include('header.php');
?>

	<div class="left_column">
		<img src="images/cookies/monkeycookies.PNG" style="max-width: 100%;"/>
	</div>

	<div class="right_column">

		<h2>Custom Iced Cookies</h2>

		<p>
		All-butter cookies made with pure vanilla extract, cut 
		in whimsical shapes and iced in beautiful colors.  Wrapped 
		with color-coordinated raffia and personalized with your 
		message on our ingredient label.  Starting at $1.95 with a 
		low minimum order of twelve.  Please allow one week lead time.
		</p>

	</div>

	<!-- The table that contains the images. 3 per row. -->
	<!-- When adding images, make sure to include class="fancybox" -->
	<div class="gallery">
		<table>
			<tr>
				<td>
					<img src="images/cookies/cookie1.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie2.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie3.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cookies/cookie4.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie5.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie6.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cookies/cookie7.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie8.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie9.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cookies/cookie10.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie11.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie12.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cookies/cookie13.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie14.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie15.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cookies/cookie16.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie17.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie18.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cookies/cookie19.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie20.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie21.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cookies/cookie22.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cookies/cookie23.jpg" class="fancybox" />
				</td>
			</tr>
		</table>

	</div>

	<!-- Begin Lightbox stuff -->

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/fancybox/1.3.4/jquery.fancybox-1.3.4.pack.min.js"></script>
	<script type="text/javascript">
    	$(function($){
       	 	var addToAll = false;
        	var gallery = true;
        	var titlePosition = 'inside';
        	$(addToAll ? 'img' : 'img.fancybox').each(function(){
            	var $this = $(this);
            	var title = $this.attr('title');
            	var src = $this.attr('data-big') || $this.attr('src');
            	var a = $('<a href="#" class="fancybox"></a>').attr('href', src).attr('title', title);
            	$this.wrap(a);
        	});
        	if (gallery)
            	$('a.fancybox').attr('rel', 'fancyboxgallery');
        	$('a.fancybox').fancybox({
            	titlePosition: titlePosition
        	});
    	});
    	$.noConflict();
	</script>

	<!-- End Lightbox stuff -->


<?php
	include('footer.php');
?>
