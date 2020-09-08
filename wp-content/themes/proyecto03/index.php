<?php get_header(); ?>



<div class="slider"></div>

<div class="migas"></div>

<div class="destacados">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 my-5">
        <div class="row">
          <?php if (have_posts()) : ?>
            <?php query_posts("category_name=destacado&showposts=3"); ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="col-md-4 my-3">

                <div class="img-fluid">
                  <?php the_post_thumbnail('medium'); ?>
                </div>
                <h1> <?php the_title(); ?> </h1> <!-- TITULO -->
                <h6> <?php the_time('F jS, Y') ?> Creador por: <?php the_author(); ?> </h6>

                <div class="linea"></div>
                <p> <?php the_excerpt(); ?> </p> <!-- PARRAFO DE TEXTO -->
                <a class="btn btn-outline-primary" href="#">Leer +</a>
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

<div class="somos-bienvenida">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <?php if (have_posts()) : ?>
            <?php query_posts("category_name=somos&showposts=1"); ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="col-md-5 my-3">

                <h1> <?php the_title(); ?> </h1> <!-- TITULO -->
                <p> <?php the_excerpt(); ?> </p>
                <a class="btn btn-outline-primary" href="#">Leer +</a>
              </div>

              <div class="col-md-7 my-3">
                <?php the_field('video'); ?>
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


<div class="servicios-bienvenida">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <?php if (have_posts()) : ?>
            <?php query_posts("category_name=servicios&showposts=1"); ?>
            <?php while (have_posts()) : the_post(); ?>
              <div class="col-md-5 my-3 ml-auto">
                <h1> <?php the_title(); ?> </h1> <!-- TITULO -->
                <p> <?php the_excerpt(); ?> </p> <!-- PARRAFO DE TEXTO -->
                <a class="btn btn-outline-primary" href="#">Leer +</a>
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

<?php get_footer(); ?>