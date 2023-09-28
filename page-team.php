<?php /* Template Name: Команда */ ?>
<?php include 'header.php'; ?>
	
	<?php if ($post->post_parent == 0) { ?>
	
		<section class="team">
			<div class="container">
				<div class="breadcrumbs">
					<span><a href="<?php bloginfo('url'); ?>">Главная</a></span>
						<svg width="5" height="10" viewBox="0 0 5 10"	fill="none"	xmlns="http://www.w3.org/2000/svg" >
							<path d="M1 1L4 5L1 9" stroke="black" stroke-opacity="0.38" stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					<span><?php the_title(); ?></span>
				</div>
				
				<div class="section-team">
					<div class="section-team_person-cards">
						<?php
							$post_objects = get_field('наша_команда');
							if ($post_objects ) {
								foreach( $post_objects as $post) {
									setup_postdata($post);
									$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
						?>
							<div class="section-team_person-card opacity">
								<img src="<?php echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>" />
								<div class="section-team_person-card-info">
									<p><?php echo get_field('фамилия'); ?><br /><?php echo get_field('имя'); ?> <?php echo get_field('отчество'); ?></p>
									<span><?php echo get_field('должность'); ?></span>
									<a href="<?php the_permalink(); ?>">Подробнее<span>Посмотреть подробную информацию</span></a>
								</div>
								<a href="<?php the_permalink(); ?>" class="section-team_person-card-more">
										<span>Стаж работы</span>
										<p><?php echo get_field('стаж'); ?> <?php echo get_field('стаж_единица'); ?></p>
										<span>Опыт</span>
										<p><?php echo get_field('специализации'); ?></p>
								</a>

							</div>
						<?php
								}
								wp_reset_postdata();
							}
						?>
					</div>
				</div>
			</div>
		</section>

		<script>
			document.addEventListener("DOMContentLoaded", function() {
				const personCards = document.querySelectorAll(".section-team_person-card");
				let delay = 0;

				personCards.forEach((card) => {
					function show() {
						card.classList.remove('opacity');
					}
				
					// Создаем и запускаем обсервер
					const callback = (entries, observer) => {
						entries.forEach((entry) => {
						if (entry.isIntersecting) {
							show();
							return;
						}
						})
					}
				
					let options = {
						threshold: 0.5,
						};
				
					const observer = new IntersectionObserver(callback, options);
					setTimeout(() => {
						observer.observe(card);
					}, delay)

					delay += 300;
				})
			});
		</script>
	
	<?php } ?>
	
<?php include 'footer.php'; ?>