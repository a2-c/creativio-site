<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('assets/head.php') ?>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>

    <title>Lehre</title>
</head>

<body>
    <?php include('assets/header.php') ?>


    <main>

        <!-- Hero Shot -->
        <div class="lehre-blob">
            <div class="container">

                <h1>Lehre</h1>

                <!-- <svg version="1.1" id="Ebene_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 3401.6 3401.6" style="enable-background:new 0 0 3401.6 3401.6;" xml:space="preserve">
                    <style type="text/css">
                        .st0, .st1 {
                            fill: rgba(0,0,0,0);
                            stroke: #000000;
                            stroke-width: 1.0038;
                            stroke-miterlimit: 10;
                        }

                        rect:hover {
                            fill: #f2f2f2;
                        }
                    </style>
                    <rect class="st0" width="1913.4" height="3401.6" title="KV" text="lorem kfjasdlkfj dflkasj dflakjsdfkjasldkfja sdfjlkas dlkfjasldkfjalk sjdflkajsdfkaf f asldkf jalksd flkas df adsf a dsf" imgpath="images\Aus- und Weiterbildung.jpg" />
                    <rect x="1913.4" class="st1" width="1488.2" height="3401.6" title="Informatik" text="lorem kfjasdlkfj dflkasj dflakjsdfkjasldkfja sdfjlkas dlkfjasldkfjalk sjdflkajsdfkaf f asldkf jalksd flkas df adsf a dsf" imgpath="images/heroshot.jpg" />
                </svg> -->
            </div>

        </div>

        <div class="margin-y padding-y">
            <div class="container">
                <h2>Ausbildungsplatz: Mediamatiker</h2>
                <p>Zurzeit haben wir keine offenen Ausbildungsplätze als Mediamatiker.</p>
                <p>Seit nun mehr als 15 Jahren, können junge Menschen bei der a2-c AG eine Lehre als Mediamatiker anstreben. Die vierjährige Lehre bringt gemeinsam mit der Maturität einen guten Start ins Berufsleben und viele Möglichkeiten für deinen weiterführenden Weg. Vom Webentwickler bis zum Marketingmanager stehen dir nach der Lehre alle Türen offen. Als Allrounder wird man Sich viele Fähigkeiten in den Bereichen Administration, Buchhaltung, Marketing und Informatik aneignen. Wenn du dich also für das Aufbereiten von Informationen und das Mitwirken an komplexen Projekten interessierst, dann bist du bei uns genau richtig!</p>
            </div>
        </div>

        <div class="bg-grey padding-y">
            <div class="container">
                <div>
                    <div>
                        <h3>Anforderungen</h3>
                        <ul>
                            <li>Kreativität</li>
                            <li>Organisationstalent</li>
                            <li>ausgeprägte Teamfähigkeit</li>
                            <li>Einfühlungsvermögenschnelle Auffassungsgabe</li>
                            <li>abstrakt-logisches Denken</li>
                            <li>technisches Verständnis</li>
                            <li>Kommunikationsfähigkeit</li>
                            <li>Konzentrationsfähigkeit</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="hover-box">
            <h2>Thema</h2>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, veritatis! Sit fuga harum, architecto itaque amet sequi, magni dolores eveniet et similique totam! Dolorem quam officia eveniet vero et itaque.</p>
            <img src="images/heroshot.JPG" alt="fasdfasd">
        </div>

    </main>

    <?php include('assets/footer.php') ?>

    <script>
        var rects = document.querySelectorAll('rect');
        for (var rect of rects) {
            rect.addEventListener('click', cb);
        }

        function cb() {
            $('.hover-box').css('top', event.clientY);
            $('.hover-box').css('left', event.clientX - $('.hover-box').width() / 2);

            $('.hover-box').css('display', 'unset');

            $('.hover-box').html(
                '<div><h2>'+this.getAttribute('title')+'</h2>'+
                '<span uk-icon="close" onclick="$(\'.hover-box\').css(\'display\', \'none\');"></span></div>'+
                '<p>'+this.getAttribute('text')+'</p>'+
                '<img src="'+this.getAttribute('imgpath')+'" alt="fasdfasd">'
            );
        }
    </script>

</body>

</html>