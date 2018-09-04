<?php  get_header();?>
<?php get_template_part('template-parts/breadcrumbs');?>
<?php  the_content();?>
	<div class="container">
	<div class="row">
		<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
		<div class="col-sm-8">
			<?php } else { ?>
			<div class="col-sm-8 ">
				<?php } ?>

				<section id="blog">
					<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'single' );
						endwhile;
					endif;
					?>
				</section><!--/#blog-->
			</div><!--/.col-sm-7-->

		<?php get_sidebar();?>
			
		</div>
		
		</div><!--/.row-->
	</div><!--/.container-->

<?php  get_footer();?>