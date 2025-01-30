<?php

//* membuat namespace 
// namespace namaNameSpace { #code } 
// namespace namaNameSpace      // jika tidak ada tanda kurung kurawal bearti satu file itu milik dari satu namespace
// untuk penamaan jika ingin ada sub nya gunakan tanda \


//*dalam contoh ini di dalam satu file ada 2 namespace
namespace file\data1 {


    class Human {};
    function doa () {
        echo "bismillah".PHP_EOL;
    };

    class Avenger{};
    class SuperHero{};
}

namespace file\data2 {
    class Human {};

    function doa () {
        echo "bismillah".PHP_EOL;

    };
}

namespace filex {
    const WNI = "warga negaara indonesia";
}


namespace testing {

 function doa () {
        echo "bismillah".PHP_EOL;

    };
}