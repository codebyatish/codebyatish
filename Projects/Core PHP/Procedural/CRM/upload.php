<?php

    if ( 0 < $_FILES['fileToUpload']['error'] ) {
        echo 'Error: ' . $_FILES['fileToUpload']['error'] . '<br>';
    }
    else {
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], 'uploads/file1.pdf');
        
        echo "Success";
    }

?>