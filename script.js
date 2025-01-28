let slider = document.querySelector('.slider .list');
let items = document.querySelectorAll('.slider .list .item');
let next = document.getElementById('next');
let prev = document.getElementById('prev');
let dots = document.querySelectorAll('.slider .dots li');

let lengthItems = items.length - 1;
let active = 0;
next.onclick = function(){
    active = active + 1 <= lengthItems ? active + 1 : 0;
    reloadSlider();
}
prev.onclick = function(){
    active = active - 1 >= 0 ? active - 1 : lengthItems;
    reloadSlider();
}
let refreshInterval = setInterval(()=> {next.click()}, 3000);
function reloadSlider(){
    slider.style.left = -items[active].offsetLeft + 'px';
    // 
    let last_active_dot = document.querySelector('.slider .dots li.active');
    last_active_dot.classList.remove('active');
    dots[active].classList.add('active');

    clearInterval(refreshInterval);
    refreshInterval = setInterval(()=> {next.click()}, 3000);

}

dots.forEach((li, key) => {
    li.addEventListener('click', ()=>{
         active = key;
         reloadSlider();
    })
})
window.onresize = function(event) {
    reloadSlider();
};



function scrollToBottom()
{
    var height = document.body.scrollHeight;
    window.scroll(0, innerHeight);

}

function scrollToBottom(divClass) {
    var div = document.querySelector('.' + divClass);
    if (div) {
        var height = div.scrollHeight;
        window.scroll(0, innerHeight);
    } else {
        console.error("Div with class '" + divClass + "' not found.");
    }
}



var navLinks = document.getElementById("navLinks");

function showMenu() {
    navLinks.style.left = "0";
}
function hideMenu() {
    navLinks.style.left = "-200px";
}



function toggleNav() {
    var navLinks = document.getElementById("navLinks");
    navLinks.classList.toggle("showNav");
  }


  