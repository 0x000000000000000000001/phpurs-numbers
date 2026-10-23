<?php

$nan = NAN;
$isNaN = function ($n) {
    return is_nan($n);
};

$infinity = INF;
$isFinite = function ($n) {
    return is_finite($n);
};

$fromStringImpl = function ($str, $isFinite, $just, $nothing) {
    // JS parseFloat behavior: parse leading float
    if (preg_match('/^[+-]?(?:(?:\d+\.?\d*)|(?:\.\d+))(?:[eE][+-]?\d+)?/', trim($str), $matches)) {
        $num = floatval($matches[0]);
        if ($isFinite($num)) {
            return $just($num);
        }
    }
    return $nothing;
};

$abs = function ($n) {
    return abs($n);
};
$acos = function ($n) {
    return acos($n);
};
$asin = function ($n) {
    return asin($n);
};
$atan = function ($n) {
    return atan($n);
};

$atan2 = function ($y, $x) {
    return atan2($y, $x);
};

$ceil = function ($n) {
    return ceil($n);
};
$cos = function ($n) {
    return cos($n);
};
$exp = function ($n) {
    return exp($n);
};
$floor = function ($n) {
    return floor($n);
};
$log = function ($n) {
    return log($n);
};

$max = function ($n1, $n2) {
    if (is_nan($n1) || is_nan($n2)) {
        return NAN;
    }
    return \max($n1, $n2);
};

$min = function ($n1, $n2) {
    if (is_nan($n1) || is_nan($n2)) {
        return NAN;
    }
    return \min($n1, $n2);
};

$pow = function ($n, $p) {
    return pow($n, $p);
};

$remainder = function ($n, $m) {
    return fmod($n, $m);
};

$round = function ($n) {
    return round($n);
};

$sign = function ($x) {
    if (is_nan($x)) {
        return NAN;
    }
    if ($x === 0.0 || $x === -0.0) {
        return $x;
    }
    return $x < 0 ? -1.0 : 1.0;
};

$sin = function ($n) {
    return sin($n);
};
$sqrt = function ($n) {
    return sqrt($n);
};
$tan = function ($n) {
    return tan($n);
};

$trunc = function ($x) {
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
