<footer>
  <div class="socios">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 text-center text-light">
          <h4>Asociados</h4>
          <?php echo do_shortcode('[sp_wpcarousel id="71"]'); ?>

        </div>
      </div>
    </div>
  </div>

  <div class="footer01">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="row">

            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="logo">
                    <?php $custom_logo = wp_get_attachment_image(get_theme_mod('custom_logo'), 'medium'); ?>
                    <a href="<?php echo home_url() ?>"> <?php echo $custom_logo ?> </a>
                  </div>
                </div>
                <div class="col-md-6 text-light mt-5">
                  <p><?php bloginfo('description'); ?></p>
                </div>
              </div>
            </div>

            <div class="col-md-3">
              nav
            </div>

            <div class="col-md-3">
              <?php if (have_posts()) : ?>
                <?php query_posts("category_name=contacto&showpost=1"); ?>
                <?php while (have_posts()) : the_post(); ?>
                  <div class="mt-5 text-light">
                    <p> <?php the_field('bienvenida'); ?></p>
                  </div>
                <?php endwhile; ?>
              <?php else : ?>
              <?php endif; ?>
              <?php wp_reset_query(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="footer02">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6 text-light">
              <h6>Todos los derechos reservados a Social Watch <?php the_time(Y); ?> </h6>
            </div>
            <div class="col-md-6 text-light">
              <h6>Políticas de uso / Uso de datos / sitio web desarrollado por</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php wp_footer(); ?>

</body>

</html>