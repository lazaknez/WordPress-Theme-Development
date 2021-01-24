
  <?php get_header(); ?>

            <h2 class="page-heading">Rezultati pretrage za <?php echo get_search_query(); ?></h2>
            <?php if (have_posts()){?>
        <section>

          <?php
            while (have_posts()) {
              // code...
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
                        Postavljeno od <?php the_author(); ?>, dana <?php the_time('F j, Y'); ?> <?php if (get_post_type()=='post') { ?>
                         in <a href="#"><?php echo get_the_category_list(', '); ?></a>

                      <?php }?>
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
      <?php } else { ?>
        <div class="no-results">
            <h2>Nismo uspeli da pronadjemo nista! :( Da li ste nesto pogresno uneli?</h2>
            <h3>Ne brinite!</h3>
            <h3>Pratite sledece linkove:</h3>
            <ul>
              <li> <a href="<?php echo site_url('/blog');?>">Blog Lista
              </li>
              <li> <a href="<?php echo site_url('/projects');?>">Projekati
              </li>
              <li> <a href="<?php echo site_url('/about');?>">O nama
              </li>
              <li> <a href="<?php echo site_url('');?>">Početna stranica
              </li>
            </ul>
        </div>
    <?php } ?>


        <!-- za promenu stranica-->
        <div class="pagination">
          <?php echo paginate_links(); ?>
        </div>


  <?php get_footer(); ?>
