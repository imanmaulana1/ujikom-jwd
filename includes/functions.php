<?php

//Menampilkan informasi tentang variabel. 
function _d($data)
{
    echo "<pre>";
    var_dump(($data));
    echo "</pre>";
}


function meetsMinimumIPK($ipk)
{
    return  $ipk >= 3 ? false : true;
}
