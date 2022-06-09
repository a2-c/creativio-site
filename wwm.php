<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('assets/head.php') ?>

    <title>Was wir machen</title>
</head>

<body>
    <?php include('assets/header.php') ?>

    <main>
        <div class="container-parent bg-light-blue">
            <div class="container">
                <div class="padding-y">
                    <h1 class="margin-remove">Projekte</h1>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container-parent">
            <div class="container">
                <div class="">
                    <div class="outline-proj">
                        <h2>Webapplikationen</h2>
                        <div class="padding">
                            <div class="detail margin-y">
                                <div class="detail-bilder">
                                    <img src="images/heroshot.JPG" alt="bild" width="150">
                                </div>
                                <div class="detail-text">
                                    <h3 class="margin-remove">Projekt Bla Bla Bla</h3>
                                    <p class="bold">Zusammenfassender Text</p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora saepe obcaecati laudantium aspernatur, incidunt deserunt quaerat! Fugiat est, mollitia itaque autem quas facilis tempora sed in vel eaque nesciunt consectetur?</p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora saepe obcaecati laudantium aspent consectetur?</p>
                                </div>
                            </div>
                            <div class="detail margin-y">
                                <div class="detail-text">
                                    <h3 class="margin-remove">Projekt Bla Bla Bla</h3>
                                    <p class="bold">Zusammenfassender Text</p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora saepe obcaecati laudantium aspernatur, incidunt deserunt quaerat! Fugiat est, mollitia itaque autem quas facilis tempora sed in vel eaque nesciunt consectetur?</p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora saepe obcaecati laudantium aspent consectetur?</p>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora saepe obcaecati laudantium aspent consectetur?</p>
                                </div>
                                <div class="detail-bilder">
                                    <img src="images/Projektmanagement.jpg" alt="bild" width="150">
                                </div>
                            </div>


                            <div>
                                <div class="detail-list-container">
                                    <h3 class="margin-remove">Andere Projekte</h3>
                                    <div class="detail-list grid grid-2">
                                        <div>

                                            <div>fasdf</div>
                                            <div>fasfasdfdf</div>
                                            <div>fasdfasdff</div>
                                            <div>fasdf</div>
                                            <div>fasdf</div>
                                            <div>fasdf</div>
                                        </div>
                                        <div>

                                            <div>fasfasdfdf</div>
                                            <div>fasfasdfdf</div>
                                            <div>fasdfasdff</div>
                                            <div>fasdf</div>
                                            <div>fafasdfsdf</div>
                                            <div>fasdf</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-parent bg-light-blue">
                <div class="container">
                    <div class="padding-y">
                        <h1 class="margin-remove">Produkte</h1>
                    </div>
                </div>
            </div>
            <div class="container-parent" id="numbers">
                <div class="container">
                    <div>
                        <h2>Gebäudedaten schweizweit</h2>
                        <div class="detail margin-y">
                            <div class="detail-text">
                                <h3 class="margin-remove">3D Modelle</h3>
                                <p class="bold">Das Informationsportal für Haussanierer</p>
                                <p>Unser 3D-Buildingsplayer lässt sich problemlos in Ihre Webseite integrieren und ermöglicht eine nahtlose Gebäude- und Portfolioanzeige. Topografische Gegebenheiten, Abstände zu Nachbargebäuden und Sichtachsen werden mit einem Klick sichtbar. In Verbindung mit unserer API erhalten Sie eine umfassende Sicht auf Visualisierung und Gebäudedaten.</p>

                                <div class="grid grid-3 t-small">
                                    <div>
                                        <p><span class="bold" id="abfragen" style="font-size: 2em;">0</span> Abfragen</p>
                                    </div>
                                    <div>
                                        <p><span class="bold" id="parzellen" style="font-size: 2em;">0</span> Parzellen</p>
                                    </div>
                                    <div>
                                        <p><span class="bold" id="gebaeude" style="font-size: 2em;">0</span> Jahre 3D Gebäude</p>
                                    </div>
                                </div>
                            </div>
                            <div class="detail-bilder">
                                <img src="images/Projektmanagement.jpg" alt="bild" width="150">
                            </div>
                        </div>



                        <div>
                            <div class="detail-list-container">
                                <h3 class="margin-remove">Andere Projekte</h3>
                                <div class="detail-list grid grid-2">
                                    <div>

                                        <div>fasdf</div>
                                        <div>fasfasdfdf</div>
                                        <div>fasdfasdff</div>
                                        <div>fasdf</div>
                                        <div>fasdf</div>
                                        <div>fasdf</div>
                                    </div>
                                    <div>

                                        <div>fasfasdfdf</div>
                                        <div>fasfasdfdf</div>
                                        <div>fasdfasdff</div>
                                        <div>fasdf</div>
                                        <div>fafasdfsdf</div>
                                        <div>fasdf</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <?php include('assets/footer.php') ?>

    <script>
        // Homepage Counter Simulation

        var scrollHappend = false;
        var screenHeight = $(window).height();
        var legendFrom = $('#numbers').offset().top + 60;

        var data = [
            [$('#abfragen'), 20663, 100],
            [$('#gebaeude'), 2500000, 4000],
            [$('#parzellen'), 3040000, 5000],
        ];

        var desiredTime = 300;

        console.log('fasdf')

        var myScrollFunc = function() {
            data.forEach(element => {
                console.log(desiredTime / element[1]);
                var calcTime = desiredTime / element[1];
                animateNumber(0, element[1], calcTime, element[2], element[0], 0);
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