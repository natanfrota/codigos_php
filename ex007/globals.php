<pre style="font-size: 2rem; color: red">

<?php

function fibo(int $num){
    $cont = 0;
    
    $a = 0;
    $b = 1;
    $c = 1;
    
    while($cont < $num){
        echo $c . ' ';
        $c = $a + $b;
        $a = $b;
        $b = $c;

        $cont++;
    }

    echo '<br>';
    echo '<br>';
    echo '<br>';
}

fibo(1);
fibo(2);
fibo(3);
fibo(4);
fibo(5);

?>
</pre>