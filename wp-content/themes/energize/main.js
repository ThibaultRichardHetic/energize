
let state_yes = 0
let state_no = 0

const $button_yes = document.querySelector('.js-yes')
$button_yes.addEventListener('click', () => 
{
  console.log('click')
  if (state_yes == 1)
  {
    $button_yes.style.backgroundColor = "#F5F6F8"
    $button_yes.style.border = "solid 1px #29303B"
    state_yes = 0
    return state_yes
  }
  if (state_yes == 0)
  {
    console.log('0')
    $button_yes.style.backgroundColor = "rgba(254, 211, 48, .20)"
    $button_yes.style.border = "solid 1px #FED330"
    $button_no.style.backgroundColor = "#F5F6F8"
    $button_no.style.border = "solid 1px #29303B"
    state_yes = 1
    return state_yes
  }
})

const $button_no = document.querySelector('.js-no')
$button_no.addEventListener('click', () => 
{
  if (state_no == 1)
  {
    $button_no.style.backgroundColor = "#F5F6F8"
    $button_no.style.border = "solid 1px #29303B"
    state_no = 0
    return state_no
  }
  if (state_no == 0)
  {
    $button_no.style.backgroundColor = "rgba(254, 211, 48, .20)"
    $button_no.style.border = "solid 1px #FED330"
    $button_yes.style.backgroundColor = "#F5F6F8"
    $button_yes.style.border = "solid 1px #29303B"
    state_no = 1
    return state_no
  }
})





// const $button_no = document.querySelector('.js-no')
// $button_no.addEventListener('click', () => 
// {
//   $button_no.style.backgroundColor = "rgba(254, 211, 48, .20)"
//   $button_no.style.border = "solid 1px #FED330"
// })



// let tl = new TimelineMax({onUpdate:updatePercentage});
// const controller = new ScrollMagic.controller();