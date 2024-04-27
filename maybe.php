<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['firstname'])) {
        // removes backslashes
        $firstname = stripslashes($_REQUEST['firstname']);
        //escapes special characters in a string
        $firstname = mysqli_real_escape_string($con, $firstname);
        $lastname    = stripslashes($_REQUEST['lastname']);
        $lastname    = mysqli_real_escape_string($con, $lastname);
        $profession = stripslashes($_REQUEST['profession']);
        $profession = mysqli_real_escape_string($con, $profession);
        $phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($con, $phone);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $city = stripslashes($_REQUEST['city']);
        $city = mysqli_real_escape_string($con, $city);
        $state    = stripslashes($_REQUEST['state']);
        $state    = mysqli_real_escape_string($con, $state);
        $postcode = stripslashes($_REQUEST['postcode']);
        $postcode = mysqli_real_escape_string($con, $postcode);
        $social = stripslashes($_REQUEST['social']);
        $social = mysqli_real_escape_string($con, $social);
        $link = stripslashes($_REQUEST['link']);
        $link = mysqli_real_escape_string($con, $link);
        $jobtitle = stripslashes($_REQUEST['jobtitle']);
        $jobtitle = mysqli_real_escape_string($con, $jobtitle);
        $employer    = stripslashes($_REQUEST['employer']);
        $employer    = mysqli_real_escape_string($con, $employer);
        $jcity = stripslashes($_REQUEST['jcity']);
        $jcity = mysqli_real_escape_string($con, $jcity);
        $jstate = stripslashes($_REQUEST['jstate']);
        $jstate = mysqli_real_escape_string($con, $jstate);
        $jstart = stripslashes($_REQUEST['jstart']);
        $jstart = mysqli_real_escape_string($con, $jstart);
        $jend = stripslashes($_REQUEST['jend']);
        $jend = mysqli_real_escape_string($con, $jend);
        $jobtitle1 = stripslashes($_REQUEST['jobtitle1']);
        $jobtitle1 = mysqli_real_escape_string($con, $jobtitle1);
        $employer1    = stripslashes($_REQUEST['employer1']);
        $employer1    = mysqli_real_escape_string($con, $employer1);
        $ecity = stripslashes($_REQUEST['ecity']);
        $ecity = mysqli_real_escape_string($con, $ecity);
        $estate = stripslashes($_REQUEST['estate']);
        $estate = mysqli_real_escape_string($con, $estate);
        $estart = stripslashes($_REQUEST['estart']);
        $estart = mysqli_real_escape_string($con, $estart);
        $eend = stripslashes($_REQUEST['eend']);
        $eend = mysqli_real_escape_string($con, $eend);
        $schoolname = stripslashes($_REQUEST['schoolname']);
        $schoolname = mysqli_real_escape_string($con, $schoolname);
        $schoollocation = stripslashes($_REQUEST['schoollocation']);
        $schoollocation = mysqli_real_escape_string($con, $schoollocation);
        $degree = stripslashes($_REQUEST['degree']);
        $degree = mysqli_real_escape_string($con, $degree);
        $fieldofstudy    = stripslashes($_REQUEST['fieldofstudy']);
        $fieldofstudy    = mysqli_real_escape_string($con, $fieldofstudy);
        $edustart = stripslashes($_REQUEST['edustart']);
        $edustart = mysqli_real_escape_string($con, $edustart);
        $eduend = stripslashes($_REQUEST['eduend']);
        $eduend = mysqli_real_escape_string($con, $eduend);
        $schoolname1 = stripslashes($_REQUEST['schoolname1']);
        $schoolname1 = mysqli_real_escape_string($con, $schoolname1);
        $schoollocation1 = stripslashes($_REQUEST['schoollocation1']);
        $schoollocation1 = mysqli_real_escape_string($con, $schoollocation1);
        $degree1 = stripslashes($_REQUEST['degree1']);
        $degree1 = mysqli_real_escape_string($con, $degree1);
        $fieldofstudy1    = stripslashes($_REQUEST['fieldofstudy1']);
        $fieldofstudy1   = mysqli_real_escape_string($con, $fieldofstudy1);
        $edustart1 = stripslashes($_REQUEST['edustart1']);
        $edustart1 = mysqli_real_escape_string($con, $edustart1);
        $eduend1 = stripslashes($_REQUEST['eduend1']);
        $eduend1 = mysqli_real_escape_string($con, $eduend1);
        $keyskills = stripslashes($_REQUEST['keyskills']);
        $keyskills = mysqli_real_escape_string($con, $keyskills);
        $keyskills0 = stripslashes($_REQUEST['keyskills0']);
        $keyskills0 = mysqli_real_escape_string($con, $keyskills0);
        $keyskills1 = stripslashes($_REQUEST['keyskills1']);
        $keyskills1 = mysqli_real_escape_string($con, $keyskills1);
        $keyskills2    = stripslashes($_REQUEST['keyskills2']);
        $keyskills2   = mysqli_real_escape_string($con, $keyskills2);
        $keyskills3 = stripslashes($_REQUEST['keyskills3']);
        $keyskills3 = mysqli_real_escape_string($con, $keyskills3);
        $keyskills4 = stripslashes($_REQUEST['keyskills4']);
        $keyskills4 = mysqli_real_escape_string($con, $keyskills4);
        $addskills = stripslashes($_REQUEST['addskills']);
        $addskills = mysqli_real_escape_string($con, $addskills);
        $query    = "INSERT into `course` (firstname, lastname, profession, phone, email, city, state, postcode,
                     social, link, jobtitle, employer, jcity, jstate, jstart, jend, jobtitle1, employer1, ecity, estate, 
                     estart, eend, schoolname, schoollocation, degree, fieldofstudy, edustart, eduend, schoolname1, schoollocation1, 
                     degree1, fieldofstudy1, edustart1, eduend1, keyskills, keyskills0, keyskills1, keyskills2, keyskills3, keyskills4, addskills)
                     VALUES ('$firstname', '$lastname', '$profession', '$phone', '$email', '$city', '$state', '$postcode',
                '$social', '$link', '$jobtitle', '$employer', '$jcity', '$jstate', '$jstart', '$jend', '$jobtitle1', '$employer1',
                '$ecity', '$estate', '$estart', '$eend', '$schoolname', '$schoollocation', '$degree', '$fieldofstudy', '$edustart',
                '$eduend', '$schoolname1', '$schoollocation1', '$degree1', '$fieldofstudy1', '$edustart1', '$eduend1', '$keyskills',
                '$keyskills0', '$keyskills1', '$keyskills2', '$keyskills3', '$keyskills4', '$addskills')";
        $result   = mysqli_query($con, $query);
    }
?>
