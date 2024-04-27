<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view.css">
    <script src="float-panel.js"></script>
    <title>Details</title>
<body>
    <form method="post" action="data.php">
        <div id="ry">
            <h1 class="slideanim">How should employer's contact you?</h1>
            <div id="firlas">
            <input type="text" name="firstName" id="fir" placeholder="First Name" class="slideanim"> <br>
            <input type="text" name="lastName" id="las" placeholder="Last Name" class="slideanim"> <br>
            </div>
            <input type="text" id="prof" name="profession" placeholder="Profession..." class="slideanim"> <br>
            <div id="firlas">
            <input type="text" name="phone" id="fir" placeholder="Phone" class="slideanim"> <br>
            <input type="text" name="email" id="las" placeholder="email" class="slideanim"> <br>
            </div>
            <div id="firlas">
              <input type="text" name="city" id="fir" placeholder="city" class="slideanim"> <br>
              <input type="text" name="state" id="las" placeholder="state" class="slideanim"> <br>
              <input type="text" name="postcode" id="pos" placeholder="postcode" class="slideanim"> <br>
            </div>
            <div id="firlas">
              <div id="fir">
                  <label for="social">Social link:</label>
                  <select id="social" name="social" class="slideanim">
                    <option value="Select">Select</option>
                    <option value="LinkedIn">LinkedIn</option>
                    <option value="Website">Website</option>
                    <option value="Twitter">Twitter</option>
                    <option value="Instagram">Instagram</option>
                  </select><br>
              </div>
              <input type="text" name="link" id="las21" placeholder="link" class="slideanim"> <br>
        </div>
</div>

        <div id="frr">
            <h1 class="slideanim">Tell us about your most recent job</h1>
            <div id="firlas1">
            <input type="text" name="jobtitle" id="fir1" placeholder="Job Title" class="slideanim"> <br>
            <input type="text" name="employer" id="las1" placeholder="Employer" class="slideanim"> <br>
            </div>
            <div id="firlas1">
            <input type="text" name="jcity" id="fir1" placeholder="City" class="slideanim"> <br>
            <input type="text" name="jstate" id="las1" placeholder="State/Province" class="slideanim"> <br>
            </div>
            <div id="firlas1">
            <label for="jstart" id="est" class="slideanim">Start Date:</label>
              <input type="date" name="jstart" id="fir1" placeholder="Start" class="slideanim"> <br>
              <label for="jend" id="een" class="slideanim">End Date:</label>
              <input type="date" name="jend" id="las1" placeholder="End" class="slideanim"> <br>
            </div>
        </div>

        <div id="frk">
            <h1 class="slideanim">A little more about your experience</h1>
            <p class="slideanim">Placements/Internships</p>
            <div id="firlas1">
            <input type="text" name="jobtitle1" id="fir1" placeholder="Job Title" class="slideanim"> <br>
            <input type="text" name="employer1" id="las1" placeholder="Employer" class="slideanim"> <br>
            </div>
            <div id="firlas1">
            <input type="text" name="ecity" id="fir1" placeholder="City" class="slideanim"> <br>
            <input type="text" name="estate" id="las1" placeholder="State/Province" class="slideanim"> <br>
            </div>
            <div id="firlas1">
            <label for="estart" id="est" class="slideanim">Start Date:</label>
              <input type="date" name="estart" id="fir1" placeholder="Start" class="slideanim"> <br>
              <label for="eend" id="een" class="slideanim">End Date:</label>
              <input type="date" name="eend" id="las1" placeholder="End" class="slideanim"> <br>
            </div>
        </div>

        <div id="jrk">
            <h1 class="slideanim">Education</h1>
            <p class="slideanim">Tell us about your educational background</p>
            <div id="firlas1">
            <input type="text" name="schoolname" id="fir1" placeholder="School Name" class="slideanim"> <br>
            <input type="text" name="schoollocation" id="las1" placeholder="School Location" class="slideanim"> <br>
            </div>
            <div id="prof">
                <label for="degree">Degree:</label>
                <select id="der" name="degree" class="slideanim">
                  <option value="Select">Select</option>
                  <option value="High School Diploma">High School Diploma</option>
                  <option value="GED">GED</option>
                  <option value="Bachelor Of Science">Bachelor Of Science</option>
                  <option value="Master Of Science">Master Of Science</option>
                  <option value="Ph.D.">Ph.D.</option>
                  <option value="None">None</option>
                </select>
            </div>
            
            <input type="text" id="prof1" name="fieldofstudy" placeholder="Field Of Study..." class="slideanim"> <br>

            <div id="firlas1">
            <label for="estart" id="est" class="slideanim">Start Date:</label>
              <input type="date" name="edustart" id="fir1" placeholder="Start" class="slideanim"> <br>
              <label for="eend" id="een" class="slideanim">End Date:</label>
              <input type="date" name="eduend" id="las1" placeholder="End" class="slideanim"> <br>
            </div>
        </div>

        <div id="ork">
            <h1 class="slideanim">Education</h1>
            <p class="slideanim">A little bit more about your educational background</p>
            <div id="firlas1">
            <input type="text" name="schoolname1" id="fir1" placeholder="School Name" class="slideanim"> <br>
            <input type="text" name="schoollocation1" id="las1" placeholder="School Location" class="slideanim"> <br>
            </div>
            <div id="prof">
                <label for="degree" >Degree:</label>
                <select id="der" name="degree1" class="slideanim">
                  <option value="Select">Select</option>
                  <option value="High School Diploma">High School Diploma</option>
                  <option value="GED">GED</option>
                  <option value="Bachelor Of Science">Bachelor Of Science</option>
                  <option value="Master Of Science">Master Of Science</option>
                  <option value="Ph.D.">Ph.D.</option>
                  <option value="None">None</option>
                </select>
            </div>
            
            <input type="text" id="prof1" name="fieldofstudy1" placeholder="Field Of Study..." class="slideanim"> <br>

            <div id="firlas1">
            <label for="estart" id="est" class="slideanim">Start Date:</label>
              <input type="date" name="edustart1" id="fir1" placeholder="Start" class="slideanim"> <br>
              <label for="eend" id="een" class="slideanim">End Date:</label>
              <input type="date" name="eduend1" id="las1" placeholder="End" class="slideanim"> <br>
            </div>
        </div>

        <div id="pro2">
        <h1 class="slideanim">What Skills do you have?</h1>
        <p class="slideanim">Let employers know your skill set in details</p>
        <label for="keyskills">Key Skills:</label>
        <select id="de" name="keyskills" class="slideanim">
        <option value="Select">Select</option>
        <option value="Team Work and Collaboration">Team Work and Collaboration</option>
        <option value="Multitasking Abilities">Multitasking Abilities</option>
        <option value="Decision Making">Decision Making</option>
        <option value="Flexible and Adaptable">Flexible and Adaptable</option>
        <option value="Organization and Time Management">Organization and Time Management</option>
        <option value="Analytical and Critical Thinking">Analytical and Critical Thinking</option>
        </select>
     

        <div id="sks">
            <select id="de1" name="keyskills0" class="slideanim">
                <option value="Select">Select</option>
                <option value="Team Work and Collaboration">Team Work and Collaboration</option>
                <option value="Multitasking Abilities">Multitasking Abilities</option>
                <option value="Decision Making">Decision Making</option>
                <option value="Flexible and Adaptable">Flexible and Adaptable</option>
                <option value="Organization and Time Management">Organization and Time Management</option>
                <option value="Analytical and Critical Thinking">Analytical and Critical Thinking</option>
                </select>
        </div>

        <div id="sks">
            <select id="de1" name="keyskills1" class="slideanim">
                <option value="Select">Select</option>
                <option value="Team Work and Collaboration">Team Work and Collaboration</option>
                <option value="Multitasking Abilities">Multitasking Abilities</option>
                <option value="Decision Making">Decision Making</option>
                <option value="Flexible and Adaptable">Flexible and Adaptable</option>
                <option value="Organization and Time Management">Organization and Time Management</option>
                <option value="Analytical and Critical Thinking">Analytical and Critical Thinking</option>
                </select>
        </div>

        <div id="sks">
            <select id="de1" name="keyskills2" class="slideanim">
                <option value="Select">Select</option>
                <option value="Team Work and Collaboration">Team Work and Collaboration</option>
                <option value="Multitasking Abilities">Multitasking Abilities</option>
                <option value="Decision Making">Decision Making</option>
                <option value="Flexible and Adaptable">Flexible and Adaptable</option>
                <option value="Organization and Time Management">Organization and Time Management</option>
                <option value="Analytical and Critical Thinking">Analytical and Critical Thinking</option>
                </select>
        </div>

        <div id="sks">
            <select id="de1" name="keyskills3" class="slideanim">
                <option value="Select">Select</option>
                <option value="Team Work and Collaboration">Team Work and Collaboration</option>
                <option value="Multitasking Abilities">Multitasking Abilities</option>
                <option value="Decision Making">Decision Making</option>
                <option value="Flexible and Adaptable">Flexible and Adaptable</option>
                <option value="Organization and Time Management">Organization and Time Management</option>
                <option value="Analytical and Critical Thinking">Analytical and Critical Thinking</option>
                </select>
        </div>

        <div id="sks">
            <select id="de1" name="keyskills4" class="slideanim">
                <option value="Select">Select</option>
                <option value="Team Work and Collaboration">Team Work and Collaboration</option>
                <option value="Multitasking Abilities">Multitasking Abilities</option>
                <option value="Decision Making">Decision Making</option>
                <option value="Flexible and Adaptable">Flexible and Adaptable</option>
                <option value="Organization and Time Management">Organization and Time Management</option>
                <option value="Analytical and Critical Thinking">Analytical and Critical Thinking</option>
                </select>
        </div>
  </div>
        <div id="sks" class="slideanim">
            <input type="text" id="ads" placeholder="Additional skills......."name="addskills" class="slideanim">
        </div><br><br><br>
         
        <div id="lk" class="slideanim">
        <h1>Almost Done!</h1>
        <p>Please select your programme, modules and grades for each module from year 1 - 4</p><br><br>
        <label for="Programme">Programme:</label>
        <select id="program" name="Programme">
        <option value="Select">Select</option>
        <option value="Computer Science">Computer Science</option>
        <option value="Information Technology">Information Technology</option>
        </select>
        </div>
          
        <div id="lk" class="slideanim">
        <p>Year 1</p>
        </div>
        <div id="mod1" class="slideanim"><label for="Module 1">Module 1:</label>
        <select id="module" name="module1">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
          
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="grades1">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select>
        </div>
          
        <div id="mod2" class="slideanim"><label for="Module 2">Module 2:</label>
        <select id="module" name="module2">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
            
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="grades2">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select>
        </div>
        
        <div id="mod3"class="slideanim"><label for="Module 3">Module 3:</label>
        <select id="module" name="module3">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
          
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="grades3">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
		</select>
			
		<div class="slideanim"><label for="Module 3">Module 4:</label>
        <select id="module" name="module3a">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
          
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="grades3a">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select><br><br><br>
        </div>
		</div>
        
        <div id="lk" class="slideanim">
        <p>Year 2</p>
        </div>
        <div id="mod1" class="slideanim"><label for="Module 1">Module 1:</label>
        <select id="module" name="modulea">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
          
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="gradesa">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select>
        </div>
          
        <div id="mod2" class="slideanim"><label for="Module 2">Module 2:</label>
        <select id="module" name="moduleb">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
            
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="gradesb">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select>
        </div>
        
        <div id="mod3"class="slideanim"><label for="Module 3">Module 3:</label>
        <select id="module" name="modulec">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
          
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="gradesc">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select>
			
		<div class="slideanim"><label for="Module 3">Module 4:</label>
        <select id="module" name="module3b">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
          
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="grades3b">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select><br><br><br>
        </div>
        </div>
		
        <div id="lk" class="slideanim">
        <p>Year 3</p>
        </div>
        <div id="mod1" class="slideanim"><label for="Module 1">Module 1:</label>
        <select id="module" name="moduled">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
          
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="gradesd">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select>
        </div>
          
        <div id="mod2" class="slideanim"><label for="Module 2">Module 2:</label>
        <select id="module" name="modulee">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
            
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="gradese">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select>
        </div>
        
        <div id="mod3"class="slideanim"><label for="Module 3">Module 3:</label>
        <select id="module" name="modulef">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
          
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="gradesf">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select><br><br><br>
        </div>
        
        <div id="lk" class="slideanim">
        <p>Year 4</p>
        </div>
        <div id="mod1" class="slideanim"><label for="Module 1">Module 1:</label>
        <select id="module" name="moduleg">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
          
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="gradesg">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select>
        </div>
          
        <div id="mod2" class="slideanim"><label for="Module 2">Module 2:</label>
        <select id="module" name="moduleh">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
            
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="gradesh">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select>
        </div>
        
        <div id="mod3"class="slideanim"><label for="Module 3">Module 3:</label>
        <select id="module" name="modulei">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
          
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="gradesi">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select>
			
	<div class="slideanim"><label for="Module 3">Module 4:</label>
        <select id="module" name="module3c">
        <option value="Select">Select</option>
        <option value="BM">Business Management and intelligence</option>
        <option value="UX">User Experience</option>
        <option value="WB">Web Based Mobile App Development</option>
        <option value="DM">Digital Media Technology</option>
        <option value="OO">Object Oriented Programming</option>
        <option value="WA">Web Applications and Databases</option>
        <option value="SE">Software Engineering Management and Development</option>
        <option value="OS">Operating Systems and Computer Networks</option>
        <option value="EN">Enterprise Networking and Automation</option>
        <option value="TV">Testing And Verification</option>
        <option value="TC">Teaching Computer Science in the Secondary School</option>
        <option value="AW">Advanced Web Development with Big Data</option>
        <option value="NI">Novel Interaction Technologies</option>
        <option value="CG">Computer Graphics</option>
        <option value="DS">Designing Secure Systems</option>
        <option value="AI">Artificial Intelligence</option>
        <option value="SR">Systems Engineering for Robotics</option>
        <option value="CA">Computer Systems Architecture and Operating Systems</option>
        <option value="IP">Introduction to Programming</option>
        <option value="EM">Emerging Technologies in Practice</option>
        <option value="IO">Information in Organisations</option>
        <option value="DB">Data Management and Business Intelligence</option>
        <option value="PM">Project Management and Professional Practice</option>
        <option value="IS">Information Systems Design and Analysis</option>
        <option value="BI">Business Intelligence</option>
        <option value="EA">Enterprise Networking and Automation</option>
        <option value="SM">Strategic Management and Information Systems</option>
        <option value="PP">Programming</option>
        </select>
          
        <label for="Grades" id="lab">Grades:</label>
        <select id="grade" name="grades3c">
        <option value="Select">Select</option>
        <option value="1">1(1 - 4)</option>
        <option value="2.1">2.1(5 - 8)</option>
        <option value="2.2">2.2(9 - 12) </option>
        <option value="3">3(13 - 16)</option>
        </select><br><br><br>
        </div>
		</div>
      <input type="submit" name="submit" value="Submit" id="sub" class="slideanim">
    </form>
   
    
            <div id="rit">
            <h1>rot</h1>
        </div>

</body>
</html>
