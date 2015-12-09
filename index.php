
<?php get_header(); ?>

<?php get_sidebar(); ?>


<div class = "container">
<div id = "content">
       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <h1><a href="<?php the_permalink() ?>" rel="bookmark"
            title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
        <?php

if ($tei_file = get_post_meta( get_the_ID(), 'anthology_tei_attachment', true )) : ?>
        <a href="<?php echo $tei_file['url'];?>">TEI File</a>
<?php endif; ?>
        
        <p><?php the_content(__('(more...)')); ?></p>
       <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>



</div>

</div>


