<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div id="container">

<?php
/**
 * Utilisez la base de données que vous avez utilisé dans l'exo 194.
 * Utilisez aussi le CSS que vous avez écris ( div contenant l'utilisateur ).
 * Pour chaque sélection, vous utiliserez un div par utilisateur:
 * ex:  <div class="classe-css-utilisateur">
 *          utilisateur 1, données ( nom, prenom, etc ... )
 *      </div>
 *      <div class="classe-css-utilisateur">
 *          utilisateur 2, données ( nom, prenom, etc ... )
 *      </div>
 *
 * -- Sélections complexes --
 * Une seule requête est permise pour chaque point de l'exo.
 */

// TODO Commencez par créer votre objet de connexion à la base de données, vous pouvez aussi utiliser l'objet statique ou autre qu'on a créé ensemble.
require 'db.php';
$db = DB::getInstance();
/* 1. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' */
// TODO votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs dont le nom est Conor';

$request = $db->prepare("SELECT * FROM user WHERE nom='Conor'");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 2. Sélectionnez et affichez tous les utilisateurs dont le prénom est différent de 'John' */
// TODO Votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs dont le prénom est différent de John';
$request = $db->prepare("SELECT * FROM user WHERE prenom != 'John'");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 3. Sélectionnez et affichez tous les utilisateurs dont l'id est plus petit ou égal à 2 */
// TODO Votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs dont l\'id est plus petit ou égal à 2';
$request = $db->prepare("SELECT * FROM user WHERE id <= 2");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 4. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand ou égal à 2 */
// TODO Votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs dont l\'id est plus grand ou égal à 2 ';
$request = $db->prepare("SELECT * FROM user WHERE id >= 2");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 5. Sélectionnez et affichez tous les utilisateurs dont l'id est égal à 1 */
// TODO Votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs dont l\'id est égal à 1';
$request = $db->prepare("SELECT * FROM user WHERE id = 1");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 6. Sélectionnez et affichez tous les utilisateurs dont l'id est plus grand que 1 ET le nom est égal à 'Doe' */
// TODO Votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs dont l\'id est plus grand que 1 ET le nom est égal à \'Doe\'';
$request = $db->prepare("SELECT * FROM user WHERE id = 1 AND nom='Doe'");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 7. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Doe' ET le prénom est 'John'*/
// TODO Votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs dont le nom est \'Doe\' ET le prénom est \'John\'';
$request = $db->prepare("SELECT * FROM user WHERE nom = 'Doe' AND prenom = 'John'");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 8. Sélectionnez et affichez tous les utilisateurs dont le nom est 'Conor' OU le prénom est 'Jane' */
// TODO Votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs dont le nom est \'Conor\' OU le prénom est \'Jane\'';
$request = $db->prepare("SELECT * FROM user WHERE nom = 'Conor' OR prenom = 'Jane'");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 9. Sélectionnez et affichez tous les utilisateurs en limitant les résultats à 2 résultats */
// TODO Votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs en limitant les résultats à 2 résultats';
$request = $db->prepare("SELECT * FROM user LIMIT 2");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 10. Sélectionnez et affichez tous les utilisateurs par ordre croissant, en limitant le résultat à 1 seul enregistrement */
// TODO Votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs par ordre croissant, en limitant le résultat à 1 seul enregistrement';
$request = $db->prepare("SELECT * FROM user ORDER BY id ASC LIMIT 1 ");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 11. Sélectionnez et affichez tous les utilisateurs dont le nom commence par C, fini par r et contient 5 caractères ( voir LIKE )*/
// TODO Votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs dont le nom commence par C, fini par r et contient 5 caractères';
$request = $db->prepare("SELECT * FROM user WHERE nom LIKE 'C___r'");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 12. Sélectionnez et affichez tous les utilisateurs dont le nom contient au moins un 'e' */
// TODO Votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs dont le nom contient au moins un \'e\'';
$request = $db->prepare("SELECT * FROM user WHERE nom LIKE '%e%'");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 13. Sélectionnez et affichez tous les utilisateurs dont le prénom est ( IN ) (John, Sarah) ... voir IN , pas OR '' */
// TODO Votre code ici.
echo 'Sélectionnez et affichez tous les utilisateurs dont le prénom est ( IN ) (John, Sarah)';
$request = $db->prepare("SELECT * FROM user WHERE prenom IN ('John', 'Sarah')");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php }
/* 14. Sélectionnez et affichez tous les utilisateurs dont l'id est situé entre 2 et 4 */
echo 'Sélectionnez et affichez tous les utilisateurs dont l\'id est situé entre 2 et 4';
// TODO Votre code ici.
$request = $db->prepare("SELECT * FROM user WHERE id BETWEEN 2 AND 4");
$request->execute();

foreach ($request->fetchAll() as $user){ ?>
    <div class="userList">
        <p>Monsieur/Madame : <?= $user['nom'] ?> <?= $user['prenom'] ?></p>
        <p>Habite à <?= $user['ville'] ?> code postal <?= $user['code_postal'] ?> dans le pays <?= $user['pays'] ?></p>
        <p>Son adresse est : <?= $user['numero'] ?> <?= $user['rue'] ?></p>
        <p>Vous pouvez le/la contacter à l'adresse mail suivant : <?= $user['mail'] ?></p>
    </div>
<?php } ?>
</div>
</body>
</html>
