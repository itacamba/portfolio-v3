<?php
    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userMessage = $_POST['message'];
        
            $to = 'daniela.sahagun03@gmail.com';
            $subject = 'Portfolio Message';
            $body = '' ;
        
            $body .= "From: ".$userName. "\r\n";
            $body .= "Email: ".$userEmail. "\r\n";
            $body .= "Message: ".$userMessage. "\r\n";
            
            mail($to,$subject,$body);

            $message_sent = true;
        }
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./stylesheet.css">
    <script src="https://kit.fontawesome.com/5eb26f0a00.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js" ></script>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500&family=Montserrat:wght@200;400;500;800;900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="./images/favicon.ico"/>
    <title>Carla Sahagun | Front End Developer in Virginia</title>

</head>
<body>

    <div id="main">
        <header class="container-95">
            <div id="logo">
                <img src="./images/carla-logo.png"/>
            </div>
            <nav class="navbar">
                <a href="#about">About</a>
                <a href="#projects">Projects</a> 
                <a href="#contact">Contact</a>
                <a href="./carla_resume_aug_2020.pdf"  class="theme-btn" target="_blank" >Resume</a>
            </nav>
            <div class="mobile-navbar">
                <div class="menu-icon" onclick="showMobileMenu()">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="mobile-items">
                    <div id="x-icon" onclick="hideMobileMenu()"><i class="fas fa-times"></i></div>
                    <a href="#about">About</a>
                    <!-- <a href="#skills">Skills</a> -->
                    <a href="#contact">Contact</a>
                    <a href="./carla_resume_aug_2020.pdf" target="_blank" >Resume</a>
                </div>
                
            </div>
        </header>
        <div class="hero-content">
            <p>Hi, my name is</p>
            <h1>Carla Sahagun.</h1>
            <h2>I am a software engineer based in Herndon, VA specialized in building mobile and web applications that deliver exceptional user experience.</h2>
            <a href="#contact" class="theme-btn">Connect</a>
        </div>
    </div>



    <section  id="about">
        <div class="section-name">
            <h1>01</h1>
            <div class="straight-line"></div>
            <h1>About Me</h1>
        </div>
        <div class="about-me">
            <!-- <h1>About Me</h1> -->
            <p>My name is Carla. I am a full-stack software engineer who decided to immerse
               myself in web development. My first website was created when my dad needed 
               to build a mobile application for his business. He didn't have the money or 
               knowledge, so he asked me for help. I did not have any experience building 
               websites, but that did not deter  <span>Read More.</span></p>

            <div id="skills">
                <div class="skills-left">
                    <div class="skill">
                        <p> <i class="fas fa-caret-right"></i> JavaScript</p>
                    </div>
                    <div class="skill">
                        <p> <i class="fas fa-caret-right"></i> React</p>
                    </div>
                    <div class="skill">
                        <p> <i class="fas fa-caret-right"></i> Ruby on Rails</p>
                    </div>
                </div>
                <div class="skills-right">
                    <div class="skill">
                        <p> <i class="fas fa-caret-right"></i> HTML5</p>
                    </div>
                    <div class="skill">
                        <p> <i class="fas fa-caret-right"></i> CSS3</p>
                    </div>
                    <div class="skill">
                        <p> <i class="fas fa-caret-right"></i> SQL</p>
                    </div>
                </div>
                
            </div>

            <a href="./carla_resume_aug_2020.pdf" target="_blank" class="theme-btn">Resume</a>
        </div>
        <div class="my-picture">
            <img src="./images/carla-round-portrait.png" />
        </div>
    </section>




    <section id="projects" >
        <h1>Recent Projects</h1>
        <p>The following projects have been built on a two week sprint going from an idea, wireframe to final product.</p>
        <div id="projects-container">
            <div class="project">
                <img src="./images/bcs-browser.png"/>  
                <div class="project-content">
                    <p>Featured Project</p>
                    <h1>Business Cyber Shield</h1>
                    <h2>Fully responsive single page application showcasing cybersecurity services, allowing users send a request for more information via email.</h2>
                    <div class="tech-used">
                        <p>React</p>
                        <p>CSS</p>
                        <p>Email.js</p>
                    </div>
                    <div class="project-icons">
                        <a href="https://github.com/itacamba/bcs-netlify-test" target="_blank" ><i class="fab fa-github"></i></a>
                        <a href="https://www.bcybershield.com/" target="_blank" ><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>

            </div>
            <div class="project project-even">
                <div class="project-even-content">
                    <p>Featured Project</p>
                    <h1>Cheffed App</h1>
                    <h2>Full Stack web app built for food enthusiasts to showcase their dishes and 
                    to receive requests from customers. Featuring CRUD, search and Login Functionality</h2>
                    <div class="even-tech-used">
                        <p>React</p>
                        <p>Ruby on Rails</p>
                        <p>JSON web Tokens</p>
                    </div>
                    <div class="even-project-icons">
                        <a href="https://github.com/itacamba/cheffed-frontend" target="_blank" ><i class="fab fa-github"></i></a>
                        <a href="javascript:void(0)" onclick="showPopUp()"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
                <img src="./images/cheffed-browser.png"/>  
            </div>
            <div class="project">
                <img src="./images/bcs-browser.png"/>  
                <div class="project-content">
                    <p>Featured Project</p>
                    <h1>Personal Portfolio</h1>
                    <h2>An online Pictionary built with JavaScript, imitating real time with Long Polling</h2>
                    <div class="tech-used">
                        <p>React</p>
                        <p>Email.js</p>
                    </div>
                    <div class="project-icons">
                        <a href="https://github.com/itacamba/flat-frontend" target="_blank" ><i class="fab fa-github"></i></a>
                        <a href="javascript:void(0)" onclick="showPopUp()"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- <section id="skills" class="container-90">   
        <h1>My Skill Set</h1>
        <p>The following projects have been built on a two week sprint going from an idea, wireframe to final product.</p>
        <div id="three-main-skills">
            <div class="card">
                    <h1> HTML</h1>
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" cy="70" r="70"></circle>
                    </svg>
                    <div class="number">
                        <h2>95%</h2>
                    </div>
            </div>
            <div class="card">
                <h1> CSS</h1>
                <div class="percent">
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" cy="70" r="70"></circle>
                    </svg>
                    <div class="number">
                        <h2>95%</h2>
                    </div>
                </div>
            </div>
            <div class="card">
                <h1> JS</h1>
                <div class="percent">
                    <svg>
                        <circle cx="70" cy="70" r="70"></circle>
                        <circle cx="70" cy="70" r="70"></circle>
                    </svg>
                    <div class="number">
                        <h2>90%</h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="horizontal-skills" class="container-80">
            <div class="skills-left">
                <div class="skill">
                    <div class="skill-name">
                        <h1>React</h1>
                        <h2>90%</h2>
                    </div>
                    <div class="holder">
                        <div class="progress p-90"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-name">
                        <h1>Ruby on Rails</h1>
                        <h2>85%</h2>
                    </div>
                    <div class="holder">
                        <div class="progress p-85"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-name">
                        <h1>Git / Github</h1>
                        <h2>95%</h2>
                    </div>
                    <div class="holder">
                        <div class="progress p-95"></div>
                    </div>
                </div>
            </div>
            <div class="skills-right">
                <div class="skill">
                    <div class="skill-name">
                        <h1>Ruby</h1>
                        <h2>80%</h2>
                    </div>
                    <div class="holder">
                        <div class="progress p-80"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-name">
                        <h1>Invision Studio</h1>
                        <h2>95%</h2>
                    </div>
                    <div class="holder">
                        <div class="progress p-95"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-name">
                        <h1>Photoshop / Illustrator</h1>
                        <h2>85%</h2>
                    </div>
                    <div class="holder">
                        <div class="progress p-85"></div>
                    </div>
                </div>

            </div>
            
        </div>
    </section> -->
    <section id="freelance">
        <img src="./images/virginia.png"/>
            <h1>I am available for freelancing</h1>
            <p>If you are looking to start a new project do not hesitate to contact me,<br> let's build something great!</p>
            <div class="hire-me">
                <a href="#contact" class="theme-btn">Hire Me</a>
            </div>

    </section>
   <section id="contact">
       <h1>Get in Touch.</h1>
       <p>Have a sweet project in mind or just want to say hi?
        Feel free to send me a message.</p>
        <?php 
            if($message_sent):
        ?>
            <h1 class="demo-pop-up">We'll be in Touch</h1>
        <?php 
            else:
        ?>
        <div id="form">
            <form method="POST">
                <label for="name">Name</label>
                <input type="text" name="name" class="input-field" required/>
                <label for="email">E-mail</label>
                <input type="email" name="email" class="input-field" required/>
                <label for="message">Message</label>
                <textarea name="message" required></textarea>
                <input type="submit" value="Send Message" />
            </form>

        </div>
        <?php 
            endif;
        ?>
        <div class="social">
            <a href="https://www.linkedin.com/in/carla-sahagun" target="_blank">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://www.instagram.com/itacamba/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://github.com/itacamba" target="_blank">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://medium.com/@daniela.sahagun03" target="_blank">
                <i class="fab fa-medium-m"></i>
            </a>
        </div>
        <div class="divider"></div>
        <p id="copyright">Designed & Built by Carla Sahagun © 2020</p>
   </section>
   <div class="to-top">
        <a href="#main"><i class="fas fa-angle-up"></i></a>
   </div>
   <div class="demo-pop-up">
       <h1>This site is yet to be deployed</h1>
   </div>

    <script src="./index.js"></script>
    <script src="./scrolling.js"></script>
    
    
</body>
</html>