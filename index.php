
<?php get_header(); ?>

<?php get_sidebar(); ?>   


<div class = "container">      
<div id = "content">
     <h1 id = "menu-toggle">CLICK</h1>

  
    <h1>Main Area</h1>
        
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
        <p><?php the_content(__('(more...)')); ?></p>
       <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
</div>


<!--


<div id="page" class="hfeed site">
     <header id="masthead" class="site-header" role="banner">
          <hgroup></hgroup>
          <nav role="navigation" class="site-navigation main-navigation"></nav><!-- .site-navigation .main-navigation -->
     </header><!-- #masthead .site-header -->
     <div id="main" class="site-main">
          <div id="primary" class="content-area">
               <div id="content" class="site-content">
               </div><!-- #content .site-content --></div>
          <!-- #primary .content-area -->
          <div id="secondary" class="widget-area">
          </div><!-- #secondary .widget-area -->
          <div id="tertiary" class="widget-area">
          </div><!-- #tertiary .widget-area --></div>
     <!-- #main .site-main -->
     <footer id="colophon" class="site-footer" role="contentinfo">
          <div class="site-info">
          </div><!-- .site-info -->
     </footer><!-- #colophon .site-footer -->
</div> <!-- #page .hfeed .site -->

