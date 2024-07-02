<?php
require_once "inc/connection.php"; // Include database connection file
require_once "inc/function.php"; // Include utility functions file

// Check if the request method is GET
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Check if the 'id' parameter is set in the query string
    if (isset($_GET['id'])) {
        $id = $_GET['id']; // Get and assign the 'id' parameter value
        
        // Construct SQL query to fetch Ayah and Surah information
        $query = "SELECT * FROM surahs JOIN ayahs ON surahs.id = ayahs.surah_id WHERE ayahs.id = $id";
        
        // Call selectAyah function to execute the query and handle response
        selectAyah($query);
    } else {
        // Handle case when 'id' parameter is not provided in the request
        response_code(404, 'Not found id for ayah.');
    }
} else {
    // Handle case when request method is not GET
    response_code(503, 'There is an error on request');
}
?>

 