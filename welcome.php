<?php

/*

Template Name: Custom Index

*/



get_header(); ?>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-99970621-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="primary" class="content-area">

<div class="carousel slide" >

<div class="welcome-cover">





           <div class="carousel-caption" >

           <h1>Explore New Web World Here.</h1>



           <span id="mysubscribe">

           	<?php get_sidebar(); ?>

           </span>

           

           </div>





           

</div>



</div>

	<div class="calculate-area">
<a href="blogs/" style="color:#333;">
		<div class="col-sm-4 text-center">
        
		<object data="<?php bloginfo('template_url'); ?>/img/cal-blog.svg" type="image/svg+xml" max-width="100px" ></object>

		<p class="cal-num"> 





<?php


$category = get_category(19);
$projectcount = $category->category_count;

// $a = query_posts('category_name=project');
// $projectcount = count($a);

$count_posts = wp_count_posts();
$published_posts = $count_posts->publish;
echo $published_posts- $projectcount -1;



?>



</p>

		<p class="cal-title">Blogs</p>

		<p class="cal-sm-title">were posted</p>


		</div>
</a>
<a href="projects/" style="color:#333;">
		<div class="col-sm-4 text-center">

		<object data="<?php bloginfo('template_url'); ?>/img/cal-project.svg" type="image/svg+xml" max-width="100px" ></object>

		<p class="cal-num"><?php echo ($projectcount-1);?></p>

		<p class="cal-title">Projects</p>

		<p class="cal-sm-title">were created</p>

		</div>
</a>
<a href="#primary" style="color:#333;">
		<div class="col-sm-4 text-center">

		<object data="<?php bloginfo('template_url'); ?>/img/cal-user.svg" type="image/svg+xml" max-width="100px" ></object>

		<p class="cal-num"><?php



$results = $wpdb->get_results( "SELECT * FROM `wp_wysija_user` WHERE status=1");

echo COUNT($results);

// foreach ( $results as $print )   {

// echo $print->email;

// }

 ?></p>

		<p class="cal-title">Users</p>

		<p class="cal-sm-title">were followed</p>

		</div>
</a>
	</div>

	<main id="main" class="site-main home-content row" role="main">





		<?php

			// Include the page content template.

			get_template_part( 'template-parts/content', 'page' );

			echo '<div class="container">'.get_post_field('post_content', $post_id).'</div>';



		?>



	</main><!-- .site-main -->

	<div class="service-area row">

		<div class="col-sm-4 text-center">

			<object data="<?php bloginfo('template_url'); ?>/img/service-plan.svg" type="image/svg+xml" max-width="100px" ></object>

			<p class="service-title">Site Planning</p>

			<p class="service-desc">It is important to understand site planning so that clients' business needs and goals can be achieved.</p>

		</div>

		<div class="col-sm-4 text-center">

			<object data="<?php bloginfo('template_url'); ?>/img/service-ux.svg" type="image/svg+xml" max-width="100px" ></object>

			<p class="service-title">Users Experience</p>

			<p class="service-desc">Lun combines knowledge of visual, information, and interactive design to improve the usability and appearance of your product.</p>

		</div>

		<div class="col-sm-4 text-center">

			<object data="<?php bloginfo('template_url'); ?>/img/service-mockup.svg" type="image/svg+xml" max-width="100px" ></object>

			<p class="service-title">Custom CMS</p>

			<p class="service-desc">Lun transforms your idea into a functional, interactive website with public content management system like WordPress, Joomla, and Drupal.</p>

		</div>

		<div class="col-sm-4 text-center">

			<object data="<?php bloginfo('template_url'); ?>/img/service-ui.svg" type="image/svg+xml" max-width="100px" ></object>

			<p class="service-title">User Interface</p>

			<p class="service-desc">A good UI has high conversion rates and is easy to use. In other words, it’s nice to business and your clients using it.</p>

		</div>

		<div class="col-sm-4 text-center">

			<object data="<?php bloginfo('template_url'); ?>/img/service-rwd.svg" type="image/svg+xml" max-width="100px" ></object>

			<p class="service-title">Responsive Design</p>

			<p class="service-desc">Lun leverages technology such as RWD, PWA to design and develop application across multiple devices, applies intuitive experience to build quality products for user expectations.</p>

		</div>

		<div class="col-sm-4 text-center">

			<object data="<?php bloginfo('template_url'); ?>/img/service-code.svg" type="image/svg+xml" max-width="100px" ></object>

			<p class="service-title">Web Development</p>

			<p class="service-desc">Lun builds sites that deliver everyday simplicity to

the user, uses front-end programming such as HTML5, CSS3, and JavaScript to develop a seamless experience between design and development.</p>	<br>

		</div>



	</div><!-- .service-area -->



</div><!-- .content-area -->



<div class="bottom-cover">

	<?php get_sidebar( 'content-bottom' ); ?>

	<?php get_footer(); ?>

</div>


 