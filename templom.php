<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" href="templom.css" rel="stylesheet" />   
        <meta charset="UTF-8">
        <title></title>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">
        $(window).ready(function(){
            $('#templom').css('text-decoration', 'underline');
            
        });
        
        </script>
    </head>
    <body>          
        <div id="mainContainer">
            <?php include 'includes/menu.php'; ?> 
            <div class="cim_container">
                <h1>Helyszín</h1>
                <p>Zuglói Páduai Szent Antal plébániatemplom</p>
                <p>1149 Budapest, Bosnyák tér 7.</p>
            </div>
            <div class="terkep_container">
                <iframe class="terkep" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d86223.38025401531!2d19.043271353728564!3d47.51950497821236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x4741db6f84e4cf13%3A0x4897964f72ea1283!2zWnVnbMOzaSBQw6FkdWFpIFN6ZW50IEFudGFsIHBsw6liw6FuaWF0ZW1wbG9t!3m2!1d47.519526299999995!2d19.113311!5e0!3m2!1shu!2shu!4v1549615922612" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="idopont">
                <p style="color: white; font-size: 25px">A szertartás május 11-én 15 órakor kezdődik.</p>    
            </div>
            <div><br>
                <div class="ugras_container">
                <a class="ugras" target="_blank" href="https://www.google.com/maps/dir//Zugl%C3%B3i+P%C3%A1duai+Szent+Antal+pl%C3%A9b%C3%A1niatemplom/@47.519505,19.0432714,12z/data=!4m8!4m7!1m0!1m5!1m1!1s0x4741db6f84e4cf13:0x4897964f72ea1283!2m2!1d19.113311!2d47.5195263">
                   Ugrás a térképre! 
                </a>  
                </div>              
            </div>

        </div>
        <?php include 'includes/footer.php'; ?>


