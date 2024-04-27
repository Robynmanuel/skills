<html>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="data.css">
    <title>Review</title>
    <body>
        <div id="main">
            <div>
                <?php 
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

if(isset($_POST['submit'])){
$firstName = "".$_POST['firstName']."";
$lastName = "".$_POST['lastName']."";
$profession = "".$_POST['profession']."";
$phone = "".$_POST['phone']."";
$email = "".$_POST['email']."";
$city = "".$_POST['city']."";
$state = "".$_POST['state']."";
$postcode = "".$_POST['postcode']."";
$social = "".$_POST['social']."";
$link = "".$_POST['link']."<br>";

$jobtitle = "".$_POST['jobtitle']."";
$employer = "".$_POST['employer']."";
$jcity = "".$_POST['jcity']."";
$jstate = "".$_POST['jstate']."";
$jstart = "".$_POST['jstart']."";
$jend = "".$_POST['jend']."<br>"."<br>"."<br>";

$jobtitle1 = "".$_POST['jobtitle1']."";
$employer1 = "".$_POST['employer1']."";
$ecity = "".$_POST['ecity']."";
$estate = "".$_POST['estate']."";
$estart = "".$_POST['estart']."";
$eend = "".$_POST['eend']."<br>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>";

$schoolname = "".$_POST['schoolname']."";
$schoollocation = "".$_POST['schoollocation']."";
$degree = "".$_POST['degree']."";
$fieldofstudy = "".$_POST['fieldofstudy']."";
$edustart = "".$_POST['edustart']."";
$eduend = "".$_POST['eduend']."\n";

$schoolname1 = "".$_POST['schoolname1']."";
$schoollocation1 = "".$_POST['schoollocation1'];
$degree1 = "".$_POST['degree1']."";
$fieldofstudy1 = "".$_POST['fieldofstudy1']."";
$edustart1 = "".$_POST['edustart1']."";
$eduend1 = "".$_POST['eduend1']."\n";

$keyskills = "".$_POST['keyskills']."";
$keyskills0 = $_POST['keyskills0']."";
$keyskills1 = $_POST['keyskills1']."";
$keyskills2 = $_POST['keyskills2']."";
$keyskills3 = $_POST['keyskills3']."";
$keyskills4 = $_POST['keyskills4']."";
$addskills = "". $_POST['addskills']."";

$module1 = $_POST['module1'];
$grades1 = $_POST['grades1'];
$module2 = $_POST['module2'];
$grades2 = $_POST['grades2'];
$module3 = $_POST['module3'];
$grades3 = $_POST['grades3'];
$module3a = $_POST['module3a'];
$grades3a = $_POST['grades3a'];
$module3b = $_POST['module3b'];
$grades3b = $_POST['grades3b'];
$module3c = $_POST['module3c'];
$grades3c = $_POST['grades3c'];
$modulea = $_POST['modulea'];
$gradesa = $_POST['gradesa'];
$moduleb = $_POST['moduleb'];
$gradesb = $_POST['gradesb'];
$modulec = $_POST['modulec'];
$gradesc = $_POST['gradesc'];
$moduled = $_POST['moduled'];
$gradesd = $_POST['gradesd'];
$modulee = $_POST['modulee'];
$gradese = $_POST['gradese'];
$modulef = $_POST['modulef'];
$gradesf = $_POST['gradesf'];
$moduleg = $_POST['moduleg'];
$gradesg = $_POST['gradesg'];
$moduleh = $_POST['moduleh'];
$gradesh = $_POST['gradesh'];
$modulei = $_POST['modulei'];
$gradesi = $_POST['gradesi'];

echo "<h2>" .$firstName."</h2>";
echo "<h3>" .$lastName."</h3>";
echo "<h4>" .$profession."</h4>";
echo "<h5>" .$phone."</h5>";
echo "<h6>" .$email."</h6>";
echo "<p>" .$city."</p>";
echo "<b>" .$state."</b>";
echo "<big>" .$postcode."</big>"."<br>";
echo "<dd>" .$link."</dd>"."<br>"."<br>";

echo "<dl>" .$jobtitle."</dl>";
echo "<bdl>" .$employer."</bdl>"."<br>";
echo "<bdo>" .$jcity."</bdo>";
echo "<dfn>" .$jstate."</dfn>";
echo "<dt>" .$jstart."</dt>";
echo "<i>" .$jend."</i>"."<br>";

echo "<kbd>" .$jobtitle1."</kbd>"."<br>";
echo "<label>" .$employer1."</label>";
echo "<legend>" .$ecity."</legend>";
echo "<ul>" .$estate."</ul>";
echo "<nav>" .$estart."</nav>";
echo "<ol>" .$eend."</ol>";

echo "<pre>" .$schoolname."</pre>";
echo "<rt>" .$schoollocation."</rt>"."<br>"."<br>";
echo "<strong>" .$degree."</strong>"."<br>";
echo "<sub>" .$fieldofstudy."</sub>";
echo "<sup>" .$edustart."</sup>"."<br>";
echo "<u>" .$eduend."</u>"."<br>"."<br>"."<br>";

echo "<var>" .$schoolname1."</var>"."<br>";
echo "<figure>" .$schoollocation1."</figure>"."<br>";
echo "<tt>" .$degree1."</tt>"."<br>";
echo "<span>" .$fieldofstudy1."</span>";
echo "<font>" .$edustart1."</font>";
echo "<figcaption>" .$eduend1."</figcaption>"."<br>"."<br>"."<br>"."<br>"."<br>"."<br>";

echo "<dir>" .$keyskills."</dir>";
echo "<dir>" .$keyskills0."</dir>";
echo "<dir>" .$keyskills1."</dir>";
echo "<dir>" .$keyskills2."</dir>";
echo "<dir>" .$keyskills3."</dir>";
echo "<dir>" .$keyskills4."</dir>";
echo "<dir>" .$addskills."</dir>";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * FROM courses;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($result)) {
       // Business management
       if ($module1 == 'BM' && $grades1 == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($module1 == 'BM' && $grades1 == '2.1'){   
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($module1 == 'BM' && $grades1 == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($module1 == 'BM' && $grades1 == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
        if ($module2 == 'BM' && $grades2 == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($module2 == 'BM' && $grades2 == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($module2 == 'BM' && $grades2 == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($module2 == 'BM' && $grades2 == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
        if ($module3 == 'BM' && $grades3 == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($module3 == 'BM' && $grades3 == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($module3 == 'BM' && $grades3 == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($module3 == 'BM' && $grades3 == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
        if ($modulea == 'BM' && $gradesa == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($modulea == 'BM' && $gradesa == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($modulea == 'BM' && $gradesa == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($modulea == 'BM' && $gradesa == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
        if ($moduleb == 'BM' && $gradesb == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($moduleb == 'BM' && $gradesb == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($moduleb == 'BM' && $gradesb == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($moduleb == 'BM' && $gradesb == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
        if ($modulec == 'BM' && $gradesc == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($modulec == 'BM' && $gradesc == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($modulec == 'BM' && $gradesc == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($modulec == 'BM' && $gradesc == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
          
        if ($moduled == 'BM' && $gradesd == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
        
        if ($moduled == 'BM' && $gradesd == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($moduled == 'BM' && $gradesd == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($moduled == 'BM' && $gradesd == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
              
        if ($modulee == 'BM' && $gradese == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($modulee == 'BM' && $gradese == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($modulee == 'BM' && $gradese == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($modulee == 'BM' && $gradese == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
              
        if ($modulef == 'BM' && $gradesf == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($modulef == 'BM' && $gradesf == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($modulef == 'BM' && $gradesf == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($modulef == 'BM' && $gradesf == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
              
        if ($moduleg == 'BM' && $gradesg == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($moduleg == 'BM' && $gradesg == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($moduleg == 'BM' && $gradesg == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($moduleg == 'BM' && $gradesg == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
              
        if ($moduleh == 'BM' && $gradesh == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($moduleh == 'BM' && $gradesh == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($moduleh == 'BM' && $gradesh == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($moduleh == 'BM' && $gradesh == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
              
        if ($modulei == 'BM' && $gradesi == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($modulei == 'BM' && $gradesi == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($modulei == 'BM' && $gradesi == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($modulei == 'BM' && $gradesi == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
                     
        if ($module3a == 'BM' && $grades3a == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($module3a == 'BM' && $grades3a == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($module3a == 'BM' && $grades3a == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($module3a == 'BM' && $grades3a == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
                            
        if ($module3b == 'BM' && $grades3b == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($module3b == 'BM' && $grades3b == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($module3b == 'BM' && $grades3b == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($module3b == 'BM' && $grades3b == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       
                            
        if ($module3c == 'BM' && $grades3c == '1'){
           echo "<h1>" .$row["bmskills1"]."</h1>";
       }
       
        if ($module3c == 'BM' && $grades3c == '2.1'){
           echo "<h1>" .$row["bmskills21"]."</h1>";
       }
       
         if ($module3c == 'BM' && $grades3c == '2.2'){
           echo "<h1>" .$row["bmskills22"]."</h1>";
       }
       
        if ($module3c == 'BM' && $grades3c == '3'){
           echo "<h1>" .$row["bmskills3"]."</h1>";
       }
       //User Experience
       
         if ($module1 == 'UX' && $grades1 == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($module1 == 'UX' && $grades1 == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($module1 == 'UX' && $grades1 == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($module1 == 'UX' && $grades1 == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
        if ($module2 == 'UX' && $grades2 == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($module2 == 'UX' && $grades2 == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($module2 == 'UX' && $grades2 == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($module2 == 'UX' && $grades2 == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
        if ($module3 == 'UX' && $grades3 == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($module3 == 'UX' && $grades3 == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($module3 == 'UX' && $grades3 == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($module3 == 'UX' && $grades3 == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
       if ($modulea == 'UX' && $gradesa == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($modulea == 'UX' && $gradesa == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($modulea == 'UX' && $gradesa == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($modulea == 'UX' && $gradesa == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
        if ($moduleb == 'UX' && $gradesb == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($moduleb == 'UX' && $gradesb == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($moduleb == 'UX' && $gradesb == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($moduleb == 'UX' && $gradesb == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
       if ($modulec == 'UX' && $gradesc == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($modulec == 'UX' && $gradesc == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($modulec == 'UX' && $gradesc == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($modulec == 'UX' && $gradesc == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
              if ($moduled == 'UX' && $gradesd == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($moduled == 'UX' && $gradesd == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($moduled == 'UX' && $gradesd == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($moduled == 'UX' && $gradesd == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
              if ($modulee == 'UX' && $gradese == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($modulee == 'UX' && $gradese == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($modulee == 'UX' && $gradese == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($modulee == 'UX' && $gradese == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
              if ($modulef == 'UX' && $gradesf == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($modulef == 'UX' && $gradesf == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($modulef == 'UX' && $gradesf == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($modulef == 'UX' && $gradesf == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
              if ($moduleg == 'UX' && $gradesg == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($moduleg == 'UX' && $gradesg == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($moduleg == 'UX' && $gradesg == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($moduleg == 'UX' && $gradesg == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
              if ($moduleh == 'UX' && $gradesh == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($moduleh == 'UX' && $gradesh == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($moduleh == 'UX' && $gradesh == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($moduleh == 'UX' && $gradesh == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
              if ($modulei == 'UX' && $gradesi == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($modulei == 'UX' && $gradesi == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($modulei == 'UX' && $gradesi == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($modulei == 'UX' && $gradesi == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
             if ($module3a == 'UX' && $grades3a == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($module3a == 'UX' && $grades3a == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($module3a == 'UX' && $grades3a == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($module3a == 'UX' && $grades3a == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
        if ($module3b == 'UX' && $grades3b == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($module3b == 'UX' && $grades3b == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($module3b == 'UX' && $grades3b == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($module3b == 'UX' && $grades3b == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
               if ($module3c == 'UX' && $grades3c == '1'){
           echo "<h1>" .$row["uxskills1"]."</h1>";
       }
       
        if ($module3c == 'UX' && $grades3c == '2.1'){
           echo "<h1>" .$row["uxskills21"]."</h1>";
       }
       
         if ($module3c == 'UX' && $grades3c == '2.2'){
           echo "<h1>" .$row["uxskills22"]."</h1>";
       }
       
        if ($module3c == 'UX' && $grades3c == '3'){
           echo "<h1>" .$row["uxskills3"]."</h1>";
       }
       
       // Web Based
       
         if ($module1 == 'WB' && $grades1 == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($module1 == 'WB' && $grades1 == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($module1 == 'WB' && $grades1 == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($module1 == 'WB' && $grades1 == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
        if ($module2 == 'WB' && $grades2 == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($module2 == 'WB' && $grades2 == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($module2 == 'WB' && $grades2 == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($module2 == 'WB' && $grades2 == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
        if ($module3 == 'WB' && $grades3 == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($module3 == 'WB' && $grades3 == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($module3 == 'WB' && $grades3 == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($module3 == 'WB' && $grades3 == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
               if ($modulea == 'WB' && $gradesa == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($modulea == 'WB' && $gradesa == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($modulea == 'WB' && $gradesa == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($modulea == 'WB' && $gradesa == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
               if ($moduleb == 'WB' && $gradesb == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($moduleb == 'WB' && $gradesb == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($moduleb == 'WB' && $gradesb == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($moduleb == 'WB' && $gradesb == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
               if ($modulec == 'WB' && $gradesc == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($modulec == 'WB' && $gradesc == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($modulec == 'WB' && $gradesc == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($modulec == 'WB' && $gradesc == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
               if ($moduled == 'WB' && $gradesd == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($moduled == 'WB' && $gradesd == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($moduled == 'WB' && $gradesd == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($moduled == 'WB' && $gradesd == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
               if ($modulee == 'WB' && $gradese == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($modulee == 'WB' && $gradese == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($modulee == 'WB' && $gradese == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($modulee == 'WB' && $gradese == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
               if ($modulef == 'WB' && $gradesf == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($modulef == 'WB' && $gradesf == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($modulef == 'WB' && $gradesf == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($modulef == 'WB' && $gradesf == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
               if ($moduleg == 'WB' && $gradesg == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($moduleg == 'WB' && $gradesg == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($moduleg == 'WB' && $gradesg == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($moduleg == 'WB' && $gradesg == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
               if ($moduleh == 'WB' && $gradesh == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($moduleh == 'WB' && $gradesh == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($moduleh == 'WB' && $gradesh == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($moduleh == 'WB' && $gradesh == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
               if ($modulei == 'WB' && $gradesi == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($modulei == 'WB' && $gradesi == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($modulei == 'WB' && $gradesi == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($modulei == 'WB' && $gradesi == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
              
               if ($module3a == 'WB' && $grades3a == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($module3a == 'WB' && $grades3a == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($module3a == 'WB' && $grades3a == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($module3a == 'WB' && $grades3a == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
                      if ($module3b == 'WB' && $grades3b == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($module3b == 'WB' && $grades3b == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($module3b == 'WB' && $grades3b == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($module3b == 'WB' && $grades3b == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       
               if ($module3c == 'WB' && $grades3c == '1'){
           echo "<h1>" .$row["wbskills1"]."</h1>";
       }
       
        if ($module3c == 'WB' && $grades3c == '2.1'){
           echo "<h1>" .$row["wbskills21"]."</h1>";
       }
       
         if ($module3c == 'WB' && $grades3c == '2.2'){
           echo "<h1>" .$row["wbskills22"]."</h1>";
       }
       
        if ($module3c == 'WB' && $grades3c == '3'){
           echo "<h1>" .$row["wbskills3"]."</h1>";
       }
       // Digital Media
       
        if ($module1 == 'DM' && $grades1 == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($module1 == 'DM' && $grades1 == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($module1 == 'DM' && $grades1 == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($module1 == 'DM' && $grades1 == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
       
        if ($module2 == 'DM' && $grades2 == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($module2 == 'DM' && $grades2 == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($module2 == 'DM' && $grades2 == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($module2 == 'DM' && $grades2 == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
       
        if ($module3 == 'DM' && $grades3 == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($module3 == 'DM' && $grades3 == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($module3 == 'DM' && $grades3 == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($module3 == 'DM' && $grades3 == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
       
               if ($modulea == 'DM' && $gradesa == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($modulea == 'DM' && $gradesa == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($modulea == 'DM' && $gradesa == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($modulea == 'DM' && $gradesa == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
    
               if ($moduleb == 'DM' && $gradesb == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($moduleb == 'DM' && $gradesb == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($moduleb == 'DM' && $gradesb == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($moduleb == 'DM' && $gradesb == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
       
               if ($modulec == 'DM' && $gradesc == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($modulec == 'DM' && $gradesc == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($modulec == 'DM' && $gradesc == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($modulec == 'DM' && $gradesc == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
       
               if ($moduled == 'DM' && $gradesd == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($moduled == 'DM' && $gradesd == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($moduled == 'DM' && $gradesd == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($moduled == 'DM' && $gradesd == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
       
               if ($modulee == 'DM' && $gradese == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($modulee == 'DM' && $gradese == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($modulee == 'DM' && $gradese == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($modulee == 'DM' && $gradese == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
       
               if ($modulef == 'DM' && $gradesf == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($modulef == 'DM' && $gradesf == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($modulef == 'DM' && $gradesf == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($modulef == 'DM' && $gradesf == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
       
               if ($moduleg == 'DM' && $gradesg == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($moduleg == 'DM' && $gradesg == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($moduleg == 'DM' && $gradesg == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($moduleg == 'DM' && $gradesg == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
       
               if ($moduleh == 'DM' && $gradesh == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($moduleh == 'DM' && $gradesh == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($moduleh == 'DM' && $gradesh == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($moduleh == 'DM' && $gradesh == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
       
               if ($modulei == 'DM' && $gradesi == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($modulei == 'DM' && $gradesi == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($modulei == 'DM' && $gradesi == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($modulei == 'DM' && $gradesi == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
       
               if ($module3a == 'DM' && $grades3a == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($module3a == 'DM' && $grades3a == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($module3a == 'DM' && $grades3a == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($module3a == 'DM' && $grades3a == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
              
               if ($module3b == 'DM' && $grades3b == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($module3b == 'DM' && $grades3b == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($module3b == 'DM' && $grades3b == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($module3b == 'DM' && $grades3b == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
              
               if ($module3c == 'DM' && $grades3c == '1'){
           echo "<h1>" .$row["dmskills1"]."</h1>";
       }
       
        if ($module3c == 'DM' && $grades3c == '2.1'){
           echo "<h1>" .$row["dmskills21"]."</h1>";
       }
       
         if ($module3c == 'DM' && $grades3c == '2.2'){
           echo "<h1>" .$row["dmskills22"]."</h1>";
       }
       
        if ($module3c == 'DM' && $grades3c == '3'){
           echo "<h1>" .$row["dmskills3"]."</h1>";
       }
       
       // Object Oriented
       
        if ($module1 == 'OO' && $grades1 == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($module1 == 'OO' && $grades1 == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($module1 == 'OO' && $grades1 == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($module1 == 'OO' && $grades1 == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
        if ($module2 == 'OO' && $grades2 == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
        }
       
        if ($module2 == 'OO' && $grades2 == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($module2 == 'OO' && $grades2 == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($module2 == 'OO' && $grades2 == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
        if ($module3 == 'OO' && $grades3 == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($module3 == 'OO' && $grades3 == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($module3 == 'OO' && $grades3 == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($module3 == 'OO' && $grades3 == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
               if ($modulea == 'OO' && $gradesa == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($modulea == 'OO' && $gradesa == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($modulea == 'OO' && $gradesa == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($modulea == 'OO' && $gradesa == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
              
               if ($moduleb == 'OO' && $gradesb == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($moduleb == 'OO' && $gradesb == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($moduleb == 'OO' && $gradesb == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($moduleb == 'OO' && $gradesb == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
               if ($modulec == 'OO' && $gradesc == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($modulec == 'OO' && $gradesc == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($modulec == 'OO' && $gradesc == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($modulec == 'OO' && $gradesc == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
               if ($moduled == 'OO' && $gradesd == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($moduled == 'OO' && $gradesd == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($moduled == 'OO' && $gradesd == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($moduled == 'OO' && $gradesd == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
               if ($modulee == 'OO' && $gradese == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($modulee == 'OO' && $gradese == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($modulee == 'OO' && $gradese == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($modulee == 'OO' && $gradese == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
               if ($modulef == 'OO' && $gradesf == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($modulef == 'OO' && $gradesf == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($modulef == 'OO' && $gradesf == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($modulef == 'OO' && $gradesf == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
               if ($moduleg == 'OO' && $gradesg == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($moduleg == 'OO' && $gradesg == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($moduleg == 'OO' && $gradesg == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($moduleg == 'OO' && $gradesg == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
               if ($moduleh == 'OO' && $gradesh == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($moduleh == 'OO' && $gradesh == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($moduleh == 'OO' && $gradesh == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($moduleh == 'OO' && $gradesh == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
               if ($modulei == 'OO' && $gradesi == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($modulei == 'OO' && $gradesi == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($modulei == 'OO' && $gradesi == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($modulei == 'OO' && $gradesi == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
               if ($module3a == 'OO' && $grades3a == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($module3a == 'OO' && $grades3a == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($module3a == 'OO' && $grades3a == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($module3a == 'OO' && $grades3a == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
              
               if ($module3b == 'OO' && $grades3b == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($module3b == 'OO' && $grades3b == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($module3b == 'OO' && $grades3b == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($module3b == 'OO' && $grades3b == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
              
               if ($module3c == 'OO' && $grades3c == '1'){
           echo "<h1>" .$row["ooskills1"]."</h1>";
       }
       
        if ($module3c == 'OO' && $grades3c == '2.1'){
           echo "<h1>" .$row["ooskills21"]."</h1>";
       }
       
         if ($module3c == 'OO' && $grades3c == '2.2'){
           echo "<h1>" .$row["ooskills22"]."</h1>";
       }
       
        if ($module3c == 'OO' && $grades3c == '3'){
           echo "<h1>" .$row["ooskills3"]."</h1>";
       }
       
       // Web Application
       
        if ($module1 == 'WA' && $grades1 == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($module1 == 'WA' && $grades1 == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($module1 == 'WA' && $grades1 == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($module1 == 'WA' && $grades1 == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
        if ($module2 == 'WA' && $grades2 == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($module2 == 'WA' && $grades2 == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($module2 == 'WA' && $grades2 == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($module2 == 'WA' && $grades2 == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
        if ($module3 == 'WA' && $grades3 == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($module3 == 'WA' && $grades3 == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($module3 == 'WA' && $grades3 == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($module3 == 'WA' && $grades3 == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
               if ($modulea == 'WA' && $gradesa == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($modulea == 'WA' && $gradesa == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($modulea == 'WA' && $gradesa == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($modulea == 'WA' && $gradesa == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
              
               if ($moduleb == 'WA' && $gradesb == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($moduleb == 'WA' && $gradesb == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($moduleb == 'WA' && $gradesb == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($moduleb == 'WA' && $gradesb == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
               if ($modulec == 'WA' && $gradesc == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($modulec == 'WA' && $gradesc == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($modulec == 'WA' && $gradesc == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($modulec == 'WA' && $gradesc == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
               if ($moduled == 'WA' && $gradesd == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($moduled == 'WA' && $gradesd == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($moduled == 'WA' && $gradesd == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($moduled == 'WA' && $gradesd == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
               if ($modulee == 'WA' && $gradese == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($modulee == 'WA' && $gradese == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($modulee == 'WA' && $gradese == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($modulee == 'WA' && $gradese == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
               if ($modulef == 'WA' && $gradesf == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($modulef == 'WA' && $gradesf == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($modulef == 'WA' && $gradesf == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($modulef == 'WA' && $gradesf == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
               if ($moduleg == 'WA' && $gradesg == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($moduleg == 'WA' && $gradesg == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($moduleg == 'WA' && $gradesg == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($moduleg == 'WA' && $gradesg == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
               if ($moduleh == 'WA' && $gradesh == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($moduleh == 'WA' && $gradesh == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($moduleh == 'WA' && $gradesh == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($moduleh == 'WA' && $gradesh == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
               if ($modulei == 'WA' && $gradesi == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($modulei == 'WA' && $gradesi == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($modulei == 'WA' && $gradesi == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($modulei == 'WA' && $gradesi == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
               if ($module3a == 'WA' && $grades3a == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($module3a == 'WA' && $grades3a == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($module3a == 'WA' && $grades3a == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($module3a == 'WA' && $grades3a == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
                      if ($module3b == 'WA' && $grades3b == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($module3b == 'WA' && $grades3b == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($module3b == 'WA' && $grades3b == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($module3b == 'WA' && $grades3b == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
                      if ($module3c == 'WA' && $grades3c == '1'){
           echo "<h1>" .$row["waskills1"]."</h1>";
       }
       
        if ($module3c == 'WA' && $grades3c == '2.1'){
           echo "<h1>" .$row["waskills21"]."</h1>";
       }
       
         if ($module3c == 'WA' && $grades3c == '2.2'){
           echo "<h1>" .$row["waskills22"]."</h1>";
       }
       
        if ($module3c == 'WA' && $grades3c == '3'){
           echo "<h1>" .$row["waskills3"]."</h1>";
       }
       
       // Software Engineering
       
        if ($module1 == 'SE' && $grades1 == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($module1 == 'SE' && $grades1 == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($module1 == 'SE' && $grades1 == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($module1 == 'SE' && $grades1 == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
        if ($module2 == 'SE' && $grades2 == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($module2 == 'SE' && $grades2 == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($module2 == 'SE' && $grades2 == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($module2 == 'SE' && $grades2 == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
        if ($module3 == 'SE' && $grades3 == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($module3 == 'SE' && $grades3 == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($module3 == 'SE' && $grades3 == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($module3 == 'SE' && $grades3 == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
               if ($modulea == 'SE' && $gradesa == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($modulea == 'SE' && $gradesa == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($modulea == 'SE' && $gradesa == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($modulea == 'SE' && $gradesa == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
          
               if ($moduleb == 'SE' && $gradesb == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($moduleb == 'SE' && $gradesb == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($moduleb == 'SE' && $gradesb == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($moduleb == 'SE' && $gradesb == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
               if ($modulec == 'SE' && $gradesc == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($modulec == 'SE' && $gradesc == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($modulec == 'SE' && $gradesc == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($modulec == 'SE' && $gradesc == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
               if ($moduled == 'SE' && $gradesd == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($moduled == 'SE' && $gradesd == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($moduled == 'SE' && $gradesd == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($moduled == 'SE' && $gradesd == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
               if ($modulee == 'SE' && $gradese == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($modulee == 'SE' && $gradese == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($modulee == 'SE' && $gradese == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($modulee == 'SE' && $gradese == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
               if ($modulef == 'SE' && $gradesf == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($modulef == 'SE' && $gradesf == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($modulef == 'SE' && $gradesf == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($modulef == 'SE' && $gradesf == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
               if ($moduleg == 'SE' && $gradesg == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($moduleg == 'SE' && $gradesg == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($moduleg == 'SE' && $gradesg == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($moduleg == 'SE' && $gradesg == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
               if ($moduleh == 'SE' && $gradesh == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($moduleh == 'SE' && $gradesh == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($moduleh == 'SE' && $gradesh == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($moduleh == 'SE' && $gradesh == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
               if ($modulei == 'SE' && $gradesi == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($modulei == 'SE' && $gradesi == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($modulei == 'SE' && $gradesi == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($modulei == 'SE' && $gradesi == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
                      if ($module3a == 'SE' && $grades3a == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($module3a == 'SE' && $grades3a == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($module3a == 'SE' && $grades3a == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($module3a == 'SE' && $grades3a == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
                   if ($module3b == 'SE' && $grades3b == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($module3b == 'SE' && $grades3b == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($module3b == 'SE' && $grades3b == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($module3b == 'SE' && $grades3b == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
                 if ($module3c == 'SE' && $grades3c == '1'){
           echo "<h1>" .$row["seskills1"]."</h1>";
       }
       
        if ($module3c == 'SE' && $grades3c == '2.1'){
           echo "<h1>" .$row["seskills21"]."</h1>";
       }
       
         if ($module3c == 'SE' && $grades3c == '2.2'){
           echo "<h1>" .$row["seskills22"]."</h1>";
       }
       
        if ($module3c == 'SE' && $grades3c == '3'){
           echo "<h1>" .$row["seskills3"]."</h1>";
       }
       
       // Operating Systems
       
        if ($module1 == 'OS' && $grades1 == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($module1 == 'OS' && $grades1 == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($module1 == 'OS' && $grades1 == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($module1 == 'OS' && $grades1 == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
        if ($module2 == 'OS' && $grades2 == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($module2 == 'OS' && $grades2 == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($module2 == 'OS' && $grades2 == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($module2 == 'OS' && $grades2 == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
        if ($module3 == 'OS' && $grades3 == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($module3 == 'OS' && $grades3 == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($module3 == 'OS' && $grades3 == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($module3 == 'OS' && $grades3 == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
               if ($modulea == 'OS' && $gradesa == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($modulea == 'OS' && $gradesa == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($modulea == 'OS' && $gradesa == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($modulea == 'OS' && $gradesa == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
               if ($moduleb == 'OS' && $gradesb == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($moduleb == 'OS' && $gradesb == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($moduleb == 'OS' && $gradesb == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($moduleb == 'OS' && $gradesb == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
               if ($modulec == 'OS' && $gradesc == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($modulec == 'OS' && $gradesc == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($modulec == 'OS' && $gradesc == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($modulec == 'OS' && $gradesc == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
               if ($moduled == 'OS' && $gradesd == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($moduled == 'OS' && $gradesd == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($moduled == 'OS' && $gradesd == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($moduled == 'OS' && $gradesd == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
               if ($modulee == 'OS' && $gradese == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($modulee == 'OS' && $gradese == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($modulee == 'OS' && $gradese == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($modulee == 'OS' && $gradese == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
              
               if ($modulef == 'OS' && $gradesf == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($modulef == 'OS' && $gradesf == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($modulef == 'OS' && $gradesf == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($modulef == 'OS' && $gradesf == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
               if ($moduleg == 'OS' && $gradesg == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($moduleg == 'OS' && $gradesg == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($moduleg == 'OS' && $gradesg == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($moduleg == 'OS' && $gradesg == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
               if ($moduleh == 'OS' && $gradesh == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($moduleh == 'OS' && $gradesh == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($moduleh == 'OS' && $gradesh == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($moduleh == 'OS' && $gradesh == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
               if ($modulei == 'OS' && $gradesi == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($modulei == 'OS' && $gradesi == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($modulei == 'OS' && $gradesi == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($modulei == 'OS' && $gradesi == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
                      if ($module3a == 'OS' && $grades3a == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($module3a == 'OS' && $grades3a == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($module3a == 'OS' && $grades3a == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($module3a == 'OS' && $grades3a == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
                             if ($module3b == 'OS' && $grades3b == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($module3b == 'OS' && $grades3b == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($module3b == 'OS' && $grades3b == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($module3b == 'OS' && $grades3b == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
                 if ($module3c == 'OS' && $grades3c == '1'){
           echo "<h1>" .$row["osskills1"]."</h1>";
       }
       
        if ($module3c == 'OS' && $grades3c == '2.1'){
           echo "<h1>" .$row["osskills21"]."</h1>";
       }
       
         if ($module3c == 'OS' && $grades3c == '2.2'){
           echo "<h1>" .$row["osskills22"]."</h1>";
       }
       
        if ($module3c == 'OS' && $grades3c == '3'){
           echo "<h1>" .$row["osskills3"]."</h1>";
       }
       
       // Enterprise Networking
       
        if ($module1 == 'EN' && $grades1 == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($module1 == 'EN' && $grades1 == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($module1 == 'EN' && $grades1 == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($module1 == 'EN' && $grades1 == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
        if ($module2 == 'EN' && $grades2 == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($module2 == 'EN' && $grades2 == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($module2 == 'EN' && $grades2 == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($module2 == 'EN' && $grades2 == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
        if ($module3 == 'EN' && $grades3 == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($module3 == 'EN' && $grades3 == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($module3 == 'EN' && $grades3 == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($module3 == 'EN' && $grades3 == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
               if ($modulea == 'EN' && $gradesa == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($modulea == 'EN' && $gradesa == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($modulea == 'EN' && $gradesa == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($modulea == 'EN' && $gradesa == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
               if ($moduleb == 'EN' && $gradesb == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($moduleb == 'EN' && $gradesb == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($moduleb == 'EN' && $gradesb == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($moduleb == 'EN' && $gradesb == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
              
               if ($modulec == 'EN' && $gradesc == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($modulec == 'EN' && $gradesc == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($modulec == 'EN' && $gradesc == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($modulec == 'EN' && $gradesc == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
               if ($moduled == 'EN' && $gradesd == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($moduled == 'EN' && $gradesd == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($moduled == 'EN' && $gradesd == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($moduled == 'EN' && $gradesd == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
               if ($modulee == 'EN' && $gradese == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($modulee == 'EN' && $gradese == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($modulee == 'EN' && $gradese == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($modulee == 'EN' && $gradese == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
               if ($modulef == 'EN' && $gradesf == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($modulef == 'EN' && $gradesf == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($modulef == 'EN' && $gradesf == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($modulef == 'EN' && $gradesf == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
               if ($moduleg == 'EN' && $gradesg == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($moduleg == 'EN' && $gradesg == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($moduleg == 'EN' && $gradesg == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($moduleg == 'EN' && $gradesg == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
               if ($moduleh == 'EN' && $gradesh == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($moduleh == 'EN' && $gradesh == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($moduleh == 'EN' && $gradesh == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($moduleh == 'EN' && $gradesh == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
               if ($modulei == 'EN' && $gradesi == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($modulei == 'EN' && $gradesi == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($modulei == 'EN' && $gradesi == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($modulei == 'EN' && $gradesi == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
               if ($module3a == 'EN' && $grades3a == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($module3a == 'EN' && $grades3a == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($module3a == 'EN' && $grades3a == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($module3a == 'EN' && $grades3a == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
              if ($module3b == 'EN' && $grades3b == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($module3b == 'EN' && $grades3b == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($module3b == 'EN' && $grades3b == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($module3b == 'EN' && $grades3b == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
             if ($module3c == 'EN' && $grades3c == '1'){
           echo "<h1>" .$row["enskills1"]."</h1>";
       }
       
        if ($module3c == 'EN' && $grades3c == '2.1'){
           echo "<h1>" .$row["enskills21"]."</h1>";
       }
       
         if ($module3c == 'EN' && $grades3c == '2.2'){
           echo "<h1>" .$row["enskills22"]."</h1>";
       }
       
        if ($module3c == 'EN' && $grades3c == '3'){
           echo "<h1>" .$row["enskills3"]."</h1>";
       }
       
       // Testing
       
        if ($module1 == 'TV' && $grades1 == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($module1 == 'TV' && $grades1 == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($module1 == 'TV' && $grades1 == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($module1 == 'TV' && $grades1 == '3'){p 
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
        if ($module2 == 'TV' && $grades2 == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($module2 == 'TV' && $grades2 == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($module2 == 'TV' && $grades2 == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($module2 == 'TV' && $grades2 == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
        if ($module3 == 'TV' && $grades3 == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($module3 == 'TV' && $grades3 == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($module3 == 'TV' && $grades3 == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($module3 == 'TV' && $grades3 == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
               if ($modulea == 'TV' && $gradesa == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($modulea == 'TV' && $gradesa == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($modulea == 'TV' && $gradesa == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($modulea == 'TV' && $gradesa == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
               if ($moduleb == 'TV' && $gradesb == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($moduleb == 'TV' && $gradesb == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($moduleb == 'TV' && $gradesb == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($moduleb == 'TV' && $gradesb == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
               if ($modulec == 'TV' && $gradesc == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($modulec == 'TV' && $gradesc == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($modulec == 'TV' && $gradesc == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($modulec == 'TV' && $gradesc == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
              
               if ($moduled == 'TV' && $gradesd == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($moduled == 'TV' && $gradesd == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($moduled == 'TV' && $gradesd == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($moduled == 'TV' && $gradesd == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
               if ($modulee == 'TV' && $gradese == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($modulee == 'TV' && $gradese == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($modulee == 'TV' && $gradese == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($modulee == 'TV' && $gradese == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
               if ($modulef == 'TV' && $gradesf == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($modulef == 'TV' && $gradesf == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($modulef == 'TV' && $gradesf == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($modulef == 'TV' && $gradesf == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
               if ($moduleg == 'TV' && $gradesg == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($moduleg == 'TV' && $gradesg == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($moduleg == 'TV' && $gradesg == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($moduleg == 'TV' && $gradesg == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
               if ($moduleh == 'TV' && $gradesh == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($moduleh == 'TV' && $gradesh == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($moduleh == 'TV' && $gradesh == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($moduleh == 'TV' && $gradesh == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
               if ($modulei == 'TV' && $gradesi == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($modulei == 'TV' && $gradesi == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($modulei == 'TV' && $gradesi == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($modulei == 'TV' && $gradesi == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
                      if ($module3a == 'TV' && $grades3a == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($module3a == 'TV' && $grades3a == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($module3a == 'TV' && $grades3a == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($module3a == 'TV' && $grades3a == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
                             if ($module3b == 'TV' && $grades3b == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($module3b == 'TV' && $grades3b == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($module3b == 'TV' && $grades3b == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($module3b == 'TV' && $grades3b == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
                             if ($module3c == 'TV' && $grades3c == '1'){
           echo "<h1>" .$row["tvskills1"]."</h1>";
       }
       
        if ($module3c == 'TV' && $grades3c == '2.1'){
           echo "<h1>" .$row["tvskills21"]."</h1>";
       }
       
         if ($module3c == 'TV' && $grades3c == '2.2'){
           echo "<h1>" .$row["tvskills22"]."</h1>";
       }
       
        if ($module3c == 'TV' && $grades3c == '3'){
           echo "<h1>" .$row["tvskills3"]."</h1>";
       }
       
       // Teaching Computer 
       
        if ($module1 == 'TC' && $grades1 == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($module1 == 'TC' && $grades1 == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($module1 == 'TC' && $grades1 == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($module1 == 'TC' && $grades1 == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       }
       
        if ($module2 == 'TC' && $grades2 == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($module2 == 'TC' && $grades2 == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($module2 == 'TC' && $grades2 == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($module2 == 'TC' && $grades2 == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       }
       
        if ($module3 == 'TC' && $grades3 == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($module3 == 'TC' && $grades3 == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($module3 == 'TC' && $grades3 == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($module3 == 'TC' && $grades3 == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       }       
       
               if ($modulea == 'TC' && $gradesa == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($modulea == 'TC' && $gradesa == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($modulea == 'TC' && $gradesa == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($modulea == 'TC' && $gradesa == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       } 
       
               if ($moduleb == 'TC' && $gradesb == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($moduleb == 'TC' && $gradesb == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($moduleb == 'TC' && $gradesb == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($moduleb == 'TC' && $gradesb == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       } 
       
               if ($modulec == 'TC' && $gradesc == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($modulec == 'TC' && $gradesc == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($modulec == 'TC' && $gradesc == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($modulec == 'TC' && $gradesc == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       } 
       
               if ($moduled == 'TC' && $gradesd == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($moduled == 'TC' && $gradesd == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($moduled == 'TC' && $gradesd == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($moduled == 'TC' && $gradesd == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       } 
       
               if ($modulee == 'TC' && $gradese == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($modulee == 'TC' && $gradese == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($modulee == 'TC' && $gradese == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($modulee == 'TC' && $gradese == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       } 
       
               if ($modulef == 'TC' && $gradesf == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($modulef == 'TC' && $gradesf == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($modulef == 'TC' && $gradesf == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($modulef == 'TC' && $gradesf == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       } 
       
               if ($moduleg == 'TC' && $gradesg == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($moduleg == 'TC' && $gradesg == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($moduleg == 'TC' && $gradesg == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($moduleg == 'TC' && $gradesg == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       } 
       
               if ($moduleh == 'TC' && $gradesh == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($moduleh == 'TC' && $gradesh == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($moduleh == 'TC' && $gradesh == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($moduleh == 'TC' && $gradesh == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       } 
       
               if ($modulei == 'TC' && $gradesi == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($modulei == 'TC' && $gradesi == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($modulei == 'TC' && $gradesi == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($modulei == 'TC' && $gradesi == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       } 
       
                      if ($module3a == 'TC' && $grades3a == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($module3a == 'TC' && $grades3a == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($module3a == 'TC' && $grades3a == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($module3a == 'TC' && $grades3a == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       } 
       
                             if ($module3b == 'TC' && $grades3b == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($module3b == 'TC' && $grades3b == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($module3b == 'TC' && $grades3b == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($module3b == 'TC' && $grades3b == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       } 
       
                             if ($module3c == 'TC' && $grades3c == '1'){
           echo "<h1>" .$row["tcskills1"]."</h1>";
       }
       
        if ($module3c == 'TC' && $grades3c == '2.1'){
           echo "<h1>" .$row["tcskills21"]."</h1>";
       }
       
         if ($module3c == 'TC' && $grades3c == '2.2'){
           echo "<h1>" .$row["tcskills22"]."</h1>";
       }
       
        if ($module3c == 'TC' && $grades3c == '3'){
           echo "<h1>" .$row["tcskills3"]."</h1>";
       } 
       // Advanced Web
       
        if ($module1 == 'AW' && $grades1 == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($module1 == 'AW' && $grades1 == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($module1 == 'AW' && $grades1 == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($module1 == 'AW' && $grades1 == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
        if ($module2 == 'AW' && $grades2 == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($module2 == 'AW' && $grades2 == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($module2 == 'AW' && $grades2 == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($module2 == 'AW' && $grades2 == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
        if ($module3 == 'AW' && $grades3 == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($module3 == 'AW' && $grades3 == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($module3 == 'AW' && $grades3 == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($module3 == 'AW' && $grades3 == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
               if ($modulea == 'AW' && $gradesa == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($modulea == 'AW' && $gradesa == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($modulea == 'AW' && $gradesa == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($modulea == 'AW' && $gradesa == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
               if ($moduleb == 'AW' && $gradesb == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($moduleb == 'AW' && $gradesb == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($moduleb == 'AW' && $gradesb == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($moduleb == 'AW' && $gradesb == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
             
               if ($modulec == 'AW' && $gradesc == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($modulec == 'AW' && $gradesc == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($modulec == 'AW' && $gradesc == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($modulec == 'AW' && $gradesc == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
               if ($moduled == 'AW' && $gradesd == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($moduled == 'AW' && $gradesd == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($moduled == 'AW' && $gradesd == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($moduled == 'AW' && $gradesd == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
               if ($modulee == 'AW' && $gradese == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($modulee == 'AW' && $gradese == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($modulee == 'AW' && $gradese == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($modulee == 'AW' && $gradese == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
               if ($modulef == 'AW' && $gradesf == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($modulef == 'AW' && $gradesf == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($modulef == 'AW' && $gradesf == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($modulef == 'AW' && $gradesf == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
               if ($moduleg == 'AW' && $gradesg == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($moduleg == 'AW' && $gradesg == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($moduleg == 'AW' && $gradesg == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($moduleg == 'AW' && $gradesg == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
               if ($moduleh == 'AW' && $gradesh == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($moduleh == 'AW' && $gradesh == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($moduleh == 'AW' && $gradesh == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($moduleh == 'AW' && $gradesh == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
               if ($modulei == 'AW' && $gradesi == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($modulei == 'AW' && $gradesi == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($modulei == 'AW' && $gradesi == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($modulei == 'AW' && $gradesi == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
                      if ($module3a == 'AW' && $grades3a == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($module3a == 'AW' && $grades3a == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($module3a == 'AW' && $grades3a == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($module3a == 'AW' && $grades3a == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
                             if ($module3b == 'AW' && $grades3b == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($module3b == 'AW' && $grades3b == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($module3b == 'AW' && $grades3b == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($module3b == 'AW' && $grades3b == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       
                             if ($module3c == 'AW' && $grades3c == '1'){
           echo "<h1>" .$row["awskills1"]."</h1>";
       }
       
        if ($module3c == 'AW' && $grades3c == '2.1'){
           echo "<h1>" .$row["awskills21"]."</h1>";
       }
       
         if ($module3c == 'AW' && $grades3c == '2.2'){
           echo "<h1>" .$row["awskills22"]."</h1>";
       }
       
        if ($module3c == 'AW' && $grades3c == '3'){
           echo "<h1>" .$row["awskills3"]."</h1>";
       }
       // Novel Interactions
       
        if ($module1 == 'NI' && $grades1 == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($module1 == 'NI' && $grades1 == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($module1 == 'NI' && $grades1 == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($module1 == 'NI' && $grades1 == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
        if ($module2 == 'NI' && $grades2 == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($module2 == 'NI' && $grades2 == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($module2 == 'NI' && $grades2 == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($module2 == 'NI' && $grades2 == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
        if ($module3 == 'NI' && $grades3 == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($module3 == 'NI' && $grades3 == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($module3 == 'NI' && $grades3 == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($module3 == 'NI' && $grades3 == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
            if ($modulea == 'NI' && $gradesa == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($modulea == 'NI' && $gradesa == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($modulea == 'NI' && $gradesa == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($modulea == 'NI' && $gradesa == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
               if ($moduleb == 'NI' && $gradesb == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($moduleb == 'NI' && $gradesb == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($moduleb == 'NI' && $gradesb == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($moduleb == 'NI' && $gradesb == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
               if ($modulec == 'NI' && $gradesc == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($modulec == 'NI' && $gradesc == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($modulec == 'NI' && $gradesc == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($modulec == 'NI' && $gradesc == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
               if ($moduled == 'NI' && $gradesd == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($moduled == 'NI' && $gradesd == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($moduled == 'NI' && $gradesd == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($moduled == 'NI' && $gradesd == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
               if ($modulee == 'NI' && $gradese == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($modulee == 'NI' && $gradese == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($modulee == 'NI' && $gradese == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($modulee == 'NI' && $gradese == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
               if ($modulef == 'NI' && $gradesf == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($modulef == 'NI' && $gradesf == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($modulef == 'NI' && $gradesf == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($modulef == 'NI' && $gradesf == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
               if ($moduleg == 'NI' && $gradesg == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($moduleg == 'NI' && $gradesg == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($moduleg == 'NI' && $gradesg == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($moduleg == 'NI' && $gradesg == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
               if ($moduleh == 'NI' && $gradesh == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($moduleh == 'NI' && $gradesh == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($moduleh == 'NI' && $gradesh == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($moduleh == 'NI' && $gradesh == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
               if ($modulei == 'NI' && $gradesi == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($modulei == 'NI' && $gradesi == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($modulei == 'NI' && $gradesi == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($modulei == 'NI' && $gradesi == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
                      if ($module3a == 'NI' && $grades3a == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($module3a == 'NI' && $grades3a == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($module3a == 'NI' && $grades3a == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($module3a == 'NI' && $grades3a == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
                             if ($module3b == 'NI' && $grades3b == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($module3b == 'NI' && $grades3b == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($module3b == 'NI' && $grades3b == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($module3b == 'NI' && $grades3b == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
                             if ($module3c == 'NI' && $grades3c == '1'){
           echo "<h1>" .$row["niskills1"]."</h1>";
       }
       
        if ($module3c == 'NI' && $grades3c == '2.1'){
           echo "<h1>" .$row["niskills21"]."</h1>";
       }
       
         if ($module3c == 'NI' && $grades3c == '2.2'){
           echo "<h1>" .$row["niskills22"]."</h1>";
       }
       
        if ($module3c == 'NI' && $grades3c == '3'){
           echo "<h1>" .$row["niskills3"]."</h1>";
       }
       
       // Computer Graphics
       
        if ($module1 == 'CG' && $grades1 == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($module1 == 'CG' && $grades1 == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($module1 == 'CG' && $grades1 == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($module1 == 'CG' && $grades1 == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
        if ($module2 == 'CG' && $grades2 == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($module2 == 'CG' && $grades2 == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($module2 == 'CG' && $grades2 == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($module2 == 'CG' && $grades2 == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
        if ($module3 == 'CG' && $grades3 == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($module3 == 'CG' && $grades3 == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($module3 == 'CG' && $grades3 == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($module3 == 'CG' && $grades3 == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
               if ($modulea == 'CG' && $gradesa == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($modulea == 'CG' && $gradesa == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($modulea == 'CG' && $gradesa == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($modulea == 'CG' && $gradesa == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
           
               if ($moduleb == 'CG' && $gradesb == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($moduleb == 'CG' && $gradesb == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($moduleb == 'CG' && $gradesb == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($moduleb == 'CG' && $gradesb == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
               if ($modulec == 'CG' && $gradesc == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($modulec == 'CG' && $gradesc == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($modulec == 'CG' && $gradesc == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($modulec == 'CG' && $gradesc == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
               if ($moduled == 'CG' && $gradesd == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($moduled == 'CG' && $gradesd == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($moduled == 'CG' && $gradesd == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($moduled == 'CG' && $gradesd == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
               if ($modulee == 'CG' && $gradese == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($modulee == 'CG' && $gradese == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($modulee == 'CG' && $gradese == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($modulee == 'CG' && $gradese == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
               if ($modulef == 'CG' && $gradesf == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($modulef == 'CG' && $gradesf == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($modulef == 'CG' && $gradesf == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($modulef == 'CG' && $gradesf == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
               if ($moduleg == 'CG' && $gradesg == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($moduleg == 'CG' && $gradesg == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($moduleg == 'CG' && $gradesg == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($moduleg == 'CG' && $gradesg == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
               if ($moduleh == 'CG' && $gradesh == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($moduleh == 'CG' && $gradesh == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($moduleh == 'CG' && $gradesh == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($moduleh == 'CG' && $gradesh == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
               if ($modulei == 'CG' && $gradesi == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($modulei == 'CG' && $gradesi == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($modulei == 'CG' && $gradesi == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($modulei == 'CG' && $gradesi == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
                      if ($module3a == 'CG' && $grades3a == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($module3a == 'CG' && $grades3a == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($module3a == 'CG' && $grades3a == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($module3a == 'CG' && $grades3a == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
                             if ($module3b == 'CG' && $grades3b == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($module3b == 'CG' && $grades3b == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($module3b == 'CG' && $grades3b == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($module3b == 'CG' && $grades3b == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
                             if ($module3c == 'CG' && $grades3c == '1'){
           echo "<h1>" .$row["cgskills1"]."</h1>";
       }
       
        if ($module3c == 'CG' && $grades3c == '2.1'){
           echo "<h1>" .$row["cgskills21"]."</h1>";
       }
       
         if ($module3c == 'CG' && $grades3c == '2.2'){
           echo "<h1>" .$row["cgskills22"]."</h1>";
       }
       
        if ($module3c == 'CG' && $grades3c == '3'){
           echo "<h1>" .$row["cgskills3"]."</h1>";
       }
       
       // Designing Secure
       
        if ($module1 == 'DS' && $grades1 == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($module1 == 'DS' && $grades1 == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($module1 == 'DS' && $grades1 == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($module1 == 'DS' && $grades1 == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
        if ($module2 == 'DS' && $grades2 == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($module2 == 'DS' && $grades2 == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($module2 == 'DS' && $grades2 == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($module2 == 'DS' && $grades2 == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
        if ($module3 == 'DS' && $grades3 == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($module3 == 'DS' && $grades3 == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($module3 == 'DS' && $grades3 == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($module3 == 'DS' && $grades3 == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
               if ($modulea == 'DS' && $gradesa == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($modulea == 'DS' && $gradesa == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($modulea == 'DS' && $gradesa == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($modulea == 'DS' && $gradesa == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }    
       
               if ($moduleb == 'DS' && $gradesb == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($moduleb == 'DS' && $gradesb == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($moduleb == 'DS' && $gradesb == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($moduleb == 'DS' && $gradesb == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
               if ($modulec == 'DS' && $gradesc == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($modulec == 'DS' && $gradesc == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($modulec == 'DS' && $gradesc == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($modulec == 'DS' && $gradesc == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
               if ($moduled == 'DS' && $gradesd == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($moduled == 'DS' && $gradesd == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($moduled == 'DS' && $gradesd == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($moduled == 'DS' && $gradesd == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
               if ($modulee == 'DS' && $gradese == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($modulee == 'DS' && $gradese == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($modulee == 'DS' && $gradese == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($modulee == 'DS' && $gradese == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
               if ($modulef == 'DS' && $gradesf == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($modulef == 'DS' && $gradesf == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($modulef == 'DS' && $gradesf == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($modulef == 'DS' && $gradesf == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
               if ($moduleg == 'DS' && $gradesg == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($moduleg == 'DS' && $gradesg == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($moduleg == 'DS' && $gradesg == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($moduleg == 'DS' && $gradesg == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
               if ($moduleh == 'DS' && $gradesh == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($moduleh == 'DS' && $gradesh == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($moduleh == 'DS' && $gradesh == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($moduleh == 'DS' && $gradesh == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
               if ($modulei == 'DS' && $gradesi == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($modulei == 'DS' && $gradesi == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($modulei == 'DS' && $gradesi == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($modulei == 'DS' && $gradesi == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
                      if ($module3a == 'DS' && $grades3a == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($module3a == 'DS' && $grades3a == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($module3a == 'DS' && $grades3a == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($module3a == 'DS' && $grades3a == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
                             if ($module3b == 'DS' && $grades3b == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($module3b == 'DS' && $grades3b == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($module3b == 'DS' && $grades3b == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($module3b == 'DS' && $grades3b == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
                             if ($module3c == 'DS' && $grades3c == '1'){
           echo "<h1>" .$row["dsskills1"]."</h1>";
       }
       
        if ($module3c == 'DS' && $grades3c == '2.1'){
           echo "<h1>" .$row["dsskills21"]."</h1>";
       }
       
         if ($module3c == 'DS' && $grades3c == '2.2'){
           echo "<h1>" .$row["dsskills22"]."</h1>";
       }
       
        if ($module3c == 'DS' && $grades3c == '3'){
           echo "<h1>" .$row["dsskills3"]."</h1>";
       }
       
       // Artificial Intelligence
       
        if ($module1 == 'AI' && $grades1 == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($module1 == 'AI' && $grades1 == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($module1 == 'AI' && $grades1 == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($module1 == 'AI' && $grades1 == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
        if ($module2 == 'AI' && $grades2 == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($module2 == 'AI' && $grades2 == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($module2 == 'AI' && $grades2 == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($module2 == 'AI' && $grades2 == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
        if ($module3 == 'AI' && $grades3 == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($module3 == 'AI' && $grades3 == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($module3 == 'AI' && $grades3 == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($module3 == 'AI' && $grades3 == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
               if ($modulea == 'AI' && $gradesa == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($modulea == 'AI' && $gradesa == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($modulea == 'AI' && $gradesa == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($modulea == 'AI' && $gradesa == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
               if ($moduleb == 'AI' && $gradesb == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($moduleb == 'AI' && $gradesb == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($moduleb == 'AI' && $gradesb == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($moduleb == 'AI' && $gradesb == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
              
               if ($modulec == 'AI' && $gradesc == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($modulec == 'AI' && $gradesc == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($modulec == 'AI' && $gradesc == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($modulec == 'AI' && $gradesc == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
               if ($moduled == 'AI' && $gradesd == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($moduled == 'AI' && $gradesd == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($moduled == 'AI' && $gradesd == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($moduled == 'AI' && $gradesd == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
               if ($modulee == 'AI' && $gradese == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($modulee == 'AI' && $gradese == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($modulee == 'AI' && $gradese == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($modulee == 'AI' && $gradese == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
               if ($modulef == 'AI' && $gradesf == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($modulef == 'AI' && $gradesf == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($modulef == 'AI' && $gradesf == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($modulef == 'AI' && $gradesf == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
               if ($moduleg == 'AI' && $gradesg == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($moduleg == 'AI' && $gradesg == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($moduleg == 'AI' && $gradesg == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($moduleg == 'AI' && $gradesg == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
               if ($moduleh == 'AI' && $gradesh == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($moduleh == 'AI' && $gradesh == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($moduleh == 'AI' && $gradesh == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($moduleh == 'AI' && $gradesh == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
               if ($modulei == 'AI' && $gradesi == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($modulei == 'AI' && $gradesi == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($modulei == 'AI' && $gradesi == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($modulei == 'AI' && $gradesi == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
                      if ($module3a == 'AI' && $grades3a == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($module3a == 'AI' && $grades3a == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($module3a == 'AI' && $grades3a == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($module3a == 'AI' && $grades3a == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
                             if ($module3b == 'AI' && $grades3b == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($module3b == 'AI' && $grades3b == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($module3b == 'AI' && $grades3b == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($module3b == 'AI' && $grades3b == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
                             if ($module3c == 'AI' && $grades3c == '1'){
           echo "<h1>" .$row["aiskills1"]."</h1>";
       }
       
        if ($module3c == 'AI' && $grades3c == '2.1'){
           echo "<h1>" .$row["aiskills21"]."</h1>";
       }
       
         if ($module3c == 'AI' && $grades3c == '2.2'){
           echo "<h1>" .$row["aiskills22"]."</h1>";
       }
       
        if ($module3c == 'AI' && $grades3c == '3'){
           echo "<h1>" .$row["aiskills3"]."</h1>";
       }
       
       // System Eng
       
        if ($module1 == 'SR' && $grades1 == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($module1 == 'SR' && $grades1 == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($module1 == 'SR' && $grades1 == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($module1 == 'SR' && $grades1 == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
        if ($module2 == 'SR' && $grades2 == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($module2 == 'SR' && $grades2 == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($module2 == 'SR' && $grades2 == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($module2 == 'SR' && $grades2 == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
        if ($module3 == 'SR' && $grades3 == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($module3 == 'SR' && $grades3 == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($module3 == 'SR' && $grades3 == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($module3 == 'SR' && $grades3 == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
               if ($modulea == 'SR' && $gradesa == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($modulea == 'SR' && $gradesa == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($modulea == 'SR' && $gradesa == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($modulea == 'SR' && $gradesa == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
      
               if ($moduleb == 'SR' && $gradesb == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($moduleb == 'SR' && $gradesb == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($moduleb == 'SR' && $gradesb == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($moduleb == 'SR' && $gradesb == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
               if ($modulec == 'SR' && $gradesc == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($modulec == 'SR' && $gradesc == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($modulec == 'SR' && $gradesc == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($modulec == 'SR' && $gradesc == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
               if ($moduled == 'SR' && $gradesd == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($moduled == 'SR' && $gradesd == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($moduled == 'SR' && $gradesd == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($moduled == 'SR' && $gradesd == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
               if ($modulee == 'SR' && $gradese == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($modulee == 'SR' && $gradese == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($modulee == 'SR' && $gradese == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($modulee == 'SR' && $gradese == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
               if ($modulef == 'SR' && $gradesf == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($modulef == 'SR' && $gradesf == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($modulef == 'SR' && $gradesf == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($modulef == 'SR' && $gradesf == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
               if ($moduleg == 'SR' && $gradesg == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($moduleg == 'SR' && $gradesg == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($moduleg == 'SR' && $gradesg == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($moduleg == 'SR' && $gradesg == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
               if ($moduleh == 'SR' && $gradesh == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($moduleh == 'SR' && $gradesh == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($moduleh == 'SR' && $gradesh == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($moduleh == 'SR' && $gradesh == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
               if ($modulei == 'SR' && $gradesi == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($modulei == 'SR' && $gradesi == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($modulei == 'SR' && $gradesi == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($modulei == 'SR' && $gradesi == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
              
               if ($module3a == 'SR' && $grades3a == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($module3a == 'SR' && $grades3a == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($module3a == 'SR' && $grades3a == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($module3a == 'SR' && $grades3a == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
                      if ($module3b == 'SR' && $grades3b == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($module3b == 'SR' && $grades3b == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($module3b == 'SR' && $grades3b == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($module3b == 'SR' && $grades3b == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
                      if ($module3c == 'SR' && $grades3c == '1'){
           echo "<h1>" .$row["srskills1"]."</h1>";
       }
       
        if ($module3c == 'SR' && $grades3c == '2.1'){
           echo "<h1>" .$row["srskills21"]."</h1>";
       }
       
         if ($module3c == 'SR' && $grades3c == '2.2'){
           echo "<h1>" .$row["srskills22"]."</h1>";
       }
       
        if ($module3c == 'SR' && $grades3c == '3'){
           echo "<h1>" .$row["srskills3"]."</h1>";
       }
       
       // Computer Systems
       
        if ($module1 == 'CA' && $grades1 == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($module1 == 'CA' && $grades1 == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($module1 == 'CA' && $grades1 == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($module1 == 'CA' && $grades1 == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
        if ($module2 == 'CA' && $grades2 == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($module2 == 'CA' && $grades2 == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($module2 == 'CA' && $grades2 == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($module2 == 'CA' && $grades2 == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
        if ($module3 == 'CA' && $grades3 == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($module3 == 'CA' && $grades3 == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($module3 == 'CA' && $grades3 == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($module3 == 'CA' && $grades3 == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
               if ($modulea == 'CA' && $gradesa == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($modulea == 'CA' && $gradesa == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($modulea == 'CA' && $gradesa == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($modulea == 'CA' && $gradesa == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
        
               if ($moduleb == 'CA' && $gradesb == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($moduleb == 'CA' && $gradesb == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($moduleb == 'CA' && $gradesb == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($moduleb == 'CA' && $gradesb == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
               if ($modulec == 'CA' && $gradesc == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($modulec == 'CA' && $gradesc == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($modulec == 'CA' && $gradesc == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($modulec == 'CA' && $gradesc == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
               if ($moduled == 'CA' && $gradesd == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($moduled == 'CA' && $gradesd == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($moduled == 'CA' && $gradesd == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($moduled == 'CA' && $gradesd == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
               if ($modulee == 'CA' && $gradese == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($modulee == 'CA' && $gradese == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($modulee == 'CA' && $gradese == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($modulee == 'CA' && $gradese == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
               if ($modulef == 'CA' && $gradesf == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($modulef == 'CA' && $gradesf == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($modulef == 'CA' && $gradesf == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($modulef == 'CA' && $gradesf == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
               if ($moduleg == 'CA' && $gradesg == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($moduleg == 'CA' && $gradesg == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($moduleg == 'CA' && $gradesg == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($moduleg == 'CA' && $gradesg == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
               if ($moduleh == 'CA' && $gradesh == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($moduleh == 'CA' && $gradesh == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($moduleh == 'CA' && $gradesh == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($moduleh == 'CA' && $gradesh == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
               if ($modulei == 'CA' && $gradesi == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($modulei == 'CA' && $gradesi == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($modulei == 'CA' && $gradesi == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($modulei == 'CA' && $gradesi == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
                      if ($module3a == 'CA' && $grades3a == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($module3a == 'CA' && $grades3a == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($module3a == 'CA' && $grades3a == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($module3a == 'CA' && $grades3a == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
                             if ($module3b == 'CA' && $grades3b == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($module3b == 'CA' && $grades3b == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($module3b == 'CA' && $grades3b == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($module3b == 'CA' && $grades3b == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
                             if ($module3c == 'CA' && $grades3c == '1'){
           echo "<h1>" .$row["caskills1"]."</h1>";
       }
       
        if ($module3c == 'CA' && $grades3c == '2.1'){
           echo "<h1>" .$row["caskills21"]."</h1>";
       }
       
         if ($module3c == 'CA' && $grades3c == '2.2'){
           echo "<h1>" .$row["caskills22"]."</h1>";
       }
       
        if ($module3c == 'CA' && $grades3c == '3'){
           echo "<h1>" .$row["caskills3"]."</h1>";
       }
       
       // Introduction to Programming
       
        if ($module1 == 'IP' && $grades1 == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($module1 == 'IP' && $grades1 == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($module1 == 'IP' && $grades1 == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($module1 == 'IP' && $grades1 == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
        if ($module2 == 'IP' && $grades2 == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($module2 == 'IP' && $grades2 == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($module2 == 'IP' && $grades2 == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($module2 == 'IP' && $grades2 == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
        if ($module3 == 'IP' && $grades3 == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($module3 == 'IP' && $grades3 == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($module3 == 'IP' && $grades3 == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($module3 == 'IP' && $grades3 == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
               if ($modulea == 'IP' && $gradesa == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($modulea == 'IP' && $gradesa == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($modulea == 'IP' && $gradesa == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($modulea == 'IP' && $gradesa == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
               if ($moduleb == 'IP' && $gradesb == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($moduleb == 'IP' && $gradesb == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($moduleb == 'IP' && $gradesb == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($moduleb == 'IP' && $gradesb == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
               if ($modulec == 'IP' && $gradesc == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($modulec == 'IP' && $gradesc == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($modulec == 'IP' && $gradesc == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($modulec == 'IP' && $gradesc == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
               if ($moduled == 'IP' && $gradesd == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($moduled == 'IP' && $gradesd == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($moduled == 'IP' && $gradesd == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($moduled == 'IP' && $gradesd == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
               if ($modulee == 'IP' && $gradese == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($modulee == 'IP' && $gradese == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($modulee == 'IP' && $gradese == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($modulee == 'IP' && $gradese == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
               if ($modulef == 'IP' && $gradesf == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($modulef == 'IP' && $gradesf == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($modulef == 'IP' && $gradesf == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($modulef == 'IP' && $gradesf == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
               if ($moduleg == 'IP' && $gradesg == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($moduleg == 'IP' && $gradesg == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($moduleg == 'IP' && $gradesg == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($moduleg == 'IP' && $gradesg == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
               if ($moduleh == 'IP' && $gradesh == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($moduleh == 'IP' && $gradesh == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($moduleh == 'IP' && $gradesh == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($moduleh == 'IP' && $gradesh == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
               if ($modulei == 'IP' && $gradesi == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($modulei == 'IP' && $gradesi == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($modulei == 'IP' && $gradesi == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($modulei == 'IP' && $gradesi == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
                      if ($module3a == 'IP' && $grades3a == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($module3a == 'IP' && $grades3a == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($module3a == 'IP' && $grades3a == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($module3a == 'IP' && $grades3a == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
                             if ($module3b == 'IP' && $grades3b == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($module3b == 'IP' && $grades3b == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($module3b == 'IP' && $grades3b == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($module3b == 'IP' && $grades3b == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
                             if ($module3c == 'IP' && $grades3c == '1'){
           echo "<h1>" .$row["ipskills1"]."</h1>";
       }
       
        if ($module3c == 'IP' && $grades3c == '2.1'){
           echo "<h1>" .$row["ipskills21"]."</h1>";
       }
       
         if ($module3c == 'IP' && $grades3c == '2.2'){
           echo "<h1>" .$row["ipskills22"]."</h1>";
       }
       
        if ($module3c == 'IP' && $grades3c == '3'){
           echo "<h1>" .$row["ipskills3"]."</h1>";
       }
       
       // Emerging Technologies
       
        if ($module1 == 'EM' && $grades1 == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($module1 == 'EM' && $grades1 == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($module1 == 'EM' && $grades1 == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($module1 == 'EM' && $grades1 == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
        if ($module2 == 'EM' && $grades2 == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($module2 == 'EM' && $grades2 == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($module2 == 'EM' && $grades2 == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($module2 == 'EM' && $grades2 == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
        if ($module3 == 'EM' && $grades3 == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($module3 == 'EM' && $grades3 == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($module3 == 'EM' && $grades3 == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($module3 == 'EM' && $grades3 == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
               if ($modulea == 'EM' && $gradesa == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($modulea == 'EM' && $gradesa == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($modulea == 'EM' && $gradesa == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($modulea == 'EM' && $gradesa == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
               if ($moduleb == 'EM' && $gradesb == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($moduleb == 'EM' && $gradesb == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($moduleb == 'EM' && $gradesb == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($moduleb == 'EM' && $gradesb == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
               if ($modulec == 'EM' && $gradesc == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($modulec == 'EM' && $gradesc == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($modulec == 'EM' && $gradesc == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($modulec == 'EM' && $gradesc == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
               if ($moduled == 'EM' && $gradesd == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($moduled == 'EM' && $gradesd == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($moduled == 'EM' && $gradesd == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($moduled == 'EM' && $gradesd == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
               if ($modulee == 'EM' && $gradese == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($modulee == 'EM' && $gradese == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($modulee == 'EM' && $gradese == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($modulee == 'EM' && $gradese == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
               if ($modulef == 'EM' && $gradesf == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($modulef == 'EM' && $gradesf == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($modulef == 'EM' && $gradesf == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($modulef == 'EM' && $gradesf == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
               if ($moduleg == 'EM' && $gradesg == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($moduleg == 'EM' && $gradesg == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($moduleg == 'EM' && $gradesg == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($moduleg == 'EM' && $gradesg == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
               if ($moduleh == 'EM' && $gradesh == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($moduleh == 'EM' && $gradesh == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($moduleh == 'EM' && $gradesh == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($moduleh == 'EM' && $gradesh == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
               if ($modulei == 'EM' && $gradesi == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($modulei == 'EM' && $gradesi == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($modulei == 'EM' && $gradesi == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($modulei == 'EM' && $gradesi == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
                      if ($module3a == 'EM' && $grades3a == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($module3a == 'EM' && $grades3a == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($module3a == 'EM' && $grades3a == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($module3a == 'EM' && $grades3a == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
                             if ($module3b == 'EM' && $grades3b == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($module3b == 'EM' && $grades3b == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($module3b == 'EM' && $grades3b == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($module3b == 'EM' && $grades3b == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
                             if ($module3c == 'EM' && $grades3c == '1'){
           echo "<h1>" .$row["emskills1"]."</h1>";
       }
       
        if ($module3c == 'EM' && $grades3c == '2.1'){
           echo "<h1>" .$row["emskills21"]."</h1>";
       }
       
         if ($module3c == 'EM' && $grades3c == '2.2'){
           echo "<h1>" .$row["emskills22"]."</h1>";
       }
       
        if ($module3c == 'EM' && $grades3c == '3'){
           echo "<h1>" .$row["emskills3"]."</h1>";
       }
       
       // Information in Organisation
       
        if ($module1 == 'IO' && $grades1 == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($module1 == 'IO' && $grades1 == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($module1 == 'IO' && $grades1 == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($module1 == 'IO' && $grades1 == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
        if ($module2 == 'IO' && $grades2 == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($module2 == 'IO' && $grades2 == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($module2 == 'IO' && $grades2 == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($module2 == 'IO' && $grades2 == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
        if ($module3 == 'IO' && $grades3 == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($module3 == 'IO' && $grades3 == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($module3 == 'IO' && $grades3 == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($module3 == 'IO' && $grades3 == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
               if ($modulea == 'IO' && $gradesa == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($modulea == 'IO' && $gradesa == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($modulea == 'IO' && $gradesa == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($modulea == 'IO' && $gradesa == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
               if ($moduleb == 'IO' && $gradesb == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($moduleb == 'IO' && $gradesb == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($moduleb == 'IO' && $gradesb == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($moduleb == 'IO' && $gradesb == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
              
               if ($modulec == 'IO' && $gradesc == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($modulec == 'IO' && $gradesc == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($modulec == 'IO' && $gradesc == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($modulec == 'IO' && $gradesc == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
               if ($moduled == 'IO' && $gradesd == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($moduled == 'IO' && $gradesd == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($moduled == 'IO' && $gradesd == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($moduled == 'IO' && $gradesd == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
               if ($modulee == 'IO' && $gradese == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($modulee == 'IO' && $gradese == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($modulee == 'IO' && $gradese == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($modulee == 'IO' && $gradese == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
               if ($modulef == 'IO' && $gradesf == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($modulef == 'IO' && $gradesf == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($modulef == 'IO' && $gradesf == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($modulef == 'IO' && $gradesf == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
               if ($moduleg == 'IO' && $gradesg == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($moduleg == 'IO' && $gradesg == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($moduleg == 'IO' && $gradesg == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($moduleg == 'IO' && $gradesg == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
               if ($moduleh == 'IO' && $gradesh == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($moduleh == 'IO' && $gradesh == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($moduleh == 'IO' && $gradesh == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($moduleh == 'IO' && $gradesh == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
               if ($modulei == 'IO' && $gradesi == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($modulei == 'IO' && $gradesi == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($modulei == 'IO' && $gradesi == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($modulei == 'IO' && $gradesi == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
                      if ($module3a == 'IO' && $grades3a == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($module3a == 'IO' && $grades3a == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($module3a == 'IO' && $grades3a == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($module3a == 'IO' && $grades3a == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
                             if ($module3b == 'IO' && $grades3b == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($module3b == 'IO' && $grades3b == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($module3b == 'IO' && $grades3b == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($module3b == 'IO' && $grades3b == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       
                             if ($module3c == 'IO' && $grades3c == '1'){
           echo "<h1>" .$row["ioskills1"]."</h1>";
       }
       
        if ($module3c == 'IO' && $grades3c == '2.1'){
           echo "<h1>" .$row["ioskills21"]."</h1>";
       }
       
         if ($module3c == 'IO' && $grades3c == '2.2'){
           echo "<h1>" .$row["ioskills22"]."</h1>";
       }
       
        if ($module3c == 'IO' && $grades3c == '3'){
           echo "<h1>" .$row["ioskills3"]."</h1>";
       }
       // Data Management
       
        if ($module1 == 'DB' && $grades1 == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($module1 == 'DB' && $grades1 == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($module1 == 'DB' && $grades1 == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($module1 == 'DB' && $grades1 == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
        if ($module2 == 'DB' && $grades2 == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($module2 == 'DB' && $grades2 == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($module2 == 'DB' && $grades2 == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($module2 == 'DB' && $grades2 == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
        if ($module3 == 'DB' && $grades3 == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($module3 == 'DB' && $grades3 == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($module3 == 'DB' && $grades3 == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($module3 == 'DB' && $grades3 == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
               if ($modulea == 'DB' && $gradesa == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($modulea == 'DB' && $gradesa == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($modulea == 'DB' && $gradesa == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($modulea == 'DB' && $gradesa == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
               if ($moduleb == 'DB' && $gradesb == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($moduleb == 'DB' && $gradesb == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($moduleb == 'DB' && $gradesb == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($moduleb == 'DB' && $gradesb == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
           
               if ($modulec == 'DB' && $gradesc == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($modulec == 'DB' && $gradesc == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($modulec == 'DB' && $gradesc == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($modulec == 'DB' && $gradesc == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
               if ($moduled == 'DB' && $gradesd == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($moduled == 'DB' && $gradesd == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($moduled == 'DB' && $gradesd == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($moduled == 'DB' && $gradesd == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
               if ($modulee == 'DB' && $gradese == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($modulee == 'DB' && $gradese == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($modulee == 'DB' && $gradese == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($modulee == 'DB' && $gradese == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
               if ($modulef == 'DB' && $gradesf == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($modulef == 'DB' && $gradesf == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($modulef == 'DB' && $gradesf == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($modulef == 'DB' && $gradesf == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
               if ($moduleg == 'DB' && $gradesg == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($moduleg == 'DB' && $gradesg == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($moduleg == 'DB' && $gradesg == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($moduleg == 'DB' && $gradesg == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
               if ($moduleh == 'DB' && $gradesh == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($moduleh == 'DB' && $gradesh == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($moduleh == 'DB' && $gradesh == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($moduleh == 'DB' && $gradesh == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
               if ($modulei == 'DB' && $gradesi == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($modulei == 'DB' && $gradesi == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($modulei == 'DB' && $gradesi == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($modulei == 'DB' && $gradesi == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
                      if ($module3a == 'DB' && $grades3a == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($module3a == 'DB' && $grades3a == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($module3a == 'DB' && $grades3a == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($module3a == 'DB' && $grades3a == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
                            if ($module3b == 'DB' && $grades3b == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($module3b == 'DB' && $grades3b == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($module3b == 'DB' && $grades3b == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($module3b == 'DB' && $grades3b == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
                            if ($module3c == 'DB' && $grades3c == '1'){
           echo "<h1>" .$row["dbskills1"]."</h1>";
       }
       
        if ($module3c == 'DB' && $grades3c == '2.1'){
           echo "<h1>" .$row["dbskills21"]."</h1>";
       }
       
         if ($module3c == 'DB' && $grades3c == '2.2'){
           echo "<h1>" .$row["dbskills22"]."</h1>";
       }
       
        if ($module3c == 'DB' && $grades3c == '3'){
           echo "<h1>" .$row["dbskills3"]."</h1>";
       }
       
       // Project Management
       
        if ($module1 == 'PM' && $grades1 == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($module1 == 'PM' && $grades1 == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($module1 == 'PM' && $grades1 == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($module1 == 'PM' && $grades1 == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
        if ($module2 == 'PM' && $grades2 == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($module2 == 'PM' && $grades2 == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($module2 == 'PM' && $grades2 == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($module2 == 'PM' && $grades2 == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
        if ($module3 == 'PM' && $grades3 == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($module3 == 'PM' && $grades3 == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($module3 == 'PM' && $grades3 == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($module3 == 'PM' && $grades3 == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
               if ($modulea == 'PM' && $gradesa == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($modulea == 'PM' && $gradesa == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($modulea == 'PM' && $gradesa == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($modulea == 'PM' && $gradesa == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
               if ($moduleb == 'PM' && $gradesb == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($moduleb == 'PM' && $gradesb == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($moduleb == 'PM' && $gradesb == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($moduleb == 'PM' && $gradesb == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
              
               if ($modulec == 'PM' && $gradesc == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($modulec == 'PM' && $gradesc == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($modulec == 'PM' && $gradesc == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($modulec == 'PM' && $gradesc == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
               if ($moduled == 'PM' && $gradesd == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($moduled == 'PM' && $gradesd == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($moduled == 'PM' && $gradesd == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($moduled == 'PM' && $gradesd == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
               if ($modulee == 'PM' && $gradese == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($modulee == 'PM' && $gradese == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($modulee == 'PM' && $gradese == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($modulee == 'PM' && $gradese == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
               if ($modulef == 'PM' && $gradesf == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($modulef == 'PM' && $gradesf == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($modulef == 'PM' && $gradesf == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($modulef == 'PM' && $gradesf == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
               if ($moduleg == 'PM' && $gradesg == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($moduleg == 'PM' && $gradesg == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($moduleg == 'PM' && $gradesg == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($moduleg == 'PM' && $gradesg == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
               if ($moduleh == 'PM' && $gradesh == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($moduleh == 'PM' && $gradesh == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($moduleh == 'PM' && $gradesh == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($moduleh == 'PM' && $gradesh == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
               if ($modulei == 'PM' && $gradesi == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($modulei == 'PM' && $gradesi == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($modulei == 'PM' && $gradesi == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($modulei == 'PM' && $gradesi == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
                      if ($module3a == 'PM' && $grades3a == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($module3a == 'PM' && $grades3a == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($module3a == 'PM' && $grades3a == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($module3a == 'PM' && $grades3a == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
                            if ($module3b == 'PM' && $grades3b == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($module3b == 'PM' && $grades3b == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($module3b == 'PM' && $grades3b == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($module3b == 'PM' && $grades3b == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
                            if ($module3c == 'PM' && $grades3c == '1'){
           echo "<h1>" .$row["pmskills1"]."</h1>";
       }
       
        if ($module3c == 'PM' && $grades3c == '2.1'){
           echo "<h1>" .$row["pmskills21"]."</h1>";
       }
       
         if ($module3c == 'PM' && $grades3c == '2.2'){
           echo "<h1>" .$row["pmskills22"]."</h1>";
       }
       
        if ($module3c == 'PM' && $grades3c == '3'){
           echo "<h1>" .$row["pmskills3"]."</h1>";
       }
       
       // Information Systems
       
        if ($module1 == 'IS' && $grades1 == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($module1 == 'IS' && $grades1 == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($module1 == 'IS' && $grades1 == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($module1 == 'IS' && $grades1 == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
        if ($module2 == 'IS' && $grades2 == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($module2 == 'IS' && $grades2 == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($module2 == 'IS' && $grades2 == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($module2 == 'IS' && $grades2 == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
        if ($module3 == 'IS' && $grades3 == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($module3 == 'IS' && $grades3 == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($module3 == 'IS' && $grades3 == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($module3 == 'IS' && $grades3 == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
               if ($modulea == 'IS' && $gradesa == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($modulea == 'IS' && $gradesa == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($modulea == 'IS' && $gradesa == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($modulea == 'IS' && $gradesa == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
               if ($moduleb == 'IS' && $gradesb == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($moduleb == 'IS' && $gradesb == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($moduleb == 'IS' && $gradesb == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($moduleb == 'IS' && $gradesb == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
               if ($modulec== 'IS' && $gradesc== '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($modulec== 'IS' && $gradesc== '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($modulec== 'IS' && $gradesc== '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($modulec== 'IS' && $gradesc== '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
               if ($moduled == 'IS' && $gradesd == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($moduled == 'IS' && $gradesd == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($moduled == 'IS' && $gradesd == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($moduled == 'IS' && $gradesd == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
               if ($modulee == 'IS' && $gradese == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($modulee == 'IS' && $gradese == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($modulee == 'IS' && $gradese == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($modulee == 'IS' && $gradese == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
               if ($modulef == 'IS' && $gradesf == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($modulef == 'IS' && $gradesf == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($modulef == 'IS' && $gradesf == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($modulef == 'IS' && $gradesf == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
               if ($moduleg == 'IS' && $gradesg == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($moduleg == 'IS' && $gradesg == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($moduleg == 'IS' && $gradesg == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($moduleg == 'IS' && $gradesg == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
               if ($moduleh == 'IS' && $gradesh == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($moduleh == 'IS' && $gradesh == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($moduleh == 'IS' && $gradesh == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($moduleh == 'IS' && $gradesh == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
               if ($modulei == 'IS' && $gradesi == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($modulei == 'IS' && $gradesi == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($modulei == 'IS' && $gradesi == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($modulei == 'IS' && $gradesi == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
                      if ($module3a == 'IS' && $grades3a == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($module3a == 'IS' && $grades3a == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($module3a == 'IS' && $grades3a == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($module3a == 'IS' && $grades3a == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
                             if ($module3b == 'IS' && $grades3b == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($module3b == 'IS' && $grades3b == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($module3b == 'IS' && $grades3b == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($module3b == 'IS' && $grades3b == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
                             if ($module3c == 'IS' && $grades3c == '1'){
           echo "<h1>" .$row["isskills1"]."</h1>";
       }
       
        if ($module3c == 'IS' && $grades3c == '2.1'){
           echo "<h1>" .$row["isskills21"]."</h1>";
       }
       
         if ($module3c == 'IS' && $grades3c == '2.2'){
           echo "<h1>" .$row["isskills22"]."</h1>";
       }
       
        if ($module3c == 'IS' && $grades3c == '3'){
           echo "<h1>" .$row["isskills3"]."</h1>";
       }
       
       // Business Intelligence
       
        if ($module1 == 'BI' && $grades1 == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($module1 == 'BI' && $grades1 == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($module1 == 'BI' && $grades1 == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($module1 == 'BI' && $grades1 == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
        if ($module2 == 'BI' && $grades2 == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($module2 == 'BI' && $grades2 == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($module2 == 'BI' && $grades2 == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($module2 == 'BI' && $grades2 == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
        if ($module3 == 'BI' && $grades3 == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($module3 == 'BI' && $grades3 == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($module3 == 'BI' && $grades3 == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($module3 == 'BI' && $grades3 == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
               if ($modulea == 'BI' && $gradesa == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($modulea == 'BI' && $gradesa == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($modulea == 'BI' && $gradesa == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($modulea == 'BI' && $gradesa == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
              
               if ($moduleb == 'BI' && $gradesb == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($moduleb == 'BI' && $gradesb == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($moduleb == 'BI' && $gradesb == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($moduleb == 'BI' && $gradesb == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
               if ($modulec == 'BI' && $gradesc == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($modulec == 'BI' && $gradesc == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($modulec == 'BI' && $gradesc == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($modulec == 'BI' && $gradesc == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
               if ($moduled == 'BI' && $gradesd == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($moduled == 'BI' && $gradesd == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($moduled == 'BI' && $gradesd == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($moduled == 'BI' && $gradesd == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
               if ($modulee == 'BI' && $gradese == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($modulee == 'BI' && $gradese == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($modulee == 'BI' && $gradese == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($modulee == 'BI' && $gradese == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
               if ($modulef == 'BI' && $gradesf == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($modulef == 'BI' && $gradesf == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($modulef == 'BI' && $gradesf == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($modulef == 'BI' && $gradesf == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
               if ($moduleg == 'BI' && $gradesg == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($moduleg == 'BI' && $gradesg == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($moduleg == 'BI' && $gradesg == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($moduleg == 'BI' && $gradesg == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
               if ($moduleh == 'BI' && $gradesh == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($moduleh == 'BI' && $gradesh == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($moduleh == 'BI' && $gradesh == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($moduleh == 'BI' && $gradesh == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
               if ($modulei == 'BI' && $gradesi == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($modulei == 'BI' && $gradesi == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($modulei == 'BI' && $gradesi == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($modulei == 'BI' && $gradesi == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
                      if ($module3a == 'BI' && $grades3a == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($module3a == 'BI' && $grades3a == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($module3a == 'BI' && $grades3a == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($module3a == 'BI' && $grades3a == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
                             if ($module3b == 'BI' && $grades3b == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($module3b == 'BI' && $grades3b == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($module3b == 'BI' && $grades3b == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($module3b == 'BI' && $grades3b == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
                             if ($module3c == 'BI' && $grades3c == '1'){
           echo "<h1>" .$row["biskills1"]."</h1>";
       }
       
        if ($module3c == 'BI' && $grades3c == '2.1'){
           echo "<h1>" .$row["biskills21"]."</h1>";
       }
       
         if ($module3c == 'BI' && $grades3c == '2.2'){
           echo "<h1>" .$row["biskills22"]."</h1>";
       }
       
        if ($module3c == 'BI' && $grades3c == '3'){
           echo "<h1>" .$row["biskills3"]."</h1>";
       }
       
       // Enterprise Networking
       
        if ($module1 == 'EA' && $grades1 == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($module1 == 'EA' && $grades1 == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($module1 == 'EA' && $grades1 == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($module1 == 'EA' && $grades1 == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
        if ($module2 == 'EA' && $grades2 == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($module2 == 'EA' && $grades2 == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($module2 == 'EA' && $grades2 == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($module2 == 'EA' && $grades2 == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
        if ($module3 == 'EA' && $grades3 == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($module3 == 'EA' && $grades3 == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($module3 == 'EA' && $grades3 == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($module3 == 'EA' && $grades3 == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
               if ($modulea == 'EA' && $gradesa == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($modulea == 'EA' && $gradesa == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($modulea == 'EA' && $gradesa == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($modulea == 'EA' && $gradesa == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
              
               if ($moduleb == 'EA' && $gradesb == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($moduleb == 'EA' && $gradesb == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($moduleb == 'EA' && $gradesb == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($moduleb == 'EA' && $gradesb == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
               if ($modulec == 'EA' && $gradesc == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($modulec == 'EA' && $gradesc == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($modulec == 'EA' && $gradesc == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($modulec == 'EA' && $gradesc == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
               if ($moduled == 'EA' && $gradesd == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($moduled == 'EA' && $gradesd == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($moduled == 'EA' && $gradesd == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($moduled == 'EA' && $gradesd == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
               if ($modulee == 'EA' && $gradese == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($modulee == 'EA' && $gradese == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($modulee == 'EA' && $gradese == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($modulee == 'EA' && $gradese == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
               if ($modulef == 'EA' && $gradesf == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($modulef == 'EA' && $gradesf == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($modulef == 'EA' && $gradesf == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($modulef == 'EA' && $gradesf == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
               if ($moduleg == 'EA' && $gradesg == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($moduleg == 'EA' && $gradesg == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($moduleg == 'EA' && $gradesg == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($moduleg == 'EA' && $gradesg == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
               if ($moduleh == 'EA' && $gradesh == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($moduleh == 'EA' && $gradesh == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($moduleh == 'EA' && $gradesh == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($moduleh == 'EA' && $gradesh == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
               if ($modulei == 'EA' && $gradesi == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($modulei == 'EA' && $gradesi == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($modulei == 'EA' && $gradesi == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($modulei == 'EA' && $gradesi == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
                      if ($module3a == 'EA' && $grades3a == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($module3a == 'EA' && $grades3a == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($module3a == 'EA' && $grades3a == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($module3a == 'EA' && $grades3a == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
                             if ($module3b == 'EA' && $grades3b == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($module3b == 'EA' && $grades3b == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($module3b == 'EA' && $grades3b == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($module3b == 'EA' && $grades3b == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
                             if ($module3c == 'EA' && $grades3c == '1'){
           echo "<h1>" .$row["easkills1"]."</h1>";
       }
       
        if ($module3c == 'EA' && $grades3c == '2.1'){
           echo "<h1>" .$row["easkills21"]."</h1>";
       }
       
         if ($module3c == 'EA' && $grades3c == '2.2'){
           echo "<h1>" .$row["easkills22"]."</h1>";
       }
       
        if ($module3c == 'EA' && $grades3c == '3'){
           echo "<h1>" .$row["easkills3"]."</h1>";
       }
       
       // Strategic Management
       
        if ($module1 == 'SM' && $grades1 == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($module1 == 'SM' && $grades1 == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($module1 == 'SM' && $grades1 == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($module1 == 'SM' && $grades1 == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
       
        if ($module2 == 'SM' && $grades2 == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($module2 == 'SM' && $grades2 == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($module2 == 'SM' && $grades2 == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($module2 == 'SM' && $grades2 == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
       
        if ($module3 == 'SM' && $grades3 == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($module3 == 'SM' && $grades3 == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($module3 == 'SM' && $grades3 == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($module3 == 'SM' && $grades3 == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
       
               if ($modulea == 'SM' && $gradesa == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($modulea == 'SM' && $gradesa == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($modulea == 'SM' && $gradesa == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($modulea == 'SM' && $gradesa == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
              
               if ($moduleb == 'SM' && $gradesb == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($moduleb == 'SM' && $gradesb == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($moduleb == 'SM' && $gradesb == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($moduleb == 'SM' && $gradesb == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
       
               if ($modulec == 'SM' && $gradesc == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($modulec == 'SM' && $gradesc == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($modulec == 'SM' && $gradesc == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($modulec == 'SM' && $gradesc == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
       
               if ($moduled == 'SM' && $gradesd == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($moduled == 'SM' && $gradesd == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($moduled == 'SM' && $gradesd == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($moduled == 'SM' && $gradesd == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
       
               if ($modulee == 'SM' && $gradese == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($modulee == 'SM' && $gradese == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($modulee == 'SM' && $gradese == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($modulee == 'SM' && $gradese == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
       
               if ($modulef == 'SM' && $gradesf == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($modulef == 'SM' && $gradesf == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($modulef == 'SM' && $gradesf == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($modulef == 'SM' && $gradesf == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
       
               if ($moduleg == 'SM' && $gradesg == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($moduleg == 'SM' && $gradesg == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($moduleg == 'SM' && $gradesg == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($moduleg == 'SM' && $gradesg == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
        }
           
                if ($moduleh == 'SM' && $gradesh == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($moduleh == 'SM' && $gradesh == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($moduleh == 'SM' && $gradesh == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($moduleh == 'SM' && $gradesh == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       } 
       
               if ($modulei == 'SM' && $gradesi == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($modulei == 'SM' && $gradesi == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($modulei == 'SM' && $gradesi == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($modulei == 'SM' && $gradesi == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
       
                      if ($module3a == 'SM' && $grades3a == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($module3a == 'SM' && $grades3a == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($module3a == 'SM' && $grades3a == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($module3a == 'SM' && $grades3a == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
       
                             if ($module3b == 'SM' && $grades3b == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($module3b == 'SM' && $grades3b == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($module3b == 'SM' && $grades3b == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($module3b == 'SM' && $grades3b == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
       
                             if ($module3c == 'SM' && $grades3c == '1'){
           echo "<h1>" .$row["smskills1"]."</h1>";
       }
       
        if ($module3c == 'SM' && $grades3c == '2.1'){
           echo "<h1>" .$row["smskills21"]."</h1>";
       }
       
         if ($module3c == 'SM' && $grades3c == '2.2'){
           echo "<h1>" .$row["smskills22"]."</h1>";
       }
       
        if ($module3c == 'SM' && $grades3c == '3'){
           echo "<h1>" .$row["smskills3"]."</h1>";
       }
       // Programming
       
        if ($module1 == 'PP' && $grades1 == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($module1 == 'PP' && $grades1 == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($module1 == 'PP' && $grades1 == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($module1 == 'PP' && $grades1 == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
        if ($module2 == 'PP' && $grades2 == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($module2 == 'PP' && $grades2 == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($module2 == 'PP' && $grades2 == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($module2 == 'PP' && $grades2 == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
        if ($module3 == 'PP' && $grades3 == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($module3 == 'PP' && $grades3 == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($module3 == 'PP' && $grades3 == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($module3 == 'PP' && $grades3 == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
              
        if ($modulea == 'PP' && $gradesa == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($modulea == 'PP' && $gradesa == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($modulea == 'PP' && $gradesa == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($modulea == 'PP' && $gradesa == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
              
        if ($moduleb == 'PP' && $gradesb == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($moduleb == 'PP' && $gradesb == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($moduleb == 'PP' && $gradesb == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($moduleb == 'PP' && $gradesb == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
              
        if ($modulec == 'PP' && $gradesc == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($modulec == 'PP' && $gradesc == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($modulec == 'PP' && $gradesc == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($modulec == 'PP' && $gradesc == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
              
        if ($moduled == 'PP' && $gradesd == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($moduled == 'PP' && $gradesd == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($moduled == 'PP' && $gradesd == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($moduled == 'PP' && $gradesd == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
              
        if ($modulee == 'PP' && $gradese == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($modulee == 'PP' && $gradese == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($modulee == 'PP' && $gradese == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($modulee == 'PP' && $gradese == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
              
        if ($modulef == 'PP' && $gradesf == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($modulef== 'PP' && $gradesf == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($modulef == 'PP' && $gradesf == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($modulef == 'PP' && $gradesf == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
              
        if ($moduleg == 'PP' && $gradesg == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($moduleg == 'PP' && $gradesg == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($moduleg == 'PP' && $gradesg == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($moduleg == 'PP' && $gradesg == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
              
        if ($moduleh == 'PP' && $gradesh == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($moduleh == 'PP' && $gradesh == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($moduleh == 'PP' && $gradesh == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($moduleh == 'PP' && $gradesh == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
              
        if ($modulei == 'PP' && $gradesi == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($modulei == 'PP' && $gradesi == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($modulei == 'PP' && $gradesi == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($modulei == 'PP' && $gradesi == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
               if ($module3a == 'PP' && $grades3a == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($module3a == 'PP' && $grades3a == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($module3a == 'PP' && $grades3a == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($module3a == 'PP' && $grades3a == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
                      if ($module3b == 'PP' && $grades3b == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($module3b == 'PP' && $grades3b == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($module3b == 'PP' && $grades3b == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($module3b == 'PP' && $grades3b == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
       
                      if ($module3c == 'PP' && $grades3c == '1'){
           echo "<h1>" .$row["ppskills1"]."</h1>";
       }
       
        if ($module3c == 'PP' && $grades3c == '2.1'){
           echo "<h1>" .$row["ppskills21"]."</h1>";
       }
       
         if ($module3c == 'PP' && $grades3c == '2.2'){
           echo "<h1>" .$row["ppskills22"]."</h1>";
       }
       
        if ($module3c == 'PP' && $grades3c == '3'){
           echo "<h1>" .$row["ppskills3"]."</h1>";
       }
    }
}

mysqli_close($conn);
}
?>
            </div>
        </div><br><br>

    </body>
</html>