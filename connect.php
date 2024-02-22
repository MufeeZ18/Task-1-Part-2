<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "university";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Extract data from the form (you can add more validation as needed)
    $faculty = $_POST["faculty"];
    $clg_name = $_POST["clg_name"];
    $clg_address = $_POST["clg_address"];
    $clg_establishment = $_POST["clg_establishment"];
    $clg_contact = $_POST["clg_contact"];
    $clg_email = $_POST["clg_email"];
    $clg_website = $_POST["clg_website"];
    $typee = $_POST["typee"];
    $locationn = $_POST["locationn"];
    $statuss = $_POST["statuss"];
    $Approval1 = $_POST["Approval1"];
    $Approval2 = $_POST["Approval2"];
    $Approval3 = $_POST["Approval3"];
    $Approval4 = $_POST["Approval4"];
    $Approval5 = $_POST["Approval5"];
    $t_name = $_POST["t_name"];
    $t_address = $_POST["t_address"];
    $t_establishment = $_POST["t_establishment"];
    $t_contact = $_POST["t_contact"];
    $t_email = $_POST["t_email"];
    $t_website = $_POST["t_website"];
    $cdc = $_POST["cdc"];
    $icc = $_POST["icc"];
    $iqac = $_POST["iqac"];
    $sc = $_POST["sc"];
    $arc = $_POST["arc"];
    $p_name = $_POST["p_name"];
    $p_remark = $_POST["p_remark"];
    $mr_name = $_POST["mr_name"];
    $mr_remark = $_POST["mr_remark"];
    $iqac_name = $_POST["iqac_name"];
    $iqac_remark = $_POST["iqac_remark"];
    $sc_name = $_POST["sc_name"];
    $sc_remark = $_POST["sc_remark"];
    // ... (repeat for other variables)

    // Using prepared statement to prevent SQL injection
    $sql = $conn->prepare("INSERT INTO entries (faculty, clg_name, clg_address, clg_establishment, clg_contact, clg_email, clg_website, typee, locationn, statuss, Approval1, Approval2, Approval3, Approval4, Approval5, t_name, t_address, t_establishment, t_contact, t_email, t_website, cdc, icc, iqac, sc, arc, p_name, p_remark, mr_name, mr_remark, iqac_name, iqac_remark, sc_name, sc_remark) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Check if the prepared statement is valid
    if ($sql === false) {
        die("Error in preparing statement: " . $conn->error);
    }

    // Bind parameters
    $sql->bind_param("ssssssssssssssssssssssssssssssss",
        $faculty, $clg_name, $clg_address, $clg_establishment, $clg_contact, $clg_email, $clg_website,
        $typee, $locationn, $statuss, $Approval1, $Approval2, $Approval3, $Approval4, $Approval5,
        $t_name, $t_address, $t_establishment, $t_contact, $t_email, $t_website,
        $cdc, $icc, $iqac, $sc, $arc, $p_name, $p_remark, $mr_name, $mr_remark, $iqac_name, $iqac_remark, $sc_name, $sc_remark);

    // Execute the prepared statement
    if ($sql->execute()) {
        echo "Record inserted successfully";
    } else {
        echo "Error: " . $sql->error;
    }

    // Close the prepared statement
    $sql->close();
}

// Close the database connection
$conn->close();
?>







































































