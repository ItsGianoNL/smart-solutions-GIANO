<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>{{ $title ?? "default" }}</title>
</head>
<body>
<header>
    <a href="pagina"> <!-- Link toegevoegd aan het logo -->
    <img src="{{ asset('css/image.png')}}" alt="Curio Logo" class="logo">
    </a>
    <x-navbar />

</header>
<main>
    <section class="content">
        <div class="text">
            <h1 id="typed-title"></h1> <!-- Samengestelde titel -->
            <h1>‎ </h1>
            {{$slot}}
        </div>
        <div class="image">
            <!-- Hier kun je eventueel een afbeelding of extra content plaatsen -->
        </div>
    </section>
</main>

<footer class="footer">
    <div class="waves">
      <div class="wave" id="wave1"></div>
      <div class="wave" id="wave2"></div>
      <div class="wave" id="wave3"></div>
      <div class="wave" id="wave4"></div>
    </div>
    <ul class="social-icon">
      <li class="social-icon__item">
        <a class="social-icon__link" href="https://www.facebook.com/groups/477785032270977/">
          <ion-icon name="logo-facebook"></ion-icon>
        </a>
      </li>
      <li class="social-icon__item">
        <a class="social-icon__link" href="https://www.instagram.com/curioonderwijsgroep/">
          <ion-icon name="logo-instagram"></ion-icon>
        </a>
      </li>
    </ul>
    <ul class="menu">
      <li class="menu__item"><a class="menu__link" href="pagina">Home</a></li>
      <li class="menu__item"><a class="menu__link" href="overons">Over Ons</a></li>
      <li class="menu__item"><a class="menu__link" href="Contact">Contact</a></li>
    </ul>
    <p>&copy;2024 Giano Maton | All Rights Reserved</p>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
