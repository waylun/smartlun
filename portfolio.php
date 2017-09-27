<?php

/*

Template Name: Custom Portfolio

*/



get_header(); ?>




  


	<div id="primary" class="mypost content-area post-whole-content">

		<main id="main" class="site-main container" role="main">


				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			

			<?php

			
 // query_posts('category_name=project');


$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
        $query = new WP_Query( 
            array(
                'paged'         => $paged, 
                'category_name' => 'project',
                'order'         => 'asc',
                'post_type'     => 'post',
                'post_status'   => 'publish',
            )
        );

        if ($query->have_posts()) {
               while ($query->have_posts()) { 
               $query->the_post(); 



               ?>

               
                

<?php 
get_template_part( 'template-parts/content', get_post_format() );
                        ?>
                    
               
             
                <?php
            }
           
            ?>
            <div class="olderprojects">
            <?php
            next_posts_link( '< Older Entries', $query->max_num_pages ); ?>
            </div>
            <div class="newprojects">
            <?
            previous_posts_link( 'Newer Entries >' );?></div>
            <?php

            wp_reset_postdata();
        }


			

		?>

	

		</main><!-- .site-main -->

			<br>

	</div><!-- .content-area -->



<div class="bottom-cover">

	<?php get_sidebar( 'content-bottom' ); ?>

	<?php get_footer(); ?>

</div>



