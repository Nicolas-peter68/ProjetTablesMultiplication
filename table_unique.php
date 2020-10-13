<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <?php require_once("header.html")?>
    <h1>Choisissez une table de multiplication</h1>
    <form method="get" name="table">
        <select name="table" id="table">
            <option value="1" selected>1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
        <button type="submit">Afficher</button><br>
        <p> <?php
            if (!empty($_GET)) {
                $num = $_GET['table'];
                echo '<table></table>';
                for ($i = 1; $i <= 12; $i++) {
                    echo '<th scope ="row">'. $i . '*' . $num . ' = ' . $i * $num . '</br>'.'</th>';
                }
            }
            ?></p>
    </form>
    <div style="width:100%;height:0;padding-bottom:111%;position:relative;"><iframe src="https://giphy.com/embed/APqEbxBsVlkWSuFpth" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
    <p><a href="https://giphy.com/gifs/math-thinking-APqEbxBsVlkWSuFpth">via GIPHY</a></p>
</body>

</html>