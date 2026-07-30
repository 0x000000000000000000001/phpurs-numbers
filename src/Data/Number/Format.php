<?php

$toPrecisionNative = function($d, $num) use (&$toPrecisionNative) {
    return sprintf("%.{$d}g", $num);
};

$toFixedNative = function($d, $num) use (&$toFixedNative) {
    return sprintf("%.{$d}F", $num);
};

$toExponentialNative = function($d, $num) use (&$toExponentialNative) {
    return sprintf("%.{$d}e", $num);
};

$toString = function($num) use (&$toString) {
    return strval($num);
};

$exports['toPrecisionNative'] = $toPrecisionNative;
$exports['toFixedNative'] = $toFixedNative;
$exports['toExponentialNative'] = $toExponentialNative;
$exports['toString'] = $toString;
return $exports;
