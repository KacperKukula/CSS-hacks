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
    <script src="assets/prism/prism.js" data-noprefix defer></script>
    <script src="assets/js/string_validation.js" defer></script>
    <script src="assets/js/spa.js" defer></script>
    <script src="assets/js/menu.js" defer></script>

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
            <ul>
                <li>Pozycjonowanie elementu na środku</li>
                <li>Tajemnicze " " na stronie</li>
                <li>Tekst na środku elementu</li>
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
            <h1>Pozycjonowanie elementu na środku</h1>
            <h2>Pozycjonowanie elementu absolutnego</h2>
            Pozycjonowanie elementu w centrum ekranu przyspożyło mi wiele nerwów. Przeszukując internet natrafiłem na wiele konceptów. Najlepszy okazał się sposób z pozycjonowaniem elementu abolutnego. 
            <pre><code class="language-css">
    .element {
        postionion: absolute;
        top: 0; right: 0; bottom: 0; left: 0;
        margin: 0;
    }
            </code></pre>
        </article>
    </section>
    
</body>
</html>
