<?php
function pingsite($site) {
    function microtime_float() {
        list($usec, $sec) = explode(" ", microtime());
        return ((float)$usec + (float)$sec);
    }
    
    $start = microtime_float();
    $fp = fsockopen($site, 80, $errno, $errstr, 30);
    $end = microtime_float();
    $ms = ($end - $start) * 1000;
    
    return sprintf('%s ms', $ms);
}
