/**
 * Created by fothmani on 17/01/2016.
 */

$(document).ready(function (e) {

    var label1 = document.getElementById('link');
    var label2 = document.getElementById('link2');


    if ((label1.textContent.indexOf("Menu d'aujourd'hui")) || (label1.textContent.indexOf("Repas d'aujourd'hui")) !== -1)

    //Display notification when there is a new menu or a new meal if it exists
        $.notify("Vous avez un nouveau menu pour aujourd'hui", "success");

    //Flash the menu and the meal of the day if they exist
    setInterval(function () {
        //f.style.display = (f.style.display == 'none' ? '' : 'none');
        label1.style.color = (label1.style.color == 'red') ? 'gray' : 'red';
        label2.style.color = (label2.style.color == 'red') ? 'gray' : 'red';

    }, 500);

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


});

