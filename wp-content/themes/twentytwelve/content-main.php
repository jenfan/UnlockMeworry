<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header sqare">
			<h1 class="entry-title"><?php //the_title(); ?></h1>
		</header>

		<div class="entry-content">
                       
                    
                        <h1 class="entry-title" style="text-align:center; margin-top:-20px !important;">Разблокируйте свой телефон прямо сейчас.</h1>
                        
                    <div class="sqare" style="float:left; margin-left: 10px; padding: 0px;">
                        <h3 class="widget-title">Отвязка от оператора от 15мин</h3>
                        <a href="http://iworry.ru/wp-content/uploads/2013/04/e938e342ec6f8c7282e568cfc5bb61d6-1.png">
                        <img style="margin:0px; box-shadow: none; padding: 0px;" class="alignleft size-full wp-image-70" alt="" src="http://iworry.ru/wp-content/uploads/2013/04/e938e342ec6f8c7282e568cfc5bb61d6-1.png" width="440" height="330" /></a>
                    </div>
                    <div class="sqare"  style="float:left; vertical-align: top; margin-left: 10px;">  
                        <?php get_sidebar( 'front' ); ?>
                    </div>   
                    <div class="sqare"  style="float:left; vertical-align: top; margin-left: 10px;">  
                        <?php get_sidebar( 'frontremont' ); ?>
                    </div>
                        
			<?php //the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
