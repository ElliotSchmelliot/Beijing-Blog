<?php
if ($_GET['randomId'] != "WnW8fs79RxtYgjmd_9Yflhr4WyI6nAEH3Skad4TyAK1w2e0yOOZQaaccGtd_Oxmf") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
