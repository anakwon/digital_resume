<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Ana Kwon Resume</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css" media="screen and (max-width: 900px)">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</head>   

    
<body>
    <header role="banner">
    <div class="col-md-8 col-sm-6">
    Ana Kwon / Personal Resume
     </div>
<!--    <div class="Resume_btn">-->
    <!-- <a class="dlResume fa fa-download fa-5x" href="doc/AnaKwon_Tech_2015.pdf" download="AnaKwon_Resume.pdf"> Resume</a></i> -->
<!--    </div>-->

        
</header>
    <nav class="side_nav">
    <a href="#home">Home</a>
    <a href="#about">About</a>
    <a href="#techskills">Tech Skills</a>
    <a href="#experience">Experience</a>
    <a href="#education">Education</a>
    <a href="#contact">Contact</a>
    </nav>
        
    <main class="full-screen">
    <section class="full-screen homepage">
        <a id="home"></a>
            <?php include 'assets/home.php';?>
    </section>
        
    <section class="full-screen aboutpage">
        <a id="about"></a>
            <?php include 'assets/about.php';?>
    </section>
        
    <section class="full-screen techskillpage">
        <a id="techskills"></a>
            <?php include 'assets/tech.php';?>
        
    </section>
        
    <section class="full-screen experiencepage">
        <a id="experience"></a>
            <?php include 'assets/experience.php';?>
        
    </section>
        
    <section class="full-screen edupage">
        <a id="education"></a>
            <?php include 'assets/education.php';?>
    </section>
        
    <section class="full-screen contactpage">
        <a id="contact"></a>
            <?php include 'assets/contact.php';?>
        
    </section>
        
    
    </main>
</body>
</html>