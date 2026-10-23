<?php

$toPrecisionNative = function ($d, $num) {
    return sprintf("%.{$d}g", $num);
};

$toFixedNative = function ($d, $num) {
    return sprintf("%.{$d}F", $num);
};

$toExponentialNative = function ($d, $num) {
    return sprintf("%.{$d}e", $num);
};

$toString = function ($num) {
    return strval($num);
};

$exports['toPrecisionNative'] = $toPrecisionNative;
$exports['toFixedNative'] = $toFixedNative;
$exports['toExponentialNative'] = $toExponentialNative;
$exports['toString'] = $toString;
return $exports;
