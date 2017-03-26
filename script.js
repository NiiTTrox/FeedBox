/**
 * Created by NiiTTrox on 26.03.2017.
 */




var data = [
    {"title": "PushUps", "dur": 45},
    {"title": "Kniebeuge", "dur": 60},
    {"title": "Baumstamm rechts", "dur": 30},
    {"title": "Baumstamm links", "dur": 30},
    {"title": "SitUps", "dur": 45}
];


window.addEventListener("load", function () {


    var feedElem = document.getElementById("Feed");

    for (var i = 0; i < data.length; i++) {

        feedElem.innerHTML += "Titel: " + data[i].title + " - " + data[i].dur + "s<br/>";
    }

    var count = 0;

    feedElem.addEventListener("click", function (event) {

        count++;

        console.log(count + "x geklickt.");

        if (count == 10) {
            alert("Lass das :)");
        }



        event.preventDefault();

    });



});




