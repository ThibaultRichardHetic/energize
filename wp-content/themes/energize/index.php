<?php get_header(); ?>

<main class="main--home">

  <div id="content" class="content">
    <div class="container--main">
      <div class="container--sondage">
        <h3 class="sondage__title">
          Sondage du jour
        </h3>
        <p class="sondage__ask">
          Utilisez-vous quotidiennement un système de climatisation, au travail comme à votre domicile ?
        </p>
        <div class="answer">
          <div class="choice">
            <div class="button--yes js-yes">
              <img class="button__icon" src="<?php echo(get_stylesheet_directory_uri());?>/images/check-circle.svg" alt="">
              <p class="button__text">Oui</p>
            </div>
            <div class="button--no js-no">
              <img class="button__icon" src="<?php echo(get_stylesheet_directory_uri());?>/images/x-circle.svg" alt="">
              <p class="button__text">Non</p>
            </div>
          </div>
          <div class="button--validate">
            <p class="button__text">Répondre</p>
          </div>
        </div>
      </div>
      <div class="article--last">
        <div class="article">
          <div class="container--img">
            <a class="article__link" href="<?= get_permalink(get_page_by_title('article')) ?>">
              <img class="preview" src="<?php echo(get_stylesheet_directory_uri());?>/images/en-vs-fr.png" alt="">
            </a>
          </div>
          <div class="content--text">
            <h3 class="article__title">
              Qui des français ou des anglais consomment le plus ?
            </h3>
            <p class="article__description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque iusto ut nemo libero corporis expedita ratione, earum vitae eos iure, minus rerum dolorem repellendus amet ab cum asperiores, vero molestias?
            </p>
            <div class="article__network">
              <div class="hastag">
                <p class="text">#Consommation</p>
                <p class="text">#energie</p>
              </div>
              <div class="popularity">
                <div class="comment">
                  <p class="number">13</p>
                  <img class="logo" src="<?php echo(get_stylesheet_directory_uri());?>/images/comment.svg" alt="">
                </div>
                <div class="like">
                  <p class="number">28</p>
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

  </div> <!-- /content -->

</main>



<?php get_footer(); ?>
