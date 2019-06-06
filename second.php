<?php
    $name = htmlspecialchars($_POST['name']);
    $gender = htmlspecialchars($_POST['gender']);
    $pokemon = htmlspecialchars($_POST['pokemon']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>ポケモンGET！</title>
</head>
<body>
    <!-- トップのロゴ -->
    <div class="logo flex">
        <img src="img/pokemon_logo.gif" alt="">
    </div>
    <main class="flex">
        <!-- 男の子or女の子 -->
        <div>
        <?php if ($gender == 'boy'): ?>
            <img src="img/boy.png" alt="">
        
        <?php elseif ($gender == 'girl'): ?>
            <img src="img/girl.png" alt="">

        <?php endif; ?>
        </div>

        <div class="center">
            <p class="message"><strong><?= $name?></strong><br>
            ようこそ！ポケットモンスターの世界へ！<br>
            君の選んだポケモンはこれかな
            </p>
            <img id="pokeball" src="img/pokeball.png" alt="">

            <!-- 選んだポケモンを表示 -->
            <?php if ($pokemon == "チコリータ"): ?>
                <img id="pokemon" src="img/chikorita.png" alt="">
                <audio id="voice" src="sound/chikorita.wav"></audio>

                <?php elseif ($pokemon == "ヒノアラシ"): ?>
                <img id="pokemon" src="img/hinoarashi.png" alt="">
                <audio id="voice" src="sound/hinoarashi.wav"></audio>

            <?php elseif ($pokemon == "ワニノコ"): ?>
                <img id="pokemon" src="img/waninoko.png" alt="">
                <audio id="voice" src="sound/waninoko.wav"></audio>

            <?php endif; ?>

        </div>
        <img class="okido" src="img/dr.okido.png" alt="">
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>
</html>