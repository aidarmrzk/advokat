<?php /* Template Name: Нам доверяют */ ?>
<?php include 'header.php'; ?>
	
	<section class="trusted">
		<div class="container">
			<div class="breadcrumbs">
				<span><a href="<?php bloginfo('url'); ?>">Главная</a></span>
					<svg width="5" height="10" viewBox="0 0 5 10"	fill="none"	xmlns="http://www.w3.org/2000/svg" >
						<path d="M1 1L4 5L1 9" stroke="black" stroke-opacity="0.38" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				<span><?php the_title(); ?></span>
			</div>
			
			<div class="section-review">
				<div class="section-review_panel">
					<button class="choise-tag opacity">
						<span>Выберите категорию</span>
						<svg width="17"	height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1.5L8.5 7.5L16 1.5"	stroke="white" stroke-width="2"	stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="list-tags-wrap">
						<div class="list-tags">
							<a href="" data-tag="all">Показать всё</a>
							<?php
							$args = array(
								'post_type' => 'client',
								'posts_per_page' => -1, 
							);

							$query = new WP_Query( $args );

							$all_tags = array();

							if ( $query->have_posts() ) {
								while ( $query->have_posts() ) {
									$query->the_post();
									$tags = get_the_terms( get_the_ID(), 'post_tag' ); // Получаем метки текущей записи
									
									if ( $tags ) {
										foreach ( $tags as $tag ) {
											$all_tags[ $tag->slug ] = $tag->name;
										}
									}
								}
								
								wp_reset_postdata();
							}

							foreach ( $all_tags as $slug => $name ) {
								?>
								<a href="" data-tag="<?php echo $slug; ?>"><?php echo $name; ?></a>
								<?php
							}
							?>
						</div>
					</div>
				</div>
				
				<div class="section-review_reviews">
					<?php
						query_posts('post_type=client&posts_per_page=99'); 
						while ( have_posts() ) : 
							the_post(); 
							setup_postdata($post);
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
							$posttags = get_the_tags();
							if ( $posttags ){
								$post_tags = '';
								foreach( $posttags as $tag ){
									$post_tags = $post_tags.' '.$tag->slug;
								}
							}
					?>
						<div class="section-review_review has-clue<?php echo $post_tags; echo $class; ?> opacity" data-tooltip="Посмотреть отзыв">
							<img src="<?php echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>" />
							<div class="clue none">Посмотреть отзыв</div>
						</div>
					<?php endwhile; wp_reset_query(); ?>
				</div>

				<div class="pagination opacity">
					<button id="prev">
						<svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1.27905 1.08051L10.5381 9.54061" stroke="black" stroke-width="2" stroke-linecap="round"></path>
							<path d="M1.27905 18.0008L10.5381 9.54059" stroke="black" stroke-width="2" stroke-linecap="round"></path>
						</svg>
					</button>
					<div class="pagination-pages">
						<button>1</button>
					</div>
					<button id="next">
						<svg width="12" height="19" viewBox="0 0 12 19" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1.27905 1.08051L10.5381 9.54061" stroke="black" stroke-width="2" stroke-linecap="round"></path>
							<path d="M1.27905 18.0008L10.5381 9.54059" stroke="black" stroke-width="2" stroke-linecap="round"></path>
						</svg>
					</button>
				</div>	
			</div>
		</div>
		<div class="shadow-bg">
		</div>
		<div class="shadow-block">
			<?php
			$args = array(
				'post_type' => 'client',
				'posts_per_page' => -1,
			);

			$clients = new WP_Query($args);

			if ($clients->have_posts()) {
				while ($clients->have_posts()) {
				$clients->the_post();
				$image = get_field('изображение_документа');
				?>
				<div class="shadow-block-box">
					<div class="shadow-block-box-info">
					<div class="container">
						<h4><?php echo get_the_title(); ?></h4>
						<p><?php echo get_field('мы_сделали'); ?></p>
					</div>
					<svg class="svg-close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L23 23" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
						<path d="M1 23L23 1" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
					</svg>
					</div>
					<div class="shadow-block-box-content">
					<div class="shadow-block-box-content-img">
						<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<svg class="next-box" width="22" height="48" viewBox="0 0 22 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M2 46.5L20 24L2 1.5" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						<svg class="prev-box" width="22" height="48" viewBox="0 0 22 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M20 46.5L2 24L20 1.5" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					</div>
				</div>

				<?php
				}
				wp_reset_postdata();
			}
			?>
		</div>
	</section>

	<script>
		$(document).ready(function () {
			// Фильтр отзывов
			const trusted = document.querySelector(".trusted");
			const choiceTag = document.querySelector(".choise-tag");
			const tagsWrap = document.querySelector(".list-tags-wrap");
			const shadowBg = document.querySelector(".shadow-bg");

			// Окно фильтров
			choiceTag.addEventListener("click", () => {
				if (trusted.classList.contains("show-tag")) {
					trusted.classList.remove("show-tag");
				} else {
					trusted.classList.add("show-tag");
					if (window.innerWidth <= 1160) {
						let windowWidth = window.innerWidth;
						let newWidth = windowWidth - 70;
						tagsWrap.style.width = newWidth + "px";
					}
					shadowBg.addEventListener("click", () => {
						trusted.classList.remove("show-tag");
					});
				}
			});

			// Выбор фильтров
			$maintext = $('.choise-tag span').text();
			$('.list-tags a').on("click", function(){
				$this = $(this);
				$newtext = $this.text();
				$newtag = $this.attr('data-tag');
				if ($this.hasClass('active') || $newtag === "all") {
					$('.choise-tag span').text($maintext);
					$('.list-tags a').removeClass('active');
					$('.list-tags a').first().addClass('active');
					$('.pagination').show();	
					$('.section-review_reviews .section-review_review').addClass('none');
					$('.pagination-pages button:first').click();		
				} else {
					$('.choise-tag span').text($newtext);
					$('.list-tags a').removeClass('active');
					$this.addClass('active');
					$('.section-review_reviews .section-review_review').addClass('none');
					$('.section-review_reviews .section-review_review.' + $newtag).removeClass('none');
					$('.pagination').hide();	
				}
				$('.trusted').removeClass('show-tag');
				return false;
			});		
		});

		// Модалка с отзывами
		const clientReviews = document.querySelectorAll('.section-review_review');
        const clientReviewsClues = document.querySelectorAll('.section-review_review .clue');
        const shadowBlock = document.querySelector('.shadow-block');
        const shadowBoxes = document.querySelectorAll('.shadow-block-box');

        if (window.innerWidth >= 900) {
          clientReviews.forEach((button, index) => {
            button.addEventListener("click", () => {
              shadowBlock.classList.add("show");
              shadowBoxes[index].classList.add("show");
              document.querySelector('body').style.overflow = "hidden";
            });
          });
        }

        clientReviewsClues.forEach((button, index) => {
          button.addEventListener("click", () => {
            shadowBlock.classList.add("show");
            shadowBoxes[index].classList.add("show");
            document.querySelector('body').style.overflow = "hidden";
          });
        });

        shadowBoxes.forEach((box, index) => {
          const nextBox = box.querySelector('.next-box');
          const prevBox = box.querySelector('.prev-box');
          const boxImg = shadowBoxes[index].querySelector('img');
          const close = shadowBoxes[index].querySelector('.svg-close');

          nextBox.addEventListener('click', (event) => {
            box.classList.remove("show");
            index = (index + 1) % shadowBoxes.length;
            shadowBoxes[index].classList.add("show");
          })

          prevBox.addEventListener('click', (event) => {
            box.classList.remove("show");
            index = (index - 1 + shadowBoxes.length) % shadowBoxes.length;
            shadowBoxes[index].classList.add("show");
          })

          box.querySelector('.shadow-block-box-content').addEventListener('click', (event) => {
            if (!boxImg.contains(event.target) && !nextBox.contains(event.target) && !prevBox.contains(event.target) ) {
              shadowBlock.classList.remove("show");
              box.classList.remove("show");
              document.querySelector('body').style.overflow = "auto";
            }
          })

          close.addEventListener('click', () => {
            shadowBlock.classList.remove("show");
            box.classList.remove("show");
            document.querySelector('body').style.overflow = "auto";
          })
        })
	</script>
	<script src="<?php echo $urltheme; ?>/js/pagination.js"></script>
	
<?php include 'footer.php'; ?>