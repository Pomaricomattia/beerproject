<?php 


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    <link rel="stylesheet" type="text/css" href="style/stylecontact.css" />
    <link rel="" type="text/javascript" href="js/jscontact.js"
    <title>Contacts</title>
</head>
<body>
    <h3>Votre position actuelle</h3>
    <p> Ma positoin actuelle est : </p>
    <p> Ma longitude:<span id="malong"></span> </p>
    <p> Ma latitude:<span id="malat"></span> </p>
    <button onclick:"chercherPosition();">Chercher ma position </button>

    <h3>Eventuels Point de vente</h3>
    <div id="mapid">
    <script >
        function chercherPosition(){
            if (navigator.geolocation){
                navigator.geolocation.getCurrentPosition(positionTrouvee,erreurPosition);
            } else {
                alert("votre navigateur ne supporte pas la géolocalistation");
            }
        }

        function positionTrouvee(position) {
                document.getElementById("malong").innerHTML = position.coords.longitude + "°";document.getElementById("malat").innerHTML = position.coords.latitude + "°";
        }
        function erreurPorition(erreur){
            switch(erreur.code){
            case erreur.PERMISSION-DENIED: alert("PERMISSION-DENIED : l'utilisateur n'a pas autorisé l'accès à sa position.");break;
            case errur.POSITON_UNAVAILABLE: alert("POSITION_UNAVAILABLE : laposition n'a pas pu etre determinée.");break;
            case erreur.TIMEOUT: alert("TIMEOUT : le service n'a pas répondu à temps."); break;
            case erreur.UNKNOWN_ERROR: alert("UNKNOWN_ERROR: une erreur inconnue s'est produite");

            }
        }



                window.onload = function afficherlamap(){
                    var mymap = L.map('mapid').setView([50.499527,4.475402500000001], 13);
                    var tilesmap = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox/streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoicG9tcG9tanI5IiwiYSI6ImNrZ3RxczNvdzBtOXYydm1qNnNycmtmb2gifQ.sfuEb6yezZaTMIVG8VffGA'
        });
            tilesmap.addTo(mymap);
            var marker = L.marker([50.849689, 4.392154]).addTo(mymap);
            marker.bindPopup("<b>Python!</b><br>Beercellar").openPopup();
                }
        
    </script>
    
    </div>
</body>
</html>


