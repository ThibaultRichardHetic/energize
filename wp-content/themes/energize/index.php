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
          <a class="link__article" href="<?= get_permalink(get_page_by_title('article')) ?>">
            <div class="button--validate">
              <p class="button__text">Répondre</p>
            </div>
          </a>
        </div>
      </div>
      <div class="article--last">
        <div class="article">
          <div class="container--img">
            <a class="article__link" href="<?= get_permalink(get_page_by_title('article')) ?>">
              <img class="preview" src="<?php echo(get_stylesheet_directory_uri());?>/images/article_last.jpg" alt="">
            </a>
          </div>
          <div class="content--text">
            <h3 class="article__title">
              Qui des français ou des anglais consomment le plus ?
            </h3>
            <p class="article__description">
              Ce n’est un secret pour personne… les  Français et les Anglais maintiennent une éternelle relation de rivalité et de fraternité « A hate and love story » depuis le Moyen-âge. Mais qu’en est-il face à la problématique énergétique.
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
            <div class="article__illu">
              <img class="illu" src="<?php echo(get_stylesheet_directory_uri());?>/images/article_1.png" alt="">
            </div>
            <div class="article__content">
              <h3 class="title">
              Course a l’énergie verte, elle-est si propre qu’on le dit ?
              </h3>
              <p class="description">
                Le gouvernement français veut miser sur l'énergie solaire. Mais cette solution est-elle complètement "zéro émission" ?
              </p>
            </div>
          </div>
          <div class="article">
            <div class="article__illu">
            <img class="illu" src="<?php echo(get_stylesheet_directory_uri());?>/images/article_2.jpg" alt="">
            </div>
            <div class="article__content">
              <h3 class="title">
              Connaissez-vous l’énergie libre ? 
              </h3>
              <p class="description">
              L’énergie libre : une énergie illimitée, gratuite et facile à produire ? Certains pensent qu’elle existe, mais que les industriels nous la cachent… Qu’en est-il vraiment ?
              </p>
            </div>
          </div>
          <div class="article">
            <div class="article__illu">
            <img class="illu" src="<?php echo(get_stylesheet_directory_uri());?>/images/article_3.jpg" alt="">
            </div>
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
            <div class="article__illu">
            <img class="illu" src="<?php echo(get_stylesheet_directory_uri());?>/images/article_4.jpg" alt="">
            </div>
            <div class="article__content">
              <h3 class="title">
                Que représente l’energie photovoltaïque en France ?
              </h3>
              <p class="description">
                L’énergie solaire est propre, n'émet aucun gaz à effet de serre, est gratuite, inépuisable et disponible partout dans le monde.
              </p>
            </div>
          </div>
          <div class="article">
            <div class="article__illu">
              <img class="illu" src="<?php echo(get_stylesheet_directory_uri());?>/images/article_5.jpg" alt="">
            </div>
            <div class="article__content">
              <h3 class="title">
              L’énergie renouvelable dans 10 ans              
              </h3>
              <p class="description">
              Report de la baisse du nucléaire, énergies renouvelables et réduction des consommations : le gouvernement a publié le détail de la feuille de route énergétique de la France à horizon 2028
              </p>
            </div>
          </div>
          <div class="article">
            <div class="article__illu">
              <img class="illu" src="<?php echo(get_stylesheet_directory_uri());?>/images/article_1.png" alt="">
            </div>
            <div class="article__content">
              <h3 class="title">
                L’hydrogène, l’eldorado énergetique du futur
              </h3>
              <p class="description">
                L'hydrogène est souvent présenté comme un pilier de la transition énergétique mondiale.
              </p>
            </div>
          </div>
        </div>
        <div class="double">
          <div class="article">
            <div class="article__illu">
              <img class="illu" src="<?php echo(get_stylesheet_directory_uri());?>/images/article_2.jpg" alt="">
            </div>
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
            <div class="article__illu">
              <img class="illu" src="<?php echo(get_stylesheet_directory_uri());?>/images/article_3.jpg" alt="">
            </div>
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
            <div class="article__illu">
              <img class="illu" src="<?php echo(get_stylesheet_directory_uri());?>/images/article_4.jpg" alt="">
            </div>
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
