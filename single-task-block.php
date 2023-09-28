<div class="maintenance_task">
  <div class="container">
    <div class="maintenance_task-info">
      <h3 class="opacity"><?php echo get_field('заголовок', 395); ?></h3>
      <?php echo get_field('основной_текст', 395); ?>
    </div>
    <div class="maintenance_task-do">
      <div class="maintenance_task-do-img opacity">
      <?php
        $selected_post_id = get_field('сотрудник', 395);

        if ($selected_post_id) {
          ?>
          <a href="<?php echo get_permalink($selected_post_id); ?>"  >
              <?php
              $selected_post = get_post($selected_post_id);

              $person_photo_link = get_field('фото_оффера', $selected_post_id);
              $person_name = get_field('имя', $selected_post_id);
              $person_lastname = get_field('фамилия', $selected_post_id);
              $person_post = get_field('должность', $selected_post_id);

              if ($person_photo_link && $person_name && $person_lastname && $person_post) { 
                  ?>

                  <img src="<?php echo esc_url($person_photo_link); ?>" alt="landing_photo">
                  
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
      <button class="opacity"><?php echo get_field('текст_кнопки', 395); ?></button>
    </div>
  </div>
  <script>
    const taskLies = document.querySelectorAll(".maintenance_task-info li");
    taskLies.forEach((li) => {
        const div = document.createElement("div");
        li.insertBefore(div, li.firstChild);
        li.classList.add("opacity");
    });

    document.addEventListener("DOMContentLoaded", function() {
      const task = document.querySelector(".maintenance_task");
      const taskH3 = task.querySelector("h3");
      const taskLies = task.querySelectorAll("li");
      const taskImg = task.querySelector(".maintenance_task-do-img");
      const taskButton = task.querySelector("button");

      function show() {
        taskH3.classList.remove("opacity");
        setTimeout(() => {
          taskLies.forEach((li, index) => {
            setTimeout(() => {
              li.classList.remove("opacity");
            }, 150 * index);
          });
          setTimeout(() => {
            taskImg.classList.remove("opacity");
            setTimeout(() => {
              taskButton.classList.remove("opacity");
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

<div class="landing-search">
  <div class="container">
    <h4 class="opacity"><?php echo get_field('заголовок_поиска_услуги', 395); ?></h4>
    <a href="<?php echo get_field('ссылка_для_поиска_услуги', 395); ?>" >
      <div class="opacity"><?php echo get_field('текст_поиска_услуги', 395); ?></div>
    </a>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const landingSearch = document.querySelector(".landing-search");
      const landingSearchH4 = landingSearch.querySelector("h4");
      const landingSearchDiv = landingSearch.querySelector(".container div");
  
      function show() {
        landingSearchH4.classList.remove("opacity");
        setTimeout(() => {
          landingSearchDiv.classList.remove("opacity");
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
        observer.observe(landingSearch);
      }, 1000)
    });
  </script>
</div>