<?php // CÓDIGO LATERAL ?>

<?php get_header(); ?>
<div class="container">


 <?php // IMPRIMIR POSTS  ?>
   
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <h1>
            <a href="<?php echo get_attachment_link(); ?>">
                <?php the_title(); ?>
            </a>
        </h1>
        <p>
            <?php the_content(); ?>
        </p>
        
        <p><?php comments_number('0 Comentários', '1 Comentário', '% Comentários' );?></p>
       
        
        
        <?php endwhile; else : ?>
        <p><?php _e( 'Nenhum post encontrado!' ); ?></p>
        <?php endif; ?>

<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>