<?php
// Diyar Parwana
// https://github.com/diypa571/synlex/
class CityPrinter {
  private $array;

  public function __construct($rows) {
    $rowsArray = explode("\n", $rows);
    $this->array = [];

    foreach ($rowsArray as $row) {
      $elements = explode("\t", $row);
      $firstWord = $elements[0];
      $restOfWords = $elements[1];

      // Add comma after the first word
      $modifiedRow = $firstWord . ',' . $restOfWords;
      $this->array[] = explode(",", $modifiedRow);
    }
  }

  public function printElements($numElements) {
    $elementsToPrint = array_slice($this->array, 0, $numElements);
    foreach ($elementsToPrint as $element) {
      echo $element[0] . "<br>";
    }
  }
}

$rows = "
Stockholm
Göteborg
Malmö
Uppsala
Linköping
Västerås
Örebro
Helsingborg
Jönköping
Norrköping
Lund
Umeå
Gävle
Borås
Eskilstuna
Södertälje
Karlstad
Täby
Växjö
Halmstad
Sundsvall
Luleå
Trollhättan
Östersund
Borlänge
Tumba
Upplands Väsby
Kalmar
Skövde
Karlskrona
Kristianstad
Falun
Uddevalla
Skellefteå
Landskrona
Varberg
Motala
Kungsbacka
Mölndal
Vänersborg
Lidingö
Nyköping
Karlskoga
Alingsås
Katrineholm
Lidköping
Enköping
Västervik
Falkenberg
Hässleholm
Trelleborg
Nynäshamn
Lerum
Örnsköldsvik
Kristinehamn
Boden
Nässjö
Eslöv
Falköping
Sandviken
Köping
Huskvarna
Visby
Skara
Sollentuna
Ulricehamn
Söderhamn
Kungälv
Kävlinge
Strängnäs
Trosa
Skanör med Falsterbo
Åkersberga
Värnamo
Ronneby
Partille
Norrtälje
Nacka
Mjölby
Mariestad
Lomma
Kumla
Karlshamn
Järna
Hässleholmen
Borgholm
Arboga
Fagersta
Örkelljunga
Hjo
Falköping
Avesta
Gnesta
Oskarshamn
Härnösand
Hudiksvall
Ljungby
Säffle
Skövde
Solna
Sollefteå
Sävsjö
Söderköping
Simrishamn
Sigtuna
Stenungsund
Storfors
Strömstad
Sundbyberg
Sunne
Surahammar
Svedala
Svenljunga
Säter
Timrå
Tingsryd
Tomelilla
Töreboda
Tranås
Trelleborg
Trollhättan
Trosa
Tyresö
Uddevalla
Ulricehamn
Umeå
Upplands Väsby
Upplands-Bro
Vadstena
Vallentuna
Varberg
Vaxholm
Vellinge
Vetlanda
Vilhelmina
Vimmerby
Vindeln
Vingåker
Ystad
Åmål
Ånge
Åre
Årjäng
Åsele
Åstorp
Åtvidaberg
Älmhult
Älvdalen
Älvkarleby
Älvsbyn
Ängelholm
Öckerö
Ödeshög
Örebro
Örkelljunga
Örnsköldsvik
Östersund
Östhammar
Östra Göinge
Överkalix
Övertorneå";

$cityPrinter = new CityPrinter($rows);
$cityPrinter->printElements(20);

?>
