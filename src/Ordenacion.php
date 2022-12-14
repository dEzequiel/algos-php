<?php
namespace Algoritmos;

class Ordenacion {
    
    public static function algoritmoBurbuja(array $conjunto): array {
       for ($i = 0; $i < count($conjunto); $i++) {
        for ($j = 0; $j < (count($conjunto) - $i - 1); $j++) {
            if ($conjunto[$j] > $conjunto[$j + 1]) {
                $temp = $conjunto[$j];
                $conjunto[$j] = $conjunto[$j + 1];
                $conjunto[$j + 1] = $temp;
            }
        }
    } 

        return $conjunto;
    }

    public static function algoritmoSeleccion(array $conjunto): array {

        for ($i = 0; $i < count($conjunto); $i++) {
            $min = $i;
            for($j = $i+1; $j < count($conjunto); $j++) {
                if($conjunto[$j] < $conjunto[$min]) {
                    $min = $j;
                }
            }
            if($min != $i) {
                $tmp = $conjunto[$i];
                $conjunto[$i] = $conjunto[$min];
                $conjunto[$min] = $tmp;
            }
        }

        return $conjunto;
    }

    public static function algoritmoInsercion(array $conjunto): array {

        for ($i = 1; $i < count($conjunto); $i++) {
            $curr = $conjunto[$i];
            for($j = $i - 1; $j>= 0 && $conjunto[$j] > $curr; $j--) {
                $conjunto[$j + 1] = $conjunto[$j];
            }

            $conjunto[$j + 1] = $curr;
        }

        return $conjunto;
    }
}
?>