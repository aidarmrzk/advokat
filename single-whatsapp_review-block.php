<div class="maintenance_whatsapp">
  <div class="container">
    <p><?php echo get_field('текст_whatsapp', 414); ?></p>
    <script>
      document.querySelectorAll('.maintenance_whatsapp p').forEach((li) => {
        li.classList.add("opacity");
      });
    </script>
    <?php
    $whatsapp_link = get_option('theme_whatsapp_link');
    $whatsapp_mobile_link = get_option('theme_whatsapp_mobile_link');
    ?>
    <a href="<?php echo esc_url($whatsapp_link); ?>" class="whatsapp">
      <svg
        width="26"
        height="25"
        viewBox="0 0 26 25"
        fill=""
        xmlns="http://www.w3.org/2000/svg"
        >
        <path
          d="M21.4878 4C19.23 1.75 16.2195 0.5 13.0418 0.5C6.43554 0.5 1.08362 5.83333 1.08362 12.4167C1.08362 14.5 1.66899 16.5833 2.67247 18.3333L1 24.5L7.3554 22.8333C9.1115 23.75 11.0348 24.25 13.0418 24.25C19.6481 24.25 25 18.9167 25 12.3333C24.9164 9.25 23.7456 6.25 21.4878 4ZM18.8118 16.6667C18.561 17.3333 17.3902 18 16.8049 18.0833C16.3031 18.1667 15.6341 18.1667 14.9652 18C14.547 17.8333 13.9617 17.6667 13.2927 17.3333C10.2822 16.0833 8.35889 13.0833 8.19164 12.8333C8.02439 12.6667 6.93728 11.25 6.93728 9.75C6.93728 8.25 7.68989 7.58333 7.94077 7.25C8.19164 6.91667 8.52613 6.91667 8.777 6.91667C8.94425 6.91667 9.19512 6.91667 9.36237 6.91667C9.52961 6.91667 9.78049 6.83333 10.0314 7.41667C10.2822 8 10.8676 9.5 10.9512 9.58333C11.0348 9.75 11.0348 9.91667 10.9512 10.0833C10.8676 10.25 10.784 10.4167 10.6167 10.5833C10.4495 10.75 10.2822 11 10.1986 11.0833C10.0314 11.25 9.86411 11.4167 10.0314 11.6667C10.1986 12 10.784 12.9167 11.7038 13.75C12.8746 14.75 13.7944 15.0833 14.1289 15.25C14.4634 15.4167 14.6307 15.3333 14.7979 15.1667C14.9652 15 15.5505 14.3333 15.7178 14C15.885 13.6667 16.1359 13.75 16.3868 13.8333C16.6376 13.9167 18.1429 14.6667 18.3937 14.8333C18.7282 15 18.8955 15.0833 18.9791 15.1667C19.0627 15.4167 19.0627 16 18.8118 16.6667Z"
          fill=""
        />
      </svg>
      <span><?php echo get_field('текст_кнопки_десктоп', 414); ?></span>
      <span><?php echo get_field('текст_кнопки_планшет', 414); ?></span>
      <span><?php echo get_field('текст_кнопки_мобилка', 414); ?></span>
    </a>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const whatsApp = document.querySelector(".maintenance_whatsapp");
      const whatsAppPs = whatsApp.querySelectorAll("p");
      const whatsAppAs = whatsApp.querySelectorAll("a");
  
      function show() {
        whatsAppPs.forEach((li, index) => {
          setTimeout(() => {
            li.classList.remove("opacity");
          }, 200 * index);
        });
        setTimeout(() => {
          whatsAppAs.forEach((li, index) => {
            setTimeout(() => {
              li.classList.remove("opacity");
            }, 200 * index);
          });
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
          threshold: 1,
        };
  
      const observer = new IntersectionObserver(callback, options);
      setTimeout(() => {
        observer.observe(whatsApp);
      }, 1000)
    });
  </script>
</div>

<?php
if (get_the_ID() == 517) {
  get_template_part('single-utility-block'); 
}
?>

<div class="maintenance_review">
  <div class="container">
    <div class="maintenance_review-info">
      <p><?php echo get_field('текст_отзыва', 414); ?></p>
      <script>
        document.querySelectorAll('.maintenance_review-info p').forEach((li) => {
          li.classList.add("opacity");
        });
      </script>
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
                  'posts_per_page' => 4,
              );

              $custom_query = new WP_Query($args);

              if ($custom_query->have_posts()) :
                  while ($custom_query->have_posts()) : $custom_query->the_post();
                      $post_id = get_the_ID();
                      $img_review = get_the_post_thumbnail($post_id);;
                      ?>
                      <div class="itc-slider-item">
                        <a href="<?php echo esc_url($page_link); ?>">
                          <div class="person_skill-victory-card">
                            <?php echo $img_review; ?>
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
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const review = document.querySelector(".maintenance_review");
      const reviewPs = review.querySelectorAll("p");
      const reviewSlider = review.querySelector(".person_skill-victory");
  
      function show() {
        reviewPs.forEach((li, index) => {
          setTimeout(() => {
            li.classList.remove("opacity");
          }, 200 * index);
        });
        setTimeout(() => {
          reviewSlider.classList.remove("opacity");
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
          threshold: 1,
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