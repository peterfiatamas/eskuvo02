<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="belepes.css" rel="stylesheet" />
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>  
        <?php include 'includes/menu.php'; ?>
        <?php  
        if (isset($_POST['jelszo'])){
           $jelszo = $_POST['jelszo'];
           $felh = $_POST['felhasznalonev'];
           if ($jelszo == "" || $jelszo !== 'az' || $felh !== 'Gábor'){
             print '<div style="color:red">Hozzáférés megtagadva!</div>';
           }else{
                header ('location: adatok.php');
           }
                         
        }        
        ?>
            <div id="BelepContainer">
                <form class="urlap" action="belepes.php" method="post">
                    <label>Felhasználónév:</label><br>
                    <input class="beviteli" type="text" name="felhasznalonev"><br>
                    <label>Jelszó:</label><br>
                    <input class="beviteli" type="password" name="jelszo"><br>
                    <input class="belepes" type="submit" value="Belépés">            
                </form>
            </div>
        
    </body>
</html>


