<?php /* Template Name: Юридическое сопровождение */ ?>
<?php include 'header.php'; ?>
	
  <section class="maintenance">

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
    
    <?php get_template_part('single-slider-block'); ?>

    <?php get_template_part('single-map-block'); ?>

    <?php get_template_part('single-task-block'); ?>

    <?php get_template_part('single-whatsapp_review-block'); ?>

    <?php get_template_part('single-numbers_why-block'); ?>

  </section>

  <script>
    const parentElement = document.querySelector('.maintenance');
    document.querySelector('.landing-search').classList.add('none');
    document.querySelector('.landing-numbers').classList.add('none');

    function deleteOpacity(parentElement) {
      Array.from(parentElement.getElementsByTagName('*')).forEach(function(element) {
        if (element.classList.contains('opacity')) {
            element.classList.remove('opacity');
        }
      });
    }
    deleteOpacity(parentElement);
  </script>

<?php include 'footer.php'; ?>