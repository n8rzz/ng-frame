<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="container-fluid jumbotron primary-header text-center">	
			<div class="row">
				<h1><?php the_title() ?>
				 	<small><?php the_date(); ?></small>
				</h1>

			</div><!-- /.row -->
		</div><!-- /.jumbotron -->

		<div class="container">	
			<div class="row">
			  
			  <div class="col-sm-12 col-lg-9 col-lg-offset-2">  		
				<article class="text-left">
					<?php 
					if ( has_post_thumbnail() ) {
						the_post_thumbnail(
							'ng-frame-featured-thumbnail',
							array('class' => 'img-responsive'));
					}
					?>

					<?php the_content(); ?>

				</article>

<!-- related posts 
		<div class="col-md-12 text-center">related posts</div>
-->

<!-- FUTURE POST REFERENCES -->
<!-- plugin, use shortcodes -->
<!--		<div class="post-references">
			<ul>
				<li>1 <a href="#">http://www.reference-link.com</a></li>
				<li>1 <a href="#">http://www.reference-link.com</a></li>
				<li>1 <a href="#">http://www.reference-link.com</a></li>
			</ul>
		</div> -->
<!-- /.post-references -->

<!--
			<ul class="pager">
			  <li class="previous"><a href="#">&larr; Older</a></li>
			  <li class="next"><a href="#">Newer &rarr;</a></li>
			</ul>
-->
  		</div><!-- /.col-xs-12 col-m-12 -->
	</div><!-- /.row -->
</div><!-- /.container -->


<?php /*	NG-FRAME-PAGER		*/ ?>
<div class="container-fluid">
	<div class="row ng-frame-pager text-center">
		<div class="col-xs-6 col-sm-5">
			<?php previous_post_link('%link'); ?>
		</div><!-- /.col-md-6 -->
		<div class="col-xs-6 col-sm-5 col-sm-offset-2">
			<?php next_post_link('%link'); ?>
		</div><!-- /.col-md-6 -->		
	</div><!-- /.row -->
</div><!-- /.container-fluid -->

<!-- POST META -->
<div class="container-fluid text-center blog-post-meta">
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<p class="blog-post-meta-date">
				posted on: <?php the_time( get_option( 'date_format' ) ); ?>
			</p>
		</div><!-- /.col-sm-12 col-md-4 -->
		<div class="col-xs-12 col-sm-4">
			<?php echo get_the_tag_list('<p class="blog-post-meta-tags">Tags: ',', ','</p>'); ?>
		</div><!-- /.col-sm-12 col-md-4 -->	
		<div class="col-xs-12 col-sm-4">
			<p class="blog-post-meta-category">
				category: <?php the_category(', '); ?>
			</p>
		</div><!-- /.col-sm-12 col-md-4 -->	
	</div><!-- /.row -->

<!-- AUTHOR META -->
	<div class="row">
		<div class="col-md-10 col-md-offset-1">		
			<footer class="post-author-meta text-left">
				<img class="img-circle pull-right" src="http://www.fillmurray.com/150/150" />
				<h4><?php the_author_meta( 'display_name' ); ?></h4>
				<p><?php the_author_meta( 'description' ); ?></p>
				
				<ul class="social-links">
					<li>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icons/tumblr.png" /></a>
					</li>	
					<li>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icons/twitter.png" /> </a>
					</li>	
					<li>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icons/github.png" /></a>
					</li>	
					<li>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icons/instagram.png" /></a>
					</li>	
					<li>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icons/gplus2.png" /></a>
					</li>	
					<li>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icons/rss.png" /></a>
					</li>	
					<li>
						<a href=""><img src="<?php bloginfo('template_url'); ?>/images/icons/email.png" /></a>
					</li>	
				</ul>
			</footer>
		</div><!-- /.col-md-12 -->	

	</div><!-- /.row -->
</div><!-- /.container-fluid -->


		<?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() )
                comments_template( '', true );
        ?>
		
		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>