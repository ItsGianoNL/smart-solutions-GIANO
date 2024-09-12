<x-layouts.app>
    <div class="text">
        <p>Welkom op de homepage van Smart-Solutions. We zijn verheugd dat je hier bent. Op deze site vind je meer informatie over wie we zijn en hoe je contact met ons kunt opnemen. Gebruik de navigatie om naar de andere pagina's te gaan.</p>
</div>
</x-layouts.app>

<script>
    document.addEventListener("DOMContentLoaded", function() {
var text = "";
var text = "Smart Solutions";
var i = 0;
var speed = 100; // snelheid van het typen (in milliseconden)
var delayAfterComplete = 1000; // wachttijd na het voltooien van het typen (in milliseconden)
var delayBeforeStart = 500; // wachttijd voordat de tekst opnieuw begint (in milliseconden)

function typeWriter() {
    if (i < text.length) {
        document.getElementById("typed-title").innerHTML += text.charAt(i);
        i++;
        setTimeout(typeWriter, speed);
    } else {
        setTimeout(eraseText, delayAfterComplete);
    }
}

function eraseText() {
    if (i > 0) {
        document.getElementById("typed-title").innerHTML = text.substring(0, i - 1);
        i--;
        setTimeout(eraseText, speed);
    } else {
        setTimeout(typeWriter, delayBeforeStart);
    }
}

typeWriter();
});

</script>



