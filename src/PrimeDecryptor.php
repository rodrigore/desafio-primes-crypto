<?php

namespace App;

use Brick\Math\BigInteger;

class PrimeDecryptor
{
    public function decrypt($number)
    {
        $primes = [2, 3, 5, 7, 11, 13, 17, 19, 23, 29];
        $letters = array_combine(range(1, 26), range('a', 'z'));

        $decryptMessage = [];
        foreach($primes as $prime) {
            $count = 0;
            $bigNumber = BigInteger::of($number);
            while ($bigNumber->remainder($prime) == BigInteger::of('0')) {
                $bigNumber = $bigNumber->dividedBy($prime);
                $count++;
            }
            $decryptMessage[] = $count > 0 ? $letters[$count] : '';
        }
        return join('', $decryptMessage);
    }
}
