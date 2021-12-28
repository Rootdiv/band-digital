<?php get_header();?>
    <!--MAIN BANNER AREA START -->
    <div class="banner-area banner-3">
      <div class="overlay dark-overlay"></div>
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
                <div class="banner-content content-padding">
                  <h5 class="subtitle"><?php the_field('subtitle', $post->ID);?></h5>
                  <h1 class="banner-title"><?php the_field('title', $post->ID);?></h1>
                  <p><?php the_field('description', $post->ID);?></p>
                  <a href="#" class="btn btn-white btn-circled">Начать сотрудничество</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--MAIN HEADER AREA END -->
    <!--  ABOUT AREA START  -->
    <?php the_content();?>
    <!--  ABOUT AREA END  -->
    <?php //Вывод услуг
    echo get_template_part('template-parts/content', 'service', ['class'=> 'bg-feature',
      'custom_title' => 'Наши услуги']);
    //Вывод цен
    echo get_template_part('template-parts/content', 'pricing');
    //Вывод отзывов
    echo get_template_part('template-parts/content', 'testimonial', ['custom_title' => 'Клиенты, которые нам доверяют',
      'custom_description' => 'Отзывы постоянных клиентов']);
    //Вывод партнёров
    echo get_template_part('template-parts/content', 'partners', ['title' => true, 'count' => 4]);?>
    <!--  BLOG AREA START  -->
    <section id="blog" class="section-padding bg-main">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-sm-12 m-auto">
            <div class="section-heading">
              <h4 class="section-title">Журнал</h4>
              <div class="line"></div>
              <p>
                Мы публикуем в блоге интересные кейсы наших клиентов, возможно, <br />
                вы найдете много полезного для себя и своего бизнеса
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <?php
          global $post;

          $query = new WP_Query([
            'posts_per_page' => 3,
            'post_type' => 'post',
          ]);

          if ($query->have_posts()) {
            while ($query->have_posts()) {
              $query->the_post();
              ?>
              <div class="col-lg-4 col-sm-6 col-md-4">
                <div class="blog-block">
                  <?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']);?>
                  <div class="blog-text">
                    <h6 class="author-name"><span><?php $category = get_the_category();
                      echo $category[0]->name;?></span><?php the_author();?></h6>
                    <a href="<?=get_the_permalink();?>" class="h5 my-2 d-inline-block"><?php the_title();?></a>
                    <?php the_excerpt();?>
                  </div>
                </div>
              </div>
              <?php
            }
          } else {
            ?>
            <p>Записей пока нет</p>
            <?php
          }
          wp_reset_postdata(); // Сбрасываем $post
          ?>
        </div>
      </div>
    </section>
    <!--  BLOG AREA END  -->
    <!--  COUNTER AREA START  -->
    <section id="counter" class="section-padding">
      <div class="overlay dark-overlay"></div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="counter-stat">
              <i class="icofont icofont-heart"></i>
              <span class="counter"><?php the_field('clients', $post->ID);?></span>
              <h5>счастливых клиентов</h5>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="counter-stat">
              <i class="icofont icofont-rocket"></i>
              <span class="counter"><?php the_field('done-projects', $post->ID);?></span>
              <h5>выполненных проектов</h5>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="counter-stat">
              <i class="icofont icofont-hand-power"></i>
              <span class="counter"><?php the_field('team', $post->ID);?></span>
              <h5>людей в команде</h5>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 col-md-6">
            <div class="counter-stat">
              <i class="icofont icofont-shield-alt"></i>
              <span class="counter"><?php the_field('current-projects', $post->ID);?></span>
              <h5>Проектов в работе</h5>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--  COUNTER AREA END  -->
<?php get_footer();?>
