<div class="about-company_map">
  <div class="container">
    <div class="about-company_map-info">
      <h3 class="opacity"><?php echo get_field('заголовок', 383); ?></h3>
      <?php echo get_field('основной_текст', 383); ?>
      <h4 class="opacity"><?php echo get_field('последний_абзац_начало', 383); ?> <span><a href="<?php echo get_field('ссылка_на_страницу', 383); ?>"><?php echo get_field('последний_абзац_середина', 383); ?></a></span><?php echo get_field('последний_абзац_окончание', 383); ?></h4>
    </div>
    <div class="about-company_map-img opacity">
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
    </div>
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