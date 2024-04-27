<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <script src="float-panel.js"></script>
     
</head>
<body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">↑</button>
  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
    
    function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
    </script>

 <section id="stu">
           <div class="topnav" id="myTopnav">  
               <img src="photos/icon.jpg" alt="logo" width="250px" height="85px" >
               <div id="heba">
        <a  href="#top">HOME</a>
        <a href="#pt">ABOUT</a>
        <a href="#set">SERVICES</a>
        <a href="#mim">TIPS</a>
        <a href="form.php"><button id="ck">CREATE CV</button></a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"><img src="photos/menu.png" alt="logo" width="45px" height="35px"></a>
               </div>
    <i class="fa fa-bars"></i>
  </a>
</div>


<div id="cont">
<div id="top" >
  <h1 class="slideanim">Let Us Shape<br>Your CV Into What <br>Every Employer wants</h1>
  <h5 class="slideanim">A CV that reflects your capabilities<br>
  Your strengths in every area of your field <br>as well as your experiences
and what <br>you bring to whatever company you end up working with</h5>
</div>
    <a href="form.php"><button id="ok" class="slideanim">Try it now</button></a>
</div>

 </section>
 <section id="set">

  <div id="rik">
   <div class="ik">
    <img src="photos/112-book-morph-outline.gif" alt="" class="slideanim" width="70px" height="70px">
    <h3 class="slideanim">PROGRAMME
      <p>We help you get your <br> skills based on your university programme</p>
    </h3>
   </div>
    <div id="rik2" class="slideanim"></div>
    <div class="ik1">
      <img src="photos/12-layes-outline.gif" alt="" class="slideanim" width="70px" height="70px">
      <h4 class="slideanim">MODULE BASED
        <p>Skills based off<br> your modules and grades</p>
      </h4>
     </div>
    <div id="rik3" class="slideanim"></div>
    <div class="ik2">
      <img src="photos/366-animated-background-17.gif" alt="" class="slideanim" width="70px" height="70px">
      <h5 class="slideanim">SKILL SET
        <p>A skill set based on your <br> university modules from year 1 - 4</p>
      </h5>
     </div>
    </div>

    <img src="photos/pexels-anete-lusina-5239790.jpg" id="px" class="slideanim" width="350px" height="650px" alt="">
    <div id="wto" class="slideanim"><h2>What we offer</h2></div>
    <div id="stag">
    <div id="stag1" class="slideanim">
      <img src="photos/icons8-guarantee-50.png" alt="" class="slideanim">
      <h2 class="slideanim">Educational<br> Opinions</h2>
      <p class="slideanim">Each skill set from<br> every module has been<br>
        verified by educational <br> experts in each respective fields</p>
    </div>
    <div id="stag2" class="slideanim">
      <img src="photos/icons8-easy-to-find-50.png" alt="" class="slideanim">
      <h2 class="slideanim">Easy <br>To use</h2>
      <p class="slideanim"> The system is quite easy to use <br> with icons and features that<br>
        are self explanatory <br> </p>
    </div>

    </div>
    <div id="sta">
      <div id="sta1" class="slideanim">
        <img src="photos/icons8-licence-50.png" alt="" class="slideanim">
        <h2 class="slideanim">Industry<br> Standards</h2>
        <p class="slideanim">The skill sets provided are <br> aligned with industry<br>
          standards and requirements<br> </p>
      </div>
      <div id="sta2" class="slideanim">
        <img src="photos/icons8-student-center-30.png" alt="" class="slideanim">
        <h2 class="slideanim">Student<br>Oriented</h2>
        <p class="slideanim"> The system was designed<br> to improve the skill sets <br>
         of students when preparing <br> a curriculum vitae</p>
      </div>
  
      </div>
 </section>
 <section id="pt">
    <div id="rrt">
      <div id="rrt1" class="slideanim"><b>Get To Know</b> <br>Us Better</div>
      <div id="rrt2" class="slideanim">This is a final year project work<br> designed by a student in the Information <br>
        Technology department of Middlesex university<br> The website is solely to improve on<br>
        the skill sets of students and graduates<br><br> This is an early Version of this website
        <br> and an improved version could possibly be created</p></div>
    </div>
   
 </section>
 <section>
     <main id="mim">
       <div id="mim1"></div>
       <div id="mim2">
         <div id="mi"class="slideanim"><p>THINKING OUTSIDE <br> THE BOX IS OUR</p><b> GOAL</b></div>
         <p id="lor" class="slideanim"> There are several cv generating websites<br>
         online, with a very similar system.<br>
         This is a new approach on curriculum documents and the generation of 
         <br>module based skill sets on them<br>
         </p>
       </div>
       <div id="mim3">
         <img src="photos/world-book-day.png" alt="" class="slideanim">
       </div>
     </main>
     <main id="hut">
    
      <div id="hut3">  
        <img src="photos/simple-data-format.png" alt="" class="slideanim">
     </div>
     <div id="hut1"></div>
       <div id="hut2">
       <div id="ut" class="slideanim"><p>ALL ABOUT <br></p><b> SIMPLICITY</b></div>
        <p id="lur" class="slideanim"> As a student or graduate new to<br>
          cv creation or generation, its all about simplicity you do not want to<br>
          fill up your cv with irrelevant details but the right ones<br>
          that show cases your skills extensively</p>
       </div>
      </div>
     </main>
 </section>

 <section>
<main id="tips">
  <div id="tips1"></div>
<div id="tips0">
  <p id="ti" class="slideanim">SOME<br> MORE <b>TIPS</b> </p>
  <p id="ti1" class="slideanim"> Always highlight relevant experiences pertaining <br>
    to the role you are applying for and <br>
    mentioning your achievements is always<br>
    helpful</p>
</div>
<div id="tips3">
  <img src="photos/interview.png" alt="" class="slideanim">
</div>
</main>
 </section>

 <section id="you">
      <main id="lst">
        <div id="lst1">
          <p class="slideanim"> Try CVGEN to build your CV now
        </p>
        <a href="form.php"><button id="uk" class="slideanim">LAND YOUR DREAM JOB NOW</button></a>
        </div>
      </main>
 </section>

 <footer>
   <section id="foot">
     <div id="foot1">
    <p class="slideanim">CVGEN </p>
     </div>
     <div id="foot2">
      <div id="fgt" class="slideanim">
        <a href="mailto:michaelrobynmanuel@gmail.com">CONTACT</a>
        <a href="https://www.immersive-experiences.co.uk/education-and-workshops/hands-on-careers/?gclid=Cj0KCQjwpImTBhCmARIsAKr58cwQ0pa9FMLExDPAE-B5IB8KOzcHN5D3taz1lcBdb57yqg3Av-h0PCAaApzmEALw_wcB">
            WORKSHOPS</a>
        <a href="https://jobs.theguardian.com/careers/cv-advice/2">ARTICLES</a>
        </div>
     </div>
   </section>
   <div id="ftt"></div>
<div id="copy">
    <a href="https://bio.site/7UGCVH"><p class="slideanim">© 2022 RobynWorks</p></a>
</div> 
</footer>
    <script src="index.js"></script>
</body>
</html>