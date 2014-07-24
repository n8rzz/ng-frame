<?php get_header(); ?>

<?php if ( have_posts() ) ?>
	<?php the_post(); ?>

<div class="container-fluid jumbotron primary-header text-center">	
	<div class="row">
		<?php if ( is_day() ) { ?>
	      	<h1>Archive for <?php echo get_the_date(); ?></h1>
	    <?php  } elseif ( is_month() ) { ?>
	    	<h1>Archive for <?php echo get_the_date('F Y'); ?></h1>
	    <?php  } elseif ( is_year() ) { ?>
	      	<h1>Archive for <?php echo get_the_date('Y'); ?></h1>
	    <?php  } elseif ( is_category() ) { ?>
	    	<h1><?php single_cat_title(); ?> <small>{Category Archive}</small></h1>
		<?php  } elseif ( is_tag() ) { ?>
			<h1><?php single_tag_title(); ?> <small>{Tag Archive}</small></h1>
	    <?php  } elseif ( is_author() ) { ?>
	    	<h1><small>Posts written by</small><?php the_author_meta( 'display_name' ); ?></h1>
	    <?php } else { ?>
	      <h1><?php  echo get_queried_object()->name; ?></h1>
	    <?php  } ?>
	</div><?php /*<!-- /.row -->*/ ?>
</div><?php /*<!-- /.jumbotron -->*/ ?>

<?php rewind_posts(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="container">	
		<div class="row">
	  	    <div class="col-md-12">

				<article <?php post_class('text-left'); ?> id="post-<?php the_ID(); ?>">
					<section>
						<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
						<small>posted: <?php echo ng_frame_date_archive_links(); ?></small></h3>
							<?php the_excerpt(); ?>
							<a href="<?php echo get_permalink(); ?>"> Read More...</a>
					</section>
				</article>	

				<hr />
				
			</div><?php /*<!-- /.col-md-12 -->*/ ?>
		</div><?php /*<!-- /.row -->*/ ?>
	</div><?php /*<!-- /.container-fluid -->*/ ?>

	<?php endwhile; ?>
<?php // endif; ?>


<div class="container-fluid text-center">
	<div class="row">
		
		<?php wp_pagenavi(); ?>

	</div><?php /*<!-- /.row -->*/ ?>
</div><?php /*<!-- /.container-fluid -->*/ ?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>