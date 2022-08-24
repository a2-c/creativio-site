<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('assets/head.php') ?>

    <title>Homepage</title>
</head>

<body>
    <?php include('assets/header.php') ?>


    <main>
        <!-- Hero Shot -->

        <div class="heroshot">
            <img src="https://www.kammgarn-west.ch/wp-content/uploads/2019/04/eingangsbereich_dsc2946-2100x900-c-default.jpg" alt="Kaktus" class="heroshot-image">
            <div class="container">
                <img src="images/logo/logo1.svg" width="120" alt="">
                <h3>Vom ersten Gedankensplitter <br> bis zur fertigen Lösung</h3>
            </div>
        </div>


        <div class="child-pt-3 child-pb-3">

            <!-- Unsere Drei Hauptbereiche -->
            <div class="">
                <div class="container">
                    <!-- <h2 class="abbschnitt-titel">Über Uns</h2> -->
                    <div class="grid grid-2 flex-middle ">

                        <div class="">
                            <p class="ideenschmiede" style="display: flex;
                                flex-direction: column;
                                justify-content: center; height: 100%">Wir verstehen uns als <span class="t-color-blue">Ideenschmiede</span> für individuelle Lösungen in den Bereichen ...</p>
                        </div>

                        <div>
                            <div class="t-center ">
                                <a href="" class="reset-link">
                                    <img src="images/Innovative Webapplikationen.png" alt="Innovative Webapplikationen" style="width: clamp(200px, 30%, 40%)">
                                    <p class="ideenschmiedeklein">Innovative Webapplikationen</p>
                                </a>
                            </div>
                            <div class="t-center ">
                                <a href="" class="reset-link">
                                    <img src="images/Aus- und Weiterbildung.jpg" alt="Innovative Webapplikationen" style="width: clamp(200px, 30%, 40%)">
                                    <p class="ideenschmiedeklein">Aus - und Weiterbildung</p>
                                </a>
                            </div>
                            <div class="t-center ">
                                <a href="" class="reset-link">
                                    <img src="images/Projektmanagement_v5.png" alt="Innovative Webapplikationen" style="width: clamp(200px, 45%, 45%)">
                                    <p class="ideenschmiedeklein">Projektmanagement</p>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="bg-grey  ">
                <div class="container">
                    <div class="grid grid-2 flex-middle">
                        <div>
                            <div data-video>
                                <img src="images/martinVideoVorschau.png">
                                <div class="video-panel">
                                    <iframe src="https://www.youtube.com/embed/0e3Zko031RE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="t-center">
                                <b>Martin Ahrend über die a2-c</b>
                            </div>
                        </div>
                        <div>
                            <h2 class="team-name">Martin Ahrend</h2>
                            <p class="team-title">a2-c AG CEO</p>

                            <div class="grid-2 grid" style="margin-bottom: 2em">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint consequatur quis qui amet quibusdam vero nisi.</p>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint consequatur quis qui amet quibusdam vero nisi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <div class="container">

                    <h2 class="abbschnitt-titel">Unser Team</h2>
                    <p style="margin-bottom: 3em; max-width: 730px;">Unser Team setzt sich aus Fachleuten unterschiedlicher Ausrichtung, Ausbildung und Erfahrung zusammen. Seit 2004 ist dies die erfolgreiche Grundlage für ein ideenreiches und zielgerichtetes Arbeiten mit und für unsere Kunden. Innerhalb des Teams können wir auf Know-How in Aus- und Weiterbildung, Hochschullehre, Projektmanagement, Customer Relationship Management, Unternehmensstrategie, Informatik und Medien zurückgreifen.</p>

                    <?php include('assets/team.php') ?>

                </div>
            </div>

            <div class="bg-grey">
                <div class="container">
                    <h2 class="abbschnitt-titel">Unser Weg</h2>

                    <?php include('assets/timeline_v2.php') ?>

                </div>
            </div>

            <div id="numbers" class="mb-5">
                <div class="container">

                    <h2 class="abbschnitt-titel">Unser Erfolg in Zahlen</h2>

                    <div class="grid grid-2 t-large grid-2-at-numbers">
                        <div>
                            <p><span class="bold t-color-black" id="angestellte" style="font-size: 2em; margin-right: 0.5em">0</span> Angestelle</p>
                        </div>
                        <div>
                            <p><span class="bold t-color-black" id="erfahrung" style="font-size: 2em; margin-right: 0.5em">0</span> Jahre Erfahrung</p>
                        </div>
                        <div>
                            <p><span class="bold t-color-black" id="projekte" style="font-size: 2em; margin-right: 0.5em">0</span> Erfolgreiche Projekte</p>
                        </div>
                        <div>
                            <p><span class="bold t-color-black" id="lehrlinge" style="font-size: 2em; margin-right: 0.5em">0</span> Lehrlinge ausgebildet</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('assets/footer.php') ?>

    <script>
        /*         const imageUrls = [
            ["images/heroshotbilder/DSC00767.JPG", 'grayscale(50%)'],
            ["images/heroshotbilder/DSC00799.JPG", 'grayscale(50%)'],
            ["images/heroshotbilder/DSC00919.JPG", 'grayscale(50%)'],
            ["images/heroshotbilder/DSC09530.JPG", 'grayscale(50%)'],
            ["images/heroshotbilder/DSC09971.JPG", 'grayscale(50%)'],
            ["images/heroshotbilder/DSC00705.JPG", 'grayscale(50%)'],
            
            ["images/heroshotbilder/DSC00762.JPG", 'grayscale(50%)'],
        ]

        let index = 0

        changeBG()

        window.setInterval(changeBG, 5000)

        function changeBG() {
            console.log(imageUrls[index]);

            document.querySelector('.bild')
            .style.backgroundImage = `url(${imageUrls[index][0]})`;


            index++

            index = index == imageUrls.length ? 0 : index
        } */
    </script>

    <script>
        // Homepage Counter Simulation

        var scrollHappend = false;
        var screenHeight = $(window).height();
        var legendFrom = $('#numbers').offset().top + 60;

        var data = [
            [$('#projekte'), 195, 1],
            [$('#angestellte'), 8, 1],
            [$('#erfahrung'), 17, 1],
            [$('#lehrlinge'), 9, 1],
        ];

        var desiredTime = 3000;

        console.log('fasdf')

        var myScrollFunc = function() {
            data.forEach(element => {
                console.log(desiredTime / element[1]);
                var calcTime = desiredTime / element[1];
                animateNumber(0, element[1], calcTime, 1, element[0], 0);
            });

        };

        $(window).scroll(function() {

            var y = $(window).scrollTop();

            if (y + screenHeight >= legendFrom) {
                if (!scrollHappend) {
                    myScrollFunc();
                    scrollHappend = true;
                }
            }
        });

        function animateNumber(start, stop, speed, increment, field, flache) {
            var i = setInterval(function() {

                if (start >= stop) {
                    clearInterval(i);
                    if (flache > 0) {
                        field.text(commafy(stop) + ' m²')
                    } else {
                        field.text(commafy(stop))
                    }
                } else {
                    start += increment;
                    if (flache > 0) {
                        field.text(commafy(start) + ' m²')
                    } else {
                        field.text(commafy(start))
                    }
                }
            }, speed);
        }

        function commafy(num) {
            var str = num.toString().split('.');

            if (str[0].length >= 4) {
                str[0] = str[0].replace(/(\d)(?=(\d{3})+$)/g, '$1\'');
            }

            if (str[1] && str[1].length >= 4) {
                str[1] = str[1].replace(/(\d{3})/g, '$1 ');
            }

            return str.join('.');
        }
    </script>

</body>

</html>