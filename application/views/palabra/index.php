<!-- application/views/game_view.php -->
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Dislexia Fonológica</title>
    <style>
        .speaking-indicator {
            display: none;
            font-size: 1.5em;
            color: red;
        }

        .ice-effect {
            color: #00f;
            text-shadow: 0 0 10px rgba(0, 0, 255, 0.5),
                0 0 20px rgba(0, 0, 255, 0.5),
                0 0 30px rgba(0, 0, 255, 0.5);
            filter: brightness(70%);
            background: url('path/to/ice-texture.png') no-repeat center center;
            background-size: cover;
        }

        .unfreeze-effect {
            transition: all 0.5s ease-in-out;
            color: #000;
            text-shadow: none;
            filter: none;
            background: none;
        }

        .letter {
            font-size: 5em;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Juego de Dislexia Fonológica</h1>
    <p id="word"><?php echo $word; ?></p>
    <button onclick="startRecognition()">Hablar</button>
    <p id="result"></p>
    <p id="indicator" class="speaking-indicator">¡Es tu turno de hablar!</p>


    <!-- Contenido de tu juego -->
    <!-- <div class="row col-lg-12">
        <div class="row letter ice-effect col-lg-6">A</div>
        <div class="row letter ice-effect col-lg-6">B</div>
        <div class="row letter ice-effect col-lg-6">C</div>
    </div> -->

    <section class="container-fluid">
        <div class="row col-lg-12 col-md-12">
            <div class="row letter ice-effect col-lg-6">B</div>
            <div class="row letter ice-effect col-lg-6">C</div>
            <div class="row letter ice-effect col-lg-6">D</div>
        </div>
    </section>

    <!-- más letras... -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var letters = document.querySelectorAll('.ice-effect');

            letters.forEach(function(letter) {
                letter.addEventListener('click', function() {
                    letter.classList.add('unfreeze-effect');
                });
            });
        });

        function startRecognition() {
            const wordElement = document.getElementById('word');
            const resultElement = document.getElementById('result');
            const indicatorElement = document.getElementById('indicator');
            const wordToMatch = wordElement.textContent;

            if (!('webkitSpeechRecognition' in window)) {
                alert('Lo siento, tu navegador no soporta la API de reconocimiento de voz.');
                return;
            }

            const recognition = new webkitSpeechRecognition();
            recognition.lang = 'es-ES';
            recognition.interimResults = false;
            recognition.maxAlternatives = 1;

            indicatorElement.style.display = 'block';
            recognition.start();

            recognition.onresult = function(event) {
                const spokenWord = event.results[0][0].transcript.trim().toLowerCase();
                if (spokenWord === wordToMatch.toLowerCase()) {
                    resultElement.textContent = `¡Correcto!. Dijiste: ${spokenWord}`;
                    getNewWord();
                } else {
                    resultElement.textContent = `Incorrecto. Dijiste: ${spokenWord}`;
                }
                indicatorElement.style.display = 'none';
            };

            recognition.onerror = function(event) {
                resultElement.textContent = `Error: ${event.error}`;
                indicatorElement.style.display = 'none';
            };
        }

        function getNewWord() {
            $.ajax({
                url: '<?= base_url("palabra/get_new_word"); ?>',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    $('#word').text(data.word);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.error('Error:', textStatus, errorThrown);
                }
            });
        }
    </script>
</body>

</html>