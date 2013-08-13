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
<!--		<header class="entry-header sqare">
			<h1 class="entry-title"><?php //the_title(); ?></h1>
		</header>-->

		<div class="entry-content">
                       
                    
                        <h1 class="entry-title" style="text-align:center;">Разблокируй свой гаджет прямо сейчас</h1>
                   <div class="div_sqare">
                       <a href="http://iworry.ru/?post_type=product" style="text-decoration:none">
                       <div class="first_sqare sqare mainsq">
                        <h3 class="widget-title">Отвязка от оператора от 15мин</h3>
                        
<!--                        <img style="" class=" unlock" alt="" src="http://iworry.ru/wp-content/uploads/2013/04/e938e342ec6f8c7282e568cfc5bb61d6-1.png" />-->
                    </div></a>
                    <div class="second_sqare sqare mainsq">  
                        <?php get_sidebar( 'front' ); ?>
                    </div>   
                    <div class="third_sqare sqare mainsq">  
                        <h3 class="widget-title">МЫ НА FACEBOOK</h3>
                        <iframe id="fb_like" src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Funlockme.ru&amp;width=200&amp;height=288&amp;show_faces=true&amp;colorscheme=light&amp;stream=false&amp;show_border=false&amp;header=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:288px;" allowTransparency="true"></iframe>
                        
                        <?php get_sidebar( 'frontsocial' ); ?>
                        <div style="height:50px; position: absolute; right: 0px; border: black solid 1px;">  
                            <?php //get_sidebar( '' ); ?>
                        </div>
                    </div>
                    
                   </div>    
			<?php //the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'twentytwelve' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'twentytwelve' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</article><!-- #post -->
