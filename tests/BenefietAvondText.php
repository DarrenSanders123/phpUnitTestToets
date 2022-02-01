<?php

namespace TDD;
require dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

use PHPUnit\Framework\TestCase;

class BenefietAvondText extends TestCase
{
    /**
     * @dataProvider provideKostenBenefietConcert
     */
    public function testKostenBenefietConcert($aantalBezoekers, $prijsTickets, $expected, $message) {
        $output = (new BenefietAvond)->kostenBenefietConcert($aantalBezoekers, $prijsTickets);
        $this->assertEquals($expected, $output, $message);
    }

    public function provideKostenBenefietConcert() {
        return [
            [
                300,30, "Concert afgelast, het aantal bezoekers valt buiten de prognose.", "minder dan 600 gasten"
            ],
            [
                2600, 30, "Concert afgelast, het aantal bezoekers valt buiten de prognose.", "meer dan 2500 gasten"
            ],
            [
                700, 20, "De ticketprijzen zijn niet realistisch, de verkoopprijs moet tussen de 25 en 75 euro liggen.", "de ticket prijs is lager dan 25"
            ],
            [
                700, 80, "De ticketprijzen zijn niet realistisch, de verkoopprijs moet tussen de 25 en 75 euro liggen.", "de ticket prijs is hoger dan 75"
            ],
            [
                700, 30, 4200, "er is een budget van 4200 euro"
            ],
            [
                971, 47, 9127, "er is een budget van 9127 euro"
            ],
            [
                600, 25, "Voor dit bedrag is geen band beschikbaar, verhoog de ticketprijs.", "het budget is te weinig"
            ],
            [
                2200, 65, 28600, "er is een budget van 28600 euro"
            ]
        ];
    }
}