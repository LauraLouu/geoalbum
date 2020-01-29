<!DOCTYPE html>
<html>

<head>
    <title>Storymap</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Girassol|Ovo|Oswald|Inria+Serif|Montserrat:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic&display=swap" rel="stylesheet">

    <!--Leaflet-->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css" integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ==" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew==" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.geodesic"></script>
    <script src="src/MovingMarker.js" type="text/javascript" charset="utf-8"></script>

    <!--Featherlight lightbox -->
    <link type="text/css" rel="stylesheet" href="src/featherlight/featherlight.css" />
    <link type="text/css" rel="stylesheet" href="src/featherlight/featherlight.gallery.css" />
    <script src="src/featherlight/jquery-1.7.0.min.js"></script>
    <script src="src/featherlight/featherlight.js" type="text/javascript" charset="utf-8"></script>
    <script src="src/featherlight/featherlight.gallery.js" type="text/javascript" charset="utf-8"></script>

    <!--Geoalbum-->
    <link rel="stylesheet" href="src/geoalbum.css">
    <script type="text/javascript" src="src/Leaflet.LetterMarker.js"></script>
    <script type="text/javascript" src="src/geoalbum.js"></script>

    <script>
        function responsiveSidebar() {
            document.getElementById("sidebar").style.right = "0";
        }

        function closeSidebar() {
            document.getElementById("sidebar").style.right = "-300px";
        }
    </script>


</head>

<body>