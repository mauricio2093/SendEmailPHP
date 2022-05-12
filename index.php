<!DOCTYPE html>
    <html lang="en-US">
    <head>
        <!--metaetiquetas-->
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" user-scalable=no /><!--adaptador a dispositivos mobiles-->
        <meta name="author" content="Mauricio Cadena Barona"/>
        <meta property="og:title" content="Send your Email"/>
        <meta property="og:site_name" content="Send | Email"/>
        <meta property="og:type" content="website"/>
        <meta http-equiv="refresh" content="600">
        <meta http-equiv="Cache-Control" content="no-store" />

        <link rel="shortcut icon" href="assets/img/logo4.svg" type="image/png">

        <!--=============== REMIXICONS ===============-->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        
        <!--=============== SWIPER CSS ===============-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/phpstyle.css">
        <!--=============== CSS ===============-->
        <title>Send | Email</title>
    </head>
    <body>
        <header>
            <h2 style="color: #f2f2f2f2; text-align: center; padding-top:40px; font-size: 40px;">  <span style="color: #474A8A;">PHP</span> App</h2>
            <section class="home" id="home">
                <div class="home__container container grid">
                    <div class="gif-content">
                        <div class="presentacion three-rows">
                            <div class="bienvenido">
                                <h2 class="nombre">Sending Emails Through</h2>
                                <p class="p2">PHP - Mailer</p>
                            </div> 
                            <div class="desarrollo">
                                <p class="p3"> PHP | AJAX | HTML | CSS </p>
                            </div>
                        </div>        
                    </div>
                </div>
            </section>
        </header>
        <main class="main">
        <!--==================== SUBSCRIBE ====================-->
    
            <!--=============== AJAX ENVIO de Formulario ===============-->
    <section class="subscribe section__subscribe" id="contact">
            <div class="subscribe__bg">
                <div class="subscribe__container container__form">
                    <h2 class="section__title subscribe__title">Contact us for<br> <span class="span__color-form">Email </h2>
                    <p class="subscribe__description">Write us through our email for more information</p>
                    <form  method="post" class="formulario shadow" id="contact-form" name="contact-form" >
                            <!--<a class="eliminar" id="eliminar"> <?php //include_once("validar1.php");?> </a>-->
                                        
                            <legend>Contact me by filling all the fields</legend>
                            <div class="contenedor-campos">
                                <div class="campo">
                                    <label>Name</label> 
                                    <input class="input-text" name="name"  type="text" placeholder="Tu Nombre" id="name">
                                    <div id="errorName"></div>
                                    
                                </div>               
                                
                                <div class="campo">
                                    <label>Phone</label>
                                    <input class="input-text" name="telefono" type="tel" placeholder="Tu Telefono" id="telefono"> 
                                    <div id="errorPhone"></div>
                                </div>
                                
                                <div class="campo">
                                    <label>E-mail</label>   
                                    <input class="input-text" name="email"  type="email" placeholder="Tu Email" id="email">
                                    <div id="errorEmail"></div>
                                </div>
                                
                                <div class="campo">
                                    <label>Message</label>
                                    <textarea name="message"  class="input-text" id="message"></textarea>   
                                    <div id="errorMessage"></div>
                                </div> 
                            </div> 
                            <div id="m-loading" class="loader container__preloader" style="display:none;"><h1 class="point-load">.</h1></div>
                            <div id="respuesta"></div>
                            <div id="respuesta1"></div>
                            <div class="alinear-derecha flex">
                                <input type="button" class="boton  w-100" name="submit"  data-submit="... Enviando" value="Enviar" id="enviar">
                            </div>     
                    </form>
                </div>
            </div>
        </section>
                    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
                    <script>
                        $('#enviar').click(function(){
                            $.ajax({
                                type:'post',
                                url:'mail/validacionName.php',
                                data:$('#contact-form').serialize(),
                                success: function(res){
                                    $('#errorName').html(res);
                                }
                            }),
                            $.ajax({
                                type:'post',
                                url:'mail/validacionPhone.php',
                                data:$('#contact-form').serialize(),
                                success: function(res){
                                    $('#errorPhone').html(res);
                                }
                            }), 
                            $.ajax({
                                type:'post',
                                url:'mail/validacionEmail.php',
                                data:$('#contact-form').serialize(),
                                success: function(res){
                                    $('#errorEmail').html(res);
                                }
                            }), 
                            $.ajax({
                                type:'post',
                                url:'mail/validacionMessage.php',
                                data:$('#contact-form').serialize(),
                                success: function(res){
                                    $('#errorMessage').html(res);
                                }
                            }), 
                            $.ajax({
                                    type:'post',
                                    url:'mail/envioCliente.php',
                                    data:$('#contact-form').serialize(),
                                    beforeSend: function(){
                                    document.getElementById("m-loading").style.display="block"; 
                                },
                                success: function(res){
                                    document.getElementById("m-loading").style.display="none"; 
                                    $('#respuesta').html(res);
                                }
                            }), 
                            $.ajax({
                                type:'post',
                                url:'mail/envioSupport.php',
                                data:$('#contact-form').serialize(),
                                success: function(res){
                                    $('#respuesta1').html(res),
                                    $('#form').remove();
                                }
                            }) 
                        });
                        
                    </script>
        
            
        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__rights">
                <p class="footer__copy">Developed by @Mauricio2093 </p>
                <a href="https://github.com/mauricio2093/" class="git" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-github" width="30" height="30" viewBox="0 3 24 24" stroke-width="1.5" stroke="#636363" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M9 19c-4.3 1.4 -4.3 -2.5 -6 -3m12 5v-3.5c0 -1 .1 -1.4 -.5 -2c2.8 -.3 5.5 -1.4 5.5 -6a4.6 4.6 0 0 0 -1.3 -3.2a4.2 4.2 0 0 0 -.1 -3.2s-1.1 -.3 -3.5 1.3a12.3 12.3 0 0 0 -6.2 0c-2.4 -1.6 -3.5 -1.3 -3.5 -1.3a4.2 4.2 0 0 0 -.1 3.2a4.6 4.6 0 0 0 -1.3 3.2c0 4.6 2.7 5.7 5.5 6c-.6 .6 -.6 1.2 -.5 2v3.5"></path>
                    </svg>
                </a>
            </div>
        </footer>
        <!--mauricio-->
        
        
    </body>
</html>
