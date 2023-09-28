<?php /* Template Name: Юридическое сопровождение(новое) */ ?>
<?php include 'header.php'; ?>
	
  <section class="legal_support">


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
        $page_id = 178;
        $page_link = get_permalink($page_id);
        ?>
        <span><a href="<?php echo esc_url($page_link); ?>">Услуги</a></span>
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

    <div class="legal-business">
      <div class="container">
        <h3 class="opacity"><?php echo get_field('заголовок_баннера_начало'); ?> <span class="landing_banner-location hide">в&nbsp;г.<span class="landing_banner-city"></span></span> <?php echo get_field('заголовок_баннера_окончание'); ?></h3>
        <div class="block-steps opacity">
          <button class="mobile opacity">
            <span><?php echo get_field('кнопка_баннера_декстоп'); ?></span>
            <span><?php echo get_field('кнопка_баннера_мобилка'); ?></span>
          </button>
          <div class="block-steps_box">
            <div id="first-step-box" class="block-steps_box-step " data-tooltip="Смотреть тарифы">
              <p class=""><?php echo get_field('первый_шаг_начало'); ?> <span><?php echo get_field('первый_шаг_красное'); ?> <span class="counter">50</span>%</span> <?php echo get_field('первый_шаг_окончание'); ?></p>
              <div class="clue none">Смотреть тарифы</div>
            </div>
          </div>
          <div class="block-steps_box">
            <div id="second-step-box" class="block-steps_box-step" data-tooltip="Посмотреть, как мы будем работать">
              <p class=""><?php echo get_field('второй_шаг'); ?></p>
              <div class="clue none">Посмотреть, как мы будем работать</div>
            </div>
          </div>
          <div class="block-steps_box">
            <div id="third-step-box" class="block-steps_box-step" data-tooltip="Смотреть отзывы">
              <p class=""><?php echo get_field('третий_шаг_вариант_1'); ?></p>
              <div class="clue none">Смотреть отзывы</div>
            </div>
            <div id="fourth-step-box" class="block-steps_box-step">
              <p class=""><?php echo get_field('третий_шаг_вариант_2'); ?></p>
            </div>
          </div>
          <div class="block-steps_box">
            <div class="block-steps_box-step continue">
              <p class=""><?php echo get_field('четвертый_шаг_вариант_1'); ?></p>
              <svg class="opacity" width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.0248 22C17.5477 22 22.0248 17.5228 22.0248 12C22.0248 6.47715 17.5477 2 12.0248 2C6.50199 2 2.02484 6.47715 2.02484 12C2.02484 17.5228 6.50199 22 12.0248 22Z" stroke="#48C95F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.02484 14C8.02484 14 9.52484 16 12.0248 16C14.5248 16 16.0248 14 16.0248 14" stroke="#48C95F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9.02484 9H9.03484" stroke="#48C95F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.0248 9H15.0348" stroke="#48C95F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <div class="block-steps_box-step cancel">
              <p class=""><?php echo get_field('четвертый_шаг_вариант_2-декстоп'); ?></p>
              <p class=""><?php echo get_field('четвертый_шаг_вариант_2-мобилка'); ?></p>
              <svg class="" width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12.0248 22.5564C17.5477 22.5564 22.0248 18.0792 22.0248 12.5564C22.0248 7.03355 17.5477 2.5564 12.0248 2.5564C6.50199 2.5564 2.02484 7.03355 2.02484 12.5564C2.02484 18.0792 6.50199 22.5564 12.0248 22.5564Z" stroke="#D8160C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8.02484 16.5564C8.02484 16.5564 9.52484 14.5564 12.0248 14.5564C14.5248 14.5564 16.0248 16.5564 16.0248 16.5564" stroke="#D8160C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M9.02484 9.5564H9.03484" stroke="#D8160C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15.0248 9.5564H15.0348" stroke="#D8160C" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
          </div>
          <button class="desktop opacity">
            <p>
              <span>
                <?php echo get_field('кнопка_баннера_декстоп'); ?>
              </span>
            </p>
            <div class="desktop-button-form" data-tooltip="Заказать звонок (e-mail)">
              <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M25.9992 19.466V23.38C26.0007 23.7434 25.9261 24.1031 25.7802 24.436C25.6344 24.7689 25.4205 25.0678 25.1522 25.3134C24.8839 25.559 24.5672 25.7461 24.2223 25.8625C23.8774 25.9789 23.5119 26.0221 23.1493 25.9894C19.1266 25.5532 15.2626 24.1813 11.8676 21.984C8.70898 19.9809 6.03104 17.3083 4.02394 14.1559C1.81462 10.7523 0.439714 6.8771 0.0106108 2.84434C-0.0220573 2.48355 0.0209054 2.11992 0.136763 1.77661C0.252621 1.43331 0.438835 1.11783 0.68355 0.850285C0.928265 0.582737 1.22612 0.368973 1.55815 0.222604C1.89018 0.0762346 2.24911 0.00046764 2.61208 0.000126492H6.5339C7.16833 -0.00610525 7.78338 0.218111 8.26442 0.630983C8.74546 1.04386 9.05965 1.61721 9.14845 2.24418C9.31398 3.49676 9.62096 4.72664 10.0635 5.91034C10.2394 6.37732 10.2775 6.88483 10.1732 7.37273C10.069 7.86064 9.82674 8.30849 9.47527 8.66322L7.81503 10.3202C9.67601 13.5865 12.3858 16.291 15.6587 18.1483L17.3189 16.4913C17.6743 16.1405 18.1231 15.8988 18.612 15.7947C19.1008 15.6907 19.6093 15.7287 20.0772 15.9042C21.2633 16.3459 22.4956 16.6523 23.7507 16.8175C24.3857 16.9069 24.9657 17.2261 25.3802 17.7145C25.7948 18.2028 26.0151 18.8261 25.9992 19.466Z" fill="#D8160C"/>
              </svg>
            </div>
            <div class="desktop-button whatsapp" data-tooltip="Написать в WhatsApp">
              <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.9085 4.07812C20.439 1.61719 17.1463 0.25 13.6707 0.25C6.44512 0.25 0.591462 6.08333 0.591462 13.2839C0.591462 15.5625 1.23171 17.8411 2.32927 19.7552L0.5 26.5L7.45122 24.6771C9.37195 25.6797 11.4756 26.2266 13.6707 26.2266C20.8963 26.2266 26.75 20.3932 26.75 13.1927C26.6585 9.82031 25.378 6.53906 22.9085 4.07812ZM19.9817 17.9323C19.7073 18.6615 18.4268 19.3906 17.7866 19.4818C17.2378 19.5729 16.5061 19.5729 15.7744 19.3906C15.3171 19.2083 14.6768 19.026 13.9451 18.6615C10.6524 17.2943 8.54878 14.013 8.36585 13.7396C8.18293 13.5573 6.9939 12.0078 6.9939 10.3672C6.9939 8.72656 7.81707 7.99739 8.09146 7.63281C8.36585 7.26823 8.7317 7.26823 9.00609 7.26823C9.18902 7.26823 9.46341 7.26823 9.64634 7.26823C9.82926 7.26823 10.1037 7.17708 10.378 7.8151C10.6524 8.45312 11.2927 10.0937 11.3841 10.1849C11.4756 10.3672 11.4756 10.5495 11.3841 10.7318C11.2927 10.9141 11.2012 11.0964 11.0183 11.2786C10.8354 11.4609 10.6524 11.7344 10.561 11.8255C10.378 12.0078 10.1951 12.1901 10.378 12.4635C10.561 12.8281 11.2012 13.8307 12.2073 14.7422C13.4878 15.8359 14.4939 16.2005 14.8598 16.3828C15.2256 16.5651 15.4085 16.474 15.5915 16.2917C15.7744 16.1094 16.4146 15.3802 16.5976 15.0156C16.7805 14.651 17.0549 14.7422 17.3293 14.8333C17.6037 14.9245 19.25 15.7448 19.5244 15.9271C19.8902 16.1094 20.0732 16.2005 20.1646 16.2917C20.2561 16.5651 20.2561 17.2031 19.9817 17.9323Z" fill="white"/>
              </svg>
            </div>
            <div class="desktop-button telegram" data-tooltip="Написать в Telegram">
              <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M24 0.752781L20.2432 20.3653C20.2432 20.3653 19.7176 21.7251 18.2736 21.073L9.60572 14.1907L9.56553 14.1704C10.7364 13.0817 19.8155 4.62833 20.2123 4.24515C20.8266 3.6517 20.4452 3.29841 19.732 3.7467L6.32099 12.5662L1.14705 10.7635C1.14705 10.7635 0.332822 10.4635 0.254491 9.81138C0.17513 9.15816 1.17384 8.80487 1.17384 8.80487L22.2664 0.236184C22.2664 0.236184 24 -0.552587 24 0.752781Z" fill="#D8160C"/>
              </svg>
            </div>
            <div class="desktop-button viber" data-tooltip="Написать в Viber">
              <svg width="27" height="29" viewBox="0 0 27 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.8174 0.932392C16.053 0.0225359 11.1054 0.0225359 6.34097 0.932392C4.23364 1.38732 1.57657 3.93492 1.11846 5.9366C0.293848 9.84898 0.293848 13.8524 1.11846 17.7647C1.66819 19.7664 4.32526 22.314 6.34097 22.7689C6.43259 22.7689 6.52421 22.8599 6.52421 22.9509V28.683C6.52421 28.956 6.89071 29.1379 7.07395 28.865L9.82264 26.0444C9.82264 26.0444 12.0216 23.7698 12.3881 23.4058C12.3881 23.4058 12.4797 23.3149 12.5713 23.3149C15.32 23.4058 18.1603 23.1329 20.909 22.678C23.0164 22.223 25.6734 19.6754 26.1315 17.6737C26.9561 13.7614 26.9561 9.758 26.1315 5.84562C25.5818 3.93492 22.9247 1.38732 20.8174 0.932392ZM20.909 18.0377C20.4509 18.9475 19.9012 19.6754 18.9849 20.1304C18.7101 20.2213 18.4352 20.3123 18.1603 20.4033C17.7938 20.3123 17.519 20.2213 17.2441 20.1304C14.3122 18.9475 11.5635 17.3098 9.36453 14.9442C8.17343 13.5794 7.16557 12.0326 6.34097 10.3949C5.97447 9.57603 5.60798 8.84814 5.33311 8.02927C5.05824 7.30139 5.51636 6.5735 5.97447 6.02759C6.43259 5.48167 6.98233 5.11773 7.62369 4.84477C8.0818 4.57182 8.53992 4.75379 8.90641 5.11773C9.6394 6.02759 10.3724 6.93744 10.9221 7.93829C11.2886 8.57518 11.197 9.30307 10.5556 9.758C10.3724 9.84898 10.2808 9.93997 10.0975 10.1219C10.0059 10.2129 9.82264 10.3039 9.73102 10.4859C9.54777 10.7588 9.54777 11.0318 9.63939 11.3048C10.3724 13.3974 11.7467 15.0352 13.8541 15.945C14.2205 16.127 14.4954 16.218 14.9535 16.218C15.5949 16.127 15.8698 15.3991 16.3279 15.0352C16.786 14.6712 17.3357 14.6712 17.8855 14.9442C18.3436 15.2171 18.8017 15.5811 19.3514 15.945C19.8095 16.309 20.2677 16.5819 20.7258 16.9459C21.0006 17.1278 21.0923 17.5828 20.909 18.0377ZM17.0609 11.2138C16.8776 11.2138 16.9692 11.2138 17.0609 11.2138C16.6944 11.2138 16.6027 11.0318 16.5111 10.7588C16.5111 10.5769 16.5111 10.3039 16.4195 10.1219C16.3279 9.758 16.1446 9.39406 15.7781 9.1211C15.5949 9.03011 15.4116 8.93913 15.2284 8.84814C14.9535 8.75716 14.7703 8.75716 14.4954 8.75716C14.2205 8.66617 14.1289 8.4842 14.1289 8.21124C14.1289 8.02927 14.4038 7.8473 14.587 7.8473C16.053 7.93829 17.1525 8.75716 17.3357 10.4859C17.3357 10.5769 17.3357 10.7588 17.3357 10.8498C17.3357 11.0318 17.2441 11.2138 17.0609 11.2138ZM16.1446 7.2104C15.6865 7.02843 15.2284 6.84646 14.6787 6.75547C14.4954 6.75547 14.2205 6.66449 14.0373 6.66449C13.7624 6.66449 13.5792 6.48252 13.6708 6.20956C13.6708 5.9366 13.8541 5.75463 14.1289 5.84562C15.0452 5.9366 15.8698 6.11857 16.6944 6.48252C18.3436 7.30139 19.2598 8.66617 19.5347 10.4859C19.5347 10.5769 19.5347 10.6679 19.5347 10.7588C19.5347 10.9408 19.5347 11.1228 19.5347 11.3957C19.5347 11.4867 19.5347 11.5777 19.5347 11.6687C19.4431 12.0326 18.8017 12.1236 18.7101 11.6687C18.7101 11.5777 18.6185 11.3957 18.6185 11.3048C18.6185 10.4859 18.4352 9.66701 18.0687 8.93913C17.519 8.12026 16.8776 7.57434 16.1446 7.2104ZM21.0923 12.6695C20.8174 12.6695 20.6342 12.3966 20.6342 12.1236C20.6342 11.5777 20.5425 11.0318 20.4509 10.4859C20.0844 7.57434 17.7022 5.20872 14.8619 4.75379C14.4038 4.6628 13.9457 4.6628 13.5792 4.57182C13.3043 4.57182 12.9378 4.57182 12.8462 4.20788C12.7546 3.93492 13.0294 3.66196 13.3043 3.66196C13.3959 3.66196 13.4876 3.66196 13.4876 3.66196C13.6708 3.66196 17.2441 3.75295 13.4876 3.66196C17.3357 3.75295 20.5425 6.30055 21.1839 10.1219C21.2755 10.7588 21.3671 11.3957 21.3671 12.1236C21.5504 12.3966 21.3671 12.6695 21.0923 12.6695Z" fill="#D8160C"/>
              </svg>
            </div>
          </button>
        </div>
        <div class="business-utility opacity">
          <h5 class=""><?php echo get_field('подзаголовок_баннера'); ?></h5>
          <div class="business-utility-block ">
            <div class="business-utility-block-box">
              <div class="business-utility-block-box-title">
              <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.3334 9.7333V10.5C18.3323 12.297 17.7504 14.0455 16.6745 15.4848C15.5985 16.9241 14.0861 17.977 12.3628 18.4866C10.6395 18.9961 8.79774 18.9349 7.11208 18.3121C5.42642 17.6894 3.98723 16.5384 3.00915 15.0309C2.03108 13.5233 1.56651 11.74 1.68475 9.9469C1.80299 8.15377 2.49769 6.44691 3.66525 5.08086C4.83281 3.71482 6.41068 2.76279 8.16351 2.36676C9.91635 1.97073 11.7502 2.15192 13.3917 2.8833" stroke="#2B3131" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.3333 3.83325L10 12.1749L7.5 9.67492" stroke="#D8160C" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <span><?php echo get_field('пункт_1_заголовок'); ?></span>
              </div>
              <p><?php echo get_field('пункт_1_текст'); ?></p>
            </div>
            <div class="business-utility-block-box">
              <div class="business-utility-block-box-title">
              <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.3334 9.7333V10.5C18.3323 12.297 17.7504 14.0455 16.6745 15.4848C15.5985 16.9241 14.0861 17.977 12.3628 18.4866C10.6395 18.9961 8.79774 18.9349 7.11208 18.3121C5.42642 17.6894 3.98723 16.5384 3.00915 15.0309C2.03108 13.5233 1.56651 11.74 1.68475 9.9469C1.80299 8.15377 2.49769 6.44691 3.66525 5.08086C4.83281 3.71482 6.41068 2.76279 8.16351 2.36676C9.91635 1.97073 11.7502 2.15192 13.3917 2.8833" stroke="#2B3131" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.3333 3.83325L10 12.1749L7.5 9.67492" stroke="#D8160C" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <span><?php echo get_field('пункт_2_заголовок'); ?></span>
              </div>
              <p><?php echo get_field('пункт_2_текст'); ?></p>
            </div>
            <div class="business-utility-block-box">
              <div class="business-utility-block-box-title">
              <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18.3334 9.7333V10.5C18.3323 12.297 17.7504 14.0455 16.6745 15.4848C15.5985 16.9241 14.0861 17.977 12.3628 18.4866C10.6395 18.9961 8.79774 18.9349 7.11208 18.3121C5.42642 17.6894 3.98723 16.5384 3.00915 15.0309C2.03108 13.5233 1.56651 11.74 1.68475 9.9469C1.80299 8.15377 2.49769 6.44691 3.66525 5.08086C4.83281 3.71482 6.41068 2.76279 8.16351 2.36676C9.91635 1.97073 11.7502 2.15192 13.3917 2.8833" stroke="#2B3131" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.3333 3.83325L10 12.1749L7.5 9.67492" stroke="#D8160C" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
              <span><?php echo get_field('пункт_3_заголовок'); ?></span>
              </div>
              <p><?php echo get_field('пункт_3_текст'); ?></p>
            </div>
          </div>
        </div>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", () => {
          const firstStep = document.querySelector('#first-step-box');
          const secondStep = document.querySelector('#second-step-box');
          const thirdStep = document.querySelector('#third-step-box');

          const price = document.querySelector('.price');
          const maintenanceBanner = document.querySelector('.maintenance_banner');
          const legalReview = document.querySelector('.legal-review');

          if (window.innerWidth >= 900) {
            scroll (firstStep, price);
            scroll (secondStep, maintenanceBanner);
            scroll (thirdStep, legalReview);
          }
        })

        function scrollToElement(element, offset) {
          const rect = element.getBoundingClientRect();
          const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

          window.scrollTo({
            top: rect.top + scrollTop - offset,
            behavior: "smooth"
          });
        }

        function scroll(a, to) {
          a.addEventListener('click', () => {
            let offsetPixels = 100;
            if (window.innerWidth <= 600) {
              offsetPixels = 0;
            }
            scrollToElement(to, offsetPixels);
          })
        }
      </script>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const legal = document.querySelector(".legal-business");
          const legalH3 = legal.querySelector("h3");
          const businessUtility = legal.querySelector(".business-utility");
          const blockStep = legal.querySelector('.block-steps');

          const firstStepText = legal.querySelector('#first-step-box p');
          const legalButtons = legal.querySelectorAll("button");

          let initialValue = 1;
          const counter = legal.querySelector(".counter");
          let targetValue = parseInt(counter.textContent);
          counter.textContent = initialValue;

          function show() {
            legalH3.classList.remove("opacity");
            setTimeout(() => {
              businessUtility.classList.remove("opacity");
              setTimeout(() => {
                blockStep.classList.remove("opacity");
                setTimeout(() => {
                  firstStepText.classList.remove("opacity");
                  animateCounter(counter, initialValue, targetValue, 30);
                  setTimeout(() => {
                    legalButtons.forEach((button) => {
                      button.classList.remove("opacity");
                    })
                    setTimeout(() => {
                      legalButtons.forEach((button) => {
                        button.classList.add("hovered");
                      })
                      setTimeout(() => {
                        legalButtons.forEach((button) => {
                          button.classList.remove("hovered");
                        })
                      }, 300);
                    }, 300);
                  }, 1700);
                }, 200);
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
            observer.observe(legal);
          }, 1000)
        });
      </script>
    </div>

    <div class="price">
      <div class="container">
        <h3 class="opacity"><?php echo get_field('заголовок_прайса'); ?></h3>
        <div class="tables-block">
          <div class="table-container">
            <table class="opacity">
              <tr class="table-tarif">
                  <th>Тариф</th>
                  <?php
                  $tarif_posts = new WP_Query(array(
                      'post_type' => 'tariff',
                      'posts_per_page' => -1,
                  ));
    
                  if ($tarif_posts->have_posts()) :
                      $tarif_posts->rewind_posts(); // Вернуться к началу
                      $index = 1;
                      while ($tarif_posts->have_posts()) :
                          $tarif_posts->the_post();
                  ?>
                          <th data-index="<?php echo $index; ?>"><?php the_title(); ?></th>
                  <?php
                      $index++;
                      endwhile;
                  endif;
                  ?>
              </tr>
              <?php
              $first_tarif = new WP_Query(array(
                  'post_type' => 'tariff',
                  'posts_per_page' => 1, 
              ));
    
              if ($first_tarif->have_posts()) :
                  $first_tarif->the_post();
    
                  $field_key_month = 'задач_в_месяц';
                  $field_info_month = get_field_object($field_key_month);
                  $field_name_month = $field_info_month['label'];
    
                  $field_key_day = 'задач_в_день';
                  $field_info_day = get_field_object($field_key_day);
                  $field_name_day = $field_info_day['label'];
    
                  $field_key_date = 'срок_выполнения';
                  $field_info_date = get_field_object($field_key_date);
                  $field_name_date = $field_info_date['label'];
    
                  $field_key_option = 'доп_опции';
                  $field_info_option = get_field_object($field_key_option);
                  $field_name_option = $field_info_option['label'];
    
                  $field_key_pay = 'сумма_платежа';
                  $field_info_pay = get_field_object($field_key_pay);
                  $field_name_pay = $field_info_pay['label'];
              endif;
              ?>
              <tr class="table-month">
                <td><?php echo $field_name_month; ?></td>
                <?php
                if ($tarif_posts->have_posts()) :
                    $tarif_posts->rewind_posts();
                    $index = 1;
                    while ($tarif_posts->have_posts()) :
                        $tarif_posts->the_post();
                ?>
                        <td data-index="<?php echo $index; ?>"><?php echo get_field('задач_в_месяц'); ?></td>
                <?php
                    $index++;
                    endwhile;
                endif;
                ?>
              </tr>
              <tr class="table-day">
                <td><?php echo $field_name_day; ?></td>
                <?php
                if ($tarif_posts->have_posts()) :
                    $tarif_posts->rewind_posts();
                    $index = 1;
                    while ($tarif_posts->have_posts()) :
                        $tarif_posts->the_post();
                ?>
                        <td data-index="<?php echo $index; ?>"><?php echo get_field('задач_в_день'); ?></td>
                <?php
                    $index++;
                    endwhile;
                endif;
                ?>
              </tr>
              <tr class="table-date">
                <td><?php echo $field_name_date; ?></td>
                <?php
                if ($tarif_posts->have_posts()) :
                    $tarif_posts->rewind_posts();
                    $index = 1;
                    while ($tarif_posts->have_posts()) :
                        $tarif_posts->the_post();
                ?>
                        <td data-index="<?php echo $index; ?>"><?php echo get_field('срок_выполнения'); ?></td>
                <?php
                    $index++;
                    endwhile;
                endif;
                ?>
              </tr>
              <tr class="table-option">
                <td><?php echo $field_name_option; ?></td>
                <?php
                if ($tarif_posts->have_posts()) :
                  $tarif_posts->rewind_posts();
                  $index = 1;
                  while ($tarif_posts->have_posts()) :
                      $tarif_posts->the_post();
                      
                      $dop_options = get_field('доп_опции');
                      ?>
                      <td data-index="<?php echo $index; ?>"
                      <?php
                      if (!is_numeric($dop_options)) {
                          echo 'class="red"';
                      }
                      ?>
                      ><?php echo $dop_options; ?></td>
                      <?php
                  $index++;
                  endwhile;
                endif;
                ?>
              </tr>
              <tr class="table-pay">
                <td><?php echo $field_name_pay; ?></td>
                <?php
                if ($tarif_posts->have_posts()) :
                    $tarif_posts->rewind_posts();
                    $index = 1;
                    while ($tarif_posts->have_posts()) :
                        $tarif_posts->the_post();
                ?>
                        <td data-index="<?php echo $index; ?>"><?php echo get_field('сумма_платежа'); ?></td>
                <?php
                    $index++;
                    endwhile;
                endif;
                ?>
              </tr>
            </table>
          </div>
        </div>
        <div class="price-buttons">
          <button class="price-button-form opacity"><?php echo get_field('прайс_красная', 634); ?></button>

          <?php
          $pdf_file = get_field('pdf_file_price', 634);
          ?>
          <a href="<?php echo esc_url($pdf_file['url']); ?>" class="price-button-pdf opacity" target="_blank"><?php echo get_field('прайс_серая', 634); ?></a>
          <script>
            document.addEventListener("DOMContentLoaded", () => {
              const pdfLink = document.querySelector(".price-button-pdf");
              const screenWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
              
              pdfLink.addEventListener("click", (event) => {
                if (screenWidth <= 600) {
                  event.preventDefault();
                  const pdfUrl = pdfLink.getAttribute("href");
                  window.location.href = pdfUrl;
                }
              });
            });
          </script>
        </div>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const price = document.querySelector(".price");
          const priceH3 = price.querySelector("h3");
          const priceTables = price.querySelectorAll("table");
          const priceButton = price.querySelector("button");
          const priceA = price.querySelector("a");

          function show() {
            priceH3.classList.remove("opacity");
            setTimeout(() => {
              priceTables.forEach((li, index) => {
                li.classList.remove("opacity");
              });
              setTimeout(() => {
                priceButton.classList.remove("opacity");
                setTimeout(() => {
                  priceButton.classList.add("hovered");
                  setTimeout(() => {
                    priceButton.classList.remove("hovered");
                  }, 300);
                }, 600);
                setTimeout(() => {
                  priceA.classList.remove("opacity");
                  setTimeout(() => {
                    priceA.classList.add("hovered");
                    setTimeout(() => {
                      priceA.classList.remove("hovered");
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
              threshold: 0.2,
            };

          const observer = new IntersectionObserver(callback, options);
          setTimeout(() => {
            observer.observe(price);
          }, 1000)
        });
      </script>
    </div>

    <div class="clients">
      <div class="container">
        <h3 class="opacity"><?php echo get_field('заголовок_доверяют', 634); ?></h3>
        <div class="section-review_reviews">
					<?php
						$i = 0;
						query_posts('post_type=client&posts_per_page=99'); 
						while ( have_posts() ) : 
							the_post(); 
							setup_postdata($post);
							$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large');
							$posttags = get_the_tags();
							if ( $posttags ){
								$post_tags = '';
								foreach( $posttags as $tag ){
									$post_tags = $post_tags.' '.$tag->slug;
								}
							}
							$i++;
							if ($i <= 12) {
                ?>
                <div class="section-review_review has-clue<?php echo $post_tags; echo $class; ?> opacity" data-tooltip="Посмотреть отзыв">
                  <img src="<?php echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>" />
                  <div class="clue none">Посмотреть отзыв</div>
                </div>
                <?php
              }
            endwhile; wp_reset_query(); ?>
				</div>
        <?php
        $page_id = 90;
        $page_link = get_permalink($page_id);
        ?>
        <a href="<?php echo esc_url($page_link); ?>">
          <button class="more opacity">
            <span><?php echo get_field('кнопка_доверяют', 634); ?></span>
            <svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M1 1L8.5 7L16 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </button>
        </a>
      </div>
      <div class="shadow-block">
        <?php
          $args = array(
            'post_type' => 'client',
            'posts_per_page' => -1,
          );

          $clients = new WP_Query($args);

          if ($clients->have_posts()) {
            while ($clients->have_posts()) {
              $clients->the_post();
              $image = get_field('изображение_документа');
              ?>
              <div class="shadow-block-box">
                <div class="shadow-block-box-info">
                  <div class="container">
                    <h4><?php echo get_the_title(); ?></h4>
                    <p><?php echo get_field('мы_сделали'); ?></p>
                  </div>
                  <svg class="svg-close" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M1 1L23 23" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M1 23L23 1" stroke="#0D0D0D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div>
                <div class="shadow-block-box-content">
                  <div class="shadow-block-box-content-img">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    <svg class="next-box" width="22" height="48" viewBox="0 0 22 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M2 46.5L20 24L2 1.5" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <svg class="prev-box" width="22" height="48" viewBox="0 0 22 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M20 46.5L2 24L20 1.5" stroke="white" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                  </div>
                </div>
              </div>

              <?php
            }
            wp_reset_postdata();
          }
        ?>
      </div>
      <script>
        document.addEventListener("DOMContentLoaded", function() {
          const clients = document.querySelector(".clients");
          const clientsH3 = document.querySelector(".clients h3");
          const clientsCards = clients.querySelectorAll(".section-review_review");
          const clientsButtonMore = clients.querySelector("button");

          function show() {
            clientsH3.classList.remove("opacity");
            clientsCards.forEach((li, index) => {
              setTimeout(() => {
                li.classList.remove("opacity");
              }, 150 * index);
            });
            setTimeout(() => {
              clientsButtonMore.classList.remove("opacity");
            }, 1500);
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
            observer.observe(clients);
          }, 1000)
        });

        const clientReviews = document.querySelectorAll('.section-review_review');
        const clientReviewsClues = document.querySelectorAll('.section-review_review .clue');
        const shadowBlock = document.querySelector('.shadow-block');
        const shadowBoxes = document.querySelectorAll('.shadow-block-box');

        if (window.innerWidth >= 900) {
          clientReviews.forEach((button, index) => {
            button.addEventListener("click", () => {
              shadowBlock.classList.add("show");
              shadowBoxes[index].classList.add("show");
              document.querySelector('body').style.overflow = "hidden";
            });
          });
        }

        clientReviewsClues.forEach((button, index) => {
          button.addEventListener("click", () => {
            shadowBlock.classList.add("show");
            shadowBoxes[index].classList.add("show");
            document.querySelector('body').style.overflow = "hidden";
          });
        });

        shadowBoxes.forEach((box, index) => {
          const nextBox = box.querySelector('.next-box');
          const prevBox = box.querySelector('.prev-box');
          const boxImg = shadowBoxes[index].querySelector('img');
          const close = shadowBoxes[index].querySelector('.svg-close');

          nextBox.addEventListener('click', (event) => {
            box.classList.remove("show");
            index = (index + 1) % shadowBoxes.length;
            shadowBoxes[index].classList.add("show");
          })

          prevBox.addEventListener('click', (event) => {
            box.classList.remove("show");
            index = (index - 1 + shadowBoxes.length) % shadowBoxes.length;
            shadowBoxes[index].classList.add("show");
          })

          box.querySelector('.shadow-block-box-content').addEventListener('click', (event) => {
            if (!boxImg.contains(event.target) && !nextBox.contains(event.target) && !prevBox.contains(event.target) ) {
              shadowBlock.classList.remove("show");
              box.classList.remove("show");
              document.querySelector('body').style.overflow = "auto";
            }
          })

          close.addEventListener('click', () => {
            shadowBlock.classList.remove("show");
            box.classList.remove("show");
            document.querySelector('body').style.overflow = "auto";
          })
        })
      </script>
    </div>

    <div class="legal-review">
      <div class="container">
        <div class="maintenance_review-info">
          <?php
          $page_id = 95;
          $page_link = get_permalink($page_id);
          // Добавляем параметр к URL
          $page_link = add_query_arg('filter', 'legal_support', $page_link);
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

  <script>

  </script>

<?php include 'footer.php'; ?>