<?php 
get_header();
if(have_posts()):
    while(have_posts()):the_post();


    endwhile;
endif;
?>

<div class="scroll"><p>Scroll</p></div>
<main>
<section class="intro">
    <h2>"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</h2>
<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h4>
</section>


<section class="about">


<h2>"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</h2>
<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

<div class="button">learn more</div>

</h4>


</section>


<div class="advice">
<?php
$selectedPosts=new WP_Query('cat=Lorem&posts_per_page=3');

if($selectedPosts->have_posts()):

    while($selectedPosts->have_posts()):$selectedPosts->the_post();?>
       
        <div class="article">
                    <!-- <?php the_post_thumbnail('thumbnail'); ?>  -->

                    <?php the_post_thumbnail(); ?> 

            <h4><?php the_title();?></h4>
            <p><?php the_excerpt(); ?></p>
            <div class="button"><a href="<?php the_permalink(); ?>">read more</a></div>

        </div>
 <?php   endwhile;

endif;
wp_reset_postdata();
?>


</div>
</main>




<?php
get_footer();
?>