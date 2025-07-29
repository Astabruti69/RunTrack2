<?php
$str ="On n’est pas le meilleur quand on le croit mais quand on le sait";
$res = str_replace(["’", " "], "", $str);
$dic =array (
    'consonnes' => 0,
    'voyelles' => 0
);
$voyelle =array (
    'a', 'e', 'i', 'o', 'u', 'y',
    'A', 'E', 'I', 'O', 'U', 'Y'
);

for ($i=0; $i <strlen($res) ; $i++) { 
    if (in_array($res[$i], $voyelle)) {
        $dic ['voyelles'] = $dic ['voyelles'] + 1; 
    } else {
        $dic ['consonnes'] = $dic ['consonnes'] + 1;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Voyelles</th>
                <th>Consonnes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $dic['voyelles'];?></td>
                <td><?php echo $dic['consonnes'];?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>