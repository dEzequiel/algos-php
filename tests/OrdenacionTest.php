<?php

namespace Algoritmos\Tests;
use Algoritmos\Ordenacion as Ordenacion;
use PHPUnit\Framework\TestCase;

final class OrdenacionTest extends TestCase
{
/** @test */
    public function ordenaMenorMayorConBubbleSort(): void {
        $unorderedArray = [9, 8, 6, 3, 2, 1, 5, 4, 7];
        self::assertEquals([1, 2, 3, 4, 5, 6, 7, 8, 9], Ordenacion::algoritmoBurbuja($unorderedArray));
    }
    
    /** @test */
    public function ordenaMenorMayorConSeleccion(): void {
        $unorderedArray = [100, 33, 22, 44];
        self::assertEquals([22, 33, 44, 100], Ordenacion::algoritmoSeleccion($unorderedArray));
    }

    /** @test */
    public function ordenaMenorMayorConInsercion(): void {
        $unorderedArray = [5, 1, 4, 2, 8];
        self::assertEquals([1, 2, 4, 5, 8], Ordenacion::algoritmoInsercion($unorderedArray));
    }
}

?>