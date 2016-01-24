/**
 * Created by fothmani on 17/01/2016.
 */

//Activate the carousel
$('.carousel').carousel({
    interval: 3000 //changes the speed
});

//Activate the up-down chevron
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

//flash the star to
function flash() {

    var text = document.getElementById('flash');
    text.style.color = (text.style.color == 'red') ? 'gray' : 'red';

}

var clr = setInterval(flash, 1000);
