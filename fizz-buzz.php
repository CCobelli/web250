<?php

 $i = 1;
 
 while ($i <= 100) {
	 if ( 0 == $i % 15 ) {
		 echo 'FizzBuzz';
	 } elseif ( 0 == $i % 5 ) {
		 echo 'Buzz';
	 } elseif ( 0 == $i % 3 ) {
		 echo 'Fizz';
	 }else {
		 echo $i;
	 }
	 echo "<br>";
	 
	 $i ++;
 }
?>