<?php 

// $alternantif = array();
// $kriteria = array();
// $matriksR = array();

// //kolom
// $kriteria[] = 'C1';
// $kriteria[] = 'C2';
// $kriteria[] = 'C3';
// $kriteria[] = 'C4';
// $kriteria[] = 'C5';
// $kriteria[] = 'C6';
// $kriteria[] = 'C7';
// $kriteria[] = 'C8';

// // baris                0     1  2  3  4  5  6  7  8
// $alternantif[] = array('A1', 4, 5, 4, 3, 4, 4, 4, 3);
// $alternantif[] = array('A2', 5, 4, 4, 4, 3, 4, 4, 4);
// $alternantif[] = array('A3', 4, 3, 4, 5, 3, 3, 3, 3);
// //print_r($alternantif);

// // echo '<pre>';
// // print_r(min(array_column($alternantif, 1)));
// // echo '<pre>';

// $index_alternatif = 0;
// foreach ($alternantif as $alt) {
// 	$index_kriteria = 1;
// 	foreach ($kriteria as $krt) {
// 		$matriksR[$index_alternatif][$index_kriteria] = $alternantif[$index_alternatif][$index_kriteria]/max(array_column($alternantif, $index_kriteria));
// 	$index_kriteria++;	
// 	}
// $index_alternatif++;	
// }

// echo '<pre>';
// print_r($matriksR);
// echo '<pre>';

$arrRoom[] = array("RoomCode" => "Deluxe",
                    "Rates" => array ( array(
                        "BoardCode" => "RO",
                        "Price" => 100)
                    ));
$arrRoom[] = array("RoomCode" => "Standard",
                    "Rates" => array ( array(
                        "BoardCode" => "RO",
                        "Price" => 100)                        
                    ));                    
$arrRoom[] = array("RoomCode" => "Deluxe",
                    "Rates" => array (array(
                        "BoardCode" => "RO",
                        "Price" => 200)
                    ));

foreach($arrRoom as $room)
{    
    foreach($room['Rates'] as $rates)
    {        
        $nRooms[$room['RoomCode']][$rates['BoardCode']][] = array("RoomCode" => $room['RoomCode'],
                                                            "MealCode" => $rates['BoardCode'],
                                                            "Price" => $rates['Price']);
    }
}
echo '<pre>';
print_r($arrRoom);
echo '<pre>';
 ?>