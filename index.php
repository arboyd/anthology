
<?php get_header(); ?>

<?php get_sidebar(); ?>   


<div class = "container">      
<div id = "content">

  
    <h1>Main Area</h1>
        
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    
        <h1><a href="<?php the_permalink() ?>" rel="bookmark" 
            title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
        <p class = "note" > 
         This is what an internote looks like. Ancient alien kachina doll Vymaanika-Shaastra weightless golden disk Sumerian texts, magnetic current burmuta triangle von Daniken Ezekiel golden disk, worm hole ancient alien Chariot of the Gods. Helicopter heiroglyph alien mainstream archaelogy golden disk, ancient alien sightings the vedas Easter island Puma Punku, space brothers sightings sky people weightless. UFO aircraft NASA SETI kachina doll technology, legendary times technology cover up, ancient religions Mayan crystal skull. Star gates Mayan Ezekiel Annunaki alien stonehenge mystery sanskrit, inter-dimensional weightless Machu Picchu vimana crystal skull, elongated skull star gates legendary times alien. Flying vessels kachina doll sanskrit pre-colonial aerodynamics space brothers Ezekiel legendary times, extraterrestrial alien vimana ancient alien theorists mainstream archaelogy Mahabharata, ancient religions pre-colonial aerodynamics legendary times Nazca lines extraterrestrial. Flying vessels extraterrestrial origin elongated skull weightless SETI, targeted mutation ancient religions Puma Punku, targeted mutation astronaut pre-colonial aerodynamics King Soloman. Cover up golden disk extraterrestrial, crystal skull extraterrestrial elongated skull.
         </p>        
        <p><?php the_content(__('(more...)')); ?></p>
       <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
        
             

</div>

</div>


