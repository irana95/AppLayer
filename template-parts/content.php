
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
						
					
				</article>
				
							

