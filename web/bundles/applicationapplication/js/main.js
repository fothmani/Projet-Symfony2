/**
 * Created by fothmani on 17/01/2016.
 */

//Activate the carousel
$('.carousel').carousel({
    interval: 3000 //changes the speed
});

//Activate the up-down chevron and the collapse
function toggleChevron(e) {
    $(e.target)
        .prev('.panel-heading')
        .find("i.indicator")
        .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
}

$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);
$('#accordion2').on('hidden.bs.collapse', toggleChevron);
$('#accordion2').on('shown.bs.collapse', toggleChevron);

//flash the star
function flash() {


    var star = document.getElementById('flash');
    if (star) {
        star.style.color = (star.style.color == 'red') ? 'gray' : 'red';
    }

    var star2 = document.getElementById('flash2');
    if (star2) {
        star2.style.color = (star2.style.color == 'red') ? 'gray' : 'red';
    }

}
var clr = setInterval(flash, 500);


