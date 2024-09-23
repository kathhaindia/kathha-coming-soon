<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Create an array with form data
    $contact_data = array($name, $email, $message);
    
    // Open the CSV file in append mode
    $file = fopen("contact_data.csv", "a");
    
    // Save the data in the CSV file
    fputcsv($file, $contact_data);
    
    // Close the file
    fclose($file);
    
    // Redirect back to a thank-you page or display a message
    echo "<script>alert('Thank you for contacting us! We will get back to you soon.'); window.location.href='contact.html';</script>";
}
?>
