<?php
$post = $wp_query->post;
if (in_category('noticias')) {
  include(TEMPLATEPATH . '/single_noticias.php');
} elseif (in_category('productos')) {
  include(TEMPLATEPATH . '/single_productos.php');
} elseif (in_category('servicios')) {
  include(TEMPLATEPATH . '/single_servicios.php');
} else {
  include(TEMPLATEPATH . '/single_default.php');
}
