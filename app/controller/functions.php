<?php 

// connect to database
$conn = mysqli_connect($db['default']['hostname'], $db['default']['username'], $db['default']['password'], $db['default']['database']);

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function nowYear($data) {
    $currentYear = date("Y");
    
    if ($data >= $currentYear) {
        return "present";
    } else {
        return $data;
    }
}

function deleteTtl($data){
    if (strpos($data, '-') !== false) {
        $parts = explode('-', $data);
        return trim($parts[0]);
    } else {
        return $data;
    }
}