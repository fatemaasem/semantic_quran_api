<?php 
include "connection.php";

// Function to send HTTP response code along with message
function response_code($code, $message) {
    header('Content-Type: application/json'); // Set JSON content type for response
    http_response_code($code); // Set HTTP response code
    echo json_encode(['error' => $message]); // Encode message as JSON and echo
    exit; // Stop further execution
}

// Function to select Ayah based on query and return JSON response
function selectAyah($query) {
    global $conn; // Access global database connection variable
    
    $runQuery = mysqli_query($conn, $query); // Execute query
    
    if (!$runQuery) {
        response_code(500, 'Database query failed.'); // Handle database query failure
    }

    $rowsCount = mysqli_num_rows($runQuery); // Count rows returned by query
    
    if ($rowsCount == 1) {
        $ayah = json_encode(mysqli_fetch_assoc($runQuery)); // Fetch and encode row as JSON
        echo $ayah; // Print JSON response
    } else {
        response_code(404, 'Ayah not found.'); // Handle case when Ayah is not found
    }
}
?>

    
      
       