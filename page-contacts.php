<?php /* Template Name: Контакты */ ?>
<?php include 'header.php'; ?>
	
  <section class="contacts">

    <div class="maintenance_breadcrumbs">
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
          <span><?php the_title(); ?></span>
        </div>
      </div>
    </div>
    
    <div class="about-company_map">
      <div class="container">
        <div class="about-company_map-info">
          <h3 class="opacity"><?php echo get_field('заголовок_карты', 172); ?></h3>
          <?php echo get_field('текст_карты', 172); ?>
          <h4 class="opacity"><?php echo get_field('нижний_текст_карты', 172); ?></h4>
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
        <h4 class="opacity"><?php echo get_field('нижний_текст_карты', 172); ?></h4>
      </div>
    <script>
      const mapLiElements = document.querySelectorAll(".about-company_map-info li");
      mapLiElements.forEach((li) => {
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
    <?php get_template_part('single-address-block'); ?>

  </section>

<?php include 'footer.php'; ?>