<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Test de connaissances</title>
</head>
<body>
    <?php require_once("header.html"); ?>
    <h1 class="mb-4">Nous allons maintenant tester vos connaissances</h1>
    <form class="questions" action="" method="get">
        <?php
        $juste = 0;
        for ($i=1; $i <=5 ; $i++):
            $multiple1 = rand(1, 12);
            $multiple2 = rand(1, 12);
         ?>
        <h3>Combien font <?php echo $multiple1 . '*' . $multiple2 ?> :</h3>
        <input type="number" name="reponse<?=$i?>" id="">
        <input type="hidden" name="multiple1<?=$i?>" value="<?= $multiple1 ?>">
        <input type="hidden" name="multiple2<?=$i?>" value="<?= $multiple2 ?>">
        <?php
        if (isset($_GET["reponse$i"])) {
            $reponse = $_GET["multiple1$i"] * $_GET["multiple2$i"];
            evaluation($_GET["reponse$i"], $reponse);
        } endfor;?>
        <button class="btn btn-primary" type="submit">Valider</button> 
        <?php if($juste===5) {
            echo '<div class="mt-4" style="height:0;position:relative;"><iframe src="https://giphy.com/embed/XreQmk7ETCak0"  frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>';
        }
        else {
            echo '<div class="mt-4" style="height:0;position:relative;"><iframe src="https://giphy.com/embed/WrNfErHio7ZAc"   frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div>';
        } ?>
    </form>
    <?php
    function evaluation($resultat, $reponse)
    {
        global $juste;
        if ($resultat == $reponse) {
            echo '<span class="reponse mb-4">Bonne réponse !</span>';
            $juste ++;

        } else {
            echo '<span class="reponse mb-4">Mauvaise réponse ,revoie tes tables</span>';
        }
    }
    ?>
<script type="text/javascript" src="test.js"></script>
</body>
</html>