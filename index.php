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
				<?php /* future new post tag <span class="badge">New</span> */ ?>
				<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
				<small>posted: <?php echo ng_frame_date_archive_links(); ?></small></h3>
					<section>
						<?php the_excerpt(); ?>
						<a href="<?php echo get_permalink(); ?>"> Read More...</a>
					</section>
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