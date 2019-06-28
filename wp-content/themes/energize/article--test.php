
// let state_yes = 0
// let state_no = 0

// const $button_yes = document.querySelector('.js-yes')
// $button_yes.addEventListener('click', () => 
// {
//   console.log('click')
//   if (state_yes == 1)
//   {
//     $button_yes.style.backgroundColor = "#F5F6F8"
//     $button_yes.style.border = "solid 1px #29303B"
//     state_yes = 0
//     return state_yes
//   }
//   if (state_yes == 0)
//   {
//     console.log('0')
//     $button_yes.style.backgroundColor = "rgba(254, 211, 48, .20)"
//     $button_yes.style.border = "solid 1px #FED330"
//     $button_no.style.backgroundColor = "#F5F6F8"
//     $button_no.style.border = "solid 1px #29303B"
//     state_yes = 1
//     return state_yes
//   }
// })

// const $button_no = document.querySelector('.js-no')
// $button_no.addEventListener('click', () => 
// {
//   if (state_no == 1)
//   {
//     $button_no.style.backgroundColor = "#F5F6F8"
//     $button_no.style.border = "solid 1px #29303B"
//     state_no = 0
//     return state_no
//   }
//   if (state_no == 0)
//   {
//     $button_no.style.backgroundColor = "rgba(254, 211, 48, .20)"
//     $button_no.style.border = "solid 1px #FED330"
//     $button_yes.style.backgroundColor = "#F5F6F8"
//     $button_yes.style.border = "solid 1px #29303B"
//     state_no = 1
//     return state_no
//   }
// })




var tl = new TimelineMax({onUpdate:updatePercentage});
const controller = new ScrollMagic.Controller();

tl.from('blockquote', .5, {x:200, opacity: 0});

const scene = new ScrollMagic.Scene({
  triggerElement: ".sticky",
  triggerHook: "onLeave",
  duration: "100%"
})
  .setPin(".sticky")
  .setTween(tl)
    .addTo(controller);

function updatePercentage(){
  tl.progress()
  console.log(tl.progress())
}




<?php
/**
 * Template Name: article 
 */
?>
<?php get_header(); ?>

<main class="main--article-last">
  <div id="content" class="content">
    <section class="section--1 sticky">
      <h2>Scroll mon pote</h2>
    </section>
    <section class="section--2">
      <div class="container--title">
        <h2 class="title">Consommation en VS fr</h2>
      </div>
      <div class="container--illu-1">
        <img id="blockquote" class="illu" src="<?php echo(get_stylesheet_directory_uri());?>/images/en_fr/en_perso.png" alt="">
      </div>
      <div class="container--illu-2">
        <img class="illu" src="<?php echo(get_stylesheet_directory_uri());?>/images/en_fr/vs.png" alt="">
      </div>
      <div class="container--illu-3">
        <img class="illu" src="<?php echo(get_stylesheet_directory_uri());?>/images/en_fr/fr_perso.png" alt="">
      </div>
    </section>

  </div>
</main>


<?php get_footer(); ?>



      .section--1
      {
        height: 100vh;
        background-color: pink;
        overflow: hidden;
       
      }
      .section--2
      {
        height: 100vh;
        width: 100%;
        background-color: purple;
        .container--title
        {
          .title
          {
            text-align: center;
            font-size: $textsize_big;
          }
        }
        .container--illu-1
        {
          float: left;
          .illu
          {
            width: 300px;
          }
        }
        .container--illu-2
        {
          .illu
          {
            width: 100px;
          }
        }
        .container--illu-3
        {
          .illu
          {
            width: 300px;
          }
        }
      }