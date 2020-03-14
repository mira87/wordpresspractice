
<?php
get_header();?>
<main class="main-page">
    <?php
if(have_posts()):
    while(have_posts()):the_post();?>
    <h2 class="the-title"><?php the_title();  ?>  </h2>
    <?php the_content();

    endwhile;
endif;

dynamic_sidebar('sidebar1');
?>

</main>
<?php
get_footer();
?>