<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/theme.css">
    <title>Document</title>
</head>
<body>
<div class="formulaire">
    <form action="" method="post">
    <div>
            <label for="name">Name :</label>
            <input type="text" name="name" id="name" value="">
    </div>
    <div>
        <label for="personnage-type">Classe</label>
        <select name="type" id="personnage-type" required>
            <option value="" selected></option>
            <option value="warrior" >warrior</option>
            <option value="thief" >thief</option>
            <option value="wizard" >wizard</option>
        </select>
    </div><br>

<!--        <label for="life_max">Life max : </label>
        <input type="text" id="life_max" value="">

        <label for="life_current">Lifeeeee current :</label>
        <input type="text" id="life_current" value="">

        <label for="energy_max">Energy max : </label>
        <input type="text" id="energy_max" value="">

        <label for="energy_current">Energy current :</label>
        <input type="text" id="energy_current" value="">-->

        <button>Créer</button>

    </form>
</div>
</body>
</html>