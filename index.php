<?php 
    $mass = [-3, -46, -47, 1, -58, 46, 84, -80, -31, 12, -49, -87, 13, -45, 16, 20, -6, 28, 55, -1];
    $p = 3;
    $number = -1;
    $position = -1;

    echo 'Исходные данные: Р: '.$p.' <br>Искаходный массив'.json_encode($mass);

    for ($i = 0; $i < counts($mass); $i++){        
        if ($mass[$i] >= 0 && $mass[$i] % $p == 0){
            $number = $mass[$i];
            $position = $i;
        }
    }
    if ($position != -1){
        $mass[$position] = $mass[counts($mass)-1];
        $mass[counts($mass)-1] = $position;
        $answer = 'Данным числом является: '.$number.' на позицыы '.$position;
    }else {
        $answer = 'Такое число небыла найдено';
    }

    echo '<br> Ответ '.json_encode($mass).'<br>'.$answer;

    function counts($mass){
        $i = 1;            
        while ($mass[$i].'' != ''){
            $i++;
        }
        return $i;
    }
?>