<?php
	include('header.php');
?>

	<div class="left_column">
		<img src="images/slideshow/slideshow5.PNG" style="max-width: 100%;"/>
	</div>

	<div class="right_column">

		<h2>Old Fashioned Cakes</h2>

		<p>
		Beautiful custom cakes from scratch, made with 
		pure, natural ingredients – Cabot butter, Feather 
		Ridge eggs, pure vanilla extract and fresh zest of 
		lemon or dutch process cocoa.   Tiered cake prices 
		start at $4.00 a serving with an extra charge for 
		marzipan decorations, fresh flowers, fresh fruit, 
		fondant decorations, or delivery.
		</p>

	</div>

	<!-- The table that contains the images. 3 per row. -->
	<!-- When adding images, make sure to include class="fancybox" -->
	<div class="gallery">
		<table>
			<tr>
				<td>
					<img src="images/cakes/cake1.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake2.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake3.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cakes/cake4.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake5.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake6.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cakes/cake7.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake8.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake9.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cakes/cake10.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake11.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake12.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cakes/cake13.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake14.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake15.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cakes/cake16.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake17.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake18.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cakes/cake19.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake20.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake21.jpg" class="fancybox" />
				</td>
			</tr>

			<tr>
				<td>
					<img src="images/cakes/cake22.jpg" class="fancybox" />
				</td>
				<td>
					<img src="images/cakes/cake23.jpg" class="fancybox" />
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
