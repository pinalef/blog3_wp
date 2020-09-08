<?php
/* Template Name: Proyectos Internacional  */
?>

<?php get_header(); ?>

<div class="slider"></div>

<div class="migas"></div>

<div class="banner-nacional">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <h2>Proyectos / Internacional </h2>
        <h5>Soluciones especificas para tu problema</h5>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">

    <?php if (have_posts()) : ?>
      <?php query_posts("category_name=proyectos-internacional"); ?>
      <?php while (have_posts()) : the_post(); ?>

        <div class="col-md-4 my-5">
          <div class="img-fluida mb-3">
            <?php the_post_thumbnail(); ?>
          </div>
          <h4> <?php the_title(); ?> </h4> <!-- TITULO -->
          <h5> <?php the_time('F · m · Y') ?> </h5>
          <p> <?php the_excerpt(); ?> </p> <!-- PARRAFO DE TEXTO -->
          <a class="btn btn-outline-secondary" href="">Leer +</a>

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