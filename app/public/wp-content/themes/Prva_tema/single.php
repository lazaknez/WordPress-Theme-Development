
<?php get_header(); ?>
 <?
  while (have_posts()) {
    the_post();
 ?>
        <h2 class="page-heading">
            <?php the_title(); ?>
        </h2>
        <div id="post-container">
            <section id="blogpost">
                <div class="card">
                    <div class="card-meta-blogpost">
                        Postavljeno od <?php the_author(); ?>, dana <?php the_time('F j, Y'); ?>
                        <?php if (get_post_type()=='post') { ?>
                         in <a href="#"><?php echo get_the_category_list(', '); ?></a>

                      <?php }?>
                    </div>
                    <div class="card-image">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Slika programiranja">
                    </div>
                    <div class="card-description">
                        <?php the_content(); ?>
                    </div>
                </div>

                <div id="comments-section">
                    <?php
                    //dodata forma sa codex.wordpress.org/FunctionReference/comment_form
                    $fields =  array(
                      'author' => '<input placeholder = "Name" id = "author" name = "author" type = "text" value="' . esc_attr($commenter['comment_author']) . '"size = "30"' . $aria_req . ' />',
                      'email' => '<input placeholder = "Email" id = "email" name = "email" type = "text" value="' . esc_attr($commenter['comment_author_email']) . '"size = "30"' . $aria_req . ' />'

                    );
                    $args = array(
                      'title_reply' =>'Podeli svoje misljenje :)',
                      'fields' =>$fields,
                      'comment_field'=>'<textarea placeholder = "Vas komentar" id = "comment" name = "comment" cols="45" rows="8" aria-required = "true">' . '</textarea>',
                      'comment_notes_before' => '<p class = "comment-notes">' . 'Vasa email adresa nece biti objavljena! Sva polja su obavezna. </p>'
                   );
                   //poziv WordPress comment forme
                    comment_form($args);
                    $comments_number = get_comments_number();
                    if ($comments_number!=0) {
                      ?>
                      <div class="comments">
                        <h3>Sta su drugi rekli o ovoj temi?</h3>
                        <ol class="all-comments">
                          <?php
                            //dobijanje komentara po IDu i samo onih koji su odobreni od administratora
                            $comments = get_comments(array('post_id'=>$post->ID, 'status'=>'approve'));
                            //maksimalan broj komentara po stranici
                            wp_list_comments(array('per_page' =>10), $comments);
                           ?>
                        </ol>
                      </div>
                      <?php
                    }
                    ?>
                </div>
            </section>
            <?php } ?>
            <aside id="sidebar">
                <!--Poziv Sidebar-a pomocu IDa koji smo prethodno inicijalizovali u functions.php-->
                <?php dynamic_sidebar('main_sidebar'); ?>
            </aside>
        </div>
  <?php get_footer(); ?>
