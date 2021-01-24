<?php get_header(); ?>

<div class="container-404">
  <h2 class="page-heading">
    404 error :(
  </h2>
  <!-- random slika u ovom formatu sa ispisom greske za stranicu koja ne postoji! -->
  <img src="http://source.unsplash.com/640x480/?error" >
  <h3>Izvinjavamo se, takva stranica ne postoji!</h3>

  <ul>
    <li><a href="<?php echo site_url('/blog'); ?>">Blog lista</li>
    <li><a href="<?php echo site_url('/projects'); ?>">Lista projekata</li>
      <li><a href="<?php echo site_url('/about'); ?>">O nama</li>
      <li><a href="<?php echo site_url(''); ?>">Početna stranica</li>
  </ul>
</div>

<?php get_footer(); ?>
