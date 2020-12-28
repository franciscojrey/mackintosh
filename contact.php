<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ada Software</title>
        <!-- STYLES -->
        <link rel="stylesheet" href="static/css/styles.css">
        <link rel="stylesheet" href="static/css/contact.css">
        <!-- LOGO -->
        <link rel="shortcut icon" type="image/x-icon" href="static/img/logo_titulo.png">
        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/8ca6f1cadf.js" crossorigin="anonymous"></script>
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Oswald&family=Roboto:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
            <img src="static/img/logo.png" alt="" class="logo">
            <input type="checkbox" id="nav-toggle" class="nav-toggle">
            <nav>
                <ul>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="adabolsa.html">Ada Bolsa</a></li>
                    <li><a href="adacolegios.html">Ada Colegios</a></li>
                    <li><a href="contact.php">Contacto</a></li>
                </ul>
            </nav>
            <label for="nav-toggle" class="nav-toggle-label">
                <span></span>
            </label>
        </header>
        <main>
            <section class="form-container" id="contact">
                <form action="send_mail.php" method="post" class="form">
                    <div class="form__header">
                        <p class="form__title">Dejanos tu mensaje</p>
                    </div>
                    
                    <div class="form-item">
                        <input type="text" class="form-input" name="name" placeholder="Ingresá tu nombre" aria-label="nombre" required minlength="2">
                    </div>
    
                    <div class="form-item">
                        <input type="text" class="form-input" name="email" placeholder="Ingresá tu email" aria-label="email" required minlength="4">
                    </div>
    
                    <div class="form-item">
                        <textarea class="form-input" name="message" placeholder="Escribí tu mensaje" aria-label="mensaje" required minlength="4"></textarea>
                    </div>

                    <div class="form__item">
                        <input type="hidden" class="form__input" id="form_name" name="subject" value="Enviado desde Adasoftware.com.ar" aria-label="subject" required minlength="2">
                    </div>
    
                    <button class="form-button uppercase g-recaptcha" type="submit" name="submit" id="submit" data-sitekey="reCAPTCHA_site_key" data-callback='onSubmit' data-action='submit'>enviar</button>
                </form>
            </section>
        </main>
    </body>
    
</html>