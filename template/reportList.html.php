<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/css/theme.css">
</head>
<body>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const body = document.querySelector('body');
        fetch('/api/situations')
            .then((response) => response.json())
            .then((data) => {
                console.log(data);
                data.forEach(function (valueList) {
                    body.innerHTML += `
                                    <table>
                                        <tr>
                                            <th>Nom Personnage</th>
                                            <th>Max life  </th>
                                            <th>Max current  </th>
                                            <th>Max energy  </th>
                                            <th>Current energy </th>
                                            <th>Attack </th>
                                            <th>Defense </th>
                                            <th>Action </th>
                                        </tr>
                                        <tr>
                                            <td>${valueList.name}</td>
                                            <td>${valueList.maxLife}</td>
                                            <td>${valueList.currentLife}</td>
                                            <td>${valueList.maxEnergy}</td>
                                            <td>${valueList.currentEnergy}</td>
                                            <td>${valueList.attack}</td>
                                            <td>${valueList.defense}</td>
                                            <td><button>modifier ${valueList.id}</button>
                                                <button>Supprimer ${valueList.id}</button>  </td>
                                        </tr>
                                    </table>
`
                })
            })
    })
</script>
</body>
</html>