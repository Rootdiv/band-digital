<?php get_header();?>
    <!--MAIN BANNER AREA START -->
    <div class="page-banner-area page-contact" id="page-banner">
      <div class="overlay dark-overlay"></div>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 m-auto text-center col-sm-12 col-md-12">
            <div class="banner-content content-padding">
              <h5 class="subtitle bg-danger">Ошибка 404</h5>
              <h1 class="banner-title">Такой страницы не&nbsp;существует</h1>
              <p>
                Вы пытаетесь зайти на страницу, которой нет. Возможно она была раньше по этому адресу,
                а теперь мы перенесли её в новое место. Попробуйте найти нужную информацию в поиске
                или перейдите на главную страницу.
              </p>
              <?php the_widget('WP_Widget_Search');?>
              <a href="/" class="btn btn-white btn-circled">Перейти на главную</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--MAIN HEADER AREA END -->
<?php get_footer();?>
