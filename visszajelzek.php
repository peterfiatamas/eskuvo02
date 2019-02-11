<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="jossz.css" rel="stylesheet" />       
        <meta charset="UTF-8">
        <title></title>        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="index.js"></script>
    </head>
    <body>
        <?php include 'includes/menu.php'; ?>
        <?php
        ?>
        <div class="test">
            <div id="urlapContainer">
                <form id="urlap" action="visszajelzek.php" method="post">
                    <h2>Jelezd, ha jössz!</h2><br>
                    <label>Név:</label><br>
                    <input class="beviteli" type="text" name="nev" value="<?php
        if (isset($_POST['nev'])) {
            print $_POST['nev'];
        }
        ?>"><br>

                    <label>Email:</label><br>
                    <input class="beviteli" type="emali" name="mail" value="<?php
                           if (isset($_POST['mail'])) {
                               print $_POST['mail'];
                           }
                           ?>"><br>

                    <labbel>Fő:</labbel><br>
                    <select style="width: 40px;" name="vendeg">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                    </select><br>
                    <label>Megjegyzés:</label><br>
                    <textarea rows="4" cols="30" name="hozzaszolas" placeholder="Valami:">
<?php
if (isset($_POST['hozzaszolas'])) {
    print $_POST['hozzaszolas'];
}
?>
                    </textarea><br>
                    <input class="belepes" type="submit" value="Küldés">
                </form> 
            </div> 
        </div>
        <?php
        
        if ((isset($_POST['nev'])) && (isset($_POST['mail'])) && (isset($_POST['vendeg'])) && (isset($_POST['hozzaszolas']))) {

            $nev = trim($_POST['nev']);
            $mail = trim($_POST['mail']);
            $vendeg = trim($_POST['vendeg']);
            $hozzaszolas = trim($_POST['hozzaszolas']);
            $hiba = false;

            if (preg_match("/^[a-zöüóőúűáé\s.]{5,50}$/i", $nev) == 0) {
                print '<div style="color: red">Add meg a neved!</div>';
                $hiba = true;
            }


            if (preg_match("/^[0-9a-z\.-]+@([0-9a-z-]+\.)+[a-z]{2,4}$/", $mail) == 0) {
                print '<div style="color: red">Érvénytelen email cím!</div>';
                $hiba = true;
            }


            if ((strlen($hozzaszolas) < 10) || (strlen($hozzaszolas) > 10000)) {
                print '<div style="color: red">A hozzászólás legalább 10 és maximum 100 karakter lehet!</div>';
                $hiba = true;
            }

        }
        ?>

        <div id="textContainer">
            <h1>Szeretettel várunk!</h1>
            <p class="mgyarazo">Töltsd ki az űrlapot, ha eljössz!</p>
            <p class="mgyarazo">Elég egy embernek kitöltenie családonként az űrlapot.
                -1-20-ig megadható, hogy hányan jönnek.            
                <b>Megjegyzések:</b>
                "ide írd a résztvevők nevét (hogy ne legyen ismétlődés), jelölve,
                ha pl. csak templomba tudnak jönni, diétás étrendet, egyéb megjegyzést.
            </p>               
        </div>       

        <?php include 'includes/footer.php'; ?>


