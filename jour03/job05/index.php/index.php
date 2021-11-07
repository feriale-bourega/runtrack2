<?php

    $str ='on n est pas le meilleur quand on le croit mais quand on le sait';
    $v = 0;
    $c = 0;
    $dic = [
        'voyelles' => ['a','e', 'i', 'o', 'u', 'y'],
        'consonnes' => ['b','c', 'd', 'f', 'g', 'h', 'j','k', 'l', 'm', 'n', 'p', 'q','r', 's', 't', 'v', 'w', 'x', 'z'],
    ];
    
    for ($i=0; isset($str[$i]); $i++) {
        foreach ($dic['voyelles'] as $element) {
            if ($str[$i] == $element) {
                $v++;
            } 
        }
        foreach ($dic['consonnes'] as $element) {
            if ($str[$i] == $element) {
                $c++;            
            } 
        }
    }
    echo '<table>
            <thead>
                <tr>
                    <th> Voyelles </th>
                    <th> Consonnes </th>
                </tr>
            </thead>

            <tbody>
                <td>'.$v++.'</td>
                <td>'.$c++.'</td>
            </tbody>
        </table>';
        
?>
 