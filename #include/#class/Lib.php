<?php

namespace App;

class Lib
{
    public function seo_title($s)
    {
        $c = array(' ');
        $d = array('-', '/', '\\', ',', '.', '#', ':', ';', '\'', '"', '[', ']', '{', '}', ')', '(', '|', '`', '~', '!', '@', '%', '$', '^', '&', '*', '=', '?', '+');

        $s = str_replace($d, '', $s); // hilangkan karakter yang ada di $d

        $s = strtolower(str_replace($c, '-', $s)); // ganti spasi dengan - dan ganti jenis huruf kapital dengan huruf kecil
        return $s;
    }
}
