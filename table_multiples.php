<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Document</title>
</head>

<body>
    <?php require_once("header.html") ?>
    <h1>Choisissez plusieurs tables de multiplication</h1>
    <form method="get" name="table">
        <fieldset>
            <legend>Tables</legend>
            <input type="checkbox" name="table[]" id="" value="1">
            <label for="1">1</label>
            <input type="checkbox" name="table[]" id="" value="2">
            <label for="2">2</label>
            <input type="checkbox" name="table[]" id="" value="3">
            <label for="3">3</label>
            <input type="checkbox" name="table[]" id="" value="4">
            <label for="4">4</label>
            <input type="checkbox" name="table[]" id="" value="5">
            <label for="5">5</label>
            <input type="checkbox" name="table[]" id="" value="6">
            <label for="6">6</label>
            <input type="checkbox" name="table[]" id="" value="7">
            <label for="7">7</label>
            <input type="checkbox" name="table[]" id="" value="8">
            <label for="8">8</label>
            <input type="checkbox" name="table[]" id="" value="9">
            <label for="9">9</label>
            <input type="checkbox" name="table[]" id="" value="10">
            <label for="10">10</label>
            <input type="checkbox" name="table[]" id="" value="11">
            <label for="11">11</label>
            <input type="checkbox" name="table[]" id="" value="12">
            <label for="12">12</label>
            <button type="submit">Afficher</button>
        </fieldset>
        <div class="container-table"> <?php
                                        function table($num)
                                        {
                                            $num = $_GET['table'];
                                            foreach ($num as $multiple) {
                                                echo "Table de $multiple<br>";
                                                for ($i = 1; $i <= 12; $i++) {
                                                    echo $i . '*' . $multiple . ' = ' . $i * $multiple . '</br>';
                                                }
                                            }
                                        }
                                        if (!empty($_GET)) {
                                            table($_GET['table']);
                                        }
                                        ?></div>
    </form>
    <div style="width:100%;height:0;padding-bottom:111%;position:relative;"><iframe src="https://giphy.com/embed/APqEbxBsVlkWSuFpth" style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>
    <p><a href="https://giphy.com/gifs/math-thinking-APqEbxBsVlkWSuFpth">via GIPHY</a></p>
</body>

</html>