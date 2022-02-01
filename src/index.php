<?php
namespace TDD;

require dirname(__FILE__, 2) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";

$avond = new BenefietAvond();
$aantalBezoekers = 1200;
$prijsTickets = 45;
$__avond = $avond->kostenBenefietConcert($aantalBezoekers, $prijsTickets);
?>
<p>
	Wanneer er <?=$aantalBezoekers?> bezoekers komen op de benefietavond die ieder <?=$prijsTickets?> euro hebben uitgegeven aan een ticket, kan er <?=$__avond?> euro worden uitgegeven aan de band die gaat spelen.
</p>


