<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('assets/head.php') ?>
    
    <title>Homepage</title>
</head>
<body>
    <?php include('assets/header.php') ?>
    
    
    <main class="padding">
    
        <h1 class="t-center">Kontakt</h1>

        <div class="grid grid-2">
            <div class="flex flex-center padding-x">
                <form action="void()" class="form">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="E-Mail">
                    <textarea name="message"cols="30" rows="10" placeholder="Nachricht"></textarea>
                </form>
            </div>
            <div class="flex flex-center flex-column padding-x">
                <p>Sie finden uns im <a href="https://tour.thebrandpower.ch/de/tour/ab86fbfjhw?play=1&qs=0&chtdh=1&title=0&help=0&sr=-.37%2C-1.16&ss=147" target="_blank">1. Stock des Kammgarn-Westflügels</a>. Der Eingang befindet sich in der Baumgartenstrasse. </p>
				<iframe id="google-map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10741.920997629773!2d8.635653!3d47.694513!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbc228d70c52bd1d0!2sa2-c!5e0!3m2!1sde!2sch!4v1551781165913" frameborder="0" style="border:0; height: 100%" allowfullscreen></iframe>
            </div>
        </div>

    </main>

    <?php include('assets/footer.php') ?>

    </body>
</html>