
  <?php get_header(); ?>

            <h2 class="page-heading">Svi blogovi</h2>

        <section>

          <?php

            while (have_posts()) {
              the_post();
           ?>
            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Slika kartice">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink();  ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <div class="card-meta">
                        <!--izlistavanje iz baze autora, prikaz vremena u odredjenom formatu i prikaz kategorije iz baze-->
                        Postavljeno od <?php the_author(); ?>, dana <?php the_time('F j, Y'); ?> in
                         <a href="#"><?php echo get_the_category_list(', '); ?></a>
                    </div>
                    <p>
                        <?php echo wp_trim_words(get_the_excerpt(),30);?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Pročitaj više...</a>
                </div>
            </div>
          <?php }
                wp_reset_query();
           ?>
        </section>
        <!--za promenu stranica-->
        <div class="pagination">
          <?php echo paginate_links(); ?>
        </div>


  <?php get_footer(); ?>
