<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/prism/prism.css">
    <link rel="stylesheet" href="assets/css/fonts.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/display.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/switch.css">
    <script src="assets/prism/prism.js" data-noprefix defer></script>
    <script src="assets/js/string_validation.js" defer></script>
    <script src="assets/js/spa.js" defer></script>
    <script src="assets/js/menu.js" defer></script>
    <script src="assets/js/switch.js" defer></script>

    <title>CSS Hacks</title>
</head>
<body>
    <!--Left side (menu, logo->switch)-->
    <section class="nav">
        <div class="logo">
            <h1 class="logo-text">CSS hacks</h1>
            <div class="logo-switch"></div>
        </div>
        <div class="menu">
            <ul class="menu-list">
                <li><a class="menu-link" href='?file=Pozycjonowanie elementu na środku'>Pozycjonowanie elementu na środku</a></li>
                <li><a class="menu-link" href='?file=Tajemnicza przerwa na stronie'>Tajemnicza przerwa na stronie</a></li>
                <li><a class="menu-link" href='?file=Tekst na środku elementu'>Tekst na środku elementu</a></li>
            </ul>
        </div>
        <!-- Responsive  -->
        <div class="menu-icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M6 36v-3h36v3Zm0-10.5v-3h36v3ZM6 15v-3h36v3Z"/></svg>
        </div>
        <div class="close-icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="m12.45 37.65-2.1-2.1L21.9 24 10.35 12.45l2.1-2.1L24 21.9l11.55-11.55 2.1 2.1L26.1 24l11.55 11.55-2.1 2.1L24 26.1Z"/></svg>
        </div>
    </section>

    <!--Right side (article)-->
    <section class="content">
        <article class="display">
            <?php
                switch(htmlentities($_GET['file'])) {
                    case 'Pozycjonowanie elementu na środku':
                        require_once('content/Pozycjonowanie%20elementu%20na%20środku.html');
                        break;
                    case 'Tajemnicza przerwa na stronie':
                        require_once('content/Tajemnicza%20przerwa%20na%20stronie.html');
                        break;
                    case 'Tekst na środku elementu':
                        require_once('content/Tekst%20na%20środku%20elementu.html');
                        break;
                    default:
                }
            ?>
            <br />
            <br />
        </article>
        <div class="switch-container">
            <svg class="sun" xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="M24.05 46.55 17.3 40H8v-9.3L1.3 24 8 17.3V8h9.3l6.75-6.7L30.7 8H40v9.3l6.7 6.7-6.7 6.7V40h-9.3Zm0-9.55q5.4 0 9.175-3.8Q37 29.4 37 23.95q0-5.4-3.775-9.175Q29.45 11 24.05 11Zm0 5.35 5.4-5.35H37v-7.55L42.45 24 37 18.55V11h-7.55l-5.4-5.45-5.5 5.45H11v7.55L5.55 24 11 29.45V37h7.5ZM24 23.95Z"/></svg>
                
                <div class="switch">
                    <div class="switch-ball"></div>
                </div>

            <svg class="halfCircle" width="40" height="20" viewBox="0 0 40 20" xmlns="http://www.w3.org/2000/svg">
            <path d="M40 0C40 5.30433 37.8929 10.3914 34.1421 14.1421C30.3914 17.8929 25.3043 20 20 20C14.6957 20 9.60859 17.8929 5.85787 14.1421C2.10714 10.3914 8.00932e-07 5.30433 0 3.01992e-06L20 0H40Z"/>
            </svg>
            <svg class="expand-icon" xmlns="http://www.w3.org/2000/svg" height="48" width="48"><path d="m24 30.75-12-12 2.15-2.15L24 26.5l9.85-9.85L36 18.8Z"/></svg>
        </div>
    </section>
    
</body>
</html>
