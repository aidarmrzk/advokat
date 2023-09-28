<div class="address">
  <div class="container">
    <h3 class="opacity">Готовы принять Вас лично в одном из офисов</h3>
    <div class="address_block">
      <?php
        $args = array(
          'post_type' => 'city',
          'meta_query' => array(
            array(
              'key' => 'наличие_офиса', 
              'value' => true,
              'compare' => '='
              )
              )
            );
            
          $query = new WP_Query($args);
          
          if ($query->have_posts()) {
            while ($query->have_posts()) {
              $query->the_post();
              $photo = get_field('фото_офиса');
              $image = get_field('герб_города');
              ?>

              <div class="address_block-box opacity">
                <img src="<?php echo $photo['url']; ?>" alt="фото_офиса">
                <div class="address_block-box-info">
                  <div class="address_block-box-info-flex">
                    <img src="<?php echo $image['url']; ?>" alt="герб">
                    <div class="address_block-box-info-flex-text">
                      <p><?php echo get_field('полный_адрес'); ?>, оф. <?php echo get_field('номер_офиса'); ?></p>
                      <span><?php echo get_field('номер_телефона'); ?></span>
                    </div>
                  </div>
                  <a href="<?php echo get_field('ссылка_яндекс'); ?>">
                    <svg width="37" height="60" viewBox="0 0 37 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M14.8604 60L19.1063 36.5385L26.2333 27.4912C29.2661 22.5842 35.5743 14.4877 36.5448 21.3575C37.5153 28.2273 22.4929 49.9816 14.8604 60Z" fill="#C5141C"/>
                      <ellipse cx="18.5" cy="18.7079" rx="18.5" ry="18.7079" fill="#EE0000"/>
                      <ellipse cx="18.4998" cy="18.7078" rx="6.97541" ry="7.05378" fill="white"/>
                    </svg>
                  </a>
                </div>
              </div>

          <?php
          }
          wp_reset_postdata();
        }
      ?>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const addressContainer = document.querySelector(".address .container");
      const addressContainerH3 = addressContainer.querySelector("h3");
      const addressContainerBoxes = addressContainer.querySelectorAll(".address_block-box");
  
      function show() {
        setTimeout(() => {
          addressContainerH3.classList.remove("opacity");
          setTimeout(() => {
            addressContainerBoxes.forEach((box, index) => {
              setTimeout(() => {
                box.classList.remove("opacity");
              }, 200 * index);
            });
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
          threshold: 0.1,
        };
  
      const observer = new IntersectionObserver(callback, options);
      setTimeout(() => {
        observer.observe(addressContainer);
      }, 1000)
    });
  </script>
</div>