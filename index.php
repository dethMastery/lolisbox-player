<?php
$home = "https://box.lolis.love/0/";
$id = $_GET['id'];
$link = $home . $id;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FastPlayer5 | Detzz</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div style="padding: 1rem;">
        <ul>
            <li>
                Colorful Illusion
                <ul>
                    <li>
                        <a href="/?id=pmb4i.wav">
                            01 Sympatia Love
                        </a>
                    </li>
                    <li>
                        <a href="/?id=n2603.wav">
                            02 Grey Street
                        </a>
                    </li>
                    <li>
                        <i>
                            03 Paradise
                        </i>

                        <!-- <a href="?id=#" disabled>
                            03 Paradise
                        </a> -->
                    </li>
                    <li>
                        <i>
                            04 DayDreaming
                        </i>
                        
                        <!-- <a href="?id=#" disabled>
                            04 DayDreaming
                        </a> -->
                    </li>
                </ul>
            </li>
        </ul>
    </div>

    <?php
    if (substr($link, -3) == "wav") {
        echo "<audio controls autoplay id='mplay' class='hidden'>";
        // autoplay
        echo "<source src = '" . $link . "' type='audio/wav'>";
        echo "</audio>";
    }
    ?>
    <div class="container-fluid fixed_ft">
        <div class="row" style="top: 50%;">
            <div class="col-md-2 col-sm-12 detailed" style="text-align: center;">
                <a class="song-name" style="text-align: center;">
                    <?php
                    $meta = "/meta";
                    $a = $link . $meta;
                    $api = file_get_contents($a);
                    $call = json_decode($api, true);

                    echo $call['globalMeta']['originFilename'];
                    ?>
                </a>
                <div class="col-sm-12">
                    &nbsp;
                </div>
            </div>
            <div class="col-md-2 col-sm-12" style="text-align: center;">
                <button id="back" onclick="back()">
                    <img src="content/svg/back.svg" alt="back">
                </button>
                <button id="play" class="" onclick="play()">
                    <img src="content/svg/play.svg" alt="back" onclick="play()">
                </button>
                <button id="pause" class="hidden" onclick="pause()">
                    <img src="content/svg/pause.svg" alt="back" onclick="pause()">
                </button>
                <button id="next" onclick="next()">
                    <img src="content/svg/next.svg" alt="back">
                </button>
            </div>
            <div class="col-md-5 col-sm-12 dur-h">
                <progress id="dur" value="0" max="100" width="100%"></progress>
            </div>
            <div class="col-md-3 col-sm-12" style="text-align: center;">
                <button id="volup" onclick="dvol()">
                    <img src="content/svg/volumed.svg" alt="vold">
                </button>
                <i>&nbsp;&nbsp;</i>
                <button id="mute" onclick="mute()">
                    <img src="content/svg/mute.svg" alt="mute">
                </button>
                <button id="unmute" onclick="unmute()" class="hidden">
                    <img src="content/svg/mute.svg" alt="mute">
                </button>
                <i>&nbsp;&nbsp;</i>
                <button id="vol-d" onclick="pvol()">
                    <img src="content/svg/volumeu.svg" alt="volu">
                </button>
            </div>
            <div class="col-sm-12">
                &nbsp;
            </div>
        </div>
    </div>
    <script src="./content/js/play.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>