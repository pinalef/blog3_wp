<?php
/* Template Name: Proyectos Nacional  */
?>

<?php get_header(); ?>

<div class="slider"></div>

<div class="migas"></div>

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
      <?php query_posts("category_name=proyectos-nacional"); ?>
      <?php while (have_posts()) : the_post(); ?>

        <div class="col-md-4 my-3">
          <div class="img-fluida">
            <?php the_post_thumbnail(); ?>
          </div>
          <h1> <?php the_title(); ?> </h1> <!-- TITULO -->
          <h6> <?php the_time('F · m · Y') ?> </h6>
          <p> <?php the_excerpt(); ?> </p> <!-- PARRAFO DE TEXTO -->
          <a href="<?php the_permalink(); ?>" rel="bookmark">Leer +</a>

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