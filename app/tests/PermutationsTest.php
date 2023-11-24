<?php

namespace App\Tests;

use App\Service\Permutations;
use PHPUnit\Framework\TestCase;

class PermutationsTest extends TestCase
{
    // 1
    public function testOneSymbol(): void
    {
        $perms = Permutations::getPermutations('a');
        sort($perms);
        $this->assertSame(['a'], $perms);
        $this->assertCount(1, $perms);
    }

    // 2
    public function testTwoSameSymbol(): void
    {
        $perms = Permutations::getPermutations('aa');
        sort($perms);
        $this->assertSame(['aa'], $perms);
        $this->assertCount(1, $perms);
    }

    // 3
    public function testTwoDifferentSymbols(): void
    {
        $perms = Permutations::getPermutations('ab');
        sort($perms);
        $this->assertSame(['ab', 'ba'], $perms);
        $this->assertCount(2, $perms);
    }

    // 4
    public function testThreeSymbolsWhereTwoSameSymbolsNear(): void
    {
        $perms = Permutations::getPermutations('abb');
        sort($perms);
        $this->assertSame(['abb', 'bab', 'bba'], $perms);
        $this->assertCount(3, $perms);
    }

    // 5
    public function testThreeDifferentSymbols(): void
    {
        $perms = Permutations::getPermutations('abc');
        sort($perms);
        $this->assertSame([
            'abc', 'acb',
            'bac', 'bca',
            'cab', 'cba'
        ], $perms);
        $this->assertCount(6, $perms);
    }

    // 6
    public function testThreeSymbolsWhereTwoSameSymbolsNotNear(): void
    {
        $perms = Permutations::getPermutations('aba');
        sort($perms);
        $this->assertSame(['aab', 'aba', 'baa'], $perms);
        $this->assertCount(3, $perms);
    }

    // 7
    public function testFourSymbolsWhereTwoSameSymbolsNear(): void
    {
        $perms = Permutations::getPermutations('aabc');
        dump($perms);
        sort($perms);
        $this->assertSame([
            'aabc', 'aacb', 'abac', 'abca', 'acab', 'acba',
            'baac', 'baca', 'bcaa',
            'caab', 'caba', 'cbaa'
        ], $perms);
        $this->assertCount(12, $perms);
    }
    // 8
    public function testFourSymbolsWhereTwoSameSymbolsNotNear(): void
    {
        $perms = Permutations::getPermutations('ABCA');
        sort($perms);
        $this->assertSame([
            'AABC', 'AACB', 'ABAC', 'ABCA', 'ACAB', 'ACBA',
            'BAAC', 'BACA', 'BCAA',
            'CAAB', 'CABA', 'CBAA'
        ], $perms);
        $this->assertCount(12, $perms);
    }
}
