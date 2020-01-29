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

    <!--div class="contentPage">
        <div class="headerImage" lat="51.049329" lon="13.738144">
            <div class="storyImg">
                <a data-featherlight href="https://dummyimage.com/300/09f/fff.png"><img src="https://dummyimage.com/300/09f/fff.png" alt="first image"></a>
            </div>
            <div class="blogInfo">
                <section class="datum">26.07.2020</section>
                <section class="ort">Dresden</section>
                <section class="autor">Laura</section>
            </div>
        </div>
        <div class="storyContent">
            <h1 style="display:none;">Intro - 1</h1>
            <div class="deutsch">
                <p>
                    <h2>ToDo</h2>
                    <p>all done</p>

            </div>
            <div class="englisch">
                <p>English</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="galleryImages">
            <a class="gallery0" href="https://i.imgur.com/fsyrScY.jpg">
                Open first slide (image)
                </a>
            <a class="gallery0" href="https://www.youtube.com/watch?v=xshEZzpS4CQ">
                    Open second slide (YouTube)
                    </a>
        </div>
    </!--div>

    <div class="contentPage">
        <div class="headerImage" lat="50.991788" lon="14.651">
            <div class="storyImg">
                <a data-featherlight href="https://dummyimage.com/300/09f/fff.png"><img src="https://dummyimage.com/300/09f/fff.png" alt="first image"></a>
            </div>
            <div class="blogInfo">
                <section class="datum">26.07.2020</section>
                <section class="ort">Eibau</section>
                <section class="autor">Laura</section>
            </div>
        </div>
        <div class="storyContent">
            <h1 style="display:none;">2</h1>
            <div class="deutsch">
                <p>German</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="englisch">
                <p>English</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="galleryImages">
            <a href="https://dummyimage.com/100/09f/fff.png" class="gallery1"><img src="https://dummyimage.com/100/09f/fff.png" alt="second image"></a>
            <a href="https://dummyimage.com/100/09f/fff.png" class="gallery1"><img src="https://dummyimage.com/100/09f/fff.png" alt="third image"></a>
            <a href="https://dummyimage.com/100/09f/fff.png" class="gallery1"><img src="https://dummyimage.com/100/09f/fff.png" alt="second image"></a>
            <a href="https://dummyimage.com/100/09f/fff.png" class="gallery1"><img src="https://dummyimage.com/100/09f/fff.png" alt="third image"></a>
        </div>
    </div>


    <div class="contentPage">
        <div class="headerImage" lat="50.6086" lon="10.6926437">
            <div class="storyImg">
                <a data-featherlight href="https://dummyimage.com/300/09f/fff.png"><img src="https://dummyimage.com/300/09f/fff.png" alt="first image"></a>
            </div>
            <div class="blogInfo">
                <section class="datum">26.07.2020</section>
                <section class="ort">Suhl</section>
                <section class="autor">Laura</section>
            </div>
        </div>
        <div class="storyContent">
            <h1 style="display:none;">3 Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</h1>
            <div class="deutsch">
                <p>German</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="englisch">
                <p>English</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="galleryImages">
            <a href="https://dummyimage.com/200/09f/fff.png" class="gallery2"><img src="https://dummyimage.com/100/09f/fff.png" alt="second image"></a>
            <a href="https://dummyimage.com/200/09f/fff.png" class="gallery2"><img src="https://dummyimage.com/100/09f/fff.png" alt="third image"></a>
            <a href="https://dummyimage.com/200/09f/fff.png" class="gallery2"><img src="https://dummyimage.com/100/09f/fff.png" alt="second image"></a>
            <a href="https://dummyimage.com/200/09f/fff.png" class="gallery2"><img src="https://dummyimage.com/100/09f/fff.png" alt="third image"></a>
        </div>
    </div>

    <div class="contentPage">
        <div class="headerImage" lat="50.0342" lon="8.55361">
            <div class="storyImg">
                <a href="https://dummyimage.com/300/09f/fff.png"><img src="https://dummyimage.com/300/09f/fff.png" alt="first image"></a>
            </div>
            <div class="blogInfo">
                <section class="datum">26.07.2020</section>
                <section class="ort">Frankfurt</section>
                <section class="autor">Laura</section>
            </div>
        </div>
        <div class="storyContent">
            <h1 style="display:none;">4</h1>
            <div class="deutsch">
                <p>German</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="englisch">
                <p>English</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="galleryImages">
            <a class="gallery3" href="https://dummyimage.com/1024x720/09f/fff.png"><img src="https://dummyimage.com/100/09f/fff.png" alt="second image"></a>
            <a class="gallery3" href="https://dummyimage.com/1024x720/09f/fff.png"><img src="https://dummyimage.com/100/09f/fff.png" alt="third image"></a>
            <a class="gallery3" href="https://dummyimage.com/1024x720/09f/fff.png"><img src="https://dummyimage.com/100/09f/fff.png" alt="second image"></a>
            <a class="gallery3" href="https://dummyimage.com/1024x720/09f/fff.png"><img src="https://dummyimage.com/100/09f/fff.png" alt="third image"></a>
        </div>
    </div>


    <div class="contentPage">
        <div class="headerImage" lat="-37.0079" lon="174.788">
            <div class="storyImg">
                <a href="https://dummyimage.com/300/09f/fff.png"><img src="https://dummyimage.com/300/09f/fff.png" alt="first image"></a>
            </div>
            <div class="blogInfo">
                <section class="datum">26.07.2020</section>
                <section class="ort">Auckland</section>
                <section class="autor">Laura</section>
            </div>
        </div>
        <div class="storyContent">
            <h1 style="display:none;">5</h1>
            <div class="deutsch">
                <p>German</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
            <div class="englisch">
                <p>English</p>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
                    no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                    et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
            </div>
        </div>
        <div class="galleryImages">
            <a class="gallery3" href="https://dummyimage.com/1024x720/09f/fff.png"><img src="https://dummyimage.com/100/09f/fff.png" alt="second image"></a>
            <a class="gallery3" href="https://dummyimage.com/1024x720/09f/fff.png"><img src="https://dummyimage.com/100/09f/fff.png" alt="third image"></a>
            <a class="gallery3" href="https://dummyimage.com/1024x720/09f/fff.png"><img src="https://dummyimage.com/100/09f/fff.png" alt="second image"></a>
            <a class="gallery3" href="https://dummyimage.com/1024x720/09f/fff.png"><img src="https://dummyimage.com/100/09f/fff.png" alt="third image"></a>
        </div>
    </div-->



</body>

</html>