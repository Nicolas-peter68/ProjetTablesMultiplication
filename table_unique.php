<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Génération d'une seule table</title>
</head>

<body>
    <?php require_once("header.html") ?>
    <h1 class="mb-4">Choisissez une table de multiplication</h1>
    <div class="liste-bouton">
        <form method="get" name="table">
            <select name="table" id="table">
                <option value="1">1</option>
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
            <button class="btn btn-primary" type="submit">Afficher</button><br>
        </form>
    </div>
    <div class="tableau">

        <table class="table">
            <thead class="table table-borderless table-dark">
                <tr>
                    <th scope="col" class="text-center">Opération</th>
                    <th scope="col" class="text-center">Résultat</th>
                </tr>
            </thead>
            <tbody class="table table-bordered table-dark">
                <?php
                if (!empty($_GET)) :
                    $num = $_GET['table'];
                    for ($i = 1; $i <= 12; $i++) :
                        $resultat = $i * $num;
                ?>
                        <tr>
                            <td class='text-center'><?= $num ?> * <?= $i ?></td>
                            <td class='text-center'><?= $resultat ?></td>
                        </tr>
                <?php endfor;
                endif; ?>
            </tbody>
        </table>
    </div>

</body>

</html>