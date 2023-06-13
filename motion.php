<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"
        integrity="sha512-BB7rb8ZBAxtdJdB7nwDijJH9NC+648xSzviK9Itm+5APTtdpgKz1+82bDl4znz/FBhd0R7pJ/gQtomnMpZYzRw=="
        crossorigin="anonymous"></script>

    <script src='https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js'></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"
        integrity="sha512-BB7rb8ZBAxtdJdB7nwDijJH9NC+648xSzviK9Itm+5APTtdpgKz1+82bDl4znz/FBhd0R7pJ/gQtomnMpZYzRw=="
        crossorigin="anonymous" defer></script>
    <title>Document</title>
</head>

<body>

    <div style="width:80%; margin: 0 auto;">
        <lottie-player id="Lottie-1" src="./dist/json/404.json" backaground="transparent" speed="1" autoplay
            style="width: 90%; height: 90%;"></lottie-player>
        <script>
        LottieInteractivity.create({
            player: "#Lottie-1",
            mode: "chain",
            actions: [{
                    state: 'autoplay',
                    transition: 'onComplete',
                },
                {
                    state: "loop",
                    frames: [132, 553],
                }
            ]
        });
        </script>

        <div style="display: flex; align-items: center;
    gap: 20px;">
            <lottie-player id="Lottie-2" src="./dist/json/Fitness gym lottie.json" backaground="transparent" speed="1"
                autoplay style="width: 90%; height: 90%;"></lottie-player>
            <script>
            LottieInteractivity.create({
                player: "#Lottie-2",
                mode: "chain",
                actions: [{
                    state: 'autoplay',
                    transition: 'onComplete',
                }, ]
            });
            </script>
            <div>
                <div id="logo-two"></div>
                <div class="logo-controls">
                    <button id="play-btn2" class="button-pulse">Jouer l'animation</button>
                </div>
                <script>
                var logoTwo = bodymovin.loadAnimation({
                    container: document.getElementById('logo-two'),
                    path: './dist/json/Icone check.json',
                    renderer: 'svg',
                    loop: false,
                    autoplay: false,
                    name: "Logo animation",
                });

                var playBtn2 = document.getElementById('play-btn2');

                playBtn2.addEventListener('click', function() {
                    logoTwo.stop();
                    logoTwo.play();
                });
                </script>
            </div>


            <script>
            LottieInteractivity.create({
                player: "#Lottie-3",
                mode: "cursor",
                actions: [{
                    type: "click",
                    forceFlag: false
                }]
            });
            </script>
            <lottie-player id="Lottie-4" src="./dist/json/Logo design.json" backaground="transparent" speed="1" autoplay
                style="width: 90%; height: 90%;"></lottie-player>
            <script>
            LottieInteractivity.create({
                player: "#Lottie-4",
                mode: "chain",
                actions: [{
                    state: 'autoplay',
                    transition: 'onComplete',
                }, ]
            });
            </script>
        </div>

    </div>


</body>

</html>