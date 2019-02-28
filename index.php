<?php

function calculateCashflow($startingSavings = 0, $savingPerYear = 0, $cashflowPerHouse = 0, $houseCount = 0, $numYears = 10, $cashDownPerHouse = 20000) {
  setlocale(LC_MONETARY,"en_US");
  $currYear = 1;
  $currCash = $startingSavings;
  $annualRealEstateCashFlow = 0;
  while($currYear <= $numYears){
    $annualRealEstateCashFlow = $cashflowPerHouse * $houseCount;
    $currCash = $currCash + $savingPerYear + $annualRealEstateCashFlow;

    $numHousesToBuy = floor($currCash / $cashDownPerHouse);
    if($currCash > $cashDownPerHouse) {
      $houseCount += $numHousesToBuy;
      $currCash -= $cashDownPerHouse * $numHousesToBuy;
    }
    echo "Cash at end of year $currYear: <strong>" . money_format("%(.0n",$currCash) . "</strong></br>"; 
    echo "House Count at end of year $currYear: <strong>" . $houseCount . "</strong></br>";
    echo "Annual Real Estate Cash Flow at end of year $currYear: <strong>" . money_format("%(.0n",$annualRealEstateCashFlow) . "</strong></br></br>";
    $currYear++;
  }

  return $annualRealEstateCashFlow;
  
}
$startingSavings = 0;
$savingPerYear = 10000; 
$cashflowPerHouse = 3000; 
$houseCount = 2; 
$numYears = 20; 
$cashDownPerHouse = 20000;

calculateCashflow($startingSavings, $savingPerYear, $cashflowPerHouse, $houseCount, $numYears, $cashDownPerHouse);


?>