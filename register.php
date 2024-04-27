<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['programme'])) {
        // removes backslashes
        $programme = stripslashes($_REQUEST['programme']);
        //escapes special characters in a string
        $programme = mysqli_real_escape_string($con, $programme);
        $ppskills1 = stripslashes($_REQUEST['ppskills1']);
        $ppskills1 = mysqli_real_escape_string($con, $ppskills1);
        $ppskills21 = stripslashes($_REQUEST['ppskills21']);
        $ppskills21 = mysqli_real_escape_string($con, $ppskills21);
        $ppskills22 = stripslashes($_REQUEST['ppskills22']);
        $ppskills22 = mysqli_real_escape_string($con, $ppskills22);
        $ppskills3 = stripslashes($_REQUEST['ppskills3']);
        $ppskills3 = mysqli_real_escape_string($con, $ppskills3);
        
        $query    = "INSERT into `courses` (programme, ppskills1, ppskills21, ppskills22, ppskills3)
                     VALUES ('$programme', '$ppskills1', '$ppskills21', '$ppskills22', '$ppskills3')";
        $result   = mysqli_query($con, $query);
    }
?>