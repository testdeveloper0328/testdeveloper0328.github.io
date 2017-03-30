<?php
	$arrayLetters = array('W','L' );
	$cantIslas = 0;
	for ($i=0; $i < 4; $i++) { 
		for ($j=0; $j < 4; $j++) { 
			$matrizIslas[$i][$j] = $arrayLetters[rand(0, 1)];
		}
	}
	echo "<pre>";
	print_r($matrizIslas);
	echo sizeof($matrizIslas[0]);
	echo "</pre>";

	for ($i=0; $i < sizeof($matrizIslas); $i++) { 
		for ($j=0; $j < sizeof($matrizIslas[$i]); $j++) { 
			if ($matrizIslas[$i][$j] == 'L'){
				if($i-1>=0 && $i+1 < sizeof($matrizIslas)){
					if($j-1>=0 && $j+1 < sizeof($matrizIslas)){
						if($matrizIslas[$i-1][$j] == 'W'){
							if($matrizIslas[$i+1][$j+1] == 'W'){
								if($matrizIslas[$i+1][$j] == 'W'){
									if($matrizIslas[$i][$j+1] == 'W'){
										if($matrizIslas[$i][$j-1] == 'W'){
											$cantIslas = $cantIslas + 1;
										}											
									}
								}
							}
						}
					}									
				}				
			}
		}
	}
	echo $cantIslas;

?>