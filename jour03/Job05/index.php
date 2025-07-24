<?php
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait.";
$dic = array (
    'consonnes' => 0,
    'voyelles' => 0
);
$voyelle = array (
    'A', 'E', 'I', 'O', 'U', 'Y', 
    'a', 'e', 'i', 'o', 'u', 'y'
 );

    for($i = 0;$i < strlen($str); $i++) {
        if(in_array($str[$i], $voyelle)) {
             $dic['voyelles'] = $dic['voyelles'] + 1;
        } else {
            $dic ['consonnes'] = $dic ['consonnes'] + 1;
        }
    }
    var_dump($dic)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job05</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Consonnes</th>
                <th>Voyelles</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic['consonnes']  ?></td>
                <td><?php echo $dic['voyelles']  ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>