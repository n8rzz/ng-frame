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


			<ul class="pager">
			  <li class="previous"><a href="#">&larr; Older</a></li>
			  <li class="next"><a href="#">Newer &rarr;</a></li>
			</ul>

			<?php /* bootstrap_wp_pager(); */ ?>
  		
  		</div><!-- /.col-xs-12 col-m-12 -->
	</div><!-- /.row -->
</div><!-- /.container -->

<!-- POST META -->
<div class="container-fluid text-center blog-author-meta">
	<div class="row">
		<div class="col-xs-12 col-sm-6">
			<?php echo get_the_tag_list('<p class="blog-post-meta-tags">Tags: ',', ','</p>'); ?>
		</div><!-- /.col-sm-12 col-md-6 -->	
		<div class="col-xs-12 col-sm-6">
			<p class="blog-post-meta-category">posted on: {date}, category: <?php the_category(', '); ?></a></p>
		</div><!-- /.col-sm-12 col-md-6 -->
	</div><!-- /.row -->

<!-- AUTHOR META -->
	<div class="row">
		<div class="col-md-10 col-md-offset-1">		
			<footer class="post-author-meta">
				<img class="img-circle pull-right" src="http://www.fillmurray.com/150/150" />
				<h4>Author Title</h4>
				<p class="text-left">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.  Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus</p>
				<div class="social-links">social links</div>
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