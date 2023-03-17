<?php
// values of different lengths to 1 meter
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

// values of different volumes to 1 liter
const liter = array(
  "cmcube" => 0.001,
  "mcube" => 1000,
  "liter" => 1,
  "mmcube" => 0.000001
);  

// values of different weight to 1 kilogram
const kg = array(
  "Ounce" =>	0.0283495,
  "Pound" =>	0.453592,
  "stones" =>	6.35029,
  "Tonne" =>	1000,
  "Gram" =>	0.001,
  "Kilogram" =>	1
);

// values of different speeds to 1 KMPH
const kmph = array(
    "Lightspeed" => 1079252848.8,
    "Mach" => 1255.08,
    "Mlph" => 1.609344,
    "Mps" => 3.6,
    "Kmph" => 1,
    "Kmps" => 3600,
    "Knot" => 1.852
);

// this fuction converts any length to meter and then from meter to users selected unit
function len($val, $from, $to)
{
    $meter = toMeter($val, $from);
    echo fromMeter($meter, $to);
}

// this fuction converts any length to meter 
function toMeter($val, $from)
{
    return $val * meter[$from];
}

// this fuction converts meter to users selected unit
function fromMeter($val, $to)
{
    return $val / meter[$to];
}

// this fuction converts any volume to liters and then from liters to users selected unit
function vol($val, $from, $to)
{
    $liter = toLtr($val, $from);
    echo fromLtr($liter, $to);
}

// this fuction converts any volume to liters 
function toLtr($val, $from)
{
    return $val*liter[$from];
}

// this fuction converts liters to users selected unit
function fromLtr($val, $to)
{
    return $val/liter[$to];
}

// this fuction converts any weight to Kilogram and then from Kilogram to users selected unit
function weight($val, $from, $to)
{
    $kilo = toKG($val, $from);
    echo fromKG($kilo, $to);
}

// this fuction converts any weight to Kilogram 
function toKG($val, $from)
{
    return $val * kg[$from];
}

// this fuction converts Kilogram to users selected unit
function fromKG($val, $to)
{
    return $val / kg[$to];
}

// this fuction converts any temerature to celcius and then from celcius to users selected unit
function temp($val, $from, $to) 
{
  $celsius = toCelcius($val, $from);
  echo fromCelcius($celsius, $to);
}

// this fuction converts any temerature to celcius 
function toCelcius($val, $from) 
{
  switch ($from) {
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

// this fuction converts celcius to users selected unit
function fromCelcius($val, $to) 
{
  switch ($to) {
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

// this fuction converts any area to Square Meters and then from Square Meters to users selected unit
function area($val, $from, $to)
{
    $meter = toSqMeter($val, $from);
    echo fromSqMeter($meter, $to);
}

// this fuction converts any area to Square Meters 
function toSqMeter($val, $from)
{
    return $val * pow(meter[$from], 2);
}

// this fuction converts Square Meters to users selected unit
function fromSqMeter($val, $to)
{
    return $val / pow(meter[$to], 2);
}

// this fuction converts any speed to KMPH and then from KMPH to users selected unit
function speed($val, $from, $to)
{
    $kilo = toKMPH($val, $from);
    echo fromKMPH($kilo, $to);
}

// this fuction converts any speed to KMPH 
function toKMPH($val, $from)
{
    return $val * kmph[$from];
}

// this fuction converts KMPH to users selected unit
function fromKMPH($val, $to)
{
    return $val / kmph[$to];
}

// this if statement is executed on ajax call it checks from where the ajax is called and redirects execution to desired function
if (isset($_POST['type'])) {
    $value = $_POST["v1"];
    $from = $_POST["o1"];
    $to = $_POST["o2"];

    switch ($_POST['type']) {
      case 'length':
        len($value, $from, $to);
        break;
      case 'volume':
        vol($value, $from, $to);
        break;
      case 'weight':
        weight($value, $from, $to);
        break;
      case 'temp':
        temp($value, $from, $to);
        break;
      case 'area':
        area($value, $from, $to);
        break;
      case 'speed':
        speed($value, $from, $to);
        break;
    }

}
?>