<?php get_header(); ?>
<div id="main" class="posts">
    <h2>
    <?php
        foreach((get_the_category()) as $category) { 
            echo $category->cat_name . ' '; 
        } 
    ?>
    </h2>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="postWrap">
        <?php
        $postImage = get_post_meta($post->ID, 'Post Image', true);
        if ($postImage != '') { ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                <img src="<?php echo $postImage; ?>" alt="<?php the_title(); ?>"/>
            </a>
        <?php } ?>
        <div class="content">
            <h3><a href="<?php the_permalink(); ?>"title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
            <p class="date"><?php the_time('M jS, Y'); ?></p>
            <?php the_excerpt(); ?>
            <p class="more"><a href="<?php the_permalink(); ?>"title="<?php the_title(); ?>">Read More...</a></p>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
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