<?php get_header(); ?>
<div id="main">
    <h2 class="single">    
        <?php
            foreach((get_the_category()) as $category) { 
                echo $category->cat_name . ' '; 
            } 
        ?>
    </h2>
    <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
    <div class="postWrap singlePost">
        <?php
        $postImage = get_post_meta($post->ID, 'Post Image', true);
        if ($postImage != '') { ?>
            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
                <img src="<?php echo $postImage; ?>" alt="<?php the_title(); ?>"/>
            </a>
        <?php } ?>
        <div class="content">
            <h3><?php the_title(); ?></h3>
            <p class="date"><?php the_time('M jS, Y'); ?></p>
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
    <div id="comments_template">
        <?php comments_template(); ?>
    </div>
</div>
<?php get_footer(); ?>