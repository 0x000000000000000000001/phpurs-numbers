<?php

$nan = NAN;
$isNaN = function($n) use (&$isNaN) {
    return is_nan($n);
};

$infinity = INF;
$isFinite = function($n) use (&$isFinite) {
    return is_finite($n);
};

$fromStringImpl = function($str, $isFinite, $just, $nothing) use (&$fromStringImpl) {
    // JS parseFloat behavior: parse leading float
    if (preg_match('/^[+-]?(?:(?:\d+\.?\d*)|(?:\.\d+))(?:[eE][+-]?\d+)?/', trim($str), $matches)) {
        $num = floatval($matches[0]);
        if ($isFinite($num)) {
            return $just($num);
        }
    }
    return $nothing;
};

$abs = function($n) use (&$abs) { return abs($n); };
$acos = function($n) use (&$acos) { return acos($n); };
$asin = function($n) use (&$asin) { return asin($n); };
$atan = function($n) use (&$atan) { return atan($n); };

$atan2 = function($y, $x) use (&$atan2) {
    return atan2($y, $x);
};

$ceil = function($n) use (&$ceil) { return ceil($n); };
$cos = function($n) use (&$cos) { return cos($n); };
$exp = function($n) use (&$exp) { return exp($n); };
$floor = function($n) use (&$floor) { return floor($n); };
$log = function($n) use (&$log) { return log($n); };

$max = function($n1, $n2) use (&$max) {
    if (is_nan($n1) || is_nan($n2)) return NAN;
    return \max($n1, $n2);
};

$min = function($n1, $n2) use (&$min) {
    if (is_nan($n1) || is_nan($n2)) return NAN;
    return \min($n1, $n2);
};

$pow = function($n, $p) use (&$pow) {
    return pow($n, $p);
};

$remainder = function($n, $m) use (&$remainder) {
    return fmod($n, $m);
};

$round = function($n) use (&$round) { return round($n); };

$sign = function($x) use (&$sign) {
    if (is_nan($x)) return NAN;
    if ($x === 0.0 || $x === -0.0) return $x;
    return $x < 0 ? -1.0 : 1.0;
};

$sin = function($n) use (&$sin) { return sin($n); };
$sqrt = function($n) use (&$sqrt) { return sqrt($n); };
$tan = function($n) use (&$tan) { return tan($n); };

$trunc = function($x) use (&$trunc) {
    return $x < 0 ? ceil($x) : floor($x);
};

$exports['nan'] = $nan;
$exports['isNaN'] = $isNaN;
$exports['infinity'] = $infinity;
$exports['isFinite'] = $isFinite;
$exports['fromStringImpl'] = $fromStringImpl;
$exports['abs'] = $abs;
$exports['acos'] = $acos;
$exports['asin'] = $asin;
$exports['atan'] = $atan;
$exports['atan2'] = $atan2;
$exports['ceil'] = $ceil;
$exports['cos'] = $cos;
$exports['exp'] = $exp;
$exports['floor'] = $floor;
$exports['log'] = $log;
$exports['max'] = $max;
$exports['min'] = $min;
$exports['pow'] = $pow;
$exports['remainder'] = $remainder;
$exports['round'] = $round;
$exports['sign'] = $sign;
$exports['sin'] = $sin;
$exports['sqrt'] = $sqrt;
$exports['tan'] = $tan;
$exports['trunc'] = $trunc;
return $exports;
