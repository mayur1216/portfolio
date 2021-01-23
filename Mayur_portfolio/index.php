<?php
include "form.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mayur Portfolio</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@1,300&family=Source+Code+Pro:wght@700&display=swap" rel="stylesheet">
      
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap CSS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css"/>
      
    </head>
    <body>
    <div class="wrapper">
    <div class="menu-bar">
      <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand text-danger web-title" href="#">Mayur Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="images/resume/MAYUR_SHARMA_resume.pdf" target="__blank">Resume</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#my_skills">Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#my_work">My Work</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#social_media">Social Media</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact_us">Contact</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav> 
      </div>
   <!--banner start-->
   <section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-md-6 align-self-center text-center">
                 <p class="display-3 text-danger">I <br> am <br> <span class="text-info myfont" style="font-size: 30px;">WEB DEVELOPER</span></p>
            </div>
            <div class="col-md-6">
                 <img src="images/MAYUR_pic_new.png" style="border-radius: 70%;" class="mx-auto d-block img-fluid" width="350">
            </div>
        </div>
    </div>
</section>
<!--MY SKILLS START-->
<section class="team">
    <div class="container">
        <h1 class="my-skills text-center text-light display-4" id="my_skills">MY SKILLS</h1>
        <div class="row">
            <div class="col-md-4">
                  <div class="team-box">
                         <img src="images/PHP_Logo.png" class="team-photo">
                         <p class="team-detail">PHP is a general-purpose scripting language especially suited to web development. It was originally created by Danish-Canadian programmer Rasmus Lerdorf in 1994.</p>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="team-box">
                    <img src="images/laravel_new.jpg" class="team-photo">
                    <p class="team-detail">Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications.</p>
             </div>
                
            </div>
            <div class="col-md-4">
                <div class="team-box">
                    <img src="images/MySQL.png" class="team-photo">
                    <p class="team-detail">MySQL is an open-source relational database management system.</p>
                    
             </div>
                
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                  <div class="team-box">
                         <img src="images/bootstrap.png" class="team-photo">
                         <p class="team-detail">Bootstrap is a free and open-source CSS framework directed at responsive, mobile-first front-end web development.</p>
                  </div>
            </div>
            <div class="col-md-4">
                <div class="team-box">
                    <img src="images/html_new.png" class="team-photo">
                    <p class="team-detail">Hypertext Markup Language is the standard markup language for documents designed to be displayed in a web browser.</p>
             </div>
                
            </div>
            <div class="col-md-4">
                <div class="team-box">
                    <img src="images/css3.png" class="team-photo">
                    <p class="team-detail">Cascading Style Sheets is a style sheet language used for describing the presentation of a document written in a markup language such as HTML.</p>
             </div> 
            </div>

    </div>
</section>
<!--Social Media-->
<section class="social-media" id="social_media">
     <div class="container">
       <h1 class="text-center myfont text-light display-4 social">Social Media</h1>
       <div class="row social-section">
         <div class="col-md-4"><a href="https://www.facebook.com/mayur.sharma.904750/" target="__blank"><img src="images/social_media_icons/fb_new1.png" class="mx-auto d-block img-fluid social-icons"></a></div>
         <div class="col-md-4"><a href="https://www.linkedin.com/in/mayur-sharma-b91a35a1/" target="__blank"><img src="images/social_media_icons/linkedin_1.png" class="mx-auto d-block img-fluid social-icons"></a></div>
         <div class="col-md-4"><a href="https://www.instagram.com/mayursharma6069/" target="__blank"><img src="images/social_media_icons/instagram.png" class="mx-auto d-block img-fluid social-icons"></a></div>
       </div>
     </div>
</section>

<!--My work start-->
<section class="my-work">
  <div class="container">
    <h1 class="text-center display-4 text-light myfont work" id="my_work">My Work</h1>
    
       <div class="row">
            <div class="col-md-6">
              <a href="#" target="__blank">
                 <div class="work-box" style="background-image: url('images/project_one.jpg')">
                 </a>

                 </div>
            </div>
            <div class="col-md-6">
              <a href="#" target="__blank">
                <div class="work-box" style="background-image: url('images/news_project.png')">
                </a>
            </div>
       </div>
  </div>
</section>

<!--Footer starts-->
<section class="footer bg-dark" id="contact">
  <div class="container">
    <div class="row">
        <div class="col-md-7">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30703867.0716799!2d64.40183608457191!3d20.049158955693073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1608136223462!5m2!1sen!2sin" width="100%" height="300" frameborder="0" style="border:0; border-radius: 10px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
        <div class="col-md-4 offset-1">
           <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
             <h1 class="myfont text-light contact" id="contact_us">Contact Us</h1>
              <input type="text" name="username" class="footer-input" placeholder="Username..">
              <input type="email" name="email" class="footer-input" placeholder="Ex. abc@xyz.com">
              <input type="text" name="text" class="footer-input" placeholder="Message..">
              <input type="submit" name="submit" value="Submit" class="footer-btn">
           </form>
        </div>
    </div>
  </div>
</section>

<!--Copyright section-->
<section class="copyright">
  <div class="container">
    <span class="myfont">&copy; Mayur Portfolio</span>
    <span class="float-right myfont"><?php echo date('D, d-M-Y') ?></span>
  </div>

</section>
</div>
   
</body>
</html>