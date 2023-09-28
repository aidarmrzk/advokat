<div class="person_do opacity">
  <div class="container">
    <p><?php echo get_field('начало_предложения', 553); ?><span> <?php echo get_field('середина_предложения', 553); ?> </span><?php echo get_field('окончание_предложения', 553); ?></p>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const personDo = document.querySelector(".person_do");
  
      function show() {
        setTimeout(() => {
          personDo.classList.remove("opacity");
        }, 200);
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
          threshold: 1,
        };
  
      const observer = new IntersectionObserver(callback, options);
      setTimeout(() => {
        observer.observe(personDo);
      }, 1000)
    });
  </script>
</div>

<div class="person_skill">
  <div class="container">
    <div class="person_skill-text">
      <h3 class="opacity"><?php echo get_field('заголовок', 553); ?></h3>
      <?php echo get_field('текст_слайдера', 553); ?>
      <button class="opacity"><?php echo get_field('текст_кнопки', 553); ?></button>
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
    <button class="opacity"><?php echo get_field('текст_кнопки', 553); ?></button>
  </div>
  <script>
    const personLies = document.querySelectorAll(".person_skill-text li");
    const svgCode = '<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32.0834 16.1583V17.5C32.0816 20.6448 31.0633 23.7047 29.1804 26.2235C27.2974 28.7423 24.6507 30.5849 21.635 31.4765C18.6193 32.3682 15.3961 32.2611 12.4462 31.1713C9.49628 30.0814 6.9777 28.0672 5.26607 25.4291C3.55443 22.7909 2.74144 19.6701 2.94836 16.5321C3.15528 13.3942 4.37101 10.4071 6.41424 8.01657C8.45747 5.62599 11.2187 3.95994 14.2862 3.26689C17.3537 2.57383 20.563 2.89091 23.4355 4.17084" stroke="#2B3131" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/><path d="M32.0833 5.83331L17.5 20.4312L13.125 16.0562" stroke="#D8160C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>'
    personLies.forEach((li) => {
      li.innerHTML = svgCode + li.innerHTML;
      li.classList.add("opacity");
    });
  
    document.addEventListener("DOMContentLoaded", function() {
      const personSkill = document.querySelector(".person_skill");
      const personSkillH3 = personSkill.querySelector(".person_skill-text h3");
      const personSkillLies = personSkill.querySelectorAll(".person_skill-text li");
      const personSkillButtons = personSkill.querySelectorAll(".person_skill button");
      const personSkillVictory = personSkill.querySelector(".person_skill-victory");
  
      function show() {
        personSkillH3.classList.remove("opacity");
        setTimeout(() => {
          personSkillLies.forEach((li, index) => {
            setTimeout(() => {
              li.classList.remove("opacity");
            }, 200 * index);
          });
          setTimeout(() => {
            personSkillButtons.forEach((li, index) => {
              setTimeout(() => {
                li.classList.remove("opacity");
              }, 200 * index);
            });
            setTimeout(() => {
              personSkillVictory.classList.remove("opacity");
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
        observer.observe(personSkill);
      }, 1000)
    });
  </script>
</div>
