<!DOCTYPE html>
<html lang="sv">
  <head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <?php
      if(!empty(get_option('gaid'))) {
        ?>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', '<?php echo get_option('gaid', true); ?>', 'auto');
          ga('send', 'pageview');
        </script>
        <?php
      }
  ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <a href="<?php echo home_url(); ?>" id="logo">
        <h1>Anders Gustavsson</h1>
        <h2>Front End Developer</h2>
      </a>
      <nav>
          <div><?php wp_nav_menu(array('theme_location' => 'mainmenu')); ?></div>
      </nav>
    </header>


