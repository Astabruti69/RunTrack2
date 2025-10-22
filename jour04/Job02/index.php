<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #aaa;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #eee;
        }
    </style>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="Nom">
        <input type="text" name="Prenom">
        <input type="submit" value="Submit">
    </form>
    <table>
        <thead>
            <tr>
                <th>Argument</th>
                <th></th>
            </tr>
        </thead>
        <tr>
            <td><?php
            echo "Prenom";
            ?></td>
            <td><?php
            if (isset($_GET["Prenom"]) > 0) {
                echo $_GET["Prenom"];
            }
            ?></td>
        </tr>
        <tr>
            <td><?php
            echo "Nom";
            ?></td>
            <td><?php
            if (isset($_GET["Nom"]) > 0) {
                echo $_GET["Nom"];
            }
            ?></td>
        </tr>
    </table>
</body>

</html>