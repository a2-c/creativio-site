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
        <div>
            <div class="container-parent bild">
                <div class="t-color-grey container heroshot">
                    <h1 class="bold">a2-c</h1>
                    <h3>Vom ersten Gedankensplitter <br> bis zur fertigen Lösung</h3>
                </div>
            </div>
        </div>

        <!-- Unsere Drei Hauptbereiche -->
        <div class="container-parent">
            <div class="container">
                <!-- <h2 class="abbschnitt-titel">Über Uns</h2> -->
                <div class="grid grid-2 flex-middle padding-y">

                    <div class="">
                        <p class="ideenschmiede">Wir verstehen uns als <span class="t-color-blue">Ideenschmiede</span> für individuelle Lösungen in den Bereichen ...</p>
                    </div>

                    <div>
                        <div class="t-center margin-y">
                            <a href="" class="reset-link">
                                <img src="images/Innovative Webapplikationen.png" alt="Innovative Webapplikationen" style="width: 30%">
                                <p class="ideenschmiedeklein">Innovative Webapplikationen</p>
                            </a>
                        </div>
                        <div class="t-center margin-y">
                            <a href="" class="reset-link">
                                <img src="images/Aus- und Weiterbildung.jpg" alt="Innovative Webapplikationen" style="width: 30%">
                                <p class="ideenschmiedeklein">Aus - und Weiterbildung</p>
                            </a>
                        </div>
                        <div class="t-center margin-y">
                            <a href="" class="reset-link">
                                <img src="images/Projektmanagement.jpg" alt="Innovative Webapplikationen" style="width: 30%">
                                <p class="ideenschmiedeklein">Projektmanagement</p>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="bg-grey margin-y padding-y">
            <div class="container">
                <div class="grid grid-2 flex-middle">
                    <div>
                        <img src="images/martinVideoVorschau.png" alt="martinVideoVorschau" id="martinVideoVorschau" style="width: 100%" onclick="showvideo()">
                        <div class="t-center">
                            <b>Martin Ahrend über die a2-c</b>
                        </div>
                    </div>
                    <div>
                        <h2 class="team-name">Martin Ahrend</h2>
                        <p class="team-title">a2-c AG CEO</p>

                        <div class="grid-2 grid">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint consequatur quis qui amet quibusdam vero nisi.</p>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint consequatur quis qui amet quibusdam vero nisi.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="martinvideo" id="martinvideo" onclick="hidevideo()">
                <div class="martinvideo-panel">
                    <iframe style="width: 100%; height: 100%" src="https://www.youtube.com/embed/0e3Zko031RE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            <script>
                function showvideo() {
                    document.getElementById('martinvideo').style.display = 'flex';
                    document.body.style.overflow = "hidden"
                }
                function hidevideo() {
                    document.getElementById('martinvideo').style.display = 'none'
                    document.body.style.overflow = "unset"
                }
            </script>
        </div>


        <div class="margin-y padding-y">
            <div class="container">

                <h2 class="abbschnitt-titel">Unser Team</h2>
                <p>Unser Team setzt sich aus den Bereichen bla bal bla, bla bla und bla bla zusammen und wir verstehen uns miteinander genau so gut wie mit der Technik. Dies ist seit Jahren ein Erfolgsrezept für eine Angenehme und wirkungsvolle zusammenarbeit. Wir Freuen uns immer darauf neue Mitarbeiter zu begrüssen.</p>

                <?php include('assets/team.php') ?>

            </div>
        </div>

        <div class="bg-grey margin-y padding-y">
            <div class="container">

                <!-- <p class="t-color-red">INCLUDE JS FROM OLDE SITE</p> -->

                <h2 class="abbschnitt-titel">Unser Weg</h2>

                <?php include('assets/timeline.php') ?>

            </div>
        </div>

        <div class="margin-y padding-y" id="numbers">
            <div class="container">

                <h2 class="abbschnitt-titel">Unser Erfolg in Zahlen</h2>

                <div class="grid grid-2 t-large">
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
<!--                     <div>
                        <p><span class="bold t-color-black" id="lehrlinge" style="font-size: 2em;">52</span> Glückliche Kunden</p>
                    </div> -->
                </div>

            </div>
        </div>


    </main>

    <?php include('assets/footer.php') ?>

    <script>
        $(window).on('resize', function() {


            var timeline = $('.timeline')
            if ($(window).width() >= 960) {
                timeline.css('overflow', 'auto')
                timeline.css('height', '630px')
            } else {
                timeline.css('overflow', 'hidden')
            }

            var timeline_height = $('#timeline_box').css('height');

            $('#timeline_strich').height(timeline_height);
            $('#timeline_strich').css('margin-bottom', '-' + timeline_height);
        });

        function show_more() {
            var btn = $('#timeline_show_more_btn');
            var timeline = $('.timeline')
            console.log(btn.text().toUpperCase());

            var state = btn.text().toUpperCase();

            if (state == 'MEHR ZUR GESCHICHTE') {
                btn.text('Weniger')
                timeline.css('overflow', 'visible')
                timeline.css('height', '100%')
            }
            if (state == 'WENIGER') {
                btn.text('MEHR ZUR GESCHICHTE')
                timeline.css('overflow', 'hidden')
                timeline.css('height', '630px')
            }
        }
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