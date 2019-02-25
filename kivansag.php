<!DOCTYPE html>
<html>
    <head> 
        <link type="text/css" href="kivansag.css" rel="stylesheet" /> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title></title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="index.js"></script>
        <script type="text/javascript">
            $(window).ready(function () {
                $('#kivansag').css('text-decoration', 'underline');

            });

        </script>
    </head>
    <body>
        <div id="mainContainer">
            <?php include 'includes/menu.php'; ?>
            <div class="form_container">
                <h1 class="intro">Ezen az űrlapon zenéket kérhetsz a lagzira!</h1>
                <form class="urlap" action="kivansag.php" method="post" >
                    <label>Név:</label><br>
                    <input type="text" name="nev" value="<?php if (isset($_POST["nev"])) {
                print $_POST["nev"];
            } ?>"><br>
                    <label>Kívánság:</label><br>
                    <textarea name="kivansag">
<?php if (isset($_POST["kivansag"])) {
    print $_POST["kivansag"];
} ?>
                    </textarea><br>
                    <input class="belepes" type="submit" value="Küldöm a kívánságom!">
                </form>
            </div>
        </div>

        <?php
        $settings = include 'settings.php';
        $db = $settings['database'];

        if (!@include_once("includes/fuggvenyek.php")) {
            echo 'az oldal jelenleg nem elérhető, kérjük próbáld meg kicsit később';
            exit();
        }

        if (!$adatbazis = @mysqli_connect($db['host'], $db['user'], $db['password'], $db['database'])) {
            echo 'Az oldal jelenleg nem elérhető, kérjük próbáld meg kicsit később';
            exit();
        }


        if ((isset($_POST["nev"])) && (isset($_POST["kivansag"]))) {

            $nev = trim($_POST["nev"]);
            $kivansag = trim($_POST["kivansag"]);
            $hibas = false;

            if (preg_match("/^[a-zöüóőúéáűíÖÜÓŐÚÉÁŰÍ\. -]{5,200}$/i", $nev) == 0) {
                print "Add meg a neved!<br>";
                $hibas = true;
            }
            
            if(strlen($kivansag)<4){
                print 'Kérj előadót vagy számot!';
                $hibas=true;
            }
            //print "<div style='padding-left:10px;'>" . $nev . "<br>" . "Kívánsága: " . $kivansag . "</div>";

            if (!$hibas) {
                //felvétel az adatbázisba
                $sql = 'insert into gaboroes_vendegkonyv values (not null, "' . $nev . '", "' . $kivansag . '")';

                if (!mysqli_query($adatbazis, $sql)) {
                    print 'hiba';
                } else {
                    print 'Sikeres hozzászólás!';
                }
            }
        }
        ?>
        <?php
        if (!$eredmeny = mysqli_query($adatbazis, 'select * from gaboroes_vendegkonyv')) {
            print 'Nem sikerült megjeleníteni a hozzászólásokat!';
        } else {
            print '<table border="1" cellpadding="5">';

            while ($sor = mysqli_fetch_assoc($eredmeny)) {

                print '<div class="kiiratas">Név: ' . $sor['nev'] . '</div><br>';
                print '<div class="kiiratas">Kívánság: ' . $sor['kivansag'] . '</div><br>';
            }
        }
        ?>
    </body>
</html>


