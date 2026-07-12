<?php

$toPrecisionNative = function($d, $num = null) use (&$toPrecisionNative) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$toPrecisionNative) {

            return $toPrecisionNative(...\array_merge($__args, $more));
        };
    }
    return sprintf("%.{$d}g", $num);
};

$toFixedNative = function($d, $num = null) use (&$toFixedNative) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$toFixedNative) {

            return $toFixedNative(...\array_merge($__args, $more));
        };
    }
    return sprintf("%.{$d}F", $num);
};

$toExponentialNative = function($d, $num = null) use (&$toExponentialNative) {
    if (\func_num_args() < 2) {
        $__args = \func_get_args();
        return function(...$more) use ($__args, &$toExponentialNative) {

            return $toExponentialNative(...\array_merge($__args, $more));
        };
    }
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
