<?php get_header(); ?>
<div id="main">
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="postWrap page">
        <div class="content">
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
        <div class="clear"></div>
    </div>
    <?php endwhile ?>
    <?php else : ?>
    <div class="postWrap">
        <div class="content">
            <h3>Not Found</h3>
            <p>Sorry, but you are looking for something that isn't here.</p>
            <?php include (TEMPLATEPATH . '/searchform.php'); ?>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>