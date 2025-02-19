<?php

namespace data_info ;

trait informasi {

    function A (){
        echo "informasi A".PHP_EOL;
    }
    function B (){
        echo "informasi B".PHP_EOL;
    }

};

trait info {

    function A (){
        echo "info a".PHP_EOL;
    }
    function B (){
        echo "info b".PHP_EOL;
    }
}

//* dari contoh diatas kita ada dua trait , dengan nama function ny sama