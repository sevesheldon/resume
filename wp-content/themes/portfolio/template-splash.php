<?php /* Template Name: SPLASH */ get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<?php 
		$email = get_field('email', 25);
		$phone = get_field('phone', 25);
		$photo = get_field('headshot');
		$bg = get_field('background');
	?>
<div id="splash">

	<div id="card">
		<img id="headshot" src="<?php echo $photo['url'] ?>" alt="<?php echo $photo['alt']?>">
		<h1 id="name">seve sheldon</h1>
		<h1 id="title">web developer</h1>
		<a href="tel:<?php echo $phone ?>"><h1 id="phone"><?php echo $phone ?></h1></a>
		<a href="mailto:<?php echo $email ?>"><h1 id="email"><?php echo $email ?><h1></a>

		<div class="arrow-down"></div>

		<div class="" id="form-mobile">
			<h2>Contact Me</h2>
			<?php echo do_shortcode('[contact-form-7 id="29" title="Contact"]'); ?>
		</div>
	</div>

</div>

<?php endwhile; endif; ?>
<script>

$(document).ready(function(){
	$('#headshot').delay(500).animate({'height':200, 'width':200, 'margin-left':0, 'margin-top':0, 'opacity': 1}, 500, function(){
		$('#name').animate({'margin-right':0, 'opacity': 1}, 400, function(){
			$('#title').animate({'margin-right':0, 'opacity': 1}, 400, function(){
				$('#phone').animate({'margin-right':0, 'opacity': 1}, 400, function(){
					$('#email').animate({'margin-right':0, 'opacity': 1}, 400, function(){
						$('.arrow-down').animate({'margin-right':0, 'opacity': 1}, 400, function(){
							if( $(window).width()> 625 ) {
								$('#menu').delay(1000).addClass('open');
							};
						});
					});
				});
			});
		});
	});	

	$(".arrow-down").on('click', function() { 

		var position = $("#form-mobile").offset().top; 

		$("HTML, BODY").animate({ scrollTop: position }, 750); 

	});

})


</script>


<style>


</style>
<?php get_footer(); ?>
