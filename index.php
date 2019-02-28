<?php

function calculateCashflow($startingSavings = 0, $savingPerYear = 0, $cashflowPerHouse = 0, $houseCount = 0, $numYears = 10, $cashDownPerHouse = 20000) {

  $currYear = 1;
  $currCash = $startingSavings;
  $annualRealEstateCashFlow = 0;
  while($currYear <= $numYears){
    $annualRealEstateCashFlow = $cashflowPerHouse * $houseCount;
    $currCash = $currCash + $savingPerYear + $annualRealEstateCashFlow;

    // $numHousesToBuy = round down to nearest integer => ($currCash / $cashDownPerHouse);
    // $houseCount += numHousesToBuy;
    // $
    if($currCash > $cashDownPerHouse) {
      $houseCount++;
      $currCash -= $cashDownPerHouse;
    }
    echo "Cash at end of year $currYear: " . $currCash . "</br>"; 
    echo "House Count at end of year $currYear: " . $houseCount . "</br>";
    echo "Annual Real Estate Cash Flow at end of year $currYear: " . $annualRealEstateCashFlow . "</br></br>";
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