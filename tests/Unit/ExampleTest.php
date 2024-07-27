<?php

namespace Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function test_it_can_calculate_sum_of_two_integers()
    {
        // given - Arrange
        // given we have $x = 2 and $y = 3
        $x = 2;
        $y = 3;

        // when - Act
        // when i call sum function with $x and $y
        $result = sum($x, $y);

        // then - Assert
        // then i expect (assert) that the result should be 5
        $this->assertEquals(5, $result);
    }
}