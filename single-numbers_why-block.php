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
            numbersButtons.forEach((button, index) => {
              setTimeout(() => {
                button.classList.remove("opacity");
              }, 200 * index);
            });
            setTimeout(() => {
              numbersImg.classList.remove("opacity");
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
    <h3 class="opacity"><?php echo get_field('заголовок_аутсорсинга', 431); ?></h3>
    <div class="maintenance_why-text opacity">
      <p class="short-text"><?php echo get_field('текст_аутсорсинга', 431); ?></p>
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
      const textElement = document.querySelector('.maintenance_why p');
      const toggleButton = document.querySelector('.maintenance_why span');

      const originalText = textElement.textContent;
      let maxLength = 500;

      if ((window.innerWidth <= 768)) {
        maxLength = 300;
      }
      
      function updateText() {
          if (textElement.classList.contains('short-text')) {
              if (originalText.length > maxLength) {
                  const shortText = originalText.slice(0, maxLength) + '...';
                  textElement.textContent = shortText;
              }
              textElement.classList.remove('short-text');
              toggleButton.textContent = 'Читать подробнее...';
          } else {
              textElement.textContent = originalText;
              textElement.classList.add('short-text');
              toggleButton.textContent = 'Скрыть';
          }
      }

      toggleButton.addEventListener('click', updateText);

      updateText();
  </script>
</div>