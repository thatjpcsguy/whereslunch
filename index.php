<?php

$options = Array(	'Grill\'d', 
			'KFC',
			'Petalling Street',
			'McDonalds',
			'Sussex Center',
			'Eating World',
			'Dragonboy');


$num =  date('z') + 1;

$array_index = $num % sizeof($options);

//var_dump($array_index);

$today = $options[$array_index];



echo '<div style="font-family:Helvetica; margin-top:300px;">';
echo '	<center>';
echo '		<h1>' . $today . '</h1>';
echo '	</center>';
echo '</div>';
