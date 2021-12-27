<?php get_header();?>
    <!--MAIN BANNER AREA START -->
    <div class="page-banner-area page-contact" id="page-banner">
      <div class="overlay dark-overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content content-padding">
              <h1 class="text-white">Цены на услуги</h1>
              <p>Подберите подходящий тариф</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--MAIN HEADER AREA END -->
    <?php //Вывод цен
    echo get_template_part('template-parts/content', 'pricing');
    //Вывод отзывов
    echo get_template_part('template-parts/content', 'testimonial', ['custom_title' => 'Клиенты, которые нам доверяют',
      'custom_description' => 'Отзывы постоянных клиентов']);
    //Вывод партнёров
    echo get_template_part('template-parts/content', 'partners', ['title' => false]);?>
<?php get_footer();?>
