<?php
include('header.php')
?>


<?php
$dir    = '/posts';
$files1 = scandir($dir);
$files2 = scandir($dir, 1);

print_r($files1);
print_r($files2);
?>



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