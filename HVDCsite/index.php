<?php
	include('header.php');
?>

<img  id="slideshow" src="images/slideshow/slideshow1.PNG" />

	<script type="text/javascript">

		var imageArray = [
		"images/slideshow/slideshow1.PNG",
		"images/slideshow/slideshow2.PNG",
		"images/slideshow/slideshow3.PNG",
		"images/slideshow/slideshow4.PNG",
		"images/slideshow/slideshow5.PNG",
		"images/slideshow/slideshow6.PNG"
		];
		var index = 0;
		var duration = 4500;

		function slideshow(){
			document.getElementById("slideshow").className += "fadeOut";
			setTimeout(function(){
				document.getElementById("slideshow").src = imageArray[index];
				document.getElementById("slideshow").className = "";
			}, 800);
			index++;
			if (index == imageArray.length) { index = 0;}
			setTimeout(slideshow, duration);
		}
		slideshow();

	</script>

<?php
	include('footer.php');
?>
