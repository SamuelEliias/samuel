<?php
print("Quantidade de valores via CLI: ".$argc."\n");
for( $i = 0; $i < $argc; $i++ ) 
    {
    print("Argumentono. ".( $i+ 1).":". $argv[$i]."\n");
    }
?>