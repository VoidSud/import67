<?php
// Directory where the organized card folders are stored
$baseDir = "cards"; // Adjust the path if necessary, assuming the folder 'cards' is in the same directory as this script

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the BIN (first 6 digits of card number) from user input
    $bin = $_POST['bin'];

    // Sanitize input to ensure it's a 6-digit number
    if (preg_match('/^\d{6}$/', $bin)) {
        // Path to the folder containing the card details
        $folderPath = $baseDir . "/" . $bin;

        // Check if the folder exists
        if (is_dir($folderPath)) {
            $detailsFile = $folderPath . "/details.txt";

            // Check if the details file exists
            if (file_exists($detailsFile)) {
                // Read and display the card details
                $details = file_get_contents($detailsFile);
                echo "<h3>Card Details for BIN $bin:</h3>";
                echo "<pre>$details</pre>";
            } else {
                echo "Details file not found for BIN $bin.";
            }
        } else {
            echo "No data found for BIN $bin.";
        }
    } else {
        echo "Invalid BIN. Please enter a 6-digit number.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Retrieve Card Details</title>
</head>
<body>
    <h2>Retrieve Card Details by BIN (First 6 Digits)</h2>
    <form method="POST" action="">
        <label for="bin">Enter 6-digit BIN:</label>
        <input type="text" name="bin" id="bin" required>
        <button type="submit">Get Details</button>
    </form>
</body>
</html>
