<?php /* Template Name: Главная страница */ ?>
<?php include 'header.php'; ?>

    
    <section class="about-company">
      <div class="about-company_banner">
        <div class="container">
          <?php
          if ( !is_front_page() ) { ?>
            <div class="breadcrumbs">
              <span><a href="<?php bloginfo('url'); ?>">Главная</a></span>
              <svg
              width="5"
              height="10"
              viewBox="0 0 5 10"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
              >
              <path
                d="M1 1L4 5L1 9"
                stroke="black"
                stroke-opacity="0.38"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
              </svg>
              <span><?php the_title(); ?></span>
            </div>
          <?php
          }
          ?>
          <div class="about-company_banner-info">
            <div class="about-company_banner-info-block">
              <?php
              $page_id = 6;
              $page_link = get_permalink($page_id);
              ?>
              <a href="<?php echo esc_url($page_link); ?>">
                <div class="about-company_banner-info-block-red opacity" data-tooltip="Нажмите, чтобы посмотреть нашу команду">
                  <span class="counter"><?php echo get_field('юристы_в_команде'); ?></span>
                  <div class="clue none">Нажмите, чтобы посмотреть нашу команду</div>
                  <span><?php echo get_field('склонение_слова_юрист'); ?> в&nbsp;команде</span>
                </div>
              </a>
              <div class="about-company_banner-info-block-black opacity" data-tooltip="Нажмите, чтобы посмотреть документы компании">
                <span class="counter"><?php echo get_field('время_на_рынке'); ?></span>
                <div class="clue none">Нажмите, чтобы посмотреть документы компании</div>
                <span><?php echo get_field('лет_год_года'); ?> на рынке</span>
              </div>
            </div>
            <div class="about-company_banner-info-img opacity">
              <?php $banner_image = get_field('фото_баннера');?>
              <img src="<?php echo esc_url($banner_image['url']); ?>" alt="">
            </div>

            <?php
            $page_id = 95;
            $page_link = get_permalink($page_id);
            ?>
            <a href="<?php echo esc_url($page_link); ?>">
              <div class="about-company_banner-info-block-card opacity" data-tooltip="Нажмите, чтобы посмотреть Отзывы">
                <span>><span class="counter"><?php echo get_field('количество_клиентов'); ?></span></span>
                <div class="clue none">Нажмите, чтобы посмотреть Отзывы</div>
                <div class="about-company_banner-info-block-card-box">
                  <p><?php echo get_field('текст_мини_блока'); ?></p>
                  <div class="about-company_banner-info-block-card-box-link">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/yandex.png" alt="yandex" />
                    <div class="about-company_banner-info-block-card-box-link-star">
                      <svg
                        width="17"
                        height="16"
                        viewBox="0 0 17 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                          d="M7.58155 0.90325C7.92863 0.0972863 9.07137 0.0972867 9.41845 0.90325L10.969 4.50367C11.1137 4.83984 11.4306 5.07006 11.7951 5.10387L15.6984 5.46589C16.5722 5.54693 16.9253 6.63374 16.266 7.21289L13.321 9.8001C13.046 10.0417 12.9249 10.4142 13.0054 10.7712L13.8673 14.5954C14.0602 15.4514 13.1357 16.1231 12.3812 15.6751L9.01056 13.6737C8.69584 13.4868 8.30416 13.4868 7.98944 13.6737L4.61879 15.6751C3.86426 16.1231 2.93976 15.4514 3.1327 14.5954L3.99459 10.7712C4.07506 10.4142 3.95403 10.0417 3.67904 9.8001L0.733975 7.21289C0.0747133 6.63374 0.42784 5.54693 1.30161 5.46589L5.20494 5.10387C5.5694 5.07006 5.88627 4.83984 6.03105 4.50367L7.58155 0.90325Z"
                          fill="#FCD114"
                        />
                      </svg>
                      <svg
                        width="17"
                        height="16"
                        viewBox="0 0 17 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                          d="M7.58155 0.90325C7.92863 0.0972863 9.07137 0.0972867 9.41845 0.90325L10.969 4.50367C11.1137 4.83984 11.4306 5.07006 11.7951 5.10387L15.6984 5.46589C16.5722 5.54693 16.9253 6.63374 16.266 7.21289L13.321 9.8001C13.046 10.0417 12.9249 10.4142 13.0054 10.7712L13.8673 14.5954C14.0602 15.4514 13.1357 16.1231 12.3812 15.6751L9.01056 13.6737C8.69584 13.4868 8.30416 13.4868 7.98944 13.6737L4.61879 15.6751C3.86426 16.1231 2.93976 15.4514 3.1327 14.5954L3.99459 10.7712C4.07506 10.4142 3.95403 10.0417 3.67904 9.8001L0.733975 7.21289C0.0747133 6.63374 0.42784 5.54693 1.30161 5.46589L5.20494 5.10387C5.5694 5.07006 5.88627 4.83984 6.03105 4.50367L7.58155 0.90325Z"
                          fill="#FCD114"
                        />
                      </svg>
                      <svg
                        width="17"
                        height="16"
                        viewBox="0 0 17 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                          d="M7.58155 0.90325C7.92863 0.0972863 9.07137 0.0972867 9.41845 0.90325L10.969 4.50367C11.1137 4.83984 11.4306 5.07006 11.7951 5.10387L15.6984 5.46589C16.5722 5.54693 16.9253 6.63374 16.266 7.21289L13.321 9.8001C13.046 10.0417 12.9249 10.4142 13.0054 10.7712L13.8673 14.5954C14.0602 15.4514 13.1357 16.1231 12.3812 15.6751L9.01056 13.6737C8.69584 13.4868 8.30416 13.4868 7.98944 13.6737L4.61879 15.6751C3.86426 16.1231 2.93976 15.4514 3.1327 14.5954L3.99459 10.7712C4.07506 10.4142 3.95403 10.0417 3.67904 9.8001L0.733975 7.21289C0.0747133 6.63374 0.42784 5.54693 1.30161 5.46589L5.20494 5.10387C5.5694 5.07006 5.88627 4.83984 6.03105 4.50367L7.58155 0.90325Z"
                          fill="#FCD114"
                        />
                      </svg>
                      <svg
                        width="17"
                        height="16"
                        viewBox="0 0 17 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                          d="M7.58155 0.90325C7.92863 0.0972863 9.07137 0.0972867 9.41845 0.90325L10.969 4.50367C11.1137 4.83984 11.4306 5.07006 11.7951 5.10387L15.6984 5.46589C16.5722 5.54693 16.9253 6.63374 16.266 7.21289L13.321 9.8001C13.046 10.0417 12.9249 10.4142 13.0054 10.7712L13.8673 14.5954C14.0602 15.4514 13.1357 16.1231 12.3812 15.6751L9.01056 13.6737C8.69584 13.4868 8.30416 13.4868 7.98944 13.6737L4.61879 15.6751C3.86426 16.1231 2.93976 15.4514 3.1327 14.5954L3.99459 10.7712C4.07506 10.4142 3.95403 10.0417 3.67904 9.8001L0.733975 7.21289C0.0747133 6.63374 0.42784 5.54693 1.30161 5.46589L5.20494 5.10387C5.5694 5.07006 5.88627 4.83984 6.03105 4.50367L7.58155 0.90325Z"
                          fill="#FCD114"
                        />
                      </svg>
                      <svg
                        width="17"
                        height="16"
                        viewBox="0 0 17 16"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <path
                          d="M7.58155 0.90325C7.92863 0.0972863 9.07137 0.0972867 9.41845 0.90325L10.969 4.50367C11.1137 4.83984 11.4306 5.07006 11.7951 5.10387L15.6984 5.46589C16.5722 5.54693 16.9253 6.63374 16.266 7.21289L13.321 9.8001C13.046 10.0417 12.9249 10.4142 13.0054 10.7712L13.8673 14.5954C14.0602 15.4514 13.1357 16.1231 12.3812 15.6751L9.01056 13.6737C8.69584 13.4868 8.30416 13.4868 7.98944 13.6737L4.61879 15.6751C3.86426 16.1231 2.93976 15.4514 3.1327 14.5954L3.99459 10.7712C4.07506 10.4142 3.95403 10.0417 3.67904 9.8001L0.733975 7.21289C0.0747133 6.63374 0.42784 5.54693 1.30161 5.46589L5.20494 5.10387C5.5694 5.07006 5.88627 4.83984 6.03105 4.50367L7.58155 0.90325Z"
                          fill="#FCD114"
                        />
                      </svg>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="about-company_banner-text opacity">
            <?php echo get_field('текст_баннера'); ?>
          </div>
        </div>
      </div>

      <div class="about-company_map">
        <div class="container">
          <div class="about-company_map-info">
            <h3 class="opacity"><?php echo get_field('заголовок_карты'); ?></h3>
            <?php echo get_field('текст_карты'); ?>
            <h4 class="opacity"><?php echo get_field('нижний_текст_карты'); ?></h4>
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
          <h4 class="opacity"><?php echo get_field('нижний_текст_карты'); ?></h4>
        </div>
      </div>

      <div class="about-company_rating">
        <div class="container">
          <div class="about-company_rating-info">
            <div class="about-company_rating-info-block">
              <h3 class="opacity"><?php echo get_field('заголовок_блока_рейтинга'); ?></h3>
              <div class="about-company_rating-info-images">
                <?php
                $images = get_field('фото_рейтингов');

                  if ($images) {
                    foreach ($images as $image) { ?>

                        <?php
                        $image_url = $image['url'];
                        echo '<img src="' . esc_url($image_url) . '" class="opacity" alt="rating_img">';
                        ?>

                      <?php
                    }
                }
                ?>
              </div>
              <div class="about-company_rating-info-block-text">
                <p class="opacity">
                  <span><?php echo get_field('фраза_рейтинга_декстоп'); ?> </span>
                  <?php echo get_field('фраза_рейтинга_центр'); ?>
                  <span class="text-red"><a href="<?php echo get_field('фраза_рейтинга_ссылка'); ?>"><?php echo get_field('фраза_рейтинга_красное'); ?></a></span><?php echo get_field('фраза_рейтинга_концовка'); ?>
                </p>
                <img class="opacity" src="<?php echo get_template_directory_uri(); ?>/img/arrow.png" alt="arrow" />
              </div>
            </div>
            <?php
            $page_id = 847;
            $page_link = get_permalink($page_id);
            ?>
            <div class="person_skill-victory opacity">
              <div class="itc-slider" data-slider="itc-slider" data-autoplay="true" data-interval="3000">
                <div class="itc-slider-wrapper">
                  <div class="itc-slider-items">
                    <?php
                    $args = array(
                        'post_type' => 'victory',
                        'posts_per_page' => 5,
                    );

                    $custom_query = new WP_Query($args);

                    if ($custom_query->have_posts()) :
                        while ($custom_query->have_posts()) : $custom_query->the_post();
                            $post_id = get_the_ID();
                            $title = get_the_title();
                            $img_document = get_field('img_document_victory', $post_id);
                            $image_url = $img_document['url'];
                            ?>
                            <div class="itc-slider-item">
                              <a href="<?php echo esc_url($page_link); ?>">
                                <div class="person_skill-victory-card">
                                  <h5><?php echo esc_html($title); ?></h5>
                                  <img src="<?php echo esc_url($image_url); ?>" alt="pdf_image">
                                </div>
                              </a>
                            </div>
      
                            <?php

                        endwhile;

                        wp_reset_postdata(); // Восстановление оригинальных данных записей
                    endif;
                    ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>

      <div class="none">
        <?php
        query_posts('post_type=document&posts_per_page=-1');
        while ( have_posts() ) : 
            the_post(); 
            setup_postdata($post);

            $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
            
            ?>
              <a data-fancybox="document" href="<?php echo $large_image_url[0]; ?>"><img src="<?php echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>" /></a>
            <?php

        endwhile;
        wp_reset_query();
        ?>
      </div>
    </section>

    <script>
        const bannerLies = document.querySelectorAll(".about-company_banner-text li");
        const mapLies = document.querySelectorAll(".about-company_map-info li");
        const svgCode = '<svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg"><circle cx="5.5" cy="6" r="5.5" fill="#D8160C"/></svg>';
        bannerLies.forEach((li) => {
          li.innerHTML = svgCode + li.innerHTML;
        });
        mapLies.forEach((li) => {
          li.classList.add("opacity");
          li.innerHTML = svgCode + li.innerHTML;
        });
    </script>
	
<?php include 'footer.php'; ?>