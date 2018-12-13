<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/index.css">
    <title>Document</title>
</head>
<body>
<h3>Créer votre personnage</h3>
<div class="formulaire">
    <form action="" method="post">
        <div>
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" value="">
        </div>
        <div>
            <label for="personnage-type">Classe</label>

            <select name="type" id="personnage-type" required>
                <option value="Choix" selected>Choix</option>
                <?php foreach ($lists as $list => $listValue): ?>
                    <option value="<?= $list; ?>"><?= $list; ?></option>
                <?php endforeach; ?>
            </select>
            <label for="mdp">Password :</label>
            <input type="password" id="mdp" name="password">
<!--            <label for="mdpc">Confirmer votre password: </label>
            <input type="password" id="mdpc" name="confirmPassword">-->
        </div>


        <br>
        <button>Créer</button>

    </form>
</div>
</body>
</html>