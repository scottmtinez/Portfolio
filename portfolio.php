<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="smallScreen.css"> 
    <link rel="stylesheet" href="mediumScreen.css"> 
    <link rel="stylesheet" href="largeScreen.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <title>Scott Martinez: Portfolio</title>
</head>
<body class="body-container">
    <script src="skills.js"></script>
    <section id="home">
    <div class="spacer layer1"></div>
        <div class="profile-container"><img class="prof" src="myself.jpg"></div> <!-- Contains profile picture -->
        <div class="profile-bar"> <!-- Bar that goes through the profile picture -->
            <h1 class="name">Scott Martínez</h1>
            <!-- <h1 class="job-title">Front-End Developer</h1> *For Job Title -->
            <nav class="nav-bar"> <!-- Navigation Bar -->
                <a class="homebtn" href="#home">HOME</a> 
                <a class="aboutMe" href="#aboutMe">ABOUT ME</a>
                <a class="skills" href="#skills">SKILLS</a>
                <a class="projects" href="#projects">PROJECTS</a>
                <a class="contact-me" href="#contact">CONTACT ME</a>
            </nav>
        </div> 
    </section>
    

<!-- About Me Container -->
    <h2 class="space"></h2>
    <section id="aboutMe">
        <div class="tab-container"> 
            <div class="my-info">
                <h2 class="aboutMe-title">ABOUT ME</h2>
                <p class="aboutMe-info">
                    My name is Scott Martinez, and I am a recent computer science graduate from the University of Wisconsin - Whitewater, with a specialization in front-end development.   
                    Throughout my academic journey, I developed a strong passion for creating intuitive and visually appealing user interfaces. I have a solid foundation in HTML, CSS, PHP, MySql and JavaScript, and I continuously stay updated with the latest front-end frameworks and technologies.
                    During my time at the university, I actively sought opportunities to apply my knowledge by working on various web development projects, both individually and as part of a team. These experiences have not only enhanced my technical skills but also nurtured my ability to collaborate effectively and communicate complex ideas to stakeholders. I am highly motivated to bring my expertise in front-end development to contribute to innovative and user-centric solutions that improve the digital experience for end-users. I am excited to embark on a career where I can combine my technical proficiency with my creativity to create compelling and immersive web experiences.
                </p>
                <a class="gitHub" href="https://github.com/scottmtinez"><i class="bi bi-github"></i></a>
                <a class="linkedin" href="https://www.linkedin.com/in/scott-martinez-290a40249?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3Bo4aVek64QwiEFlRQRqQHow%3D%3D"><i class="bi bi-linkedin"></i></a>
                <a class="instagram" href="https://www.instagram.com/scottmtinez/"><i class="bi bi-instagram"></i></a>
                <a class="download-resume" href="Scott Martinez_ Resume (1).pdf">Download Resume</a>
            </div>
        </div>
    </section>


 <!-- Skills Container -->
    <section id="skills-container">
        <div class="tab-container" class="skill">
            <h2 id="skills" class="skills-title1">SKILLS</h2>
            <div class="col" style="padding-bottom: 2%; padding-top: 2%;" id='skbox'>
                <div class="skcontainer"><img class="c++" src="c-.png"><button class="slink" onclick="open1()" id="sk1"> C++ | Proficient</button></div> 
                <div class="skcontainer"><img class="Java" src="java.png"><button class="slink" onclick="open2()" id="sk2"> Java | Novice</button></div>
                <div class="skcontainer"><img class="html" src="html-5.png"><button class="slink" onclick="open3()" id="sk3"> HTML | Proficient</button></div>
                <div class="skcontainer"><img class="css" src="css-3.png"><button class="slink" onclick="open4()" id="sk4"> CSS | Proficient</button></div>
                <div class="skcontainer"><img class="python" src="python.png"><button class="slink" onclick="open5()" id="sk5"> Python | Novice</div>
                <div class="skcontainer"><img class="linux" src="linux.png"><button class="slink" onclick="open6()" id="sk6"> Linux | Novice</div>
                <div class="skcontainer"><img class="databases" src="database-storage.png"><button class="slink" onclick="open7()" id="sk7"> MySql, MariaDB, MongoDB | Proficient</div>
                <div class="skcontainer"><img class="php" src="php (1).png"><button class="slink" onclick="open8()" id="sk8"> PHP | Proficient</div>
                <div class="skcontainer"><img class="bootstraps" src="bootstrap.png"><button class="slink" onclick="open9()" id="sk9"> Bootstraps | Proficient</div>
                <div class="skcontainer"><img class="swift" src="swift.png"><button class="slink" onclick="open10()" id="sk10"> Swift | Novice</div>
                <div class="skcontainer"><img class="photoshop" src="photoshop.png"><button class="slink" onclick="open11()" id="sk11"> Adobe Photoshop | Proficient</div>
                <div class="skcontainer"><img class="illustrator" src="illustrator.png"><button class="slink" onclick="open12()" id="sk12"> Adobe Illustrator | Proficient</div>
                <div class="skcontainer"><img class="javascript" src="js.png"><button class="slink" onclick="open13()" id="sk13"> JavaScript | Proficient</div>
                <div class="skcontainer"><img class="nodejs" src="nodejs.png"><button class="slink" onclick="open14()" id="sk14"> Node.js | Novice</div>
            </div>
            <?php include 'skills.php'; ?>
        </div>
    </section>

 <!-- Projects Container -->
    <section id="projects">
        <div class="tab-container">
            <h1 class="tprojects">Projects</h1>
            <div class="projects-container">

                <div class="project1">
                    <h2 class="p1">Portfolio Web Applicaiton <span style="font-size: 12px;"> HTML, CSS, JS, & PHP</span></h2>
                    <p class="p1_p">
                        This project was created to display my person front-end development work. <br>
                        <button class="demo" onclick="window.location.href='https://scottmartinezportfolio.com/';">DEMO</button>
                        <button class="code" onclick="window.location.href='https://github.com/scottmtinez/Portfolio';">CODE</button>
                    </p>
                </div>

                <div class="project2">
                    <h2 class="p2">Recipe Web Application <span style="font-size: 12px;"> HTML, CSS, JS, PHP, & MYSQL</span></h2>
                    <p class="p2_p">
                        This project was created to let a user read and share recipes with other users by letting the user add recipes by sending the recipes information to a mysql database.<br>
                        <button class="demo" onclick="window.location.href='';">DEMO - COMING SOON</button>
                        <button class="code" onclick="window.location.href='';">CODE</button> <!-- https://github.com/scottmtinez/recipeapp'; -->
                    </p>
                </div>

                <div class="project3">
                    <h2 class="p3">Workout Routine Web Applicaiton<span style="font-size: 12px;"> HTML, CSS, JS, PHP, & MYSQL</span></h2>
                    <p class="p3_p">
                        This project was created to let user create workout routings by creating, adding, deletign & updating exercises. <br>
                        <button class="demo" onclick="window.location.href='';">DEMO - COMING SOON</button>
                        <button class="code" onclick="window.location.href='';">CODE</button> <!-- https://github.com/scottmtinez/workoutroutine -->
                    </p>
                </div>

                <div class="project4">
                    <h2 class="p4">Weather Web Applicaiton using an API<span style="font-size: 12px;"> HTML, CSS, JS, & PHP</span></h2>
                    <p class="p4_p">
                        This project was created to let the user use a search bar to check to see what the weather is in that area using the data from an API. <br>
                        <button class="demo" onclick="window.location.href='';">DEMO - COMING SOON</button>
                        <button class="code" onclick="window.location.href='';">CODE</button> 
                    </p>
                </div>

            </div>
        </div>
    </section>

 <!-- Contact Me Container -->
    <div style="margin-top: 10%;"></div>
    <section id="contact">
        <div class="tab-container">
            <h1 class="contactMe">CONTACT ME</h1>
            <div class="contactMe-form">
                <form class="contactMe-page" action="form.php" method="POST">
                    <input type="text" class="iname" name="iname" placeholder="Name..." required><br>
                    <input type="text" class="icompany" name="icompany" placeholder="Company..." required><br>
                    <input type="text" class="isub" name="isub" placeholder="Subject..." required><br>
                    <input type="text" class="iemail" name="iemail" placeholder="Email..." required><br>
                    <textarea class="icontent" name="icontent" placeholder="Content..." required></textarea><br>
                    <input type="submit" class="isubmit" value="Contact" required><br>
                </form>
            </div>
        </div>
    </section>
    <div class="spacer layer2"></div>
</body>
</html>