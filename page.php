<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="container-fluid jumbotron primary-header text-center">	
			<div class="row">
				<h1><?php the_title() ?></h1>
			</div><?php /*<!-- /.row -->*/ ?>
		</div><?php /*<!-- /.jumbotron -->*/ ?>

		<div class="container">	
			<div class="row">
			  
			  <div class="col-md-10 col-md-offset-1">  		
				<article class="text-left">
				
					<?php the_content(); ?>

				</article>
		  		</div><?php /*<!-- /.col-md-12 -->*/ ?>

			</div><?php /*<!-- /.row -->*/ ?>
		</div><?php /*<!-- /.container -->*/ ?>

		<?php endwhile; ?>
	<?php else : ?>
	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>