<?php
const meter = array(
  "Inch" => 0.0254,
  "Foot" => 0.3048,
  "Yard" => 0.9144,
  "Mile" => 1609.344,
  "Millimeter" => 0.001,
  "Centimeter" => 0.01,
  "Meter" => 1,
  "Kilometer" => 1000,
  "Micrometer" => 0.000001,
  "Nanometer" => 0.000000001
);
const liter = array(
  "cmcube" => 0.001,
  "mcube" => 1000,
  "liter" => 1,
  "mmcube" => 0.000001
);  

const kg = array(
  "Ounce" =>	0.0283495,
  "Pound" =>	0.453592,
  "stones" =>	6.35029,
  "Tonne" =>	1000,
  "Gram" =>	0.001,
  "Kilogram" =>	1
);

const kmph = array(
    "Lightspeed" => 1079252848.8,
    "Mach" => 1255.08,
    "Mlph" => 1.609344,
    "Mps" => 3.6,
    "Kmph" => 1,
    "Kmps" => 3600,
    "Knot" => 1.852
);


function len($val,$from,$to){
    $meter=toMeter($val,$from);
    echo fromMeter($meter,$to);
}
function toMeter($val,$from){
    return $val*meter[$from];
}
function fromMeter($val,$to){
    return $val/meter[$to];
}

function vol($val,$from,$to){
    $liter=toLtr($val,$from);
    echo fromLtr($liter,$to);
}
function toLtr($val,$from){
    return $val*liter[$from];
}
function fromLtr($val,$to){
    return $val/liter[$to];
}

function weight($val,$from,$to){
    $kilo=toKG($val,$from);
    echo fromKG($kilo,$to);
}
function toKG($val,$from){
    return $val*kg[$from];
}
function fromKG($val,$to){
    return $val/kg[$to];
}

function toCelcius($val, $from) {
  switch($from) {
    case 'Celcius':
      return $val;
      break;
    case 'Fahrenheit':
      return ($val - 32) / 1.8;
      break;
    case 'Kelvin':
      return $val - 273.15;
      break;
  }
}
function fromCelcius($val, $to) {
  switch($to) {
    case 'Celcius':
      return $val;
      break;
    case 'Fahrenheit':
      return ($val * 1.8) + 32;
      break;
    case 'Kelvin':
      return $val + 273.15;
      break;
  }
}
function temp($val, $from, $to) {
  $celsius = toCelcius($val, $from);
  echo fromCelcius($celsius, $to);
}

function area($val,$from,$to){
    $meter=toSqMeter($val,$from);
    echo fromSqMeter($meter,$to);
}
function toSqMeter($val,$from){
    return $val*pow(meter[$from],2);
}
function fromSqMeter($val,$to){
    return $val/pow(meter[$to],2);
}

function speed($val,$from,$to){
    $kilo=toKMPH($val,$from);
    echo fromKMPH($kilo,$to);
}
function toKMPH($val,$from){
    return $val*kmph[$from];
}
function fromKMPH($val,$to){
    return $val/kmph[$to];
}

if(isset($_POST['type'])){
    $value=$_POST["v1"];
    $from=$_POST["o1"];
    $to=$_POST["o2"];

    switch($_POST['type']){
        case 'length':
            len($value,$from,$to);
            break;
        case 'volume':
            vol($value,$from,$to);
            break;
        case 'weight':
            weight($value,$from,$to);
            break;
        case 'temp':
            temp($value,$from,$to);
            break;
        case 'area':
            area($value,$from,$to);
            break;
        case 'speed':
            speed($value,$from,$to);
            break;
    }

}
?>