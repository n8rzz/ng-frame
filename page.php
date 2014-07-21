<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="container-fluid jumbotron primary-header text-center">	
			<div class="row">
				<h1><?php the_title() ?></h1>
			</div><!-- /.row -->
		</div><!-- /.jumbotron -->

		<div class="container">	
			<div class="row">
			  
			  <div class="col-md-10 col-md-offset-1">  		
				<article class="text-left">
				
					<?php the_content(); ?>

				</article>
		  		</div><!-- /.col-md-12 -->

			</div><!-- /.row -->
		</div><!-- /.container -->

		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>