<?php


namespace App\Tests\entity;

use App\Entity\Joueur;

class dureeJoueurTest
{
    public function testDureeJoueur()
    {
        $joueurRamdom = new Joueur();
        $joueurRamdom->setDateEntree(new DateTime("2017-06-19"));

        $test = $joueurRamdom->dureeJoueur();
        $this->assertEquals(1, $test);
    }
}