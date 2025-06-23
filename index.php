<?php
/*
 * ============================================================================
 * File        : index.php
 * Title       : Create HTML File from ID
 * Description : This script creates an HTML file with Hello content.
 * Author      : Your Name
 * Version     : 1.0
 * Created     : 2025-06-23
 * ============================================================================
 */

// -----------------------------------------------------------------------------
// Configuration
// -----------------------------------------------------------------------------

$id = isset($_GET['id']) ? basename($_GET['id']) : 'hello';
$filename = "$id.html";
$content = <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello Page</title>
</head>
<body>
    <h1>Hello from ID $id</h1>
</body>
</html>
HTML;

// -----------------------------------------------------------------------------
// File Creation Logic
// -----------------------------------------------------------------------------

if (file_put_contents($filename, $content)) {
    echo "File '$filename' created successfully.";
} else {
    echo "Failed to create file.";
}
?>
