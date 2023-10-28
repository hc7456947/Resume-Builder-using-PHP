<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    // $image = $_POST["image"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
   
    $address = $_POST["address"];
    $summary = $_POST["summary"];
    $template = $_POST["template"];

    switch ($template) {
        case "template1":
            include("resume.php");
            break;
        case "template2":
            include("resume2.php");
            break;
    }

    // Output the generated resume
    echo $resume;
    echo $resume2;

        $image = $_FILES['image'];

        if (getimagesize($image['tmp_name'])) {
            $uploadDir = 'uplds/';

            $fileName = uniqid() . '_' . $image['name'];

            if (move_uploaded_file($image['tmp_name'], $uploadDir . $fileName)) {
                echo 'Image uploaded successfully:<br>';
                //  echo '<img src="' . $uploadDir . $fileName . ' width="50" height="50" alt="Uploaded Image">';
            } else {
                echo 'Error uploading image.';
            }
        } else {
           // echo 'File is not an image.';
        }
    }
// }





?>
