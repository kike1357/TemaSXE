
<!DOCTYPE html>
<?php get_header(); ?>
<html>
    
    <body>
        <div id="menu">
        <h1>Menú</h1>
        <?php wp_nav_menu(array('menu'=> 'Menus')); ?>
        </div>
        
        <div id="post">
        <h1>Recetas para hoy:</h1>    
        <?php 
        if (have_posts()){
            while (have_posts()){
                the_post();
                ?>
                <h2 id="post-<?php the_ID(); ?>">
                <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
                <?php the_title(); ?></a></h2>
                <small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>
                <?php the_content();
            }
        }
        
        ?>
        </div>
        
    </body>
    </html> 
    
    <?php get_sidebar();?>
    <?php get_footer();?>
    </div>