<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
        
        <!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>
<body>
 
<style>   
* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
	-outline: 0;
	font-family:Roboto, sans-serif, arial;
}
html, body 
	{
	font-size: 14px;
	font-weight: 400;
	background: #000000;
	color: #fff;
}
.container {
	width: 1100px;
	margin: 0px auto;
	display: table;
}
.width-33 {
	width: 33%;
	float: left;
}
.width-66 {
	width: 66%;
	float: left;
}  

.main-panel {
	width: 100%;
	float: left;
	padding-top: 20px;
	padding-bottom: 50px;
	height: 100vh;
}

.logo {
	font-size: 40px;
	font-weight: 600;
}

.span-col {
	color: #ffbf35;
}

nav {
	float: right;
}

nav a {
	text-decoration: none;
	font-size: 16px;
	font-weight: 500;
	margin-left: 20px;
	color: white;
}

.width-50 {
	float: right;
	width:50%;
}

.width-51 {
	float: right;
	width: 45%;
        height: 100%;
        right: 5%;
        position: absolute;
}

.width-53 {
	float: right;
	width: 35%;
        height: 100%;
        position: absolute;
}

.width-52 {

	width: 150%;
        float: right;
        position: absolute;
        transform: translate(-50%,-50%);
        top: 40%;
        left: 50%;
}


.banner-section {
	width: 100%;
	float: left;
	margin-top: 25vh;
        top:12%;
        position: absolute;
}
.banner-section h1 {
	font-size: 48px;
	margin-top: 10px;
	font-weight: bolder;
}
.banner-section h2 {
	font-size: 20px;
	line-height: 25px;
	margin-top: 10px;
	font-weight: 400;
}
.banner-section a {
	float: left;
	text-decoration: none;
	font-size: 18px;
	margin-top: 20px;
	border-radius: 50%;
	text-align: center;
	border: 2px solid #ffbf35;
	color: #ffbf35;
	margin-left: 10px;
	height: 50px;
	width: 50px;
	line-height: 50px;
}
/*****Main BANNER IMAGE*****/
.main-panel img {
	margin-top: 10%;
	width: 100%;
	margin-left: 10%;
}



.main-section {
	width: 100%;
	float: left;
	padding: 110px 0px 110px 0px;
}
.width-100 {
	width: 50%;
	float: right;
}
.mt-20 {
	margin-top: 20px;
}
.heading-text {
	width: 100%;
	float: left;
	font-size: 35px;
	text-align: center;
	margin-bottom: 50px;
	color: #ffbf35;
}
.about-img {
	width: 100%;
	padding: 0px 50px;
	margin-top: 20px;
}
.about-us {
	width: 100%;
	float: left;
	padding: 20px;
}
.about-us p {
	font-size: 16px;
	margin-top: 15px;
	line-height: 27px;
}
table {
	width: 100%;
}
table th,
table td {
	font-size: 16px;
	text-align: left;
	padding: 5px 0px;
}


/*****EXPERIENCE SECTION*****/
.bg-lightgrey {
	background-color: #1a1a1a;
}
.edu-exp {
	padding: 10px 0px;
	width: 48%;
	margin: 1%;
	float: left;
	padding-left: 10px;
}
.experience-list {
	width: 100%;
	float: left;
	padding: 30px 10px;
	background: #262626;
	margin-bottom: 20px;
}
.experience-content {
	width: 100%;
	float: left;
	margin-left: 10px;
}
.experience-content h2 {

	font-weight: 600;
	margin-bottom: 5px;
	font-size: 20px;
}
.experience-content h3 {
	color: #ffbf35;
	font-weight: 500;
	margin-bottom: 2px;
	font-size: 17px;
}
.experience-content p {
	font-size: 15px;
}


/*****SKILL SECTION*****/
.skill {
	margin-top: 30px;
	font-size: 17px;
}

.skill span {
	float: right;
}

.skill div {
	width: 100%;
	float: left;
	margin-top: 5px;
	background: #e7e7e7;
	border-radius: 10px;
}

.skill div span {
	background: #ffbf35;
	height: 5px;
	float: left;
}

div[role="progressbar"] {
	color: #ffbf35;
	margin-left: 100px;
	margin-bottom: 20px;
	width: 100px;
	;
	height: 100px;
	;
	border-radius: 50%;

	place-items: center;
	display: grid;
}

.contact form {
	width: 66%;
	margin: 0px auto;
}
.contact input,
textarea {
	width: 100%;
	float: left;
	margin-bottom: 20px;
	height: 40px;
	padding: 10px;
	border: 1px solid #a1a1a1;
}
.contact textarea {
	height: 80px;
}
.contact button {
	width: 100%;
	float: left;
	margin-bottom: 20px;
	height: 40px;
	padding: 10px;
	background: #ffbf35;
	color: #fff;
	border: none;
	font-size: 16px;
}
.contact h3 {
	font-size: 26px;
	text-align: center;
	margin-top: 60px;
	color: #ffbf35;
}
.contact h4 {
	font-size: 22px;
	text-align: center;
	margin-top: 10px;
}
.contact p {
	text-align: center;
	font-size: 16px;
	margin-top: 5px;
}

.width-55 {
	float: left;
	width: 25%;
        position: absolute;
        
}

.footer-sect {
	color: #b3b3b3;
}
</style>
    
<div class="main-panel">
  <div class="container">
    <div class="width-33 logo">PORT <span class="span-col">FOLIO</span>
    </div>
    <div class="width-66">
      <nav>
        <a href="#home">
          <span class="span-col">HOME</span>
        </a>
        <a href="#about me">ABOUT ME</a>
        <a href="#education">EDUCATION</a>
        <a href="#skills">SKILLS</a>
         <a href="#contact">CONTACT</a>
      </nav>
    </div>
  </div>
     </div>   
        
<div class="container ">
  <div class="width-50">
    <div class="banner-section">
        
      <div class="width-52">
          <img src="images/e4.jpg">
  </div>
      <h1>MOODI <span class="span-col">NANDHINI</span>
      </h1>
      <h2>- I'm a passionate computer science engineer from India.</h2>
      <a href="#">
        <i class="fa fa-telegram"></i>
      </a>
      <a href="#">
        <i class="fa fa-linkedin"></i>
      </a>
      <a href="#">
        <i class="fa fa-whatsapp"></i>
      </a>
      <a href="#">
        <i class="fa fa-github"></i>
      </a>
    </div>
  </div>
  
</div>



<!------ABOUT US SECTION------>
<div class="main-section bg-lightgrey">
  <div class="container">
    <div class="width-50">
        <img src="images/e1.jpg" class="about-img">
    </div>
    <div class="width-50">
      <div class="about-us">
        <h2 class="heading-text">About Me</h2>
        <p>Hi, I am MOODI NANDHINI, from India.I am computer science student.I fond of reading articles and knowing new things.
        I love drawing and more watching cartoons.</p>
        <div class="width-50 mt-20">
          <table cellspacing="8" cellpadding="8">
            <tr>
              <th>Name:</th>
              <td>Moodi Nandhini</td>
            </tr>
            <tr>
              <th>Email:</th>
              <td>nandhini12@gmail.com</td>
            </tr>
            <tr>
              <th>Birthday:</th>
              <td> 10 july, 2003</td>
            </tr>
          </table>
        </div>
        <div class="width-50 mt-20">
          <table cellspacing="8" cellpadding="8">
            <tr>
              <th>Phone:</th>
              <td>(+91) 9123456789</td>
            </tr>
            <tr>
              <th>Country:</th>
              <td>India</td>
            </tr>
           
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<!------EXPERIENCE SECTION------>



<div class="main-section bg-lightgrey">
  <div class="container">
    <div class="edu-exp"> 
        
         <div class="width-51">
    <img src="images/e3.jpg" class="about-img">
    </div> 
        
      <h2 class="heading-text">EDUCATION</h2>
     
      <div class="experience-list">
        <div class="experience-content">
          <h2>N.B.K.R INSTITUTE OF SCIENCE & TECHNOLOGY </h2>
          <h3>2021-2025</h3>
          <p>Bachelor Computer Engineering</p>
        </div>
      </div>
      <div class="experience-list">
        <div class="experience-content">
          <h2>NARAYANA JUNIOR COLLEGE</h2>
          <h3>2019-2021</h3>
          <p>Board Of Intermediate Education</p>
        </div>
      </div>
      <div class="experience-list">
        <div class="experience-content">
          <h2>KENDRIYA VIDYALAYA</h2>
          <h3>2005-2019</h3>
          <p>Central Board Of Secondary Education</p>
        </div>
      </div>
      </div>
    </div>

    
<!------SKILL SECTION------>
<div class="main-section">
    
    
  <div class="container">
      
       
    <h2 class="heading-text">My Skills</h2>
    
   
    <!--<div class="width-53">
        <img src="images/skill.jpg" class="about-img" ></div>-->
         
      <div class="skill">
          
          
          
        <b>HTML</b>
        <span>75%</span>
        <div>
          <span style="width:75%"></span>
        </div>
      </div>
      <div class="skill">
        <b>CSS</b>
        <span>70%</span>
        <div>
          <span style="width:70%"></span>
        </div>
      </div>
      <div class="skill">
        <b>SQL</b>
        <span>80%</span>
        <div>
          <span style="width:80%"></span>
        </div>
      </div>
      </div>
    </div>
 

<div class="container">
    <h2 class="heading-text">CONTACT</h2>
     <div class="width-55">
    <img src="images/contact.jpg" class="about-img">
    </div> 
    <div class="width-100">
      <form>
          <div class="contact input,textarea">
        <input type="text" placeholder="Full Name">
        <input type="text" placeholder="Email Id">
        <input type="text" placeholder="Mobile No">
        <input type="text" placeholder="Enter Address">
        <button type="submit" class="contact button">Submit </button>
      </form>
</div>
    </div>
</div>


    <div class="footer-sect mt-20 width-50">CopyRight © 2023 nandhini. All Rights Reserved</div>

    
</html>
