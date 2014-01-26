<?php get_header(); ?>
<div id="main" class="search">
    <h2>Search results for '<?php echo($s); ?>'...</h2>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="postWrap">
        <div class="content">
            <h3><a href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
        </div>
        <div class="clear"></div>
    </div>
    <?php endwhile ?>
    <p class="pagination"><?php previous_posts_link(); ?> <span class="right"><?php next_posts_link(); ?></span></p>
    <?php else : ?>
    <div class="postWrap">
        <div class="content">
            <h3>Not Found</h3>
            <p>Sorry, but you are looking for something that isn't here.</p>
            <?php include (TEMPLATEPATH . '/searchform.php'); ?>
        </div>
        <div class="clear"></div>
    </div>
    <?php endif; ?>
</div>
<?php get_footer(); ?>