<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/reset.css">
    <link rel="stylesheet" href="assets/css/style.css">
    
    <title>Tables de multiplications</title>
</head>
<body>
<?php require_once("header.html")?>
    <h1>Révision des tables de multiplications</h1>
    <h2>Table de multiplication aléatoire</h2>
    <p>Bienvenue sur mon site, ici tu pourra revoir tes tables de multiplications peu importe ton age. Comment le site fonctionne ? C'est très simple, sur la page d'accueil une table de multiplication sera générée aléatoirement sur une autre page tu pourra choisir une seule table de multiplication puis une troisième page page où tu pourra afficher plusieurs tables de multiplication à la fois. Pour terminer la dernière page te permettra de tester tes connaissances, tu aura 5 multiplication générées aléatoirement. Amuse toi bien ! (ou pas) 😊 </p>
    <div class="tableau">
   <table class="table">
                <thead class="table table-borderless table-dark">
                    <tr>
                        <th scope="col" class="text-center">Opération</th>
                        <th scope="col" class="text-center">Résultat</th>
                    </tr>
                </thead>
                <tbody class ="table table-bordered table-dark">
                    <?php
                    $num = rand(1, 12);
                        for ($i = 1; $i <= 12; $i++) :
                            $resultat = $i * $num;
                        ?>
                        <tr>
                            <td class='text-center'><?= $num ?> * <?= $i ?></td>
                            <td class='text-center'><?= $resultat ?></td>
                        </tr>
                        <?php endfor; ?>
                </tbody>
            </table>
</div>
</body>
</html>