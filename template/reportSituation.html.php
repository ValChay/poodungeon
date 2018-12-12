<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../public/css/theme.css">
</head>
<body>

<script>document.addEventListener('DOMContentLoaded', function () {
        const body = document.querySelector('body');
        fetch('/api/situation')
            .then((response) => response.json())
            .then((data) => {
                body.innerHTML = `<h1>${data.name}</h1>

            <div id="energy"> Point de vie :
                <progress max="${data.maxLife}" value="${data.currentLife}">
                    ${data.maxLife} / ${data.maxLife}MANA
                </progress>
            </div>
            <div id="pdv"> Energie :
                <progress max="${data.maxEnergy} ?>" value="${data.currentEnergy}">
                ${data.currentEnergy}?>/ ${data.maxEnergy}?> PV
                </progress>
            </div>


<div>Combat :
        attaque: ${data.attack}
        defense: ${data.defense}

</div>
`

            })
    })</script>
</body>
</html>