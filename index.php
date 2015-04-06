<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Personal Resume</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="script.js"></script>
</head>   

    
<body>
    <header role="banner">
header
</header>
    <nav class="side_nav">
        <div class="slide_handle glyphicon glyphicon-list"></div>
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
        <h1>HOME PAGE</h1>
            <?php include 'assets/home.php';?>
    </section>
        
    <section class="full-screen aboutpage">
        <a id="about"></a>
        <h1>ABOUT PAGE</h1>
            <?php include 'assets/about.php';?>
    </section>
        
    <section class="full-screen techskillpage">
        <a id="techskills"></a>
        <h1>Tech Skill PAGE</h1>
            <?php include 'assets/tech.php';?>
        
    </section>
        
    <section class="full-screen experiencepage">
        <a id="experience"></a>
        <h1>Experience PAGE</h1>
            <?php include 'assets/experience.php';?>
        
    </section>
        
    <section class="full-screen edupage">
        <a id="education"></a>
        <h1>Education PAGE</h1>
            <?php include 'assets/education.php';?>
        
    </section>
        
    <section class="full-screen contactpage">
        <a id="contact"></a>
        <h1>Contact PAGE</h1>
            <?php include 'assets/contact.php';?>
        
    </section>
        
    
    </main>


    
    <footer>THIS IS FOOTER </footer>
        
</body>
</html>