<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <div id="top">
            <!-- logo -->
            <img src="imagenes/logofeo.png" style="height:60px">
            <!-- barra de navegación -->
            <nav>
                <a href="index.html">Inicio</a>
                <a href="empresa.html">Empresa</a>
                <a href="clientes.html">Clientes</a>
                <a href="contacto.html">Contacto</a>
            </nav>
        </div>
    </header>
    <!-- contenido principal  -->
    <main>

        <section id="contenido-contacto">
            <div class="contacto">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5884.996581770456!2d-0.13462930217761024!3d51.5089325357189!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2sOjo%20de%20Londres!5e0!3m2!1ses!2sar!4v1643465790463!5m2!1ses!2sar" width="410" height="310" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="contacto">
    <!-- respuesta del formulario -->
    <?php
        //capturamos datos enviados popr el form
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $consultas = $_POST['consultas'];

        //configuramos datos de email a enviar
        $destinatario = 'goku@email.com';
        $asunto = 'Email enviado desde mi sitio';
        $cuerpo = '<div style="width:500px; padding:20px; font-family:verdana; background-color:#d5d5d5">';
        $cuerpo .= 'Nombre: '.$nombre. '<br>';
        $cuerpo .= 'Email: '.$email. '<br>';
        $cuerpo .= 'Consultas: '.$consultas;
        $cuerpo .= '</div>';

        $headers = 'MIME-Version: 1.0 ';
        $headers .= 'Content-Type: text/plain; charset=utf-8' . "\r\n";

        //enviamos email
        mail($destinatario, $asunto, $cuerpo, $headers );

        //imprimimos mensaje personalizado
        echo 'Gracias '.$nombre. ' por contactarnos';
    ?>

            </div>
        </section>
    </main>
    <footer>
            <nav>
                <a href="#">Empresa © 2022</a>
                <a href="#">Legales</a>
                <a href="#">Contacto</a>
            </nav>  
            <div id="social">
                <a href="#" target="_blank">
                    <img src="imagenes/instagram.png">
                </a>
                <a href="#" target="_blank">
                    <img src="imagenes/twitter.png">
                </a>
                <a href="#" target="_blank">
                    <img src="imagenes/facebook.png">
                </a>
            </div>
    </footer>

</body>
</html>