<?php

class Cursor {

    public static function up($n = 1) {
        echo "\033[".$n."A";
    }

    public static function down($n = 1) {
        echo "\033[".$n."B";
    }

    public static function back($n = 1) {
        echo "\033[".$n."D";
    }

    public static function forward($n = 1) {
        echo "\033[".$n."C";
    }

    public static function clearline() {
        echo "\033[K";
    }

    public static function store() {
        echo "\033[s";
    }

    public static function restore() {
        echo "\033[u";
    }

    public static function underline($v = true) {
        if($v == true) {
            echo "\033[4m";
        } else {
            echo "\033[24m";
        }
    }

    public static function blink($v = true) {
        if($v == true) {
            echo "\033[5m";
        } else {
            echo "\033[25m";
        }
    }

    public static function reverse($v = true) {
        if($v == true) {
            echo "\033[7m";
        } else {
            echo "\033[27m";
        }
    }

    public static function reset() {
        echo "\033[0m";
    }

    public static function black($bg = false, $light = false) {
        if($bg == true) { $bgs = "40"; } else {$bgs = "30"; }
        if($light == true and $bg == false) { $ls = "1;"; } else { $ls = ""; }
        echo "\033[".$ls.$bgs."m";
    }

    public static function red($bg = false, $light = false) {
        if($bg == true) { $bgs = "41"; } else {$bgs = "31"; }
        if($light == true and $bg == false) { $ls = "1;"; } else { $ls = ""; }
        echo "\033[".$ls.$bgs."m";
    }

    public static function green($bg = false, $light = false) {
        if($bg == true) { $bgs = "42"; } else {$bgs = "32"; }
        if($light == true and $bg == false) { $ls = "1;"; } else { $ls = ""; }
        echo "\033[".$ls.$bgs."m";
    }

    public static function yellow($bg = false, $light = false) {
        if($bg == true) { $bgs = "43"; } else {$bgs = "33"; }
        if($light == true and $bg == false) { $ls = "1;"; } else { $ls = ""; }
        echo "\033[".$ls.$bgs."m";
    }

    public static function blue($bg = false, $light = false) {
        if($bg == true) { $bgs = "44"; } else {$bgs = "34"; }
        if($light == true and $bg == false) { $ls = "1;"; } else { $ls = ""; }
        echo "\033[".$ls.$bgs."m";
    }

    public static function magenta($bg = false, $light = false) {
        if($bg == true) { $bgs = "45"; } else {$bgs = "35"; }
        if($light == true and $bg == false) { $ls = "1;"; } else { $ls = ""; }
        echo "\033[".$ls.$bgs."m";
    }

    public static function cyan($bg = false, $light = false) {
        if($bg == true) { $bgs = "46"; } else {$bgs = "36"; }
        if($light == true and $bg == false) { $ls = "1;"; } else { $ls = ""; }
        echo "\033[".$ls.$bgs."m";
    }

    public static function white($bg = false, $light = false) {
        if($bg == true) { $bgs = "47"; } else {$bgs = "37"; }
        if($light == true and $bg == false) { $ls = "1;"; } else { $ls = ""; }
        echo "\033[".$ls.$bgs."m";
    }

    private static function chd($hex) {
        $redhex  = substr($hex,0,2);
        $greenhex = substr($hex,2,2);
        $bluehex = substr($hex,4,2);
        $r = hexdec($redhex);
        $g = hexdec($greenhex);
        $b = hexdec($bluehex);
        return array($r,$g,$b);
    }

    public static function color($hex,$bg = false) {
        $hex = str_replace("#","",$hex);
        if(strlen($hex) <> 6) { throw new Exception('Hex code is invalid.', E_WARNING); }
        $hex = Cursor::chd($hex);
        if($bg == false) {
            echo "\033[38;2;".$hex[0].";".$hex[1].";".$hex[2]."m";
        } else {
            echo "\033[48;2;".$hex[0].";".$hex[1].";".$hex[2]."m";
        }
    }

}

?>
