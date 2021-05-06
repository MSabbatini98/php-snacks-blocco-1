<!-- Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. 
Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php

/* one
    //?Possibilità 1
    $matches = [
        'partita1' => [
            'team1' => 'Olimpia Milano',
            'team2' => 'Cantù',
            'score' => '55 - 60',
        ],
        'partita2' => [
            'team1' => 'Olimpia Milano',
            'team2' => 'Lazio disu',
            'score' => '50-84',
        ],
        'partita3' => [
            'team1' => 'Dolomiti energia',
            'team2' => 'Olimpia Milano',
            'score' => '73 - 68',
        ],
    ];

    // echo $matches.'<br>';
    foreach ($matches as $k => $partita) {
        echo $partita['team1'] . ' - ' .  $partita['team2'] . ' | ' . $partita['score'] . '<br>';
    }
    // var_dump($matches);
    */

    //? Possibilità 2
    $matches = [
        [
            'home_team' => 'Olimpia Milano',
            'home_ptn' => '55',
            'out_team' => 'Cantù',
            'out_ptn' => '80',
        ],
        [
            'home_team' => 'Olimpia Milano',
            'home_ptn' => '78',
            'out_team' => 'Dolomiti Energia',
            'out_ptn' => '80',
        ],
        [
            'home_team' => 'Grottaferrata basket',
            'home_ptn' => '23',
            'out_team' => 'Olimpia Milano',
            'out_ptn' => '65',
        ],
    ];

    foreach($matches as $match) {
        echo "{$match['home_team']} - {$match['out_team']} | {$match['home_ptn']} - {$match['out_ptn']}" . "<br>"; 
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Snack 1</title>
</head>
<body>
    
</body>
</html>