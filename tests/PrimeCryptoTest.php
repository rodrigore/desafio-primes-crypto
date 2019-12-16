<?php

use App\PrimeDecryptor;
use PHPUnit\Framework\TestCase;

class PrimeCryptoTest extends TestCase
{
    /**
     * @test
     * @dataProvider words
     */
    public function decrypt_prime($number, $expected)
    {
        $decryptor = new PrimeDecryptor();
        $this->assertEquals($expected, $decryptor->decrypt($number));
    }

    public function words()
    {
        return [
            ['2250', "abc"],
            ['6277646812500000000', "hola"],
            ['40233680140239064308212773133312764943748000000000000000000', 'turing'],
            ['45087592346382488832366326449069283133412065695070241853706487031250000', 'dijstra'],
            ['8679608265978819446726615827418826755071534791227586000000000000000', 'programa'],
            ['27914797455418138364383974433340682351379394531250000', 'desafio'],
            ['1059246326897806934956526951511712774422030066044771506277207862450866815727414664067933302815246198122035444843750', 'algoritmo'],
        ];
    }
}
