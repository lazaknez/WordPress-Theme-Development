
  <?php get_header(); ?>
    <div id="banner">
        <h1>
            &lt;Elektronsko poslovanje/&gt;
        </h1>
        <h2>Fakultet organizacionih nauka, Univerziteta Beograd</h2>
        <h3>
            Learn coding with us...
        </h3>
    </div>
    <main>
        <a href="<?php echo site_url('/blog'); ?>">
            <h2 class="section-heading">Blog postovi</h2>
        </a>
        <section>
          <?php
            /*Kreiranje novog WordPress upita i korišćenje WordPress petlje */
            $x =  array('post_type' =>'post' ,'posts_per_page'=>4 );
            $blogposts = new WP_Query($x);
            while ($blogposts->have_posts()) {
              $blogposts->the_post();
           ?>
            <div class="card">
                <div class="card-image">
                    <!-- korišćenje permalinka kako bi dobili URL adresu-->
                    <a href="<?php echo the_permalink(); ?>">
                      <!--korišćenje funkcije za dobijanje slike jedne kartice-->
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Slika kartice">
                    </a>
                </div>
                <div class="card-description">
                    <a href="<?php the_permalink();  ?>">
                      <!--funkcija za naslov jedne kartice post-a-->
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p>
                        <!--WordPress funkcija koja ograničava broj prikaza reči na 35 u okviru opisa svake kartice-->
                        <?php echo wp_trim_words(get_the_excerpt(),35);?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Pročitaj više...</a>
                </div>
            </div>

          <?php }
                //resetovanje upita
                wp_reset_query();
           ?>
        </section>
        <a href="<?php echo site_url('/projects'); ?>">
        <h2 class="section-heading">
            Svi projekti
        </h2>
      </a>
        <section>
          <?php

            $x =  array('post_type' =>'project' ,'posts_per_page'=>4 );

            $projects = new WP_Query($x);

            while ($projects->have_posts()) {
              $projects->the_post();
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

        <h2 class="section-heading">Dodatna kartica</h2>

        <section id="section-source">
            <a href="https://moodle.elab.fon.bg.ac.rs/" class="btn-readmore">Elab moodle</a>
            <a href="https://www.elab.fon.bg.ac.rs/wp-content/uploads/2015/07/Elektronsko-poslovanje.pdf" class="btn-readmore">Udžbenik Elektronskog poslovanja</a>
            <a href="https://elab.fon.bg.ac.rs/kontakt/" class="btn-readmore">Kontakt</a>
        </section>

  <?php get_footer(); ?>
