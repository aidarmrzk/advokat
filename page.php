<?php /* Template Name: Политика конфиденциальности  */ ?>
<?php include 'header.php'; ?>

	<?php include 'php/header.php'; ?>

	<article>
		<div class="page-wrapper">
			<div class="section content">
				<?php if( function_exists('breadcrumbs') ) breadcrumbs(); ?>
				<h1><?php the_title(); ?></h1>
				<?php
					global $post;
					if (have_posts()) : while (have_posts()) : the_post(); 
						setup_postdata($post);
						the_content(); 
					endwhile; endif; 
					wp_reset_query(); 
				?>	
			</div>
		</div>
	</article>

<?php include 'footer.php'; ?>