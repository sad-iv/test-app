<?php

namespace App\Service;

class Permutations
{
    /**
     * @param string $str
     * @return string[]
     */
    public static function getPermutations(string $str): array
    {
        $perms = [];
        self::findPermutations($str, 0, strlen($str), $perms);

        return $perms;
    }

    private static function findPermutations(string $str, int $index, int $n, array &$perms): void
    {
        if ($index >= $n) {
            $perms[] = $str;
        }

        for ($i = $index; $i < $n; $i++) {

            $check = self::shouldSwap($str, $index, $i);

            if ($check) {
                [$str[$index], $str[$i]] = [$str[$i], $str[$index]];
                self::findPermutations($str, $index + 1, $n, $perms);
                [$str[$index], $str[$i]] = [$str[$i], $str[$index]];
            }
        }
    }

    private
    static function shouldSwap(string $str, int $start, int $curr): bool
    {
        for ($i = $start; $i < $curr; $i++) {
            if ($str[$i] === $str[$curr]) {
                return false;
            }
        }

        return true;
    }
}