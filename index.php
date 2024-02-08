<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Califiquenos</title>
    <link rel="stylesheet" href="http://localhost/sistema-ctic/css/index.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href=/medias/mediaQueris-index.css>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">

</head>
<body>
        <div class="main container">

            <div class="container main-logo">
                <div class="container padding center">
                    <img class="logo-ctic" src="img/logo-ctic-MarcaRegistrada.png" alt="">
                </div>
                <div class="col first-text">
                    <h4>¿Qué tan satisfecho está con la resolución de su problema? *</h4>
                </div>
            </div>


            <div class="container main-form">
                <div class="center">
                    <form action="code.php" method="POST">
                        <div class="calificacion-form">
                            <ul>
                                <li><input  id="activar1" type="checkbox" name="brands[]" value="Excelente"> <label for="activar1">Excelente!</label></li>
                                <li><input  id="activar2" type="checkbox" name="brands[]" value="Bueno"><label for="activar2">Bueno <br></li>
                                <li><input  id="activar3" type="checkbox" name="brands[]" value="Normal"><label for="activar3">Normal <br></li>
                                <li><input  id="activar4" type="checkbox" name="brands[]" value="Pesimo"><label for="activar4">Pesimo <br></li>
                            </ul>
                        </div>

                        <div class="center msg-generate" id="msg"></div>
                        <div class="container msg-generate-two" id="msg2"></div>

                        <div class="calificacion-form col">
                            <div class="container center padding">
                                <textarea class="text_area" maxlength="150" name="comentarios" rows="5" cols="60" ></textarea>
                            </div>
                            <div class="container center padding">
                                <button class="button-send-ctic" type="submit" name="send-botton">Enviar</button>
                            </div>
                        </div>
                    </form>
                 </div>
            </div>

            <footer class="padding-2">
                <div class="footer_section container">
                    <div class="col center">
                        <img class="logos-footer " src="img/9001.png" alt="">
                    </div>
                    <div class="col center">
                        <img class="logos-footer-mpsa " src="img/MSPA_member_logo-1024x283.png" alt="">
                    </div>
                    <div class="col center">
                        <img class="logos-footer " src="img/27001.png" alt="">
                    </div>
                </div>
            </footer>
         </div>

    <script src="js/result.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>