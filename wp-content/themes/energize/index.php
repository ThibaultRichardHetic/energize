<?php get_header(); ?>

<main class="main--home">

  <div id="content" class="content">
    <div class="container--main">
      <div class="article--last">
        <h4 class="title--block">Dernière article</h4>
        <div class="article">
          <a class="article__link" href="">
            <img class="preview" src="<?php echo(get_stylesheet_directory_uri());?>/images/en-vs-fr.png" alt="">
          </a>
          <div class="content--text">
            <h3 class="article__title">
              Qui des français ou des anglais consomment le plus ?
            </h3>
            <p class="article__description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque iusto ut nemo libero corporis expedita ratione, earum vitae eos iure, minus rerum dolorem repellendus amet ab cum asperiores, vero molestias?
            </p>
            <div class="article__network">
              <div class="hastag">
                <p class="text">#Consomation</p>
                <p class="text">#France</p>
              </div>
              <div class="popularity">
                <div class="comment">
                  <p>13</p>
                  <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/comment.svg" alt="">
                </div>
                <div class="like">
                  <p>28</p>
                  <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/like.svg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="article--all">
        <div class="double">
          <div class="article">
            <div class="article__illu"></div>
            <div class="article__content">
              <h3 class="title">
                Que représente l’energie photovoltaïque en France ?
              </h3>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="article">
            <div class="article__illu"></div>
            <div class="article__content">
              <h3 class="title">
                Que représente l’energie photovoltaïque en France ?
              </h3>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
        </div>
        <div class="double">
          <div class="article">
            <div class="article__illu"></div>
            <div class="article__content">
              <h3 class="title">
                Que représente l’energie photovoltaïque en France ?
              </h3>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="article">
            <div class="article__illu"></div>
            <div class="article__content">
              <h3 class="title">
                Que représente l’energie photovoltaïque en France ?
              </h3>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
        </div>
        <div class="double">
          <div class="article">
            <div class="article__illu"></div>
            <div class="article__content">
              <h3 class="title">
                Que représente l’energie photovoltaïque en France ?
              </h3>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
          <div class="article">
            <div class="article__illu"></div>
            <div class="article__content">
              <h3 class="title">
                Que représente l’energie photovoltaïque en France ?
              </h3>
              <p class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
            </div>
          </div>
        </div>
            <div class="show--more">
              <div class="button">
                <p class="text">Afficher plus</p>
              </div>
            </div>
      </div>
    </div>
    <div class="container--sidebar">
      <div class="sondage">
        <h4 class="title">Sondage</h4>
        <p class="description">
          Répondez à notre sondage et aidez nous dans nos recherches.
        </p>
        <form class="form" action="" method="post">
          <p class="ask">Je suis:</p>
          <div class="options">
            <div class="option">
              <input class="input" type="checkbox" name="owner">
              <label class="label" for="owner">Proprétaire</label>
            </div>
            <div class="option">
              <input class="input" type="checkbox" name="owner">
              <label class="label" for="owner">Locataire</label>
            </div>
            <div class="option">
              <input class="input" type="checkbox" name="free">
              <label class="label" for="free">Logé à titre gratuit</label>
            </div>
          </div>
        </form>
        <div class="button">
          <p class="text">Répondre</p>
        </div>
      </div>
      <div class="follow">
        <h4 class="title">Suivez-nous</h4>
        <p class="description">
          Découvrez nos aventures et des informations inédites.
        </p>
        <div class="icons">
          <a class="link" href="">
            <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/facebook-color.svg" alt="">
          </a>
          <a class="link" href="">
            <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/twitter-color.svg" alt="">
          </a>
          <a class="link" href="">
            <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/instagram-color.svg" alt="">
          </a>
          <a class="link" href="">
            <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/snapchat-color.svg" alt="">
          </a>
          <a class="link" href="">
            <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/pinterest-color.svg" alt="">
          </a>
          <a class="link" href="">
            <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/youtube-color.svg" alt="">
          </a>
        </div>
      </div>
      <div class="newsletter">
        <h4 class="title">Newsletter</h4>
        <p class="description">
          Inscris toi à notre newletter et sois le premier à lire nos articles.
        </p>
        <form class="form" action="">
          <input class="input" type="text" placeholder="Votre adresse mail">
        </form>
      </div>
    </div>
  </div> <!-- /content -->

</main>



<?php get_footer(); ?>
