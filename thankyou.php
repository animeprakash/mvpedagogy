<?php
    ini_set('display_errors', 0); 
    include("database.php");
    if(isset($_POST["submit"])) {

        $studentname=$_POST['studentname'];
        $contactno=$_POST["contactno"];
        $emailid=$_POST["emailid"];
        $state=$_POST["state"];

        $query="create table if not exists studentdetails (studentid int not null auto_increment primary key,studentname varchar(100),contactno long,emailid varchar(100),state varchar(100),studenton datetime not null default now())";
        mysqli_query($con,$query);

        $selquery="insert into studentdetails(studentname,contactno,emailid,state)values('".$studentname."','".$contactno."','".$emailid."','".$state."') ";
        $res=mysqli_query($con,$selquery);
        
        if($res==TRUE)
        {
            
            $body="Student Name: ".$studentname."\nContact: ".$contactno."\nEmail: ".$emailid."\nState: ".$state;
            $sender="From:info.mvpedagogy@gmail.com";
            mail($emailid,"Form submission","Your form successfully submitted",$sender);
            
            mail("info.mvpedagogy@gmail.com","Form submission",$body,$emailid);
            header("Location:thankyou.php");
        }
        else{
            echo "There is an Error";
        }
    }

?>
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
</head>
    
    <body>

    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container-fluid p-0 m-0">
            <div class="row p-0">
                <div class="col-12 ">
                    <nav class="main-nav d-flex " id="navbarme">
                        <a href="#" class="logo">
                            <img src="assets\images\mvlogo-2.jpg" alt="mvpedagogy"/>
                        </a>
                        <ul class="nav">
                            <li><a href="#welcome" class="active text-dark">Home</a></li>
                            <li><a href="#abouts" class="text-dark">About</a></li>
                            <li><a href="#services" class="text-dark">Services</a></li>
                            <li><a href="#mentors" class="text-dark">mentors</a></li>
                            <li><a href="#contactus" class="text-dark">Contact Us</a></li>
                        </ul>
                        <a href="#" class="logoi2">
                            <img src="assets\images\i2global_logo-2.jpg" alt="i2global"/>
                        </a>                      
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <section class="thankyou-area">       
            <div class="container-fluid">
                <div class="row " >
                    <div class="col-10 col-md-6 col-lg-4 offset-1 offset-md-3 offset-lg-4">  
                        <img src="assets\images\thankyou.jpg" class="thanks border-primary mt-180">
                    </div>
                </div>
            </div>
    </section>



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
    <a href="https://wa.me/+918549803352?text=" class="whatsappbutton text-decoration-none mb-3"><i class='bx bxl-whatsapp text-white fs-3 p-1' ></i></a>

    <a href="tel:8549803352" class=" callbutton text-decoration-none"><i class='bx bxs-phone-call bg-primary text-white fs-3 border border-1 border-white p-1' ></i></a>
    

 
    <script src="assets/js/popper.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

  </body>
</html>