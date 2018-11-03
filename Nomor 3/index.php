<?php
// mencetak deret bilangan prima
function prima($n)
{
      for($i=1;$i<=$n;$i++){  // nilai yang akan di cek / eksekusi
              $count = 0; 
              for($j=1;$j<=$i;$j++){ // faktor pembagi
                    if($i % $j==0){ // jika angka yg akan dicek habis dibagi faktor pembagi, maka ditambah +1
                          $count++;
                    }
              }
            if($count==2){ // nilai bilangan prima bagi nya harus 2
                   print $i.",";
            }
     }
} 
prima(37);  // mencari nilai bilangan prima hingga 37
?>