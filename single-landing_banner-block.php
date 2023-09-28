<div class="landing_banner">
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
    <div class="landing_banner-info">
      <div class="landing_banner-info-block">
        <h1 class="opacity"><?php the_title(); ?><span class="landing_banner-location hide"> в г.<span class="landing_banner-city"></span></span> с оплатой за&nbsp;результат</h1>
        <button class="mobile opacity"><?php echo get_field('текст_кнопки', 455); ?></button>
        <button class="desktop opacity">
            <p>
              <span>
                <?php echo get_field('текст_кнопки', 455); ?>
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
        <div class="section-review_links">
          <a class="opacity" href="https://yandex.ru/maps/org/yuristy_k2/50163903260/?from=tabbar&ll=36.571844%2C50.603664&source=serp_navig&z=17" id="yandex-link">
            <div class="section-review_link">
              <img src="<?php echo get_template_directory_uri(); ?>/img/landing/yandex_hover.png" alt="yandex" />
  
              <div class="section-review_link-info">
                <span></span>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <span></span>
              </div>
            </div>
          </a>
          <a class="opacity" href="https://www.google.com/maps/place/%D0%AE%D1%80%D0%B8%D1%81%D1%82%D1%8B+%D0%9A2/@50.6036453,36.5717811,17z/data=!3m1!4b1!4m8!3m7!1s0x41266ae388d63bf1:0xb16415a41b7f8fc4!8m2!3d50.6036453!4d36.5717811!9m1!1b1!16s%2Fg%2F11c7v_hv91?entry=ttu" id="google-link">
            <div class="section-review_link">
              <img src="<?php echo get_template_directory_uri(); ?>/img/landing/google_hover.png" alt="google" />
  
              <div class="section-review_link-info">
                <span></span>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <span></span>
              </div>
            </div>
          </a>
          <a class="opacity" href="https://2gis.ru/belgorod/firm/70000001027050693" id="gis-link">
            <div class="section-review_link">
              <img src="<?php echo get_template_directory_uri(); ?>/img/landing/2gis_hover.png" alt="2gis" />
  
              <div class="section-review_link-info">
                <span></span>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <svg
                  width="12"
                  height="11"
                  viewBox="0 0 12 11"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                  >
                  <path
                    d="M6.06409 0L7.41118 4.1459H11.7704L8.24372 6.7082L9.59081 10.8541L6.06409 8.2918L2.53738 10.8541L3.88447 6.7082L0.357756 4.1459H4.71701L6.06409 0Z"
                    fill="#FBBC05"
                  />
                </svg>
                <span></span>
              </div>
            </div>
          </a>
        </div>
      </div>
      <div class="landing_banner-info-img opacity">
        <?php
          $selected_post_id = get_field('сотрудник', 455);

          if ($selected_post_id) {
            ?>
            <a href="<?php echo get_permalink($selected_post_id); ?>"
                <?php
                $selected_post = get_post($selected_post_id);

                $person_photo_link = get_field('фото', $selected_post_id);
                $person_name = get_field('имя', $selected_post_id);
                $person_lastname = get_field('фамилия', $selected_post_id);
                $person_post = get_field('должность', $selected_post_id);
                ?>
                data-tooltip="<?php echo $person_post; ?> <?php echo $person_name . ' ' . $person_lastname; ?>" data-prompt="посмотреть подробную информацию">
                <?php
                if ($person_photo_link && $person_name && $person_lastname && $person_post) { 
                    ?>

                    <img src="<?php echo esc_url($person_photo_link); ?>" alt="person_k2">

                    <div class="clue none"><?php echo $person_post; ?> <?php echo $person_name . ' ' . $person_lastname; ?><br>посмотреть подробную информацию</div>
                    
                    <span><?php echo $person_name . ' ' . $person_lastname; ?>,<br><?php echo $person_post; ?> К2</span>

                    <?php

                } else { ?>

                    <img src="<?php echo get_template_directory_uri(); ?>/img/landing/banner_photo.png" alt="person">
                    <span>Ксения Скрыпченко,<br />юрист К2</span>
                    
                    <?php
                }
                ?>

                <?php
                  if (get_the_ID() == 181) { ?>
                    <svg width="461" height="705" viewBox="0 0 461 705" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g filter="url(#filter0_f_1244_2816)">
                      <path d="M82.3556 195.264C88.237 116.438 156.623 57.1287 235.488 62.4561C305.058 67.1555 361.237 121.076 368.786 190.395L397.685 455.77C408.53 555.357 330.527 642.316 230.351 642.316C132.454 642.316 55.2094 559.093 62.4935 461.468L82.3556 195.264Z" fill="#4F4F4F" fill-opacity="0.19"/>
                      </g>
                      <defs>
                      <filter id="filter0_f_1244_2816" x="0.0174561" y="0.123535" width="460.676" height="704.192" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                      <feGaussianBlur stdDeviation="31" result="effect1_foregroundBlur_1244_2816"/>
                      </filter>
                      </defs>
                    </svg>
                    <img class="landing_banner-bg" src="<?php echo get_template_directory_uri(); ?>/img/documents.png" alt="documents">
                    <?php
                  }
                  if (get_the_ID() == 768) { ?>
                    <svg width="461" height="705" viewBox="0 0 461 705" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g filter="url(#filter0_f_1244_2816)">
                      <path d="M82.3556 195.264C88.237 116.438 156.623 57.1287 235.488 62.4561C305.058 67.1555 361.237 121.076 368.786 190.395L397.685 455.77C408.53 555.357 330.527 642.316 230.351 642.316C132.454 642.316 55.2094 559.093 62.4935 461.468L82.3556 195.264Z" fill="#4F4F4F" fill-opacity="0.19"/>
                      </g>
                      <defs>
                      <filter id="filter0_f_1244_2816" x="0.0174561" y="0.123535" width="460.676" height="704.192" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                      <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                      <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
                      <feGaussianBlur stdDeviation="31" result="effect1_foregroundBlur_1244_2816"/>
                      </filter>
                      </defs>
                    </svg>
                    <img class="landing_banner-bg" src="<?php echo get_template_directory_uri(); ?>/img/papers.png" alt="papers">
                    <?php
                  }
                ?>
            </a>
            <?php
          } 
        ?>
      </div>
    </div>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const landingBanner = document.querySelector(".landing_banner");
      const landingBannerH1 = landingBanner.querySelector("h1");
      const landingBannerButtons = landingBanner.querySelectorAll("button");
      const landingBannerLinks = landingBanner.querySelectorAll(
        ".section-review_links a"
      );
      const landingBannerImg = landingBanner.querySelector(
        ".landing_banner-info-img"
      );
  
      if (window.innerWidth >= 900) {
        window.addEventListener("mousemove", function (event) {
          let xPos = -((event.clientX / window.innerWidth) * 10 - 5);
          let yPos = -((event.clientY / window.innerHeight) * 10 - 5);
  
          landingBanner.style.backgroundPositionX = xPos + "px";
          landingBanner.style.backgroundPositionY = yPos + "px";
        });
      }
  
      function show() {
        landingBannerImg.classList.remove("opacity");
        setTimeout(() => {
          landingBannerH1.classList.remove("opacity");
          landingBannerLinks.forEach((img, index) => {
            setTimeout(() => {
              img.classList.remove("opacity");
            }, 200 * index);
          });
          setTimeout(() => {
            landingBannerButtons.forEach((button, index) => {
              setTimeout(() => {
                button.classList.remove("opacity");
              }, 300 * index);
            });
            setTimeout(() => {
              landingBannerButtons.forEach((button, index) => {
                setTimeout(() => {
                  button.classList.add("hovered");
                }, 300 * index);
              });
              setTimeout(() => {
                landingBannerButtons.forEach((button, index) => {
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
          threshold: 0.1,
        };
  
      const observer = new IntersectionObserver(callback, options);
      setTimeout(() => {
        observer.observe(landingBanner);
      }, 1000)
    });
  </script>
</div>