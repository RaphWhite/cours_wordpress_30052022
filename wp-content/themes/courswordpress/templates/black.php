<?php 
/**
 *Template Name: Black template
 */
?>

<?php get_header() ?>

<?php set_query_var('color', 'black'); ?>
<?php load_template( TEMPLATEPATH . '/parts/navigation.php', true); ?>

<?php $i = 0; ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- First Grid -->   
<?php if ($i%2 == 1) :?>
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1><?php the_title(); ?></h1>
            <h5 class="w3-padding-32"><?php the_excerpt() ?></h5>
            <p class="w3-text-grey"><?php the_content(); ?></p>
        </div>
        <div class="w3-third w3-center">
            <i class="fa fa-anchor w3-padding-64 w3-text-black"></i>
        </div>
        <?php wp_link_pages(); ?>
        <?php edit_post_link(); ?>
    </div>
</div>
<?php else :?>
 <!-- Second Grid --> 
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-third w3-center">
            <i class="fa fa-coffee w3-padding-64 w3-text-black w3-margin-right"></i>
        </div>
        <div class="w3-twothird">
            <h1><?php the_title(); ?></h1>
            <h5 class="w3-padding-32"><?php the_excerpt() ?></h5>
            <p class="w3-text-grey"><?php the_content(); ?></p>
        </div>
        <?php wp_link_pages(); ?>
        <?php edit_post_link(); ?>
    </div>
</div>
<?php endif; ?>
<?php $i++; ?>
<?php endwhile; ?>

<?php
if ( get_next_posts_link() ) {
next_posts_link();
}
?>
<?php
if ( get_previous_posts_link() ) {
previous_posts_link();
}
?>

<?php else: ?>
<div class="w3-row-padding w3-padding-64 w3-container">
    <div class="w3-content">
        <div class="w3-twothird">
            <h1>post not found</h1>               
        </div>
        <div class="w3-third w3-center">
            <i class="fa fa-search w3-padding-64 w3-text-black"></i>
        </div>
        <?php wp_link_pages(); ?>
        <?php edit_post_link(); ?>
    </div>
</div>

<?php endif; ?>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
</div> 


<?php get_footer() ?>
