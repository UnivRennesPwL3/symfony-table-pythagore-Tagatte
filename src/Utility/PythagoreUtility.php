<?php
namespace App\Utility;

class PythagoreUtility{
    public function display ():string  {
        $tablePythagore = "<table border='1' cellpadding='5' cellspacing='0'>
        // Affichage de la première ligne (entêtes colonnes)
         <tr><th></th>";
        for ($i = 0; $i <= 10; $i++) {
            $tablePythagore.="<th>$i</th>";
        }
         $tablePythagore.="</tr>";

        // Génération de la table de Pythagore
        for ($i = 0; $i <= 10; $i++) {
            $tablePythagore.="<tr>";
            $tablePythagore.="<th>$i</th>"; 
            for ($j = 0; $j <= 10; $j++) {
                if ($i == $j) {
                    $tablePythagore.="<td>X</td>"; 
                } 
                else {
                    $tablePythagore.="<td>" . ($i * $j) . "</td>"; 
                }
            }
            $tablePythagore.="</tr>";
        }
        
        $tablePythagore.="</table>";
    
        return $tablePythagore;

    }
}