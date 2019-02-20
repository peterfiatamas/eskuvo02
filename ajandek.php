<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="ajandek.css" rel="stylesheet" />
        <meta charset="UTF-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
            $(window).ready(function () {
                $('#ajandek').css('text-decoration', 'underline');

            });

        </script>
    </head>
    <body>
        <div id="mainContainer">
            <?php include 'includes/menu.php'; ?>
            <div class="cimTok">
                <h1 class="">Hozz sütit!</h1>  
            </div>    
            <div class="kepTok">
                <img  class="sutikep" src="kepek/suti.jpg">
            </div>
            <div class="szovegTok">
                <p class="szoveg">Örülünk, ha sütivel hozzá tudsz járulni a lagzihoz!
                    Más ajándékra nem számítunk, a jelenléted a fontos számunkra, hogy megoszthassuk
                    örömünket. Ha semmiképpen nem tudunk lebeszélni az ezeken felüli ajándékozásról,
                    akkor elsősorban anyagi segítségnek örülnénk. 
                </p> 
            </div>
        </div>
    </body>
</html>


