<div style="position: sticky;
    top: 0; z-index: 99; box-shadow: 0px 10px 100px rgba(0, 0, 0, 0.107);" class="bg-white">

    <div class="container-parent">
        <div class="container" style="padding-top: 0; padding-bottom: 0;" id="header">

            <header>
                <a href="index.php" style="height:24px;width: 80px">
                    <img src="images/logo.svg">
                </a>

                <nav class="largenav">
                    <ul>
                        <li><a href="index.php" class="">Über Uns</a></li>
                        <span class="nav-divider">|</span>
                        <li class="dropdown">
                            <a href="wwm.php" class="flex flex-middle"><span style="margin-right: 10px">Was wir machen</span>



                                <ul>
                                    <li><a href="wwm.php#projekte">Projekte</a></li>
                                    <li><a href="wwm.php#produkte">Produkte</a></li>
                                </ul>
                        </li>



                        <span class="nav-divider">|</span>
                        <li><a href="lehre.php" class="">Lehre</a></li>
                        <span class="nav-divider">|</span>
                        <li><a href="kontakt.php" class="">Kontakt</a></li>
                    </ul>
                </nav>
                <nav class="smallnav">
                    <svg style="height:35px" onclick="showmenu()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM0 256C0 238.3 14.33 224 32 224H416C433.7 224 448 238.3 448 256C448 273.7 433.7 288 416 288H32C14.33 288 0 273.7 0 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z" />
                    </svg>
                </nav>
                    <div class="menu" id="menu">
                        <div style="padding-bottom: 2em">
                            <a  href="index.php">Über Uns</a><br>
                        </div>
                        <div style="padding-bottom: 2em">
                            <a  href="wwm.php">Was wir machen</a><br>
                        </div>
                        <div style="padding-bottom: 2em">
                            <a  href="lehre.php">Lehre</a><br>
                        </div>
                        <div style="padding-bottom: 2em">
                            <a  href="kontakt.php">Kontakt</a><br>
                        </div>
                    </div>
                    <script>
                        document.getElementById('menu').style.display = 'none'
                        function showmenu() {
                            if (document.getElementById('menu').style.display == 'none') {
                                document.getElementById('menu').style.display = 'unset';
                                document.body.style.overflow = "hidden"
                            }
                            else {
                                document.getElementById('menu').style.display = 'none'
                                document.body.style.overflow = "unset"
                            }
                        }

                        function hidemenu() {
                        }
                    </script>
            </header>
        </div>
    </div>
</div>