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
    <title>Scott Martínez: Portfolio</title>
</head>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<body class="body-container">
    <script src="skills.js"></script>
    <section id="enter-page-background" class="enter-page-background"> <!-- Enter Page -->
        <div class="enter-page" id="enter-page">
            <h2 class="enter-page-title">Welcome to the Portfolio of Scott Martínez!</h2>
            <p class="enter-p">
                Check out my page and Scroll to the bottom of the page to get in contact with me. <br>
                Enter what company you are from below or click the enter button to enter the site.
            </p>
            <form class="enter-form" id="enter-form" method="POST">
                <input type="text" class="enteri" name="enteri" id="enteri" placeholder="Company Name">
                <input type="submit" class="enterbtn" id="enterbtn" name="enterbtn" value="Enter">                
            </form>
            <?php
                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\SMTP;
                use PHPMailer\PHPMailer\Exception;
                
                if(isset($_POST['enterbtn'])){
                                    //Load Composer's autoloader
                    require 'vendor/autoload.php';

                //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);
                
                //Server
                    try {
                        //Server settings
                            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;   
                            $mail->isSMTP();                                            
                            $mail->Host       = 'smtp.sendgrid.net';                     
                            $mail->SMTPAuth   = true;                                   
                            $mail->Username   = 'apikey';                     
                            $mail->Password   = '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';                               
                            $mail->SMTPSecure = 'tls';            
                            $mail->Port       = 587;                                  
                        //Recipients
                            $mail->setFrom('owner@scottmartinezportfolio.com', 'Your Portfolio'); //From

                            $mail->addAddress('scottmtinez@gmail.com', 'Scott Martinez'); //To


                        //Get form infromation
                            $comp = $_POST['enteri'];

                        //Content
                            $mail->isHTML(true); //Set email format to HTML
                            $mail->Subject = 'Someone just visited your Portfolio!';
                            $mail->Body    = 'Company: '  . $comp;



                            $mail->send(); 
                            echo " 
                                <script> 
                                    document.getElementById('enter-page').style.display = 'none';
                                    document.getElementById('enter-page-background').style.display = 'none';
                                </script>
                            ";
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
                }
            ?>
        </div>
    </section>

    <section id="home">
    <div class="spacer layer1"></div>
        <div class="profile-container"><img class="prof" src="myself.jpg"></div> <!-- Contains profile picture -->
        <div class="profile-bar"> <!-- Bar that goes through the profile picture -->
            <h1 class="name">Scott Martínez</h1>
            <nav class="nav-bar"> <!-- Navigation Bar -->
                <form method="POST" class="nav-desktop">
                    <input class="homebtn" name="homebtn" type="button" onclick="window.location.href = '#home';" value="HOME"/>
                    <input class="aboutMe" name="aboutMe" type="button" onclick="window.location.href = '#aboutMe';" value="ABOUT ME"/>
                    <input class="skills" name="skills" type="button" onclick="window.location.href = '#skills';" value="SKILLS"/>
                    <input class="projects" name="projects" type="button" onclick="window.location.href = '#projects';" value="PROJECTS"/>
                    <input class="contact-me" name="contact-me" type="button" onclick="window.location.href = '#contact';" value="CONTACT ME"/>
                </form>

                <div class="mobile-nav"> <!-- Nav Bar for Mobile Devices -->
                    <button class="toggle-btn" onclick="toggleNav()">&#9776;</button>
                    <nav class="nav-menu" id="navMenu">
                        <ul>
                            <li><a class="mlink" onclick="window.location.href = '#home';">HOME</a></li>
                            <li><a class="mlink" onclick="window.location.href = '#aboutMe';">ABOUT ME</a></li>
                            <li><a class="mlink" onclick="window.location.href = '#skills';">SKILLS</a></li>
                            <li><a class="mlink" onclick="window.location.href = '#projects';">PROJECTS</a></li>
                            <li><a class="mlink" onclick="window.location.href = '#contact';">CONTACT ME</a></li>
                        </ul>
                    </nav>
                </div>
            </nav>
        </div> 
    </section>

    <script>
        function toggleNav() {
            var navMenu = document.getElementById("navMenu");
            navMenu.style.display = (navMenu.style.display === "block") ? "none" : "block";
        }
    </script>


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
                <div class="skcontainer"><img class="reactjs" src=""><button class="slink" onclick="open15()" id="sk15"> React.js | Proficient</div>
            </div>
            <?php include 'skills.php'; ?>
        </div>
    </section>

 <!-- Projects Container -->
    <section id="projects">
        <div class="tab-container">
            <h1 class="tprojects">Projects</h1>
            <div class="projects-container">
                <h4 style="color: #fa7369; text-align: center;">Finished Projects</h4>
                <div class="project_section">
                    <div class='ls-container'>
                        <h2 class="project-title">Portfolio Website <span style="font-size: 12px; color: #fa7369;"> HTML, CSS, JS, & PHP</span></h2>
                        <p class="project-paragraph">
                            This portfolio website serves as a showcase for my personal front-end development endeavors. Explore a curated collection of projects that highlight my skills in HTML, CSS, JavaScript, and PHP. Discover the intersection of creativity and functionality through my work, each project crafted with passion and a commitment to delivering an engaging user experience. <br>
                        </p>
                    </div>
                    <div class="rs-container">
                        <button class="demo" onclick="window.location.href='https://scottmartinezportfolio.com/';">DEMO</button>
                        <button class="code" onclick="window.location.href='https://github.com/scottmtinez/Portfolio';">CODE</button>
                    </div>
                </div>

                <div class="project_section">
                    <div class='ls-container'>
                    <h2 class="project-title">Weather Application using an API<span style="font-size: 12px; color: #fa7369;"> HTML, CSS, JS, & PHP</span></h2>
                        <p class="project-paragraph">
                            This initiative was developed to empower users with the ability to check local weather conditions through a user-friendly search bar. Leveraging data from an API, this project provides an intuitive platform for users to easily access real-time weather information for a specified location. <br>
                        </p>
                    </div>
                    <div class="rs-container">
                        <button class="demo" onclick="window.location.href='https://weatherapp.scottmartinezportfolio.com/';">DEMO</button>
                        <button class="code" onclick="window.location.href='https://github.com/scottmtinez/weatherapp';">CODE</button> 
                    </div>
                </div>
                
                <div class="project_section">
                    <div class='ls-container'>
                    <h2 class="project-title">Recipe Website<span style="font-size: 12px; color: #fa7369;"> HTML, CSS, JS, PHP, & MYSQL</span></h2>
                        <p class="project-paragraph">
                            Crafted as a dynamic fusion of a social media platform and a recipe-sharing hub, this web-based application empowers users to create personalized accounts, fostering a vibrant community of culinary enthusiasts. The platform facilitates seamless exploration and discovery of a diverse array of recipes through an interactive 'Discover' page. Developed with a tech stack encompassing HTML, CSS, Node.js, JavaScript, and MySQL, this project showcases my proficiency in building engaging and interactive web experiences. <br>
                        </p>
                    </div>
                    <div class="rs-container">
                        <button class="demo" onclick="window.location.href='https://uwwrecipewebsite.scottmartinezportfolio.com/';">DEMO</button>
                        <button class="code" onclick="window.location.href='https://github.com/scottmtinez/recipeapp';">CODE</button>  
                    </div>
                </div>

                <div class="project_section">
                    <div class='ls-container'>
                    <h2 class="project-title">Login & Registration System<span style="font-size: 12px; color: #fa7369;"> HTML, CSS, JS, PHP, & MYSQL</span></h2>
                        <p class="project-paragraph">
                            This project aims to facilitate user account management by allowing individuals to seamlessly create an account if they don't already have one. Once registered, users can effortlessly log in to access the website's features and content. <br>
                        </p>
                    </div>
                    <div class="rs-container">
                        <button class="demo" onclick="window.location.href='http://loginandregistrationsystem.scottmartinezportfolio.com/';">DEMO</button>
                        <button class="code" onclick="window.location.href='https://github.com/scottmtinez/loginAndRegistrationSystem';">CODE</button> 
                    </div>
                </div>
                
                <div class="project_section">
                    <div class='ls-container'>
                    <h2 class="project-title">Movie Insider Website<span style="font-size: 12px; color: #fa7369;"> HTML, CSS, REACT.JS, NODE.JS, FIREBASE, MYSQL, & API</span></h2>
                        <p class="project-paragraph">
                            Engineered to offer users seamless access to a vast movie database, this platform empowers users to effortlessly search for any movie through an intuitive search bar. Leveraging the power of APIs, the platform dynamically populates results based on user queries. Developed using cutting-edge technologies including React.js, Node.js, HTML, CSS, and integrated with MySQL, Firebase, and additional APIs, this project showcases my proficiency in creating interactive and data-driven web applications. <br>
                        </p>
                    </div>
                    <div class="rs-container">
                        <button class="demo" onclick="window.location.href='https://movieinsider.scottmartinezportfolio.com/';">DEMO</button>
                        <button class="code" onclick="window.location.href='https://github.com/scottmtinez/Movie-Search-Web-Application';">CODE</button>  
                    </div>
                </div>

                <div class="project_section">
                    <div class='ls-container'>
                    <h2 class="project-title">Chat Bot AI<span style="font-size: 12px; color: #fa7369;"> HTML, CSS, JS, FLASK, & DIALOGPT</span></h2>
                        <p class="project-paragraph">
                        This project served as a hands-on exploration of Python Flask, delving into the intricacies of web application development. Leveraging this newfound knowledge, I employed Python to create an interactive chat bot powered by DialoGPT. This AI-driven bot adeptly responds to user messages, showcasing the application of Python Flask, HTML, CSS, and JavaScript. It demonstrates my dedication to ongoing skill enhancement and innovative web application development. <br>
                        </p>
                    </div>
                    <div class="rs-container">
                        <button class="code" onclick="window.location.href='https://github.com/scottmtinez/Chat-Bot-AI';">CODE</button> 
                    </div>
                </div>

                <h4 style="color: #fa7369; text-align: center; margin-top: 35px;">In Progress Projects</h4>
                <div class="project_section">
                    <div class='ls-container'>
                    <h2 class="project-title">Packed AI<span style="font-size: 12px; color: #fa7369;"> HTML, CSS, NODE.JS, REACT.JS, FIREBASE, MYSQL, & API </span></h2>
                        <p class="project-paragraph">
                            The ultimate travel companion for seamless vacation planning. This innovative project harnesses the power of artificial intelligence to generate personalized packing lists tailored to your specific destination and travel itinerary. Whether you're embarking on a tropical getaway or a city adventure, SmartPackerAI takes the guesswork out of packing, ensuring you have all the essentials you need. Simply input your travel details, and let the intelligent algorithm curate a comprehensive packing list, optimizing your luggage for efficiency and convenience. <br>
                        </p>
                    </div>
                    <div class="rs-container">
                        <button class="code" onclick="window.location.href='https://www.figma.com/proto/bb18rqm832RQoUH4JpOT41/PackIT?node-id=3-7&mode=design&t=453gyp6XxLUKXoOf-1';">FIGMA</button> 
                    </div>
                </div>

            </div>
        </div>
    </section>

 <!-- Contact Me Container -->
    <div style="margin-top: 10%;"></div>
    <section id="contact">
        <div class="tab-container">
        <h1 class="contactMe">Contact Me</h1>
            <div class="contactMe-form">
                <form class="contactMe-page" id="form" method="POST">
                    <input type="text" class="iname" name="iname" placeholder="Name..." required><br>
                    <input type="text" class="icompany" name="icompany" placeholder="Company..." required><br>
                    <input type="text" class="isub" name="isub" placeholder="Subject..." required><br>
                    <input type="text" class="iemail" name="iemail" placeholder="Email..." required><br>
                    <textarea class="icontent" name="icontent" placeholder="Content..." required></textarea><br>
                    <input type="submit" class="isubmit"  name="submit" id="submit" value="Contact" href="#contact"required><br>
                </form>
                <div class='wrapper' id='checked'> 
                    <svg class='checkmark' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 52 52'> <circle class='checkmark__circle' cx='26' cy='26' r='25' fill='none'/> <path class='checkmark__check' fill='none' d='M14.1 27.2l7.1 7.2 16.7-16.8'/></svg>
                </div>
            </div>
        </div>

        <?php
            if(isset($_POST['submit'])){
                //Load Composer's autoloader
                    require 'vendor/autoload.php';

                //Create an instance; passing `true` enables exceptions
                    $mail = new PHPMailer(true);
                
                //Server
                    try {
                        //Server settings
                            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;   
                            $mail->isSMTP();                                            
                            $mail->Host       = 'smtp.sendgrid.net';                     
                            $mail->SMTPAuth   = true;                                   
                            $mail->Username   = 'apikey';                     
                            $mail->Password   = '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';                               
                            $mail->SMTPSecure = 'tls';            
                            $mail->Port       = 587;         

                        //Recipients
                            $mail->setFrom('owner@scottmartinezportfolio.com', 'Your Portfolio'); //From

                            $mail->addAddress('scottmtinez@gmail.com', 'Scott Martinez'); //To


                        //Get form infromation
                            $name = $_POST['iname'];
                            $company = $_POST['icompany'];
                            $subject = $_POST['isub'];
                            $email = $_POST['iemail'];
                            $content = $_POST['icontent'];
                         
                        //Content
                            $mail->isHTML(true); //Set email format to HTML
                            $mail->Subject = 'Someone is Trying to Contact you Through your Website Portfolio Contact Form!';
                            $mail->Body    = 'Name: ' . $name . '<br>
                                            Company: ' . $company . '<br>
                                            Subject: ' . $subject . '<br>
                                            Email: ' . $email . '<br>
                                            Content: ' . $content;



                            $mail->send(); //NOTE: Find a new way not to refresh the page... & add a captcha
                            echo " 
                                <script> 
                                    document.getElementById('enter-page').style.display = 'none';
                                    document.getElementById('form').style.display = 'none';
                                    document.getElementById('checked').style.display = 'block';
                                    document.getElementById('enter-page-background').style.display = 'none';
                                </script>
                            ";
                    } catch (Exception $e) {
                        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                    }
            }
        ?>
    </section>
    <div class="spacer layer2"></div>
</body>
</html>
