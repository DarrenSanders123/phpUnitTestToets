<?php

namespace TDD;

class BenefietAvond
{
    function kostenBenefietConcert($aantalBezoekers, $prijsTickets) {

        if ($aantalBezoekers < 600 || $aantalBezoekers > 2500) {
            return "Concert afgelast, het aantal bezoekers valt buiten de prognose.";
        }
        if ($prijsTickets < 25 || $prijsTickets > 75) {
            return "De ticketprijzen zijn niet realistisch, de verkoopprijs moet tussen de 25 en 75 euro liggen.";
        }

        // Opgehaald bedrag door kaartverkoop benefietconcert.
        $totaalBedrag = round($aantalBezoekers * $prijsTickets);

        // Bedrag dat mag worden uitgegeven aan het inhuren van een band.
        $maxBandUitgaven = round((20 / 100 )* $totaalBedrag);

        if ($maxBandUitgaven < 3500) {
            return "Voor dit bedrag is geen band beschikbaar, verhoog de ticketprijs.";
        }

        return $maxBandUitgaven;

    }
}