<?php get_header(); ?>



<div class="banner-nacional">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <h2>Proyectos / Nacional </h2>
        <h5>Soluciones especificas para tu problema</h5>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">

    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <div class="col-md-12 my-5">
          <div class="row">
            <div class="col-md-12">
              <h4> <?php the_title(); ?> </h4> <!-- TITULO -->
            </div>

            <div class="col-md-5">
              <div class="img-fluida">
                <?php the_post_thumbnail(); ?>
              </div>
              <h5> <?php the_time('F · m · Y') ?> </h5>
              <h5> <?php the_category(); ?> </h5> <!-- PARRAFO DE TEXTO -->
              <h5> <?php the_author(); ?> </h5> <!-- PARRAFO DE TEXTO -->
              <a class="btn btn-outline-secondary" href="">Leer +</a>

            </div>

            <div class="col-md-7">
              <p> <?php the_content(); ?> </p> <!-- PARRAFO DE TEXTO -->
            </div>

          </div>
        </div>
      <?php endwhile; ?>
      <div class="col-md-12 my-5 text-center">
        <?php wp_pagenavi(); ?>
      </div>
    <?php else : ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>

  </div>
</div>

<?php get_footer(); ?>