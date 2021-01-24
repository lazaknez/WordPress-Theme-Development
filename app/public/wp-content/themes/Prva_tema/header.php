<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    
</head>

<body>
    <div id="slideout-menu">
        <ul>
            <li>
                <a href="<?php echo site_url('');?>">Početna stranica</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog');?>">Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects');?>">Projekti</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about');?>">O nama</a>
            </li>
            <div class="searchbox-slide-menu">
              <?php get_search_form(); ?>
            </div>
        </ul>
    </div>


    <nav>
        <div id="logo-img">
            <a href="<?php echo site_url('');?>">
                <img src="<?php echo get_template_directory_uri(); ?>/img/elab-logo.png" alt="Elektronsko poslovanje Logo">
            </a>
        </div>
        <div id="menu-icon">
            <i class="fas fa-bars"></i>
        </div>
        <ul>
            <li>
                <a href="<?php echo site_url(''); ?>"
                  <?php  if (is_front_page()) {
                    echo 'class = "active"';
                  }?>
                  >Početna stranica</a>
            </li>
            <li>
                <a href="<?php echo site_url('/blog'); ?>"
                  <?php  if (get_post_type()=='post') {
                    echo 'class = "active"';
                  }?>
                  >Blog</a>
            </li>
            <li>
                <a href="<?php echo site_url('/projects'); ?>"
                  <?php  if (get_post_type()=='project') {
                    echo 'class = "active"';
                  }?>
                  >Projekti</a>
            </li>
            <li>
                <a href="<?php echo site_url('/about'); ?>"
                  <?php  if (is_page('about')) {
                    echo 'class = "active"';
                  }?>
                  >O nama</a>
            </li>
            <li>
                <div id="search-icon">
                    <i class="fas fa-search"></i>
                </div>
            </li>
        </ul>
    </nav>

    <div id="searchbox">
        <?php get_search_form(); ?>
    </div>

    <?php if (!is_front_page()) { ?>
<main>
<?php } ?>
