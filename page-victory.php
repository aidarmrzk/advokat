<?php /* Template Name: Наши победы*/ ?>
<?php include 'header.php'; ?>
	
<main class="main">
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

		<article>
			<div class="article-top">
				<?php
				// Создаем запрос для получения всех записей типа "victory"
				$args = array(
					'post_type' => 'victory',
					'posts_per_page' => -1 // -1 означает получить все записи
				);

				// Выполняем запрос
				$the_query = new WP_Query($args);

				// Проверяем, есть ли записи
				if ($the_query->have_posts()) {
					$post_count = $the_query->post_count; // Количество записей
					// Начинаем цикл по записям
					while ($the_query->have_posts()) {
						$the_query->the_post();
						?>
							<div class="<?php
								if ($the_query->current_post >= 3) {
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
						// Проверяем четность индекса записи
						if ($the_query->current_post % 2 == 0) {
							?>
								<div class="article-content opacity">
									<div class="article-content-img">
									<?php
										$pdf_file = get_field('document_victory');
										$pdf_url = $pdf_file['url'];
										$pdf_image = get_field('img_document_victory');
									?>	
										<a href="<?php echo esc_url($pdf_url); ?>">
											<img src="<?php echo esc_url($pdf_image['url']); ?>" alt="pdf_image">
										</a>
									</div>
									<div class="article-content-child">
										<div>
											<h2><?php the_title(); ?></h2>
										</div>
										<div class="article-text">
											<div class="article-text-shown">
												<p><b>
													<?php 
													$field_object = get_field_object('come_to_us');

													echo $field_object['label']
													?>
												</b></p>

												<p>
													<?php echo get_field('come_to_us'); ?>
												</p>
											</div>
											<div class="article-text-hidden none">
												<p><b>
													<?php 
													$field_object = get_field_object('we_did');

													echo $field_object['label']
													?>
												</b></p>
												<p><?php echo get_field('we_did'); ?></p>

												<p><b>
													<?php 
													$field_object = get_field_object('we_achieved');

													echo $field_object['label']
													?>
												</b></p>
												<p><?php echo get_field('we_achieved'); ?></p>
											</div>
										</div>
										<button class="article-button" >Что мы сделали</button>
									</div>
								</div>
								<div class="victory-employee opacity">
									<div class="victory-employee-img">
										<?php
											$selected_post_id = get_field('employee_page');

											if ($selected_post_id) {
												$selected_post = get_post($selected_post_id);

												$person_photo_link = get_field('фото_оффера', $selected_post_id);
												$person_name = get_field('имя', $selected_post_id);
												$person_lastname = get_field('фамилия', $selected_post_id);
												$person_post = get_field('должность', $selected_post_id);

												if ($person_photo_link && $person_name && $person_lastname && $person_post) { 
													?>

													<img src="<?php echo esc_url($person_photo_link); ?>" alt="landing_photo">
													
													<p><?php echo $person_name . ' ' . $person_lastname; ?>,<br><?php echo $person_post; ?> К2</p>

													<?php

												} else { ?>

													<img src="<?php echo get_template_directory_uri(); ?>/img/landing/landing_photo.png" alt="landing_photo">
													<p>Николай Кудинов,<br> юрист К2</p>
													
													<?php
												}
											} 
										?>
									</div>
									<h2><?php echo get_field('employee_phrase'); ?></h2>
								</div>
							<?php
						} else {
							?>
								<div class="victory-employee opacity">
									<div class="victory-employee-img">
										<?php
											$selected_post_id = get_field('employee_page');

											if ($selected_post_id) {
												$selected_post = get_post($selected_post_id);

												$person_photo_link = get_field('фото_оффера', $selected_post_id);
												$person_name = get_field('имя', $selected_post_id);
												$person_lastname = get_field('фамилия', $selected_post_id);
												$person_post = get_field('должность', $selected_post_id);

												if ($person_photo_link && $person_name && $person_lastname && $person_post) { 
													?>

													<img src="<?php echo esc_url($person_photo_link); ?>" alt="landing_photo">
													
													<p><?php echo $person_name . ' ' . $person_lastname; ?>,<br><?php echo $person_post; ?> К2</p>

													<?php

												} else { ?>

													<img src="<?php echo get_template_directory_uri(); ?>/img/landing/landing_photo.png" alt="landing_photo">
													<p>Николай Кудинов,<br> юрист К2</p>
													
													<?php
												}
											} 
										?>
									</div>
									<h2><?php echo get_field('employee_phrase'); ?></h2>
								</div>
								<div class="article-content opacity">
									<div class="article-content-img">
									<?php
										$pdf_file = get_field('document_victory');
										$pdf_url = $pdf_file['url'];
										$pdf_image = get_field('img_document_victory');
									?>	
										<a href="<?php echo esc_url($pdf_url); ?>">
											<img src="<?php echo esc_url($pdf_image['url']); ?>" alt="pdf_image">
										</a>
									</div>
									<div class="article-content-child">
										<div>
											<h2><?php the_title(); ?></h2>
										</div>
										<div class="article-text">
											<div class="article-text-shown">
												<p><b>
													<?php 
													$field_object = get_field_object('come_to_us');

													echo $field_object['label']
													?>
												</b></p>

												<p>
													<?php echo get_field('come_to_us'); ?>
												</p>
											</div>
											<div class="article-text-hidden none">
												<p><b>
													<?php 
													$field_object = get_field_object('we_did');

													echo $field_object['label']
													?>
												</b></p>
												<p><?php echo get_field('we_did'); ?></p>

												<p><b>
													<?php 
													$field_object = get_field_object('we_achieved');

													echo $field_object['label']
													?>
												</b></p>
												<p><?php echo get_field('we_achieved'); ?></p>
											</div>
										</div>
										<button class="article-button" >Что мы сделали</button>
									</div>
								</div>
							<?php
						}
						?>
						
						</div>
						<?php
					}
					// Сбрасываем глобальные переменные, связанные с запросом
					wp_reset_postdata();
				}
				?>
			</div>
			<button id="article-scroll" class="opacity 
				<?php
				if ($post_count <= 3) {
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
		</article>
  	</div>
	<div class="shadow-bg">
	</div>
</main>

<script src="<?php echo $urltheme; ?>/js/victory.js"></script>
	
<?php include 'footer.php'; ?>