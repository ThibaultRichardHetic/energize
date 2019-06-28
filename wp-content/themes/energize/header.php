<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />

        <!-- Appel du fichier style.css de notre thème -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <!--
            Tout le contenu de la partie head de mon site
         -->

        <!-- Execution de la fonction wp_head() obligatoire ! -->
        <?php wp_head(); ?>
    </head>
    <body class="body" <?php body_class(); ?>>
        <header class="header" id="header">
        <!-- Tout le contenu de l entête de mon site -->
          <div class="container--menu">
            <nav class="nav--top">
             <div class="container--logo">
             <a href="<?= get_permalink() ?>">
              <img class="logo__img" src="<?php echo(get_stylesheet_directory_uri());?>/images/logo.png" alt="">
             </a>
             </div>
             <div class="container--social">
              <a class="link" href="">
                <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/facebook.svg" alt="">
              </a>
              <a class="link" href="">
                <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/twitter.svg" alt="">
              </a>
              <a class="link" href="">
                <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/instagram.svg" alt="">
              </a>
              <a class="link" href="">
                <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/snapchat.svg" alt="">
              </a>
              <a class="link" href="">
                <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/pinterest.svg" alt="">
              </a>
              <a class="link" href="">
                <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/youtube.svg" alt="">
              </a>
             </div>
            </nav>
            <nav class="nav--bot">
              <div class="content">
                <div class="container--link">
                  <a class="link" href="">
                    <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/home.svg" alt="">
                  </a>
                  <a class="link" href="">
                    <p class="text">article</p>
                  </a>
                  <a class="link" href="">
                    <p class="text">sondages</p>
                  </a>
                  <a class="link" href="">
                    <p class="text">Notre démarche</p>
                  </a>
                </div>
                <div class="container--shearch">
                  <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/search.svg" alt="">    
                  <form action="#" method="get">
                    <input type="text">
                  </form>
                  <a class="link--user" href="">
                    <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/user.svg" alt="">
                  </a>
                </div>
              </div>
            </nav>
          </div>
        </header>