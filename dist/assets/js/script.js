//SCROLL ANIMATE
var scroll = window.requestAnimationFrame ||
    function (callback) { window.setTimeout(callback, 1000 / 60) };
var elementsToShow = document.querySelectorAll('.show-on-scroll');
function loop() {

    Array.prototype.forEach.call(elementsToShow, function (element) {
        if (isElementInViewport(element)) {
            element.classList.add('is-visible');
        }
    });

    scroll(loop);
}
loop();

//SCROLL ANIMATE
var scroll2 = window.requestAnimationFrame ||
    function (callback2) { window.setTimeout(callback2, 1000 / 60) };
var elementsToShow2 = document.querySelectorAll('.show-on-scroll2');
function loop2() {

    Array.prototype.forEach.call(elementsToShow2, function (element) {
        if (isElementInViewport(element)) {
            element.classList.add('is-visible2');
        }
    });

    scroll2(loop2);
}
loop2();



function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
        el = el[0];
    }
    var rect3 = el.getBoundingClientRect();
    return (
        (rect3.top <= 0
            && rect3.bottom >= 0)
        ||
        (rect3.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
            rect3.top <= (window.innerHeight || document.documentElement.clientHeight))
        ||
        (rect3.top >= 0 &&
            rect3.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
}



//TOP NAVIGATION
function NavBar() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
window.onscroll = function () { scrollFunction() };
function scrollFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTopnav").style.width = "100%";
        document.getElementById("myTopnav").style.backgroundColor = "rgba(1, 42, 74, 1)";
        document.getElementById("header").style.position = "fixed";
        document.getElementById("header").style.top = "0%";
        document.getElementById("roll_back").style.display = "flex";
    } else {
        document.getElementById("myTopnav").style.width = "80%";
        document.getElementById("myTopnav").style.backgroundColor = "rgba(1, 42, 74, 0.6)";
        document.getElementById("header").style.position = "fixed";
        document.getElementById("header").style.top = "2rem";
        document.getElementById("roll_back").style.display = "none";
    }
}

$(document).ready(function(){
    let reserve_num = 0;
    let person_num = 1;
    $('.reserve').click(function(){
        person_num = $('.person').val();
        if(person_num == null){
            person_num = 1;
        }
        reserve_num ++;
        alert("تور مورد نظر شما رزرو شد ، تعداد تور های رزرو شده : " + reserve_num + "تعداد افراد : "+person_num)
    })
})