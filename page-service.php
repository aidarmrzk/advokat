<?php /* Template Name: Что можем  */ ?>
<?php include 'header.php'; ?>
	
	<section class="service-main">
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
            <h1 class="opacity"><?php echo get_field('заголовок_услуга'); ?></h1>
            <div class="service-main-content">
                <a href="<?php echo get_field('первая_буква_ссылка'); ?>" class="opacity">
                    <div>
                        <span>В</span>
                        <p><?php echo get_field('первая_буква_описание'); ?></p>
                    </div>
                </a>
                <a href="<?php echo get_field('вторая_буква_ссылка'); ?>" class="opacity">
                    <div>
                        <span>И</span>
                        <p><?php echo get_field('вторая_буква_описание'); ?></p>
                    </div>
                </a>
                <a href="<?php echo get_field('третья_буква_ссылка'); ?>" class="opacity">
                    <div>
                        <span>П</span>
                        <p><?php echo get_field('третья_буква_описание'); ?></p>
                    </div>
                </a>
                <a href="<?php echo get_field('корона_ссылка'); ?>" class="opacity">
                    <div>
                        <svg class="corona" width="133" height="85" viewBox="0 0 133 85" fill="" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.91675 6.83331L24.7917 78.3333H108.208L126.083 6.83331L90.3334 48.5416L66.5001 6.83331L42.6668 48.5416L6.91675 6.83331Z" stroke="#D8160C" stroke-width="11.9167" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p><?php echo get_field('корона_описание'); ?></p>
                    </div>
                </a>
            </div>

        </div>
    </section>
    <section class="service-search">
        <div class="container">
            <div class="search-top">
                <h2 class="opacity"><?php echo get_field('заголовок_фильтра'); ?></h2>
                <input type="search" id="search" placeholder="Введите название услуги" class="opacity">
                <button id="open-filter" class="red-button opacity" href="">
                    <p>Открыть фильтр</p>
                    <svg width="17" height="9" viewBox="0 0 17 9" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M1 1.5L8.5 7.5L16 1.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
                </button>
            </div>

            <div id="filter-content">
                <div class="filter-content">
                    <span class="filter-content-item">
                        <h3>Тип клиента</h3>
                        <div>
                            <button data-tag="all" type="button" class="active">Все</button>
                            <?php
                                $terms = get_terms(array(
                                    'taxonomy' => 'client-type',
                                    'hide_empty' => false,
                                ));

                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        $category_name = $term->name;
                                        $category_slug = $term->slug;
                                        ?>
                                        <button data-tag="<?php echo $category_slug; ?>" type="button"><?php echo $category_name; ?></button>
                                        <?php
                                    }
                                }
                            ?>
                        </div>
                    </span>
                    <span class="filter-content-item">
                        <h3>Тип работы</h3>
                        <div>
                            <button data-tag="all" type="button" class="active">Все</button>
                            <?php
                                $terms = get_terms(array(
                                    'taxonomy' => 'work-type',
                                    'hide_empty' => false,
                                ));

                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        $category_name = $term->name;
                                        $category_slug = $term->slug;
                                        ?>
                                        <button data-tag="<?php echo $category_slug; ?>" type="button"><?php echo $category_name; ?></button>
                                        <?php
                                    }
                                }
                            ?>
                        </div>
                    </span>
                    <span class="filter-content-item">
                        <h3>Тип суда</h3>
                        <div>
                            <button data-tag="all" type="button" class="active">Все</button>
                            <?php
                                $terms = get_terms(array(
                                    'taxonomy' => 'court-type',
                                    'hide_empty' => false,
                                ));

                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        $category_name = $term->name;
                                        $category_slug = $term->slug;
                                        ?>
                                        <button data-tag="<?php echo $category_slug; ?>" type="button"><?php echo $category_name; ?></button>
                                        <?php
                                    }
                                }
                            ?>
                        </div>
                    </span>
                    <span class="filter-content-item">
                        <h3>Специализация</h3>
                        <div>
                            <button data-tag="all" type="button" class="active">Все</button>
                            <?php
                                $terms = get_terms(array(
                                    'taxonomy' => 'specialization',
                                    'hide_empty' => false,
                                ));

                                if ($terms && !is_wp_error($terms)) {
                                    foreach ($terms as $term) {
                                        $category_name = $term->name;
                                        $category_slug = $term->slug;
                                        ?>
                                        <button data-tag="<?php echo $category_slug; ?>" type="button"><?php echo $category_name; ?></button>
                                        <?php
                                    }
                                }
                            ?>
                        </div>
                    </span>
                </div>
            </div>

            <div class="search-bot">
                
                <p class="opacity">Результаты поиска</p>
    
                <div class="search-content">
                    <?php
                    // Создаем запрос для получения всех записей типа "victory"
                    $args = array(
                        'post_type' => 'service',
                        'posts_per_page' => -1 // -1 означает получить все записи
                    );

                    // Выполняем запрос
                    $the_query = new WP_Query($args);

                    // Проверяем, есть ли записи
                    if ($the_query->have_posts()) {
                        $post_count = $the_query->post_count; // Количество записей
                        // Начинаем цикл по записям
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            ?>
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="opacity <?php
                                if ($the_query->current_post >= 12) {
                                    ?>none must-hidden <?php
                                }

                                $terms = get_the_terms( get_the_ID(), 'client-type' );
                                if ( $terms && ! is_wp_error( $terms ) ) {
                                    foreach ( $terms as $term ) {
                                        $category_slug = $term->slug;
                                        echo $category_slug;?> <?php 
                                    }
                                }

                                $terms = get_the_terms( get_the_ID(), 'work-type' );
                                if ( $terms && ! is_wp_error( $terms ) ) {
                                    foreach ( $terms as $term ) {
                                        $category_slug = $term->slug;
                                        echo $category_slug;?> <?php 
                                    }
                                }

                                $terms = get_the_terms( get_the_ID(), 'court-type' );
                                if ( $terms && ! is_wp_error( $terms ) ) {
                                    foreach ( $terms as $term ) {
                                        $category_slug = $term->slug;
                                        echo $category_slug;?> <?php 
                                    }
                                }

                                $terms = get_the_terms( get_the_ID(), 'specialization' );
                                if ( $terms && ! is_wp_error( $terms ) ) {
                                    foreach ( $terms as $term ) {
                                        $category_slug = $term->slug;
                                        echo $category_slug;?> <?php 
                                    }
                                }

                                ?>"><?php the_title(); ?>

                            </a>
                            <?php
                        }
                        // Сбрасываем глобальные переменные, связанные с запросом
                        wp_reset_postdata();
                    }
                    ?>
                </div>
                
                <button class="opacity" id="search-appear"
			    <?php
                    if ($post_count <= 12) {
                        ?>
                        class="none"
                        <?php
                    }
                    ?>
                type="button">
                    <p>Посмотреть ещё</p>
                    <svg width="17" height="8" viewBox="0 0 17 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L8.5 7L16 1" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>

            </div>
        </div>
    </section>
    <section class="another-question">
        <div class="container">
            <div class="another-content">
                <div>
                    <h2 class="opacity">У Вас другой вопрос?</h2>
                    <p class="opacity">Мы с ним тоже справимся!</p>
                    <a class="red-button opacity" href="">Задать другой вопрос</a>
                </div>
                <div class="another-content-img">
                <?php
                    $selected_post_id = get_field('сотрудник_страница');

                    if ($selected_post_id) {
                        ?>
                        <a href="<?php echo get_permalink($selected_post_id); ?>">
                            <?php
                            $selected_post = get_post($selected_post_id);

                            $person_photo_link = get_field('фото_оффера', $selected_post_id);
                            $person_name = get_field('имя', $selected_post_id);
                            $person_lastname = get_field('фамилия', $selected_post_id);
                            $person_post = get_field('должность', $selected_post_id);

                            if ($person_photo_link && $person_name && $person_lastname && $person_post) { 
                                ?>

                                <img class="opacity" src="<?php echo esc_url($person_photo_link); ?>" alt="landing_photo">
                                
                                <span class="opacity"><?php echo $person_name . ' ' . $person_lastname; ?>,<br><?php echo $person_post; ?> К2</span>

                                <?php

                            } else { ?>

                                <img class="opacity" src="<?php echo get_template_directory_uri(); ?>/img/landing/landing_photo.png" alt="landing_photo">
                                <span class="opacity">Николай Кудинов,<br> юрист К2</span>
                                
                                <?php
                            }
                            ?>
                        </a>
                        <?php
                    } 
                ?>
                </div>
                <a class="red-button opacity" href="">Задать другой вопрос</a>
            </div>
        </div>
    </section>

	<script src="<?php echo $urltheme; ?>/js/service.js"></script>
	
<?php include 'footer.php'; ?>