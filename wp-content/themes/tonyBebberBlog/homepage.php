<?php
/*
Template Name: homepage
*/
?>
<?php get_header(); ?>
<div id="main">
    <h2>LATEST PROJECT</h2>
    <?php query_posts('orderby=date&order=desc&category_name=projects&showposts=1'); ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="postWrap homepage">
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
    <?php endwhile;?>
    <h2>LATEST ARTICLE</h2>
    <?php query_posts('orderby=date&order=desc&category_name=blog&showposts=1'); ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="postWrap homepage">
            <?php
            $postImage = get_post_custom_values('Post Image');
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
    <?php endwhile;?>
    <h2>ELSEWHERE</h2>
    <p><a href="mailto:tb@tonybebber.com">Email</a> / <a href="https://twitter.com/#!/tonybebber">Twitter</a> / <a href="https://github.com/tonybebber">GitHub</a></p>
</div>
<?php get_footer(); ?>