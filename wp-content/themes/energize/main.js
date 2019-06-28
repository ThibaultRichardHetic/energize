
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



var tl = new TimelineMax({onUpdate:updatePercentage});
var tl2 = new TimelineMax();
const controller = new ScrollMagic.Controller();

tl.from('blockquote', .5, {x:200, opacity: 0});
tl.from('span', 1, { width: 0}, "=-.5");
tl.from('#office', 1, {x:-200, opacity: 0,ease: Power4.easeInOut}, "=-1");
tl.from('#building', 1, {x:200, opacity: 0, ease: Power4.easeInOut}, "=-.7");

tl2.from("#box", 1, {opacity: 0, scale: 0});
tl2.to("#box", .5, {left: "20%", scale: 1.3, borderColor: 'white', borderWidth: 12, boxShadow: '1px 1px 0px 0px rgba(0,0,0,0.09)'})

const scene = new ScrollMagic.Scene({
  triggerElement: ".sticky",
            triggerHook: "onLeave",
            duration: "100%"
})
  .setPin(".sticky")
  .setTween(tl)
		.addTo(controller);

const scene2 = new ScrollMagic.Scene({
  triggerElement: "blockquote"
})
  .setTween(tl2)
		.addTo(controller);


function updatePercentage() {
  //percent.innerHTML = (tl.progress() *100 ).toFixed();
  tl.progress();
  console.log(tl.progress());
}
