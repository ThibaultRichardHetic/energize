<?php get_header(); ?>


<div id="content">
    <h1>Contenu Principal</h1>
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
            <h1><?php the_title(); ?></h1>
            <h2>Posté le <?php the_time('F jS, Y') ?></h2>
            <p><?php the_content(); ?></p>
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>

    <p>
  Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed doloribus exercitationem inventore excepturi incidunt praesentium unde ullam ea voluptatibus? Fugit sit doloribus rerum, asperiores amet nesciunt illo iste atque dolores?
</p>


</div> <!-- /content -->



<?php get_footer(); ?>
