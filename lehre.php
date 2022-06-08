<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('assets/head.php') ?>

    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.14.1/dist/js/uikit-icons.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <title>Lehre</title>
</head>

<body>
    <?php include('assets/header.php') ?>


    <main>

        <!-- Hero Shot -->
        <div class="lehre-blob" id="lehre-blob">
            <div class="container" style="padding-top: 0">

                <!--                 <h1>Lehre</h1>
                <p>Wir bieten alle zwei Jahre eine vier jährige Mediamatiker Ausbildung an.</p> -->

                <?php include('images/test2.svg') ?>
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
            rect.addEventListener('mouseover', active);
            rect.addEventListener('mouseout', inactive);
        }
        var rects = document.querySelectorAll('polygon');
        for (var rect of rects) {
            rect.addEventListener('mouseover', active);
            rect.addEventListener('mouseout', inactive);
        }

        $('.hover-box').css('display', 'unset');

        var currentrect = '';

        var infos = {
            'house': {
                'title': 'Himmel',
                'text': 'Das ist der himmel ... ',
                'imgpath': 'https://a2-c.ch/img/web-development.jpg',
            },
            'grass': {
                'title': 'Boden',
                'text': 'Das ist der Boden',
                'imgpath': 'https://a2-c.ch/img/elearning_statistik.png',
            }
        }

        function active(name) {
            console.log(this)

            currentrect = this
        }

        function inactive(name) {
            currentrect = ''
        }

        $("#lehre-blob").mousemove(function(event) {
            
            if (currentrect == '') {
                $('.hover-box').css('display', 'none');
                return
            }
            else{
                $('.hover-box').css('display', 'unset');
            }

            var cInof = infos[currentrect.getAttribute('id')]

            $('.hover-box').css('top', event.pageY + 30);
            $('.hover-box').css('left', event.pageX - $('.hover-box').width() / 2);

            $('.hover-box').html(
                '<div><h2>' + cInof['title'] + '</h2>' +
                '</div>' + 
                '<p>' + cInof['text'] + '</p>' +
                '<img src="' + cInof['imgpath'] + '" alt="fasdfasd">'
                );
        });

        /* <img src="' + cInof['imgpath'] + '" alt="fasdfasd"> */
        /* <span uk-icon="close" onclick="$(\'.hover-box\').css(\'display\', \'none\');"></span> */
    </script>

</body>

</html>