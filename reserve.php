<?php
require "DataBase.php";

$db = new DataBase();
$db->dbConnect();

// $rawPostBody = file_get_contents('php://input');
// $postData = json_decode($rawPostBody, true);//$postData is now an array
// var_dump($postData);
$date = $_GET['date'];
$type = $_GET['type'];
$user_id = $_GET['user_id'];

$db->reserve($date, $type, $user_id);

//
$date_range_with_reservations = [];

$start_date = new DateTime(date('Y-m-d'));

$end_date = new DateTime(date('Y-m-d', strtotime(date('Y-m-d'). ' + 15 days')));





$reservations = $db->reservationsFromTo($start_date->format("Y-m-d"), $end_date->format("Y-m-d"));



function getIfExist($arr, $key){
	$items = [];
	foreach ($arr as $item) {
		if($item['date'] == $key){
			array_push($items, $item);
		}
	}


	return count($items) ? $items : false;
}


$result_for_api = [];

// echo "<table border='1'><tr> <th>Date</th> <th>Dinner</th> <th>lunch</th> </tr>";
for($i = clone $start_date; $i <= $end_date; $i->modify('+1 day')){
    
    $date_range_with_reservations[$i->format("Y-m-d")] = [
    	'date' => $i->format("Y-m-d"),
    	'dinner' => false,
    	'lunch' => false,
    ];

    if($date_reservations = getIfExist($reservations,$i->format("Y-m-d"))){

    	foreach ($date_reservations as $date_reservation) {
    		if($date_reservation['type'] === 'dinner')
    			$date_range_with_reservations[$i->format("Y-m-d")]['dinner'] = true;
	    	if($date_reservation['type'] === 'lunch')
	    			$date_range_with_reservations[$i->format("Y-m-d")]['lunch'] = true;
	    			
    	}

    }

    $result_for_api[] = [
        'date' => $i->format('Y-m-d'),
        'dinner' => ($date_range_with_reservations[$i->format('Y-m-d')]['dinner']? 'Yes' : 'No'),
        'lunch' => ($date_range_with_reservations[$i->format('Y-m-d')]['lunch']? 'Yes' : 'No')
    ];
// echo "<tr> 
// 		<td>" . $i->format('Y-m-d') ."</td>"; 
// echo "<td>" . ($date_range_with_reservations[$i->format('Y-m-d')]['dinner']? 'Yes' : 'No')."</td>";
// echo "<td>". ($date_range_with_reservations[$i->format('Y-m-d')]['lunch']? 'Yes' : 'No'). "</td> </tr>";

    // var_dump($date_range_with_reservations[$i->format("Y-m-d")]);
    // echo "string";
    // echo "<hr>";
}
// echo "</table>";

// echo "<hr><br>";
echo json_encode($result_for_api);
die();


// foreach ($reservations as $reservation) {

// 	$row = 
// 	var_dump($reservation); echo "<hr>";
// }


