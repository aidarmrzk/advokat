<?php include 'header.php'; ?>
<?php 
	wp_reset_query();
	$queried_post_type = get_query_var('post_type'); 
	$queried_post_term = get_query_var('term');
	$queried_post_taxonomy = get_query_var('taxonomy');
	$obj_id = get_queried_object_id();
	$post_standart = true; 
	$cat_id = get_query_var('cat');
?>

	<div class="block catalog" id="catalog">
		<div class="center">
			<h1>Каталог</h1>
			<?php 
				if (has_nav_menu('categorys')) { 
					echo '<div class="nav-catalog">';
					wp_nav_menu(array('theme_location' => 'categorys', 'menu_class' => 'menusss', 'container' => false)); 
					echo '</div>';
				} 
			?>			
			<div class="products">
				<?php 
					$i = 0;
					if (have_posts()) : while (have_posts()) : the_post(); 
						setup_postdata($post); 
						$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
						$i++;
				?>	
					<div class="product">
						<span class="thumb" style="background-image:url('<?php echo $large_image_url[0]; ?>');"></span>
						<div class="data">
							<h3><?php the_title(); ?></h3>
							<?php echo get_field("короткое_описание"); ?>
						</div>
						<div class="more">
							<a href="#full-item-<?php echo $i; ?>" class="upwindow">Подробнее</a>
						</div>
						<div class="tablet-nav">
							<ul>
								<li><a href="" data-tab="full">Подробнее</a></li>
								<li><a href="" data-tab="characteristics">Характеристики</a></li>
								<li><a href="" data-tab="gallery">Галерея</a></li>
							</ul>
						</div>
						<div class="tablet-tabs">
							<div class="tab full">
								<div class="text">
									<?php echo get_field("полное_описание"); ?>
								</div>
							</div>
							<div class="tab characteristics">
								<ul>
									<?php
										$rows = get_field('технические_характеристики');
										if ( $rows ) {
											foreach( $rows as $row ) {
									?>
										<li><b><?php echo $row['описание']; ?></b><span><?php echo $row['значение']; ?></span></li>
									<?php
											}
										}
									?>
								</ul>
							</div>
							<div class="tab gallery">
								<div class="default-gallery">
									<div class="elem">
										<a data-fancybox="gallery-<?php echo $i; ?>" href="<?php echo $large_image_url[0]; ?>" style="background-image:url('<?php echo $large_image_url[0]; ?>');"></a>
									</div>
									<?php
										$images = get_field('галерея');
										if ( $images ) {
											foreach( $images as $image ) {
									?>
										<div class="elem">
											<a data-fancybox="gallerys-<?php echo $i; ?>" href="<?php echo $image['url']; ?>" style="background-image:url('<?php echo $image['url']; ?>');"></a>
										</div>
									<?php
											}
										}
									?>
								</div>
							</div>
						</div>
						<div class="button-tablet">
							<a href="#bay" data-fancybox class="change-title" data-title="<?php the_title(); ?>">Купить</a>
						</div>
					</div>
					<div class="hide">
						<div class="bigwindow" id="full-item-<?php echo $i; ?>">
							<div class="elem">
								<div class="left">
									<div class="slider-wrap-two">
										<div class="slider-for">
											<div class="elem">
												<a data-fancybox="gallery-<?php echo $i; ?>" href="<?php echo $large_image_url[0]; ?>" style="background-image:url('<?php echo $large_image_url[0]; ?>');"></a>
											</div>
											<?php
												$images = get_field('галерея');
												if ( $images ) {
													foreach( $images as $image ) {
											?>
												<div class="elem">
													<a data-fancybox="gallery-<?php echo $i; ?>" href="<?php echo $image['url']; ?>" style="background-image:url('<?php echo $image['url']; ?>');"></a>
												</div>
											<?php
													}
												}
											?>
										</div>
										<div class="slider-nav">
											<div class="elem">
												<span style="background-image:url('<?php echo $large_image_url[0]; ?>');"></span>
											</div>
											<?php
												$images = get_field('галерея');
												if ( $images ) {
													foreach( $images as $image ) {
											?>
												<div class="elem">
													<span style="background-image:url('<?php echo $image['url']; ?>');"></span>
												</div>
											<?php
													}
												}
											?>
										</div>
									</div>
								</div>
								<div class="right">
									<div class="data-scroll">
										<div class="nicescroll">
											<strong><?php the_title(); ?></strong>
											<?php echo get_field("полное_описание"); ?>
										</div>
									</div>
									<div class="more">
										<a href="#bay" data-fancybox class="change-title" data-title="<?php the_title(); ?>">Купить</a>
									</div>
								</div>
							</div>
							<div class="characteristics">
								<strong>Технические характеристики</strong>
								<ul>
									<?php
										$rows = get_field('технические_характеристики');
										if ( $rows ) {
											foreach( $rows as $row ) {
									?>
										<li><b><?php echo $row['описание']; ?></b><span><?php echo $row['значение']; ?></span></li>
									<?php
											}
										}
									?>
								</ul>
							</div>
						</div>
					</div>
				<?php endwhile; endif; ?>
			</div>
		</div>
	</div>		

<?php include 'footer.php'; ?>