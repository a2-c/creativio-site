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

<body id="all">
    <?php include('assets/header.php') ?>

    <style>

    </style>

    <div class="lehre-player appear-at-large">
        <div class="lehre-player-title">
            <div id="song-title">Song Title</div>
            <!-- <div>0 / 2:30</div> -->
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.1/howler.min.js"></script>
        <script>
            var started = false;
            var sound;

            var title = document.getElementById('song-title');
            
            var pausiertText = 'Pausiert'
            var pausiertPath = 'images/player/Pause.png'
            var spielendText = '<bold>Spielend</bold>'
            var spielendPath = 'images/player/play.png'

            const songPlaylist = [
                ['Dion Wanderer', 'wanderer.mp3'],
                ['Toto - Africa', 'africa.mp3'],
                ['hello - What is Love', 'love.mp3'],
            ];

            currentSongIndex = 0;

            title.innerHTML = songPlaylist[currentSongIndex][0]
            songpath = "files/audio/"+songPlaylist[currentSongIndex][1]

            sound = new Howl({
                src: [songpath],
                volume: 1.0,
            });

            var seekId;
            var saveSeek;
            
            function nextSong(dir="right") {
                var button = document.getElementById('pausebutton');
                
                if (dir == "right") {
                    currentSongIndex = currentSongIndex + 1
                }
                else {
                    currentSongIndex = currentSongIndex - 1
                }

                if (currentSongIndex > songPlaylist.length - 1) {
                    currentSongIndex = 0
                }
                if (currentSongIndex == -1) {
                    currentSongIndex = songPlaylist.length - 1
                }

                console.log(currentSongIndex)
                console.log(songPlaylist[currentSongIndex])

                sound.pause()
                button.setAttribute('state', 'playing')
                button.setAttribute('src', pausiertPath)
                button.innerHTML = pausiertText

                title.innerHTML = songPlaylist[currentSongIndex][0]
                songpath = "files/audio/"+songPlaylist[currentSongIndex][1]

                sound = new Howl({
                    src: [songpath],
                    volume: 1.0,
                });
                var seekId = sound.play()

                console.log('Seek Id ', seekId);
            }

            function togglePause() {
                var button = document.getElementById('pausebutton');

                console.log(button.getAttribute('state'))

                if (button.getAttribute('state') == 'paused') {
                    button.setAttribute('state', 'playing')
                    button.setAttribute('src', pausiertPath)
                    button.innerHTML = spielendText
                    var seekId = sound.play()
                    sound.seek(saveSeek, seekId);
                }
                else {
                    button.setAttribute('state', 'paused')
                    button.setAttribute('src', spielendPath)
                    button.innerHTML = pausiertText  
                    sound.pause()
                    saveSeek = sound.seek(seekId);
                    console.log(saveSeek)
                }
            }
        </script>

        <div class="lehre-player-controls">
            <img src="images/player/Skip_Rechts.png" width="50" onclick="nextSong('left')">
            <img src="images/player/play.png" width="50" id="pausebutton" onclick="togglePause()" state="paused">
            <img src="images/player/Skip_Links.png" width="50" onclick="nextSong()">
        </div>
    </div>

    <main>

        <!-- Hero Shot -->
        <div class="lehre-blob" id="lehre-blob">
            <div class="appear-at-medium" style="height: 100%; padding: 0; text-align: center;">
            
                <?php include('images/lehreblobv3.svg') ?>
            </div>

            <div class="hide-at-medium blob-small">
                <?php include('images/lehreblobv3.svg') ?>
            </div>

            <div class="hover-box">
                <h2>Thema</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate, veritatis! Sit fuga harum, architecto itaque amet sequi, magni dolores eveniet et similique totam! Dolorem quam officia eveniet vero et itaque.</p>
                <img src="images/heroshot.JPG" alt="fasdfasd">
            </div>

        </div>

        <div class="padding-y bg-grey ">
            <div class="container">
                <h2>Ausbildungsplatz: Mediamatiker</h2>
                <p>Zurzeit haben wir keine offenen Ausbildungsplätze als Mediamatiker.</p>
                <p>Seit nun mehr als 15 Jahren, können junge Menschen bei der a2-c AG eine Lehre als Mediamatiker anstreben. Die vierjährige Lehre bringt gemeinsam mit der Maturität einen guten Start ins Berufsleben und viele Möglichkeiten für deinen weiterführenden Weg. Vom Webentwickler bis zum Marketingmanager stehen dir nach der Lehre alle Türen offen. Als Allrounder wird man Sich viele Fähigkeiten in den Bereichen Administration, Buchhaltung, Marketing und Informatik aneignen. Wenn du dich also für das Aufbereiten von Informationen und das Mitwirken an komplexen Projekten interessierst, dann bist du bei uns genau richtig!</p>
            </div>
        </div>
        <div class="padding-y">
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
        <div class="bg-grey padding-y">
            <div class="container">
                <div>
                    <div>
                        <h3>Schnupperlehre</h3>
                        <p>Falls du mal einen Einblick in den Beruf des Mediamatikers haben willst kannst du uns unter Kontakt mit deinem Anliegen erreichen.</p>

                        <div class="grid grid-2">
                            <div> 
                                <h4>Zwei Tage</h4>
                            </div>
                            <div>
                                <h4>Ein Tag</h4>
                            </div>
                        </div>

                        <p>Weitere Infos zu Beruf des Mediamatikers</p>
                        <a href="https://biz-sh.ch/?rubrik=biz_detail&lang=1&SWISSDOK_NR_AD=0561130" target="_blank">BIZ Schaffhausen</a><br>
                        <a href="https://www.berufsberatung.ch/dyn/show/1900?lang=de&idx=30&id=4034" target="_blank">Berufsberatung</a>
                    </div>
                </div>
            </div>
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
        var rects = document.querySelectorAll('circle');
        for (var rect of rects) {
            rect.addEventListener('mouseover', active);
            rect.addEventListener('mouseout', inactive);
        }
        var rects = document.querySelectorAll('path');
        for (var rect of rects) {
            rect.addEventListener('mouseover', active);
            rect.addEventListener('mouseout', inactive);
        }

        $('.hover-box').css('display', 'none');

        var currentrect = '';

        var infos = {
            'uhr': {
                'title': 'Zeit',
                'text': 'Die Lehre dauert vier Jahre wobei man zwei Tage der Woche in der Schule ist. Man arbeitet am Tag 8,4 Stunden.',
                'imgpath': '',
            },
            'kv': {
                'title': 'Kaufperson',
                'text': 'Das ist der Boden',
                'imgpath': '',
            },
            'pflanze': {
                'title': 'Haushalt',
                'text': 'Im Büro dürfen wir auch kleinere Aufgaben erledigen wie den Einkauf, das Pflanzen giessen, Das Telefon abnehmen.',
                'imgpath': '',
            },
            'computer': {
                'title': 'Informatik',
                'text': 'Duch den Betrieb und die Schule lernen wir wie man selber Webseiten programmiert. Es wird einem auch ein algorythmischer denkprozess nahegelegt der hilft mit komplexeren programmier Themen umzuggehen wie bspw. Datenbanken.',
                'imgpath': '',
            },
            'tel': {
                'title': 'Kommunikation',
                'text': 'Als Mediamatiker ist es wichtig mit anderen zu kommunizieren sei es im Team oder mit Kunden.',
                'imgpath': '',
            },
            'schule': {
                'title': 'Ausbildung',
                'text': 'In der Schule lernen wir viele dinge die uns später im alltag der Arbeit begegnen. </br></br> In den gestaltungs Fächern wird uns die Theorie nahe gelegt so dass wir sie dann in praktischen projekten umsetzen können. Was wir für Rechte haben und wie die Wirtschaft funktioniert lernen wir wir jede woche während drei lektionen in Wirtschaft und Recht. Manche Fächer die man aus der kennt wie sport mathematik oder englisch begleiten uns immer noch.',
                'imgpath': 'https://clientis-lehrlinge.ch/images_upload/gross/KV_Schaffhausen.jpg',
            },
            'farbe': {
                'title': 'Kreativität',
                'text': '',
                'imgpath': '',
            },
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
            } else {
                $('.hover-box').css('display', 'unset');
            }

            var cInof = infos[currentrect.getAttribute('id')]

            if (screen.height / 2 < event.clientY) {
                $('.hover-box').css('top', 'unset');
                $('.hover-box').css('bottom', screen.height - event.pageY - 30);
            } else {
                $('.hover-box').css('bottom', 'unset');
                $('.hover-box').css('top', event.pageY + 30);
            }

            $('.hover-box').css('left', event.pageX - $('.hover-box').width() / 2);

            if (cInof['imgpath'] != '') {

                $('.hover-box').html(
                    '<div><h2>' + cInof['title'] + '</h2>' +
                    '</div>' +
                    '<p>' + cInof['text'] + '</p>' +
                    '<img src="' + cInof['imgpath'] + '" alt="fasdfasd">'
                );
            } else {
                $('.hover-box').html(
                    '<div><h2>' + cInof['title'] + '</h2>' +
                    '</div>' +
                    '<p>' + cInof['text'] + '</p>'
                );
            }
        });

        /* <img src="' + cInof['imgpath'] + '" alt="fasdfasd"> */
        /*  */
        /* <span uk-icon="close" onclick="$(\'.hover-box\').css(\'display\', \'none\');"></span> */
    </script>

</body>

</html>