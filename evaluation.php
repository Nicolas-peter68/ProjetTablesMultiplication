<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?php require_once("header.html"); ?>
    <h1>Nous allons maintenant tester vos connaissances</h1>
    <form action="" method="get">
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
        <button type="submit">Valider</button> 
        <?php if($juste===5) {
            echo '<div style="height:0;padding-bottom:75%;position:relative;"><iframe src="https://giphy.com/embed/XreQmk7ETCak0"  frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/retro-thumbs-up-XreQmk7ETCak0">via GIPHY</a></p>';
        }
        else {
            echo '<div style="padding-bottom:55%;position:relative;"><iframe src="https://giphy.com/embed/WrNfErHio7ZAc"  style="position:absolute" frameBorder="0" class="giphy-embed" allowFullScreen></iframe></div><p><a href="https://giphy.com/gifs/disney-frozen-review-WrNfErHio7ZAc">via GIPHY</a></p>';
        } ?>
    </form>
    <?php
    function evaluation($resultat, $reponse)
    {
        global $juste;
        if ($resultat == $reponse) {
            echo "Bonne réponse !";
            $juste ++;

        } else {
            echo "Mauvaise réponse ,revoie tes tables";

        }
    }


    ?>

</body>

</html>