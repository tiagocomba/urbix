<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Text Intro Animation | Codegrid</title>
    <link rel="stylesheet" href="assets/css/intro2.css">
 
</head>
<body>
    <div class="header">codegrid</div>

    <div class="container">
        <div class="text-wrapper">
            <!-- Agrega la clase "text" a cada elemento de texto -->
            <div class="text text-1">less is more</div>
            <div class="text text-2">less is more</div>
            <div class="text text-3">less is more</div>
            <div class="text text-4">less is more</div>
            <div class="text text-5">less is more</div>
            <div class="text text-6">less is more</div>
            <div class="text text-7">less is more</div>
            <div class="text text-8">less is more</div>
            <div class="text text-9">less is more</div>
            <div class="text text-10">less is more</div>
            <div class="text text-11">less is more</div>
        </div>
    </div>

    <script>
        // Obtén el último elemento de texto (text-11)
        const lastTextElement = document.querySelector('.text-11');

        // Función para redirigir después de que la animación termine
        function redirectToAnotherView() {
            // Cambia la URL a la que deseas redirigir al usuario
            var absoluteUrl = "<?php echo site_url('inicio'); ?>";
            window.location.href = absoluteUrl;
        }

        // Agrega un evento 'animationend' al último elemento de texto
        lastTextElement.addEventListener('animationend', redirectToAnotherView);
    </script>
</body>
</html>
