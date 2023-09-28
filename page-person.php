<?php /* Template Name: Индивидуальная */ ?>
<?php include 'header.php'; ?>
	
	<section class="person">
    <div class="person_banner">
      <div class="container">
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
          <?php
          $parent_id = wp_get_post_parent_id( get_the_ID() );

          $parent_url = get_permalink( $parent_id );

          $parent_title = get_the_title( $parent_id );
          ?>
          <span><a href="<?php echo esc_url( $parent_url ); ?>"><?php echo esc_html( $parent_title ); ?></a></span>
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
        <div class="person_banner-info">
          <div class="person_banner-info-block">
            <div class="person_banner-info-block-text">
              <h1 class="opacity"><?php the_title(); ?></h1>
              <p class="opacity"><?php echo get_field('должность'); ?> <br />отдела судебной практики</p>
            </div>
            <div class="person_banner-info-block-experiences">
              
              <?php $experience = get_field('стаж');
                    $experience_1 = get_field('первый_показатель'); 
                    $experience_2 = get_field('второй_показатель'); 

              if (!empty($experience)): ?>
              <div class="person_banner-info-block-experience opacity">
                <span><?php echo $experience; ?></span>
                <span><?php echo get_field('стаж_единица'); ?> опыта</span>
              </div>
              <?php endif; ?>

              <?php
              if (!empty($experience_1)): ?>
              <div class="person_banner-info-block-experience opacity">
                <span><?php echo $experience_1; ?></span>
                <span><?php echo get_field('первый_показатель_пояснение'); ?></span>
              </div>
              <?php endif; ?>

              <?php
              if (!empty($experience_2)): ?>
              <div class="person_banner-info-block-experience opacity">
                <span><?php echo $experience_2; ?></span>
                <span><?php echo get_field('второй_показатель_пояснение'); ?></span>
              </div>
              <?php endif; ?>

            </div>
          </div>
          <div class="person_banner-info-img opacity">
          <?php
          $image_url = get_field('фото');

          if ($image_url) {
              echo '<img src="' . esc_url($image_url) . '" alt="Баннер фото">';
          }
          ?>
          </div>
        </div>
      </div>
    </div>
    <div class="person_skill">
      <div class="container">
        <div class="person_skill-text">
          <h3 class="opacity">Мне можно смело поручить</h3>
          <ul>
            <li>
              <svg
                width="35"
                height="35"
                viewBox="0 0 35 35"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                  d="M32.0834 16.1583V17.5C32.0816 20.6448 31.0633 23.7047 29.1804 26.2235C27.2974 28.7423 24.6507 30.5849 21.635 31.4765C18.6193 32.3682 15.3961 32.2611 12.4462 31.1713C9.49628 30.0814 6.9777 28.0672 5.26607 25.4291C3.55443 22.7909 2.74144 19.6701 2.94836 16.5321C3.15528 13.3942 4.37101 10.4071 6.41424 8.01657C8.45747 5.62599 11.2187 3.95994 14.2862 3.26689C17.3537 2.57383 20.563 2.89091 23.4355 4.17084"
                  stroke="#2B3131"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M32.0833 5.83331L17.5 20.4312L13.125 16.0562"
                  stroke="#D8160C"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              Работаем при отсутствии нужных документов и доказательств
            </li>
            <li>
              <svg
                width="35"
                height="35"
                viewBox="0 0 35 35"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                  d="M32.0834 16.1583V17.5C32.0816 20.6448 31.0633 23.7047 29.1804 26.2235C27.2974 28.7423 24.6507 30.5849 21.635 31.4765C18.6193 32.3682 15.3961 32.2611 12.4462 31.1713C9.49628 30.0814 6.9777 28.0672 5.26607 25.4291C3.55443 22.7909 2.74144 19.6701 2.94836 16.5321C3.15528 13.3942 4.37101 10.4071 6.41424 8.01657C8.45747 5.62599 11.2187 3.95994 14.2862 3.26689C17.3537 2.57383 20.563 2.89091 23.4355 4.17084"
                  stroke="#2B3131"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M32.0833 5.83331L17.5 20.4312L13.125 16.0562"
                  stroke="#D8160C"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              Не боимся крупных компаний и юристов с именем
            </li>
            <li>
              <svg
                width="35"
                height="35"
                viewBox="0 0 35 35"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                >
                <path
                  d="M32.0834 16.1583V17.5C32.0816 20.6448 31.0633 23.7047 29.1804 26.2235C27.2974 28.7423 24.6507 30.5849 21.635 31.4765C18.6193 32.3682 15.3961 32.2611 12.4462 31.1713C9.49628 30.0814 6.9777 28.0672 5.26607 25.4291C3.55443 22.7909 2.74144 19.6701 2.94836 16.5321C3.15528 13.3942 4.37101 10.4071 6.41424 8.01657C8.45747 5.62599 11.2187 3.95994 14.2862 3.26689C17.3537 2.57383 20.563 2.89091 23.4355 4.17084"
                  stroke="#2B3131"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
                <path
                  d="M32.0833 5.83331L17.5 20.4312L13.125 16.0562"
                  stroke="#D8160C"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              Назначаем нужные экспертизы и ломаем ненужные
            </li>
          </ul>
          <script>
            document.querySelectorAll('.person_skill-text li').forEach((li) => {
              li.classList.add("opacity");
            });
          </script>
          <button class="opacity">Обсудим Ваше дело?</button>
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
        <button class="opacity">Обсудим Ваше дело?</button>
      </div>
    </div>
    <div class="person_do opacity">
      <div class="container">
        <p>
      <?php echo get_field('достижения'); ?>
        </p>
      </div>
    </div>
    <div class="person_education">
      <div class="container">
        <div class="person_education-info">
          <h3 class="opacity">Образование</h3>
          <?php echo get_field('образование'); ?>
          <script>
            document.querySelectorAll('.person_education-info li').forEach((li) => {
              li.classList.add("opacity");
            });
          </script>
        </div>
        <div class="person_education-charters opacity">
          <div class="person_education-charters-block">
          
            <div class="person_education-charters-box_1">
            
            </div>
            <div class="person_education-charters-box_2">
            <?php
            $images = get_field('диплом');

            if ($images) {
                $image_count = 0; 

                foreach ($images as $image) {
                    $image_url = $image['url'];
                    $image_count++; 

                    if ($image_count > 5) {
                        $class = 'none';
                    } else {
                        $class = '';
                    }
                    ?>

                    <a data-fancybox="charter" class="person_education-charter <?php echo esc_attr($class); ?>"
                      href="<?php echo esc_url($image_url); ?>">
                        <img src="<?php echo esc_url($image_url); ?>" alt="charter">
                    </a>

                    <?php
                }
            }
            ?>
            </div>
            <div class="person_education-charters-box_3">

            </div>
          </div>
          <button class="person_education-charters-more">
            <span>Посмотреть еще</span>
            <svg
              width="17"
              height="8"
              viewBox="0 0 17 8"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M1 1L8.5 7L16 1"
                stroke="black"
                stroke-width="2"
                stroke-linecap="round"
                stroke-linejoin="round"
              />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      let hiddenCharters = document.querySelectorAll(
      ".person_education-charter.none"
      );
      let moreCharter = document.querySelector(
        ".person_education-charters-more"
      );
      if (hiddenCharters.length === 0) {
        moreCharter.classList.add("none");
      }
      moreCharter.addEventListener("click", () => {
        hiddenCharters.forEach((charter) => {
          charter.classList.remove("none");
        });
        moreCharter.classList.add("none");
      });


      const liElements = document.querySelectorAll(".person_education-info li");

      const svgCode = '<svg width="36" height="35" viewBox="0 0 36 35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M8 19V27.2759C13 32.2414 23 32.2414 28 27.2759V19" stroke="#D8160C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M35 14.6364V25M35 14.6364L18 6L1 14.6364L18 23.2727L35 14.6364Z" stroke="#2B3131" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';

      liElements.forEach((li) => {
        li.innerHTML = svgCode + li.innerHTML;
      });
    });

  </script>
	
<?php include 'footer.php'; ?>