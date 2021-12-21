<?php get_header();?>
    <!--MAIN BANNER AREA START -->
    <div class="page-banner-area page-contact" id="page-banner">
      <div class="overlay dark-overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content content-padding">
              <h1 class="text-white">Band Digital журнал</h1>
              <p>Полезные статьи про маркетинг и диджитал</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--MAIN HEADER AREA END -->
    <section class="section blog-wrap ">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="row">
              <?php $cnt = 0;
              if ( have_posts() ) : while ( have_posts() ) : the_post();
                $cnt++;
                switch($cnt) {
                  case 3:?>
                  <div class="col-lg-12">
                    <div class="blog-post">
                      <?php
                      //должно находится внутри цикла
                      if( has_post_thumbnail() ) {
                        the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid'));
                      }
                      else {
                        echo '<img src="'.get_template_directory_uri().'/images/img-default.png" alt="" class="img-fluid" />';
                      }?>
                      <div class="mt-4 mb-3 d-flex">
                        <div class="post-author mr-3">
                          <i class="fa fa-user"></i>
                          <span class="h6 text-uppercase"><?php the_author();?></span>
                        </div>
                        <div class="post-info">
                          <i class="fa fa-calendar-check"></i>
                          <span><?php the_time('j F Y');?></span>
                        </div>
                      </div>
                      <a href="<?=get_the_permalink();?>" class="h4"><?php the_title();?></a>
                      <p class="mt-3"><?php the_excerpt();?></p>
                      <a href="<?=get_the_permalink();?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                  <?php
                  break;
                  default:?>
                  <div class="col-lg-6">
                    <div class="blog-post">
                      <?php
                      //должно находится внутри цикла
                      if( has_post_thumbnail() ) {
                        the_post_thumbnail('post-thumbnail', array('class' => 'img-fluid'));
                      }
                      else {
                        echo '<img src="'.get_template_directory_uri().'/images/img-default.png" alt="" class="img-fluid" />';
                      }?>
                      <div class="mt-4 mb-3 d-flex flex-wrap">
                        <div class="post-author mr-3">
                          <i class="fa fa-user"></i>
                          <span class="h6 text-uppercase"><?php the_author();?></span>
                        </div>
                        <div class="post-info">
                          <i class="fa fa-calendar-check"></i>
                          <span><?php the_time('j F Y');?></span>
                        </div>
                      </div>
                      <a href="<?=get_the_permalink();?>" class="h4"><?php the_title();?></a>
                      <p class="mt-3"><?php the_excerpt();?></p>
                      <a href="<?=get_the_permalink();?>" class="read-more">Читать статью <i class="fa fa-angle-right"></i></a>
                    </div>
                  </div>
                <?php break;
                }
                endwhile; else : ?>
                <p>Записей нет.</p>
              <?php endif; ?>
              <div class="col-lg-12 mb-5 mb-lg-0 d-flex justify-content-center"><?php the_posts_pagination(array(
                'prev_text'    => '<div class="p-2 border m-1">' . __('« Предыдущие посты') . '</div>',
                'next_text'    => '<div class="p-2 border m-1">' . __('Следующие посты »') . '</div>',
                'before_page_number' => '<div class="p-2 border m-1">',
                'after_page_number'  => '</div>'
              ));?></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
              <?php get_sidebar();?>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php get_footer();?>
