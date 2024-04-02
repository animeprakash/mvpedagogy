<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="MV Peddgogy">
    <meta name="author" content="V Prakash">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>MV Pedagogy</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<style>
    :root {
  --primary-light: #8abdff;
  --primary: #6d5dfc;
  --primary-dark: #5b0eeb;
  --white: #ffffff;
  --greyLight-1: #e4ebf5;
  --greyLight-2: #c8d0e7;
  --greyLight-3: #bec8e4;
  --greyLight-4:#f6f6f6;
  --greyDark: #9baacf;
}

label{
  font-size:90%;
  padding-left:5%;
  padding-right:5%;
  margin-top:6%;
  background: var(--primary);
  box-shadow: inset 0.2rem 0.2rem 1rem var(--primary-light), inset -0.2rem -0.2rem 1rem var(--primary-dark), 0.3rem 0.3rem 0.6rem var(--greyLight-2), -0.2rem -0.2rem 0.5rem var(--greyLight-2);
  color: var(--greyLight-1);
  border-radius:25px;
}
input{
    border:1px solid lightgray;
  border-radius: 1rem;
  background: none;
  color: var(--greyDark);
}
input::placeholder {
  color: var(--greyLight-3);
}
input:focus {
  outline: none;
  box-shadow: 0.3rem 0.3rem 0.6rem var(--greyLight-2), -0.2rem -0.2rem 0.5rem var(--white);
}
input:focus {
  color: var(--primary);
}

</style>
    <script>     
        $(document).ready(function() {
          $("#myForm").submit(function(event) {
            //    
              if (validateForm()) {
                   $("#myForm").submit();
              } else {
                event.preventDefault();
              }
          });
      
          function validateForm() {
              var isValid = true;
              var studentname = $("#studentname").val();
              var contactno = $("#contactno").val();
              var emailid= $("#emailid").val();
              var state= $("#state").val();
              if (studentname === "") {
                  $("#snameError").text("Studentname is required");  
                  $("#studentname").css({"border": "1px solid red"});
                  $("#snameError").css({"background-color": "red","box-shadow":"9.91px 9.91px 15px white, -9.91px -9.91px 15px white"});
                  isValid = false;
              } else {
                $("#snameError").text("Studentname"); 
                  $("#snameError").css({"background": "linear-gradient(0deg, rgb(55, 204, 50) 0%, rgb(89, 234, 76) 100%)","box-shadow":"box-shadow: 9.91px 9.91px 15px white, -9.91px -9.91px 15px white;"});
                  $("#studentname").css({"border": "1px solid green"});
              }
              if ( contactno==="") {
                  $("#contactnoError").text("Contact is required");  
                  $("#contactno").css({"border": "1px solid red"});
                  $("#contactnoError").css({"background-color": "red","box-shadow":"9.91px 9.91px 15px white, -9.91px -9.91px 15px white"});
                  isValid = false;
              } else {
                $("#contactnoError").text("Contact");
                  $("#contactnoError").css({"background": "linear-gradient(0deg, rgb(55, 204, 50) 0%, rgb(89, 234, 76) 100%)","box-shadow":"box-shadow: 9.91px 9.91px 15px #1A9F56, -9.91px -9.91px 15px #20BF66;"});
                  $("#contactno").css({"border": "1px solid green"});
              }
              if ( emailid==="") {
                  $("#emailError").text("Email is required");  
                  $("#emailid").css({"border": "1px solid red"});
                  $("#emailError").css({"background-color": "red","box-shadow":"9.91px 9.91px 15px white, -9.91px -9.91px 15px white"});
                  isValid = false;
              } else {
                $("#emailError").text("Email");
                  $("#emailError").css({"background": "linear-gradient(0deg, rgb(55, 204, 50) 0%, rgb(89, 234, 76) 100%)","box-shadow":"box-shadow: 9.91px 9.91px 15px #1A9F56, -9.91px -9.91px 15px #20BF66;"});
                  $("#emailid").css({"border": "1px solid green"});
              }
              if ( state==="") {
                  $("#stateError").text("State is required");  
                  $("#state").css({"border": "1px solid red"});
                  $("#stateError").css({"background-color": "red","box-shadow":"9.91px 9.91px 15px white, -9.91px -9.91px 15px white"});
                  isValid = false;
              } else {
                $("#stateError").text("State");  
                  $("#stateError").css({"background": "linear-gradient(0deg, rgb(55, 204, 50) 0%, rgb(89, 234, 76) 100%)","box-shadow":"box-shadow: 9.91px 9.91px 15px #1A9F56, -9.91px -9.91px 15px #20BF66;"});
                  $("#state").css({"border": "1px solid green"});
              }
              return isValid;
          }
      }); 
      </script>
</head>
    
    <body>

    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container-fluid p-0 m-0">
            <div class="row p-0">
                <div class="col-12 ">
                    <nav class="main-nav d-flex " id="navbarme">
                        <a href="#" class="logo">
                            <img src="assets\images\logo-mvpedalogy.jpg" height="50px"  width="auto" alt="mvpedagogy"/>
                        </a>
                        <ul class="nav">
                            <li><a href="#welcome" class="active text-dark">Home</a></li>
                            <li><a href="#abouts" class="text-dark">About</a></li>
                            <li><a href="#services" class="text-dark">Services</a></li>
                            <li><a href="#mentors" class="text-dark">mentors</a></li>
                            <li><a href="#contactus" class="text-dark">Contact Us</a></li>
                        </ul>
                        <a href="#" class="logoi2">
                            <img src="assets\images\logo-i2global.jpg" height="60px" width="auto" alt="i2global"/>
                        </a>                      
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area m-0 " id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container p-4">
                <div class="row p-4">
                    <div class="col-12 col-md-9">
                        <div class="display-6 fw-bold text-white text text-center pt-4">Welcome to MV&nbsp;PEDAGOGY</div>
                        <div class="display-4  text-white pt-4 text text-center">NEET ADMISSION&nbsp;OPEN</div>

                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->
<div class="">
<ul class="burbujas">
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
    </ul>
</div>
<section class="scrollspy-example bg-body-tertiary" data-bs-spy="scroll" data-bs-target="#navbarme" data-bs-root-margin="0px 0px 0%" data-bs-smooth-scroll="true"  tabindex="0">

    <!-- ***** Features Small Start ***** -->
    <section class="section home-feature" id="about" >
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row justify-content-evenly" >

                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 " data-aos="fade-up" data-aos-duration="1000">
                           <center>
                            <div class="standing-icon" style="--accent-color:orange">
                                <div class="counter fs-1" id="count1" ></div>
                                <p>Students Taught</p>
                           </div>
                           </center>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 " data-aos="fade-up" data-aos-duration="1000">
                           <center>
                           <div class="standing-icon" style="--accent-color:orange">
                                <div class="counter fs-1" id="count2" ></div>
                                <p>Years Exp</p>
                           </div>
                           </center>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 " data-aos="fade-up" data-aos-duration="1000">
                           <center>
                            <div class="standing-icon" style="--accent-color:orange">
                                <div class="counter fs-1" id="count3" ></div>
                                <p>Hours Taught</p>
                           </div>
                           </center>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12 " data-aos="fade-up" data-aos-duration="1000">
                           <center>
                            <div class="standing-icon" style="--accent-color:orange">
                                <div class="counter fs-1" id="count4" ></div>
                                <p>Success Rate</p>
                           </div>
                           </center>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Small End ***** -->

<section class="gradientcolor">
        <div class="container pt-4">
                <div class="container rounded rounded-3 p-4 pt-0" id="forms">
                    <form action="thankyou.php" method="post" id="myForm">
                        <div class="row  py-3 justify-content-evenly">

                            <div class="col-12 col-md-12 col-lg-2 p-0">                
                                <label for="studentname" id="snameError" class="text-nowrap">Student Name</label>
                                <input type="text" class="form-control" name="studentname" id="studentname" pattern="^[a-zA-Z][.\sa-zA-Z.]{1,50}$">               
                            </div>
                            <div class="col-12 col-md-12 col-lg-2 p-0">           
                                <label for="contactno" id="contactnoError" class="text-nowrap">Contact&nbsp;Number</label>
                                <input type="text" class="form-control " name="contactno" id="contactno" pattern="^[0-9]{10}$">          
                            </div>
                            <div class="col-12 col-md-12 col-lg-2 p-0">           
                                <label for="emailid" id="emailError" class="text-nowrap">Email</label>
                                <input type="email" class="form-control" name="emailid" id="emailid" >         
                            </div>
                            <div class="col-12 col-md-12 col-lg-2  p-0">
                                <label for="state" id="stateError" class="text-nowrap">State</label>
                                <input type="text" class="form-control" name="state" id="state" >   
                            </div>
                            <div class="col-12 col-md-12 col-lg-2 mt-4 pt-3">
                                <input type="submit" class="bg-success rounded-pill w-100 p-1 text-white" name="submit" value="SUBMIT" id="submit">
                            </div>

                        </div>
                    </form>
                </div>
        </div>
<!-- neet2 start -->
<section>

            <div class="container services jee mt-4">
            <div class="row pb-4 mb-3">
                    <div class="text-center col-12">
                        <center>
                        <div class="fw-bold fs-3 mt-3 w-25 bg-blue" data-aos="fade-up" data-aos-duration="1000">JEE</div>
                        </center>
                     </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                        <center>
                        <div class="icon-box">
                            <div class="icon"> <img src="assets/images/courses/crc-1.webp" alt="online-class" class="feature-img animate-img"></div>
                            <h4>Qualified Admission</h4>
                            <p>
                                <ul>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2">Indian Institute of Information Technology (IIITs)</div>
                                    </li>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2"> National Institute of Technology (NITs)</div>
                                    </li>
                                </ul>
                            </p>
                        </div>
                        </center>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                        <center>
                        <div class="icon-box">
                            <div class="icon"> <img src="assets/images/courses/crc-2.webp" alt="online-class" class="feature-img animate-img"></div>
                            <h4>Exam Pattern</h4>
                            <p>
                                <ul>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2">90 Multiple Choice Questions</div>
                                    </li>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2">3 Hours Time Duration</div>
                                    </li>
                                </ul>
                            </p>
                        </div>
                        </center>
                    </div>
                    
                    <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                        <center>
                        <div class="icon-box">
                            <div class="icon"> <img src="assets/images/courses/crc-4.webp" alt="online-class" class="feature-img animate-img"></div>
                            <h4>Question Pattern</h4>
                            <p>
                                <ul>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2">Each section has 30 questions</div>
                                    </li>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2">4 marks for each correct answer</div>
                                    </li>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2"> 1 mark is deducted for each wrong answer</div>
                                    </li>
                                </ul>
                            </p>
                        </div>
                        </center>
                    </div>
                </div>
            </div>          
</section>
<!-- neet2 end -->

<!-- neet start -->
<section>

            <div class="container services mt-4">
                <div class="row pb-4 mb-3">
                    <div class="text-center col-12">
                        <center>
                        <div class="fw-bold fs-3 mt-3 w-25 bg-blue" data-aos="fade-up" data-aos-duration="1000">NEET</div>
                        </center>
                     </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                        <center>
                        <div class="icon-box">
                            <div class="icon"><i class='bx bx-plus-medical'></i></div>
                            <h4>Qualified Admission</h4>
                            <p>
                                <ul>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2">Bachelor of Medicine and Bachelor of Surgery (MBBS)</div>
                                    </li>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2"> Bachelor of Dental Surgery (BDS)</div>
                                    </li>
                                </ul>
                            </p>
                        </div>
                        </center>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                        <center>
                        <div class="icon-box">
                            <div class="icon"><i class='bx bxs-book-open'></i></div>
                            <h4>Exam Pattern</h4>
                            <p>
                                <ul>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2">3 Hours Time Duration</div>
                                    </li>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2">180 Multiple Choice Questions</div>
                                    </li>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2">45 Questions from each subject</div>
                                    </li>
                                </ul>
                            </p>
                        </div>
                        </center>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4" data-aos="fade-up" data-aos-duration="1000">
                        <center>
                        <div class="icon-box">
                            <div class="icon"><i class='bx bxs-edit-alt'></i></div>
                            <h4>Question Pattern</h4>
                            <p>
                                <ul>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2">Each section has 30 questions</div>
                                    </li>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2">4 marks for each correct answer</div>
                                    </li>
                                    <li class="d-flex"><div class="bx bxs-star"></div>
                                        <div class="text-left pl-2"> 1 mark is deducted for each wrong answer</div>
                                    </li>
                                </ul>
                            </p>
                        </div>
                        </center>
                    </div>
                </div>
            </div>          
</section>
<!-- neet end -->


    <!-- ***** Home Parallax Start ***** -->
    <section class="mini" id="work-process">
        <div class="mini-content">
            <div class="container teachertraining">
                <div class="row pb-4 mb-2">
                    <div class=" col-lg-12">
                        <center>
                            <div class="fw-bold bg-blue fs-3 w-50 " data-aos="fade-up" data-aos-duration="1000">TEACHER TRAINING</div>
                        </center>
                    </div>
                </div>

                <!-- ***** Mini Box Start ***** -->
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6" data-aos="fade-up" data-aos-duration="1000">
                        <div  class="mini-box">
                            <i><img src="assets\images\icons\diploma.png" alt="img-1"></i>
                            <!-- <strong>Get Ideas</strong> -->
                            <span>Diploma in Early Childhood Education</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6" data-aos="fade-up" data-aos-duration="1000">
                        <div class="mini-box">
                            <i><img src="assets\images\icons\education.png" alt="img-2"></i>
                            
                            <span>Advanced Diploma in Early Childhood Education</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6" data-aos="fade-up" data-aos-duration="1000">
                        <div  class="mini-box">
                            <i><img src="assets\images\icons\certificate.png" alt="img-3"></i>
                           
                            <span>Professional development qualification</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6" data-aos="fade-up" data-aos-duration="1000">
                        <div  class="mini-box">
                            <i><img src="assets\images\icons\online-education-1.png" alt="img-4"></i>
                            
                            <span>Tutors provide great academic support </span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6" data-aos="fade-up" data-aos-duration="1000">
                        <div  class="mini-box">
                            <i><img src="assets\images\icons\online-education.png" alt="img-5"></i>
                            
                            <span>Practical Training /<br> Internship</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6" data-aos="fade-up" data-aos-duration="1000">
                        <div  class="mini-box">
                            <i><img src="assets\images\icons\online-learning-1.png" alt="img-5"></i>
                           
                            <span>Tutors are constantly in touch with trainees</span>
                        </div>
                    </div>
                </div>
                <!-- ***** Mini Box End ***** -->
            </div>
        </div>
    </section>
    <!-- ***** Home Parallax End ***** -->



<section class="mentors" id="mentors">
<div class="container ">
            <div class="text-center mx-auto "  style="max-width: 600px;" data-aos="fade-up" data-aos-duration="1000">
                <p class="bg-blue d-inline-block border  rounded text-white fw-semi-bold py-1 px-3 ">Our Expert Team</p>
                <h1 class="display-5 mb-5 text-white fw-bold">OUR MENTORS</h1>
            </div>
        <div class="row">
            <div class="owl-carousel">
            <center>
                <div class="col-12">
                    <div class="card">
                        <div class="face front-face">
                            <img src="assets/images/mentors/biology.webp"
                                alt="mentors-1" class="profile">
                            <div class="pt-3 text-uppercase name fw-bold">
                                Ambati Sravani
                            </div>
                            <div class="designation fs-5 fw-bold text-success">Biology</div>
                        </div>
                        <div class="face back-face">
                            <span class="fas fa-quote-left"></span>
                            <div class="testimonial fw-bold fs-1">
                                MDS
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
                    </div>
                </div>
            </center>
            <center>
                <div class="col-12">
                    <div class="card">
                        <div class="face front-face">
                            <img src="assets\images\mentors\physics.webp"
                                alt="mentors-2" class="profile">
                            <div class="pt-3 text-uppercase name fw-bold">
                                Nishant Soni
                            </div>
                            <div class="designation fs-5 fw-bold text-success">Physics</div>
                        </div>
                        <div class="face back-face">
                            <span class="fas fa-quote-left"></span>
                            <div class="testimonial fw-bold fs-1">
                                B.Tech <br>NIT-Bhopal
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
                    </div>
                </div>
            </center>
            <center>
                <div class="col-12">
                    <div class="card">
                        <div class="face front-face">
                            <img src="assets/images/mentors/chemistry.webp"
                                alt="mentors-3" class="profile">
                            <div class="pt-3 text-uppercase name fw-bold">
                                Manjunath A Y
                            </div>
                            <div class="designation fs-5 fw-bold text-success">Chemistry</div>
                        </div>
                        <div class="face back-face">
                            <span class="fas fa-quote-left"></span>
                            <div class="testimonial fw-bold fs-1">
                                B.Tech <br> NIT-Suratkal
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
                    </div>
                </div>
            </center>
            <center>
                <div class="col-12">
                    <div class="card">
                        <div class="face front-face">
                            <img src="assets/images/mentors/maths-2.webp"
                                alt="mentors-4" class="profile">
                            <div class="pt-3 text-uppercase name fw-bold">
                                Swapnil Sanadya
                            </div>
                            <div class="designation fs-5 fw-bold text-success">Mathematics</div>
                        </div>
                        <div class="face back-face">
                            <span class="fas fa-quote-left"></span>
                            <div class="testimonial fw-bold fs-1">
                                B.Tech <br> NIT-Surat
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
                    </div>
                </div>
            </center>
            <center>
                <div class="col-12">
                    <div class="card">
                        <div class="face front-face">
                            <img src="assets/images/mentors/physics-2.webp"
                                alt="mentors-5" class="profile">
                            <div class="pt-3 text-uppercase name fw-bold">
                               Thangaraj S
                            </div>
                            <div class="designation fs-5 fw-bold text-success">Physics</div>
                        </div>
                        <div class="face back-face">
                            <span class="fas fa-quote-left"></span>
                            <div class="testimonial fw-bold fs-1">
                                B.Tech
                            </div>
                            <span class="fas fa-quote-right"></span>
                        </div>
                    </div>
                </div>
            </center>
            </div>
        </div>
    </div>
    <div class="container my-3" >
         <div class="row">
              <div class="text-center mt-3">
                <div class='owl-prev btn btn-outline-light bx bx-left-arrow-alt'></div> 
                <div class='owl-next btn btn-outline-light bx bx-right-arrow-alt '></div>
              </div>
         </div>
    </div>
</section>

    <div class="container my-3" id="testimonials">
         <div class="row" data-aos="fade-up" data-aos-duration="1000">
              <div class="text-center" >
                <center>
                    <div class="fs-5 bg-blue w-25">Testimonial</div>
                </center> 
                  <div class="fs-2 text-white fw-bold pt-4">What Our Students Say!</div>
              </div>
              <!-- <div class="offset-8 col-4 col-lg-2 offset-lg-0 mt-3">
                <div class='owl-prev btn bg-warning bx bxs-left-arrow-square '></div> 
                <div class='owl-next btn bg-warning bx bxs-right-arrow-square '></div>
              </div> -->
         </div>
    </div>
    <section  class="testimonials" >
        <div class="container" >
            <div class="row  ">
                <div class="owl-carousel">
                    <div class="col-12 col-lg-12">
                        <div class="card" style="--accent-color:#e95ed2">
                            <div class="icon"><img src="assets\images\testimonials\lokshitha.webp" alt="testi-1"></div>
                            <div class="title">Lokshitha </div>
                            <div class="title2">Grade 12,Tamil Nadu</div>
                            <div class="content">
                            I am happy that Lokshitha's experience at I2Global has been
                                            exceptional. The individualized attention and dedicated teachers have
                                            contributed to their remarkable development. Her Academic progress, critical
                                            thinking skills, and self-confidence have shown significant improvement. We
                                            are proud to witness their growth and look forward to their continued
                                            success.
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="card" style="--accent-color:blue">
                            <div class="icon"><img src="assets\images\testimonials\rhea.webp" alt="testi-2"></div>
                            <div class="title">RHEA FERNANDO</div>
                            <div class="title2">GRADE 11,RAJASTHAN</div>
                            <div class="content">
                            I cannot express enough gratitude to the team at I2Global for the
                                            exceptional JEE/NEET and academic support they have provided to my child.I
                                            am impressed by the personalized attention given to each student, which has
                                            greatly boosted their confidence and improved their performance. I highly
                                            recommend I2Global to any parent looking for top-notch coaching and academic
                                            support for their child's JEE/NEET preparation
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="card" style="--accent-color:green">
                            <div class="icon"><img src="assets\images\testimonials\saanvi.webp" alt="testi-3"></div>
                            <div class="title">SAANVI GUGGILAM</div>
                            <div class="title2">GRADE 10,KARNATAKA</div>
                            <div class="content">
                            Our experience with I2Global for JEE/NEET coaching and academic support is fantastic. The dedicated faculty members have gone above and
                                            beyond to ensure that my child receives the best education and guidance. The
                                            comprehensive study resources, regular assessments, and personalized
                                            doubt-solving sessions have tremendously helped my child in their
                                            preparation. Thanks to I2Global, my child is now well-prepared and confident
                                            to face the Board exams &jee/neet
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-12">
                        <div class="card" style="--accent-color:orange">
                            <div class="icon"><img src="assets\images\testimonials\sunrit.webp" alt="testi-4"></div>
                            <div class="title">SUNRIT DEY</div>
                            <div class="title2">GRADE 12,KOLKATA</div>
                            <div class="content">
                            I2Global has been a game-changer for my child's JEE/NEET preparation. The
                                            expert guidance and comprehensive study materials have made a significant
                                            difference in their understanding and performance. The faculty members are
                                            always available to clarify doubts and provide additional support when
                                            needed.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-3" >
         <div class="row">
              <div class="text-center mt-3">
                <div class='owl-prev btn btn-outline-light bx bx-left-arrow-alt'></div> 
                <div class='owl-next btn btn-outline-light bx bx-right-arrow-alt'></div>
              </div>
         </div>
    </div>
    </section>
</section>
    <!-- ***** Footer Start ***** -->

    <footer>
    <div class="footer" id="contactus">
            <div class="container">     
                <div class="row">                       
                    <div class="col-lg-4 col-sm-4 col-xs-12">
                        <div class="single_footer mb-3">
                            <img src="assets\images\logo-mvpedalogy.jpg" height="100%"  width="auto" alt="logo">
                        </div>
                        <div class="single_footer single_footer_address">
                            <ul>
                                <li><i class='bx bxs-phone-call border border-1 fs-4 p-1' ></i><a href="tel:8549803352" class="text-decoration-none ml-2">+91 85498 03352</a></li>
                                <li><i class='bx bxs-envelope border border-1 fs-4 p-1'></i><a href="mailto:info.mvpedagogy@gmail.com" class="text-decoration-none ml-2 text-lowercase">info.mvpedagogy@gmail.com</a></li>
                            </ul>
                        </div>
                    </div><!--- END COL --> 
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single_footer single_footer_address">
                            <h4>Page Link</h4>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div><!--- END COL -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single_footer single_footer_address">
                            <h4>Subscribe today</h4>
                            <div class="signup_form">                           
                                <form action="index.php" class="subscribe">
                                    <input type="text" class="subscribe__input" placeholder="Enter Email Address">
                                    <button type="submit" class="subscribe__btn"><i class='bx bxs-send'></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="social_profile ">
                            <ul>
                                <li><a href="index.php"><i class='bx bxl-facebook-square'></i></a></li>
                                <li><a href="index.php"><i class='bx bxl-twitter' ></i></a></li>
                                <li><a href="index.php"><i class='bx bxl-google-plus' ></i></a></li>
                                <li><a href="index.php"><i class='bx bxl-instagram-alt'></i></a></li>
                            </ul>
                        </div>                          
                    </div><!--- END COL -->         
                </div><!--- END ROW -->                 
            </div><!--- END CONTAINER -->
        </div>
        </footer>
    </section>
    <a href="https://wa.me/+918549803352?text=" class="whatsappbutton text-decoration-none mb-3"><i class='bx bxl-whatsapp text-white fs-3 p-1' ></i></a>

    <a href="tel:8549803352" class=" callbutton text-decoration-none"><i class='bx bxs-phone-call bg-primary text-white fs-3 border border-1 border-white p-1' ></i></a>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script>
  AOS.init();
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
 function counter(id, start, end, duration) {
  let obj = document.getElementById(id),
   current = start,
   range = end - start,
   increment = end > start ? 1 : -1,
   step = Math.abs(Math.floor(duration / range)),
   timer = setInterval(() => {
    current += increment;
    obj.textContent = current;
    if (current == end) {
     clearInterval(timer);
    }
   }, step);
 }
 counter("count1", 1000, 1450, 3000);
 counter("count2", 0, 10, 3000);
 counter("count3", 7000, 7100, 3000);
 counter("count4", 0, 96, 3000);
});

</script>

<script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
      loop:true,
      center: true,
      margin:0,
      nav:false,
      autoplay:true,
      autoplayTimeout:2000,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:3
          }
      }
    });
    $('.owl-prev').click(function() {
      $('.owl-carousel').trigger('prev.owl.carousel');
    });

    // Next button click handler
    $('.owl-next').click(function() {
      $('.owl-carousel').trigger('next.owl.carousel');
    });
  });
</script>
  </body>
</html>