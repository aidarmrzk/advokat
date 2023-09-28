<?php /* Template Name: Наши победы(new)*/ ?>
<?php include 'header.php'; ?>

<section class="section_victory">

	<div class="victory">
		<div class="container">
			<div class="breadcrumbs">
				<div><a href="<?php bloginfo('url'); ?>">Главная</a></div>
					<svg width="5" height="10" viewBox="0 0 5 10"	fill="none"	xmlns="http://www.w3.org/2000/svg" >
						<path d="M1 1L4 5L1 9" stroke="black" stroke-opacity="0.38" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				<div><?php the_title(); ?></div>
			</div>
			<button class="red-button opacity" href="">
				<p>Выберите категорию</p>
				<svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1.5L8.5 7.5L16 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</button>
			<div class="list-tags-wrap">
				<div class="list-tags">
				<a href="" data-tag="all" class="active">Показать всё</a>
				<?php
					$terms = get_terms(array(
						'taxonomy' => 'victory_category',
						'hide_empty' => false,
					));
	
					if ($terms && !is_wp_error($terms)) {
						foreach ($terms as $term) {
							$category_name = $term->name;
							$category_slug = $term->slug;
							?>
							<a href="" data-tag="<?php echo $category_slug; ?>"><?php echo $category_name; ?></a>
							<?php
						}
					}
				?>
				</div>
			</div>	
			<div class="victory-cards">
				<?php
				$args = array(
					'post_type' => 'victory',
					'posts_per_page' => -1
				);
	
				// Выполняем запрос
				$the_query = new WP_Query($args);
	
				// Проверяем, есть ли записи
				if ($the_query->have_posts()) {
					$post_count = $the_query->post_count; 
					$index = 0;
					while ($the_query->have_posts()) {
						$the_query->the_post();
						?>
						<div class="victory-card opacity <?php
							if ($the_query->current_post >= 12) {
								?>none must-hidden <?php
							}
							$terms = get_the_terms( get_the_ID(), 'victory_category' );
							if ( $terms && ! is_wp_error( $terms ) ) {
								foreach ( $terms as $term ) {
									$category_name = $term->name;
									$category_slug = $term->slug;
									echo $category_slug;?> <?php 
								}
							}
							?>">
							<?php
								$pdf_file = get_field('document_victory');
								$pdf_url = $pdf_file['url'];
								$pdf_image = get_field('img_document_victory');
								$slider_images = get_field('slider_images');
							?>
							<div class="victory-card-block">
								<img class="victory-card-block-img" src="<?php echo esc_url($pdf_image['url']); ?>" alt="pdf_image" data-tooltip="Посмотреть поближе">
								<div class="clue none">Посмотреть поближе</div>
								<div class="victory-card-block-box">
									<div class="victory-card-block-box-person">
										<?php
											$selected_post_id = get_field('employee_page');
		
											if ($selected_post_id) {
												?>
												<a href="<?php echo get_permalink($selected_post_id); ?>"
													<?php
													$selected_post = get_post($selected_post_id);
		
													$person_photo_link = get_field('фото_оффера', $selected_post_id);
													$person_name = get_field('имя', $selected_post_id);
													$person_lastname = get_field('фамилия', $selected_post_id);
													$person_post = get_field('должность', $selected_post_id);
													?>
													data-tooltip="<?php echo $person_post; ?> <?php echo $person_name . ' ' . $person_lastname; ?>" data-prompt="посмотреть подробную информацию">
													<?php
														if ($person_photo_link && $person_name && $person_lastname && $person_post) { 
															?>
															<img src="<?php echo esc_url($person_photo_link); ?>" alt="landing_photo">
															<div class="clue none"><?php echo $person_post; ?> <?php echo $person_name . ' ' . $person_lastname; ?><br>посмотреть подробную информацию</div>
															<?php
														} else {
															?>
															<img src="<?php echo get_template_directory_uri(); ?>/img/k2.png" alt="k2">
															<div class="clue none"><?php echo $person_post; ?> <?php echo $person_name . ' ' . $person_lastname; ?><br>посмотреть подробную информацию</div>
															<?php
														}
													?>
												</a>
												<?php
											} else { 
												?>
												<img src="<?php echo get_template_directory_uri(); ?>/img/k2.png" alt="k2">
												<?php
											}
										?>
									</div>
									<p><?php echo get_field('about_victory'); ?></p>
								</div>
								<div class="data-slider none">
								<?php
								if ($slider_images) {
									foreach ($slider_images as $image) {
										$slider_image_url = $image['url'];
										$slider_image_alt = $image['alt'];

										echo '<a data-fancybox="document-' . $index . '" href="' . $slider_image_url . '" alt="' . $slider_image_alt . '"><img src="' . $slider_image_url . '" alt="' . $slider_image_alt . '"></a>';
									}
								}
								?>
								</div>
							</div>
	
							<div class="victory-card-preview">
								<div class="victory-card-text">
									<p>
										<b>
										<?php 
										$field_object = get_field_object('come_to_us');
										echo $field_object['label']
										?>
										</b>
									</p>
									<p>
										<?php echo get_field('come_to_us'); ?>
									</p>
									<p>
										<b>
										<?php 
										$field_object = get_field_object('we_did');
	
										echo $field_object['label']
										?>
										</b>
									</p>
									<p><?php echo get_field('we_did'); ?></p>
									<p>
										<b>
										<?php 
										$field_object = get_field_object('we_achieved');
	
										echo $field_object['label']
										?>
										</b>
									</p>
									<p><?php echo get_field('we_achieved'); ?></p>
								</div>
							</div>
						</div>
						<?php
						$index++;
					}
					// Сбрасываем глобальные переменные, связанные с запросом
					wp_reset_postdata();
				}
				?>
			</div>
			<button id="article-scroll" class="opacity 
				<?php
				if ($post_count <= 12) {
					?>
					none
					<?php
				}
				?>"
				><p>Посмотреть ещё</p>
				<svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M1 1L8.5 7L16 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
				</svg>
			</button>
		</div>
		<div class="shadow-bg">
		</div>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				const redButton = document.querySelector(".red-button");
		
				function show() {
					redButton.classList.remove("opacity");
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
					threshold: 0.8,
				};
		
				if (window.innerWidth <= 900) {
				options = {
					threshold: 0.4,
				};
				}
		
				const observer = new IntersectionObserver(callback, options);
				setTimeout(() => {
				observer.observe(redButton);
				}, 1000)
			});
			document.addEventListener("DOMContentLoaded", function() {
				const buttonMore = document.querySelector("#article-scroll");
		
				function show() {
					buttonMore.classList.remove("opacity");
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
					threshold: 0.8,
				};
		
				if (window.innerWidth <= 900) {
				options = {
					threshold: 0.4,
				};
				}
		
				const observer = new IntersectionObserver(callback, options);
				setTimeout(() => {
				observer.observe(buttonMore);
				}, 1000)
			});
			document.addEventListener("DOMContentLoaded", function() {
				const victoryCards = document.querySelectorAll(".victory-card");
				let delay = 0;

				victoryCards.forEach((card) => {
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
	</div>
	
	<div class="legal-review">
		<div class="container">
			<div class="maintenance_review-info">
				<?php
				$page_id = 95;
				$page_link = get_permalink($page_id);
				?>
				<div class="person_skill-victory opacity">
				<div class="itc-slider" data-slider="itc-slider" data-autoplay="true" data-interval="3000">
					<div class="itc-slider-wrapper">
						<div class="itc-slider-items">
						<?php
							$args = array(
								'post_type' => 'review',
								'posts_per_page' => -1,
							);

							$reviews = get_posts($args);

							if ($reviews) {
								foreach ($reviews as $review) {
									$page_link = get_permalink($review);
									?>

									<div class="itc-slider-item">
										<a href="<?php echo esc_url($page_link); ?>">
											<div class="person_skill-victory-card">
												<?php echo get_the_post_thumbnail($review); ?>
											</div>
										</a>
									</div>

									<?php
								}
							}
							?>
						</div>
					</div>
				</div>
				</div>
				<p><?php echo get_field('текст_отзыва', 414); ?></p>
				<script>
				document.querySelectorAll('.maintenance_review-info p').forEach((li) => {
					li.classList.add("opacity");
				});
				</script>
			</div>
		</div>
		<script>
			document.addEventListener("DOMContentLoaded", function() {
				const review = document.querySelector(".legal-review");
				const reviewPs = review.querySelectorAll("p");
				const reviewSlider = review.querySelector(".person_skill-victory");
		
				function show() {
				reviewSlider.classList.remove("opacity");
				reviewPs.forEach((li, index) => {
					setTimeout(() => {
					li.classList.remove("opacity");
					}, 300 * index);
				});
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
					threshold: 0.8,
				};
		
				if (window.innerWidth <= 900) {
				options = {
					threshold: 0.4,
				};
				}
		
				const observer = new IntersectionObserver(callback, options);
				setTimeout(() => {
				observer.observe(review);
				}, 1000)
			});
		</script>
	</div>
	
	<div class="about-company_map">
		<div class="container">
			<div class="about-company_map-info">
				<h3 class="opacity"><?php echo get_field('заголовок_второй', 383); ?></h3>
				<?php echo get_field('основной_текст', 383); ?>
				<h4 class="opacity"><?php echo get_field('последний_абзац_начало', 383); ?> <span><a href="<?php echo get_field('ссылка_на_страницу', 383); ?>"><?php echo get_field('последний_абзац_середина', 383); ?></a></span><?php echo get_field('последний_абзац_окончание', 383); ?></h4>
			</div>
			<?php
				$page_id = 568;
				$page_link = get_permalink($page_id);
			?>
			<a href="<?php echo esc_url($page_link); ?>" class="about-company_map-img opacity" data-tooltip="Посмотреть контакты">
				<?php
				$image = get_field('изображение_карты', 383);
		
				if ($image) {
					?>
					<img src="<?php echo $image['url']; ?>" alt="map_k2" />
					<?php
				} else {
					?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/about_company/map.png" alt="map" />
					<?php
				}
				?>
				<div class="clue none">Посмотреть контакты</div>
			</a>
			<h4 class="opacity"><?php echo get_field('последний_абзац_начало', 383); ?> <span><a href="<?php echo get_field('ссылка_на_страницу', 383); ?>"><?php echo get_field('последний_абзац_середина', 383); ?></a></span><?php echo get_field('последний_абзац_окончание', 383); ?></h4>
		</div>
		<script>
			const liElements = document.querySelectorAll(".about-company_map-info li");
			liElements.forEach((li) => {
				const div = document.createElement("div");
				li.insertBefore(div, li.firstChild);
				li.classList.add("opacity");
			});
		
			document.addEventListener("DOMContentLoaded", () => {
				const companyMap = document.querySelector(".about-company_map");
				const companyMapImg = companyMap.querySelector(".about-company_map-img");
				const companyMapImgH3 = companyMap.querySelector("h3");
				const companyMapImgLies = companyMap.querySelectorAll("li");
				const companyMapImgH4 = companyMap.querySelectorAll("h4");
		
				function show() {
				companyMapImgH3.classList.remove("opacity");
				setTimeout(() => {
					companyMapImg.classList.remove("opacity");
					setTimeout(() => {
					companyMapImgLies.forEach((li, index) => {
						setTimeout(() => {
						li.classList.remove("opacity");
						}, 200 * index);
					});
					setTimeout(() => {
						companyMapImgH4.forEach((li, index) => {
						setTimeout(() => {
							li.classList.remove("opacity");
						}, 200 * index);
						});
					}, 300);
					}, 300);
				}, 300);
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
		
				if (window.innerWidth <= 900) {
				options = {
					threshold: 0.3,
				};
				}
		
				const observer = new IntersectionObserver(callback, options);
				setTimeout(() => {
				observer.observe(companyMap);
				}, 1000)
			});
		</script>
	</div>

</section>

<script src="<?php echo $urltheme; ?>/js/victory_new.js"></script>
	
<?php include 'footer.php'; ?>