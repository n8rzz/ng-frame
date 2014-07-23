<?php get_header(); ?>

<?php if ( have_posts() ) ?>
	<?php the_post(); ?>

<div class="container-fluid jumbotron primary-header text-center">	
	<div class="row">
		<h1>
			<?php if ( is_day() ) { ?>
		      	Archive for <?php echo get_the_date(); ?>
		    <?php  } elseif ( is_month() ) { ?>
		    	Archive for <?php echo get_the_date('F Y'); ?>
		    <?php  } elseif ( is_year() ) { ?>
		      	Archive for <?php echo get_the_date('Y'); ?>
		    <?php  } elseif ( is_category() ) { ?>
		    	<?php single_cat_title(); ?> {Category Archive}
		    <?php  } elseif ( is_author() ) { ?>
		    	Archive for <?php the_author_meta( 'display_name' ); ?>
		    <?php } else { ?>
		      <?php  echo get_queried_object()->name; ?>
		    <?php  } ?>
		</h1>
	</div><?php /*<!-- /.row -->*/ ?>
</div><?php /*<!-- /.jumbotron -->*/ ?>

<?php rewind_posts(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div class="container">	
		<div class="row">
	  	    <div class="col-md-12">

				<article class="text-left" id="post-<?php the_ID(); ?>">
					<h3><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a><br />
					<small>posted on: <?php the_date(); ?></small></h3>
						<?php the_excerpt(); ?>
						<a href="<?php echo get_permalink(); ?>"> Read More...</a>
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