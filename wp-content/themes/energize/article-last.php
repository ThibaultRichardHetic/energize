<?php
/**
 * Template Name: article 
 */
?>
<?php get_header(); ?>

<main class="main--article-last">
  <div id="content" class="content">
    
      <section>
      <h2>Scroll pour lire ton article</h2>
    </section>

    <section class="sticky">
      <blockquote>La consommation énérgétique d'un anglais face à un français.<span></span></blockquote>
      <img id="office" src="<?php echo(get_stylesheet_directory_uri());?>/images/en_fr/en_perso.png">
      <img id="building"  src="<?php echo(get_stylesheet_directory_uri());?>/images/en_fr/fr_perso.png">
      <div id="box"><img id="building"  src="<?php echo(get_stylesheet_directory_uri());?>/images/en_fr/vs.png"></div>
    </section>

    <section>
      <h2>Scroll up</h2>
    </section>


    <div class="js-yes"></div>
    <div class="js-no"></div>
  </div>
</main>


<?php get_footer(); ?>
