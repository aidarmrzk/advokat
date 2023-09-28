<?php /* Template Name: Выиграть суд (new) */ ?>
<?php include 'header.php'; ?>
	
  <section class="win_case">
    
    <?php get_template_part('single-landing_banner-block'); ?>

    <div class="person_skill">
      <div class="container">
        <h3 class="opacity"><?php echo get_field('заголовок', 553); ?></h3>
        <div class="person_skill-block">
          <div class="person_skill-text">
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
                $victories = get_field('победы');

                if ($victories) {
                    foreach ($victories as $victory) {
                        $post_id = $victory->ID;
                        $title = get_the_title($post_id);
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
                    }
                }
                ?>
                </div>
              </div>
            </div>
          </div>
          <button class="opacity"><?php echo get_field('текст_кнопки', 553); ?></button>
        </div>
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
          const personSkillH3 = personSkill.querySelector("h3");
          const personSkillLies = personSkill.querySelectorAll(".person_skill-text li");
          const personSkillButtons = personSkill.querySelectorAll(".person_skill button");
          const personSkillVictory = personSkill.querySelector(".person_skill-victory");
      
          function show() {
            personSkillH3.classList.remove("opacity");
            setTimeout(() => {
              personSkillVictory.classList.remove("opacity");
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
                    }, 300 * index);
                  });
                  setTimeout(() => {
                    personSkillButtons.forEach((li, index) => {
                      setTimeout(() => {
                        li.classList.add("hovered");
                      }, 300 * index);
                    });
                    setTimeout(() => {
                      personSkillButtons.forEach((li, index) => {
                        setTimeout(() => {
                          li.classList.remove("hovered");
                        }, 300 * index);
                      });
                    }, 300);
                  }, 300);
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
              threshold: 0.4,
            };
      
          if (window.innerWidth <= 900) {
            options = {
              threshold: 0.2,
            };
          }
      
          const observer = new IntersectionObserver(callback, options);
          setTimeout(() => {
            observer.observe(personSkill);
          }, 1000)
        });
      </script>
    </div>

    <div class="person_do opacity">
      <div class="container">
        <p><?php echo get_field('начало_предложения', 553); ?><span> <?php echo get_field('середина_предложения', 553); ?> </span><?php echo get_field('окончание_предложения', 553); ?></p>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const personDo = document.querySelector(".person_do");
          const span = personDo.querySelector("span");
      
          function show() {
            setTimeout(() => {
              personDo.classList.remove("opacity");
              setTimeout(() => {
                span.classList.add("hovered");
                setTimeout(() => {
                  span.classList.remove("hovered");
                }, 300);
              }, 500);
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

    <div class="legal-review">
      <div class="container">
        <div class="maintenance_review-info">
          <?php
          $page_id = 95;
          $page_link = get_permalink($page_id);
          // Добавляем параметр к URL
          $page_link = add_query_arg('filter', 'win_case', $page_link);
          ?>
          <div class="person_skill-victory opacity">
            <div class="itc-slider" data-slider="itc-slider" data-autoplay="true" data-interval="3000">
              <div class="itc-slider-wrapper">
                <div class="itc-slider-items">
                  <?php
                  $reviews = get_field('отзывы');

                  if ($reviews) {
                      foreach ($reviews as $review) {
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
          <p><?php echo get_field('текст_отзыва'); ?></p>
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

    <div class="maintenance_task">
      <div class="container">
        <div class="maintenance_task-info">
          <?php
          $page_id = 178;
          $page_link = get_permalink($page_id);
          ?>
          <p class="opacity"><?php echo get_field('текст_специалиста'); ?> <a href="<?php echo esc_url($page_link); ?>"><?php echo get_field('текст_специалиста_окончание'); ?></a></p>
          <a href="<?php echo esc_url($page_link); ?>">
            <button class="more opacity">
              <span><?php echo get_field('кнопка_под_текстом', 634); ?></span>
              <svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L8.5 7L16 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </button>
          </a>
        </div>
        <div class="maintenance_task-do">
          <div class="maintenance_task-do-img opacity">
          <?php
            $selected_post_id = get_field('сотрудник', 395);

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

                  } else { ?>
                      <img src="<?php echo get_template_directory_uri(); ?>/img/landing/landing_photo.png" alt="landing_photo">
                      <?php
                  }
                  ?>
              </a>
              <?php
            } 
          ?>
          </div>
          <button class="opacity"><?php echo get_field('текст_кнопки', 395); ?></button>
        </div>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const task = document.querySelector(".maintenance_task");
          const taskP = task.querySelector("p");
          const taskImg = task.querySelector(".maintenance_task-do-img");
          const taskButtonMore = task.querySelector("button.more");
          const taskButtonImg = task.querySelector(".maintenance_task-do button");

          function show() {
            taskImg.classList.remove("opacity");
            setTimeout(() => {
              taskP.classList.remove("opacity");
              setTimeout(() => {
                taskButtonMore.classList.remove("opacity");
                setTimeout(() => {
                  taskButtonImg.classList.remove("opacity");
                  setTimeout(() => {
                    taskButtonImg.classList.add("hovered");
                    setTimeout(() => {
                      taskButtonImg.classList.remove("hovered");
                    }, 500);
                  }, 300);
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
              threshold: 0.3,
            };

          const observer = new IntersectionObserver(callback, options);
          setTimeout(() => {
            observer.observe(task);
          }, 1000)
        });
      </script>
    </div>

    <div class="maintenance_banner">
      <div class="container">
        <div class="maintenance_info">
          <p class="opacity"><span><?php echo get_field('текст_слайдера_начало'); ?></span> <?php echo get_field('текст_слайдера'); ?></p>
          <div class="maintenance_info-slider opacity">
            <div class="itc-slider" data-slider="itc-slider"  data-autoplay="true" data-interval="30000">
              <div class="itc-slider-wrapper">
                <div class="itc-slider-items">
                <?php
                $images = get_field('изображение_слайдера', 368);

                if ($images) {
                    foreach ($images as $image) {
                      ?>

                      <div class="itc-slider-item">
                        <img src="<?php echo $image['url']; ?>" alt="" />
                      </div>

                      <?php
                    }
                }
                ?>
                </div>
              </div>

              <button class="itc-slider-btn itc-slider-btn-prev none"></button>
              <button class="itc-slider-btn itc-slider-btn-next none"></button>

              <ol class="itc-slider-indicators">
              <?php
              $counter = 0;

              if ($images) {
                  foreach ($images as $image) {
                    ?>
                      <li class="itc-slider-indicator" data-slide-to="<?php echo $counter; ?>"></li>
                      <?php
                      $counter++;
                  }
              }
              ?>
              </ol>
              <script>
                document.addEventListener('DOMContentLoaded', () => {
                  let isDragging = false;
                  let startX = 0;
                  let startY = 0;

                  const sliderImages = document.querySelectorAll('.itc-slider-wrapper img');
                  const nextSliderButton = document.querySelector('.itc-slider-btn-next');

                  sliderImages.forEach((sliderImage) => {
                    sliderImage.addEventListener('mousedown', (event) => {
                      isDragging = false;
                      startX = event.clientX;
                      startY = event.clientY;
                    });

                    sliderImage.addEventListener('mousemove', (event) => {
                      if (Math.abs(event.clientX - startX) > 5 || Math.abs(event.clientY - startY) > 5) {
                        isDragging = true;
                      }
                    });

                    sliderImage.addEventListener('mouseup', () => {
                      if (!isDragging) {
                        nextSliderButton.click();
                      }
                    });
                  });
                });
              </script>
            </div>
          </div>
          <div class="maintenance_info-block">
            <div class="maintenance_info-block-title">
            <p class="opacity"><span><?php echo get_field('текст_слайдера_начало'); ?></span> <?php echo get_field('текст_слайдера'); ?></p>
            </div>
            <div class="maintenance_info-block-social">
              <?php
              $whatsapp_link = get_option('theme_whatsapp_link');
              ?>
              <a href="<?php echo esc_url($whatsapp_link); ?>" class="opacity whatsapp">
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
                <span><?php echo get_field('текст_кнопки_десктоп'); ?></span>
                <span><?php echo get_field('текст_кнопки_планшет'); ?></span>
                <span><?php echo get_field('текст_кнопки_мобилка'); ?></span>
              </a>
              <p class="opacity"><?php echo get_field('оффер', 368); ?></p>
            </div>
          </div>
        </div>
      </div>
      <script>   
        document.addEventListener("DOMContentLoaded", function() {
          const maintenanceBanner = document.querySelector(".maintenance_banner");
          const maintenanceBannerSlider = maintenanceBanner.querySelector(
            ".maintenance_info-slider"
          );
          const maintenanceBannerP = maintenanceBanner.querySelectorAll("p");
          const maintenanceBannerButton = maintenanceBanner.querySelector("a");
      
          function show() {
            maintenanceBannerSlider.classList.remove("opacity");
            setTimeout(() => {
              maintenanceBannerP.forEach((li, index) => {
                setTimeout(() => {
                  li.classList.remove("opacity");
                }, 300 * index);
              });
              setTimeout(() => {
                maintenanceBannerButton.classList.remove("opacity");
                setTimeout(() => {
                  maintenanceBannerButton.classList.add("hovered");
                  setTimeout(() => {
                    maintenanceBannerButton.classList.remove("hovered");
                  }, 300);
                }, 1000);
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
              threshold: 0.3,
            };
      
          const observer = new IntersectionObserver(callback, options);
          setTimeout(() => {
            observer.observe(maintenanceBanner);
          }, 1000)
        });
      </script>
    </div>

    <div class="maintenance_whatsapp">
      <div class="container">
        <p><?php echo get_field('текст_блока_telegram'); ?></p>
        <script>
          document.querySelectorAll('.maintenance_whatsapp p').forEach((li) => {
            li.classList.add("opacity");
          });
        </script>
        <?php
        $telegram_link = get_option('theme_telegram_link');
        ?>
        <a href="<?php echo esc_url($telegram_link); ?>" class="telegram opacity">
          <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.5 0.5668L16.4946 15.3339C16.4946 15.3339 16.0741 16.3578 14.9189 15.8667L7.98458 10.6848L7.95242 10.6695C8.88909 9.84978 16.1524 3.48486 16.4698 3.19635C16.9613 2.74952 16.6562 2.48351 16.0856 2.82104L5.35679 9.46162L1.21764 8.10425C1.21764 8.10425 0.566257 7.87843 0.503593 7.38739C0.440104 6.89556 1.23908 6.62955 1.23908 6.62955L18.1131 0.177833C18.1131 0.177833 19.5 -0.416066 19.5 0.5668Z" fill="white"/>
          </svg>
          <span><?php echo get_field('текст_кнопки_telegram_десктоп'); ?></span>
          <span><?php echo get_field('текст_кнопки_telegram_планшет'); ?></span>
          <span><?php echo get_field('текст_кнопки_telegram_мобилка'); ?></span>
        </a>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const whatsApp = document.querySelector(".maintenance_whatsapp");
          const whatsAppPs = whatsApp.querySelectorAll("p");
          const whatsAppA = whatsApp.querySelector("a");
      
          function show() {
            whatsAppPs.forEach((li, index) => {
              setTimeout(() => {
                li.classList.remove("opacity");
              }, 300 * index);
            });
            setTimeout(() => {
              whatsAppA.classList.remove("opacity");
              setTimeout(() => {
                whatsAppA.classList.add("hovered");
                setTimeout(() => {
                  whatsAppA.classList.remove("hovered");
                }, 500);
              }, 500);
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
      
          const observer = new IntersectionObserver(callback, options);
          setTimeout(() => {
            observer.observe(whatsApp);
          }, 1000)
        });
      </script>
    </div>

    <div class="landing-numbers">
      <div class="container">
        <div class="landing-numbers-info">
          <h3 class="opacity"><?php echo get_field('заголовок', 431); ?></h3>
          <div class="landing-numbers-info-block">
            <div class="landing-numbers-info-block-box opacity">
              <span><?php echo get_field('первая_цифра_текст', 431); ?></span>
              <span class="number-one"><?php echo get_field('первая_цифра', 431); ?></span>
              <span><?php echo get_field('первая_цифра_окончание', 431); ?></span>
            </div>
            <div class="landing-numbers-info-block-box opacity">
              <span><?php echo get_field('вторая_цифра_текст', 431); ?></span>
              <span class="number-two"><?php echo get_field('вторая_цифра', 431); ?></span>
              <span><?php echo get_field('вторая_цифра_окончание', 431); ?></span>
            </div>
            <div class="landing-numbers-info-block-box opacity">
              <span><?php echo get_field('третья_цифра_текст', 431); ?></span>
              <span class="number-three"><?php echo get_field('третья_цифра', 431); ?></span>
              <span><?php echo get_field('третья_цифра_окончание', 431); ?></span>
            </div>
          </div>
          <button class="opacity"><?php echo get_field('текст_кнопки', 431); ?></button>
        </div>
        <div class="landing-numbers-img opacity">
          <?php
            $selected_post_id = get_field('сотрудник', 431);

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
                      
                      <span><?php echo $person_name . ' ' . $person_lastname; ?>,<br><?php echo $person_post; ?> К2</span>

                      <?php

                  } else { ?>

                      <img src="<?php echo get_template_directory_uri(); ?>/img/landing/landing_photo.png" alt="landing_photo">
                      <span>Николай Кудинов,<br> юрист К2</span>
                      
                      <?php
                  }
                  ?>
              </a>
              <?php
            } 
          ?>
        </div>
        <button class="opacity"><?php echo get_field('текст_кнопки', 431); ?></button>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const numbers = document.querySelector(".landing-numbers");
          const numbersH3 = numbers.querySelector("h3");
          const numbersBoxes = numbers.querySelectorAll(
            ".landing-numbers-info-block-box"
          );
          const numbersButtons = numbers.querySelectorAll("button");
          const numbersImg = numbers.querySelector(".landing-numbers-img");
      
          let initialValue = 1;
      
          const numberOne = numbers.querySelector(".number-one");
          let targetValueOne = parseInt(numberOne.textContent);
          numberOne.textContent = initialValue;
      
          const numberTwo = numbers.querySelector(".number-two");
          let targetValueTwo = parseInt(numberTwo.textContent);
          numberTwo.textContent = initialValue;
      
          const numberThree = numbers.querySelector(".number-three");
          let targetValueThree = parseInt(numberThree.textContent);
          numberThree.textContent = initialValue;
      
          
      
          function show() {
            numbersH3.classList.remove("opacity");
            setTimeout(() => {
              numbersBoxes.forEach((li, index) => {
                setTimeout(() => {
                  li.classList.remove("opacity");
                }, 200 * index);
              });
              animateCounter(numberOne, initialValue, targetValueOne, 100);
              setTimeout(() => {
                animateCounter(numberTwo, initialValue, targetValueTwo, 80);
                setTimeout(() => {
                  animateCounter(
                    numberThree,
                    initialValue,
                    targetValueThree,
                    200
                  );
                }, 200);
              }, 200);
              setTimeout(() => {
                numbersImg.classList.remove("opacity");
                setTimeout(() => {
                  numbersButtons.forEach((button, index) => {
                    setTimeout(() => {
                      button.classList.remove("opacity");
                    }, 200 * index);
                  });
                  setTimeout(() => {
                    numbersButtons.forEach((button, index) => {
                      setTimeout(() => {
                        button.classList.add("hovered");
                      }, 300 * index);
                    });
                    setTimeout(() => {
                      numbersButtons.forEach((button, index) => {
                        setTimeout(() => {
                          button.classList.remove("hovered");
                        }, 300 * index);
                      });
                    }, 300);
                  }, 500);
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
              threshold: 0.4,
            };
      
          if (window.innerWidth <= 900) {
            options = {
              threshold: 0.2,
            };
          }
      
          const observer = new IntersectionObserver(callback, options);
          setTimeout(() => {
            observer.observe(numbers);
          }, 1000)
        });
      </script>
    </div>

    <div class="maintenance_why">
      <div class="container">
        <h3 class="opacity"><?php echo get_field('заголовок_аутсорсинга'); ?></h3>
        <div class="maintenance_why-text opacity">
          <div class="short-text"><?php echo get_field('текст_аутсорсинга'); ?></div>
          <span>Читать подробнее...</span>
        </div>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const maintenanceWhy = document.querySelector(".maintenance_why");
          const whyH3 = maintenanceWhy.querySelector("h3");
          const whyText = maintenanceWhy.querySelector(".maintenance_why-text");
      
          function show() {
            whyH3.classList.remove("opacity");
            setTimeout(() => {
              whyText.classList.remove("opacity");
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
              threshold: 0.2,
            };
          }
      
          const observer = new IntersectionObserver(callback, options);
          setTimeout(() => {
            observer.observe(maintenanceWhy);
          }, 1000)
        });
      </script>
      <script>
          const textElement = document.querySelector('.maintenance_why .maintenance_why-text div');
          const toggleButton = document.querySelector('.maintenance_why span');
          
          function updateText() {
              if (textElement.classList.contains('short-text')) {
                  textElement.classList.remove('short-text');
                  toggleButton.textContent = 'Скрыть';
              } else {
                  textElement.classList.add('short-text');
                  toggleButton.textContent = 'Читать подробнее...';
              }
          }

          toggleButton.addEventListener('click', updateText);
      </script>
    </div>

    <div class="about-company_map">
      <div class="container">
        <div class="about-company_map-info">
          <h3 class="opacity"><?php echo get_field('заголовок_карты'); ?></h3>
          <?php echo get_field('текст_карты'); ?>
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

<?php include 'footer.php'; ?>