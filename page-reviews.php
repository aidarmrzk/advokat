<?php /* Template Name: Отзывы */ ?>
<?php include 'header.php'; ?>
	
    <section class="review">
		<div class="container">
			<div class="breadcrumbs">
				<span><a href="<?php bloginfo('url'); ?>">Главная</a></span>
					<svg width="5" height="10" viewBox="0 0 5 10"	fill="none"	xmlns="http://www.w3.org/2000/svg" >
						<path d="M1 1L4 5L1 9" stroke="black" stroke-opacity="0.38" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				<span><?php the_title(); ?></span>
			</div>
			
			<div class="review-banner opacity">
				<?php $image = get_field('изображение'); ?>
				<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
			</div>
			
			<div class="section-review">
				<div class="section-review_panel">
					<button class="choise-tag opacity">
						<span>Выберите категорию</span>
						<svg width="17"	height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M1 1.5L8.5 7.5L16 1.5"	stroke="white" stroke-width="2"	stroke-linecap="round" stroke-linejoin="round" />
						</svg>
					</button>
					<div class="section-review_links opacity">
						<a href="https://yandex.ru/maps/org/yuristy_k2/50163903260/?from=tabbar&ll=36.571844%2C50.603664&source=serp_navig&z=17" id="yandex-link">
							<div class="section-review_link">
								<img src="<?php echo $urltheme; ?>/img/yandex.png" alt="yandex" />
								<div class="section-review_link-info">
									<span></span>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />   
									</svg>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<span></span>
								</div>
							</div>
						</a>
						<a href="https://www.google.com/maps/place/%D0%AE%D1%80%D0%B8%D1%81%D1%82%D1%8B+%D0%9A2/@50.6036453,36.5717811,17z/data=!3m1!4b1!4m8!3m7!1s0x41266ae388d63bf1:0xb16415a41b7f8fc4!8m2!3d50.6036453!4d36.5717811!9m1!1b1!16s%2Fg%2F11c7v_hv91?entry=ttu" id="google-link">
							<div class="section-review_link">
								<img src="<?php echo $urltheme; ?>/img/google.png" alt="google" />
								<div class="section-review_link-info">
									<span></span>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<span></span>
								</div>
							</div>
						</a>
						<a href="https://2gis.ru/belgorod/firm/70000001027050693" id="gis-link">
							<div class="section-review_link">
								<img src="<?php echo $urltheme; ?>/img/2gis.png" alt="2gis" />
								<div class="section-review_link-info">
									<span></span>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z" fill="#FBBC05" />
									</svg>
									<span></span>
								</div>
							</div>
						</a>
					</div>
				</div>
				<div class="list-tags-wrap">
					<div class="list-tags">
						<a href="" data-tag="all">Показать всё</a>
						<?php
						$args = array(
							'post_type' => 'review',
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
		
				<div class="listing2-wrap">
					<div class="section-review_reviews listing2">
				
					<?php
						$i = 0;
						query_posts('post_type=review&posts_per_page=99'); 
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
							$i++;
							if ($i > 10) { $class = ' hide234'; } else { $class = ''; }
					?>
						<div class="section-review_review<?php echo $post_tags; echo $class; ?> opacity">
							<a data-fancybox="review" href="<?php echo $large_image_url[0]; ?>"><img src="<?php echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
						</div>
					<?php endwhile; wp_reset_query(); ?>

					</div>
				</div>
		  
				<button class="more opacity <?php if ($i <= 10) { ?>none<?php } ?>">	  
					<span>Посмотреть еще</span>
					<svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1L8.5 7L16 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
					</svg>
				</button>
			</div>
		</div>

		<div class="shadow-bg">
		</div>
	</section>
	
	<script>
		$(document).ready(function () {
			const review = document.querySelector(".review");
			const choiceTag = document.querySelector(".choise-tag");
			const tagsWrap = document.querySelector(".list-tags-wrap");
			const shadowBg = document.querySelector(".shadow-bg");

			choiceTag.addEventListener("click", () => {
				if (review.classList.contains("show-tag")) {
					review.classList.remove("show-tag");
				} else {
					review.classList.add("show-tag");
					if (window.innerWidth <= 1160) {
						let windowWidth = window.innerWidth;
						let newWidth = windowWidth - 70;
						tagsWrap.style.width = newWidth + "px";
					}
					shadowBg.addEventListener("click", () => {
						review.classList.remove("show-tag");
					});
				}
			});
			
			$maintext = $('.choise-tag span').text();
			$('.list-tags a').on("click", function(){
				$this = $(this);
				$newtext = $this.text();
				$newtag = $this.attr('data-tag');
				if ($this.hasClass('active') || $newtag === "all") {
					$('.choise-tag span').text($maintext);
					$('.list-tags a').removeClass('active');
					$('.list-tags a').first().addClass('active');
					$('.section-review .more').show();	
					$('.section-review_reviews .section-review_review').show('222');
					$('.section-review_reviews .section-review_review.hide234').hide('222');					
				} else {
					$('.choise-tag span').text($newtext);
					$('.list-tags a').removeClass('active');
					$this.addClass('active');
					$('.section-review_reviews .section-review_review').hide('222');
					$('.section-review_reviews .section-review_review.' + $newtag).show('222');
					$('.section-review .more').hide();	
				}
				$('.review').removeClass('show-tag');
				return false;
			});

			$('.section-review .more').on("click", function(){
				$this = $(this);
				$this.toggleClass('active');
				if ($this.hasClass('active')) {
					$('.section-review_reviews .section-review_review.hide234').show('222');
				} else {
					$('.section-review_reviews .section-review_review.hide234').hide('222');
				}
				return false;
			});	

		});

		$(document).ready(function() {
			if ($(window).width() <= 1000 || $(window).width() <= 768 || $(window).width() <= 480 || $(window).width() <= 380) {
				let maxVisibleReviews = ($(window).width() <= 380) ? 6 : ($(window).width() <= 480) ? 8 : ($(window).width() <= 768) ? 6 : 8;
				
				if ($('.section-review_reviews .section-review_review').length > maxVisibleReviews) {
					$('.section-review_reviews .section-review_review').each(function(index) {
						if (index > (maxVisibleReviews - 1)) {
						$(this).addClass('hide234');
						}
					});
					$('.section-review .more').removeClass('none').show();
				}
			}
		});	
	</script>

	<script>
		document.addEventListener('DOMContentLoaded', function() {
			// Получаем параметры URL страницы
			const urlParams = new URLSearchParams(window.location.search);
			console.log(urlParams);
			
			if (urlParams.has('filter') && urlParams.get('filter') === 'legal_support') {
				const filterDropdown = document.querySelector('a[data-tag="legal_support"]');
				filterDropdown.click();
			}
			if (urlParams.has('filter') && urlParams.get('filter') === 'win_case') {
				const filterDropdown = document.querySelector('a[data-tag="win_case"]');
				filterDropdown.click();
			}
		});
	</script>
	
	
<?php include 'footer.php'; ?>