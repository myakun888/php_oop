<?php

namespace Helper;

class InputHelper
{

    static public    function input($pilihan): string
    {
        echo $pilihan;

        $hasil = fgets(STDIN);
        return trim(strtolower($hasil));
    }
};
