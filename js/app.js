

/* Videos */

Array.from(document.querySelectorAll('[data-video]')).forEach((el) => {
    el.querySelector('img').addEventListener('click', () => {
        el.querySelector('.video-panel').style.display = 'flex'
    })

    el.querySelector('.video-panel').addEventListener('click', () => {
        el.querySelector('.video-panel').style.display = 'none'
    })

})

/* Song */
{
    let sound;

    let title = document.getElementById('song-title');

    const pausiertText = 'Pausiert'
    const pausiertPath = 'images/player/Pause.png'
    const spielendText = '<bold>Spielend</bold>'
    const spielendPath = 'images/player/play.png'

    const songPlaylist = [
        ['Five Stars - Atom Bomb Baby', 'atom bomb baby.mp3', 'https://www.youtube.com/watch?v=6oGGLpl18rs'],
        ['Dion - The Wanderer', 'the wanderer.mp3', 'https://www.youtube.com/watch?v=SbYa7NBYyRc'],
        ['Marty Robbins - Big Iron', 'big iron.mp3', 'https://www.youtube.com/watch?v=zzICMIu5zFY'],
        ['Juan Gabriel - No Tengo Dinero', 'no tengo dinero.mp3', 'https://www.youtube.com/watch?v=SSNSRcpuchw'],
        ['Danny Kaye - Civilization', 'civilization.mp3', 'https://www.youtube.com/watch?v=b8x0weOPhGc'],
    ];

    currentSongIndex = 0;

    title.innerHTML = songPlaylist[currentSongIndex][0]
    songpath = "files/audio/" + songPlaylist[currentSongIndex][1]

    sound = new Howl({
        src: [songpath],
        volume: 1.0,
    });

    var seekId;
    var saveSeek;

    function nextSong(dir = "right") {
        var button = document.getElementById('pausebutton');

        if (dir == "right") {
            currentSongIndex = currentSongIndex + 1
        } else {
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
        songpath = "files/audio/" + songPlaylist[currentSongIndex][1]

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
        } else {
            button.setAttribute('state', 'paused')
            button.setAttribute('src', spielendPath)
            button.innerHTML = pausiertText
            sound.pause()
            saveSeek = sound.seek(seekId);
            console.log(saveSeek)
        }
    }
}