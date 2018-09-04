 <?php  get_header(); ?>
<?php the_content(); ?>
 
 <section class="error_top_bg secondary-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="top_banner">
						<div class="category_m">
							<h2> App News</h2>
							
							<div class="breadcrumb_m">
									  <ul class="breadcrumbs_m" id="breadcrumbs_m">
									  <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> Home </a></li>
									  <li> / </li>
									  <li><a href="http://test.webplus.az/blog">  Blog</a></li>
									  </ul>
							</div>
						</div>
				
				</div>
			</div>
		</div>
	</div>
</section>



<section class="post_blog_bg primary-bg">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
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
							get_template_part( 'template-parts/content' );
						endwhile;
					endif;
					?>
				</section><!--/#blog-->
					<div class="next_page">
          			<ul class="page-numbers">
						<li><span class="page-numbers current">1</span></li>
						<li><a href="#" class="page-numbers">2</a></li>
						<li><a href="#" class="page-numbers">3</a></li>
						<li><a href="#" class="page-numbers">4</a></li>
						<li><a href="#" class="next page-numbers">Next</a></li>
					</ul>
       			 </div>	
			</div><!--/.col-sm-7-->

		<?php get_sidebar();?>
			
		</div>
        <!--	<div class="col-md-8">
				<article class="blog_post">
					<h4> <a href="<?php the_permalink();?>"> <?php the_title();?>
						</h4>
						<div class="blog_category">
							<ul> 
							<li><?php the_category(',');?></li>
							</ul>
						</div>	
						
						<div class="blog_text">
							<ul>
								<li> | </li>
								<li><?php esc_html_e('Post By :', 'AppLayers'); ?> <?php the_author_posts_link(); ?></li>
								<li> | </li>
								<li><?php esc_html_e('On :', 'AppLayers'); ?> <?php the_time('j F Y'); ?></li>
							</ul>
						</div>
						
						<div class="blog_post_img">
							 <?php the_post_thumbnail();?> 
						</div>
						
						<?php the_content(); ?>
					
						<a href="<?php the_permalink();?>"> Continue reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						
					
				</article>-->
				
			<!--	<article class="blog_post">
					<h4> <a href="#"> There are many variations of passages of Lorem Ipsum available. </a> </h4>
						
						<div class="blog_category">
							<ul> 
								<li> <a href="#">Company news, </a> </li>
								<li> <a href="#">Fresh releases </a> </li>
							</ul>
						</div>	
						
						<div class="blog_text">
							<ul>
								<li> | </li>
								<li> <a href="#"> Post By : Admin   </a> </li>
								<li> | </li>
								<li>  On : 20 may 2016 </li>
							</ul>
						</div>
						
						<div class="blog_post_img">
							<a href="#"> <img src="http://test.webplus.az/wp-content/themes/AppLayers/images/blog_post_img2.png" alt="image"> </a>
						</div>
						
						<p> There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary. </p>
					
						<a href="#"> Continue reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</article>
					
				<article class="blog_post">
					<h4> <a href="#"> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks </a></h4>
						
						<div class="blog_category">
							<ul> 
								<li> <a href="#">Company news, </a> </li>
								<li> <a href="#">Fresh releases </a> </li>
							</ul>
						</div>	
						
						<div class="blog_text">
							<ul>
								<li> | </li>
								<li> <a href="#"> Post By : Admin   </a> </li>
								<li> | </li>
								<li>  On : 20 may 2016 </li>
							</ul>
						</div>
						
						<div class="blog_post_img">
							<a href="#">	<img src="http://test.webplus.az/wp-content/themes/AppLayers/images/blog_post_img3.png" alt="image"> </a>
						</div>
						
						<p> All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc. </p>
					
						<a href="#"> Continue reading <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
				</article>					
				
				<div class="next_page">
          			<ul class="page-numbers">
						<li><span class="page-numbers current">1</span></li>
						<li><a href="#" class="page-numbers">2</a></li>
						<li><a href="#" class="page-numbers">3</a></li>
						<li><a href="#" class="page-numbers">4</a></li>
						<li><a href="#" class="next page-numbers">Next</a></li>
					</ul>
       			 </div>
			
			</div>	
			<?php get_sidebar();?>
			-->	
			
				
				
			</div>
		</div>
	</div>
</section>
 
 
 <?php  get_footer(); ?>