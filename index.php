<?php get_header(); ?>


<div class="container-fluid jumbotron primary-header text-center">	
<!--	<div class="row">
		<h1>Circle Logo</h1>
	</div> /.row -->
</div><!-- /.jumbotron -->


<div class="container">	
	<div class="row">
	  <div class="col-md-12">

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article class="text-left" id="post-<?php the_ID(); ?>">
				<h3><span class="badge">New</span> <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a><br />
				<small>posted on: <?php the_date(); ?></small></h3>
					<?php the_excerpt(); ?> 
			</article>	

			<hr />

			<?php endwhile; ?>
		<?php else : ?>
		<?php endif; ?>
			
		</div><?php /*<!-- /.col-md-12 -->*/ ?>
	</div><?php /*<!-- /.row -->*/ ?>
</div><?php /*<!-- /.container-fluid -->*/ ?>


<div class="container-fluid text-center">
	<div class="row">
		
		<?php wp_pagenavi(); ?>

	</div><?php /*<!-- /.row -->*/ ?>
</div><?php /*<!-- /.container-fluid -->*/ ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>