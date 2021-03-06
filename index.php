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
    <meta http-equiv="Cache-control" content="no-cache">
    <!-- meta tags to make website show up on linked in -->
    
    <meta property='og:title' content='Carla Sahagun | Software Engineer'/>
    <meta property='og:type' content='website'/>
    <meta property='og:url' content='https://carlasahagun.com'/>
    <meta property='og:description' content="Software Developer Portfolio Website |  I am a full-stack software engineer who decided to immerse
               myself in web development. My first website was created when my dad needed 
               to build a mobile application for his business. He didn't have the money or 
               knowledge, so he asked me for help."/>
    <meta property='og:image' content='./portfolio-3/images/png/woman-coding.png'/>
    <meta property='og:image:width' content='1200'/>
    <meta property='og:image:height' content='560'/>


    <!-- end meta tags to make website show up on linked in -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./portfolio-3/styles.css">
    <script src="https://kit.fontawesome.com/5eb26f0a00.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js" ></script>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;500&family=Montserrat:wght@200;400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="./portfolio-3/images/favicon.ico"/>
    <title>Carla Sahagun | Front End Developer in Virginia</title>

</head>
<body>
    
    <div id="main">
        <header id="header">
            <div id="logo">
                <a href="#main"><img src="./portfolio-3/images/cs.png"/></a>
            </div>
            <nav class="navbar">
                <a href="#about">ABOUT</a>
                <a href="#projects">PROJECTS</a> 
                <a href="#contact">CONTACT</a>
                <a href="./portfolio-3/carla_resume_aug_2020.pdf"  class="theme-btn" target="_blank" >RESUME</a>
            </nav>
            <div class="mobile-navbar">
                <div class="menu-icon" onclick="showMobileMenu()">
                    <div id="first-line-menu"></div>
                    <div id="second-line-menu"></div>
                    <div id="third-line-menu"></div>
                </div>
                <div class="mobile-items">
                    <div id="x-icon" onclick="hideMobileMenu()">
                        <!-- <i class="far fa-times-circle"></i> -->
                        <img src="./portfolio-3/images/x-icon.png" alt="">
                    </div>
                    <a href="#about">ABOUT</a>
                    <a href="#projects">PROJECTS</a> 
                    <a href="#contact">CONTACT</a>
                    <a href="./portfolio-3/carla_resume_aug_2020.pdf" target="_blank" >RESUME</a>
                </div>
                
            </div>
        </header>
        <div class="hero-content">
            <p>Hi, my name is</p>
            <h1>Carla Sahagun</h1>
            <h2>I am a software engineer based in Herndon, VA specializing in building web applications that deliver exceptional user experiences.</h2>
            <a href="#contact" class="theme-btn">CONNECT</a>
        </div>
    </div>


<div class="background">
    <section  id="about">
        <div class="about-me">
            <div class="section-name">
                <h1>01</h1>
                <div class="straight-line"></div>
                <h1>ABOUT ME</h1>
            </div>
            <h1>My Journey</h1>
            <p>My name is Carla. I am a full-stack software engineer who decided to immerse
               myself in web development. My first website was created when my dad needed 
               to build a mobile application for his business. He didn't have the money or 
               knowledge, so he asked me for help. I did not have any experience building 
               websites, but that did not deter me from taking on the challenge, a decision
                that would change my life<span onclick="showModal()">Read More >></span></p>

            <div id="skills">
                <div class="skills-left">
                    <div class="skill">
                        <p> <i class="fas fa-caret-right"></i>JavaScript</p>
                    </div>
                    <div class="skill">
                        <p> <i class="fas fa-caret-right"></i>HTML5/CSS3</p>
                    </div>
                    <div class="skill">
                        <p> <i class="fas fa-caret-right"></i>Ruby on Rails</p>
                    </div>
                </div>
                <div class="skills-right">
                    <div class="skill">
                        <p> <i class="fas fa-caret-right"></i>React</p>
                    </div>
                    <div class="skill">
                        <p> <i class="fas fa-caret-right"></i>Ruby</p>
                    </div>
                    <div class="skill">
                        <p> <i class="fas fa-caret-right"></i>SQL</p>
                    </div>
                </div>
                
            </div>

            <a href="./portfolio-3/carla_resume_aug_2020.pdf" target="_blank" class="theme-btn">RESUME</a>
        </div>
        <div class="my-picture">
            <img src="./portfolio-3/images/carla-round-portrait.webp" 
            onerror="this.src='./portfolio-3/images/png/carla-round-portrait.png';"/>
        </div>
    </section>
</div>

<div id="modal-about">
    <div id="modal-card">
        <div class="modal-x" onclick="hideModal()">
            <i class="far fa-times-circle"></i>
        </div>
        <a href="./portfolio-3/carla_resume_aug_2020.pdf" target="_blank" class="modal-btn">RESUME</a>
        <div class="modal-img">
            <img src="./portfolio-3/images/carla-round-portrait.webp" alt="" onerror="this.src='./portfolio-3/images/png/carla-round-portrait.png';" >
        </div>
        <div class="modal-content">   
            <p>
                After spending all of my spare time implementing the website, I quickly 
                learned how much I enjoyed the challenges that come with building a 
                website and decided to invest in the training necessary to pursue a 
                career in software engineering.
                I enrolled in Flatiron School's software engineering immersive certificate
                program, which I completed this year. The program included classes that
                teach the student how to build full-stack applications. The technologies
                that we learned include Javascript, React, Ruby, Ruby on Rails, and how
                to leverage APIs.
            </p>
            <p>
                I am energetic, persistent, and a team player, never afraid 
                to get out of my comfort zone. I am open to new challenges
                and ready to learn new technologies. I am eager to deal with 
                new projects and tasks, connect with people, and work with other
                like-minded professionals.
            </p>
            
        </div>
    </div>
</div>
    <div id="opportunity">
        <h1>Currently Seeking New Opportunities</h1>
    </div>
    <div class="women-programming"> </div>

    <section id="projects" >
        <div class="section-name">
            <h1>02</h1>
            <div class="straight-line"></div>
            <h1>MY PROJECTS</h1>
        </div>
        <h1>What I've Built</h1>
        <p>The following projects have been built on a two week sprint starting from an idea to a wireframe and final product.</p>
        <div id="projects-container">

            <div class="project">
                <div class="carousel">
                    <button class="carousel__button carousel__button--left">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="carousel__track-container">
                        <ul class="carousel__track">
                            <li class="carousel__slide current-slide">
                                <img class="carousel__image" src="./portfolio-3/images/bcs-browser.webp" alt=""
                                onerror="this.src='./portfolio-3/images/png/bcs-browser.png';">
                            </li>
                            <li class="carousel__slide">
                                <img class="carousel__image" src="./portfolio-3/images/bcs-2.webp" alt=""
                                onerror="this.src='./portfolio-3/images/png/bcs-2.png';">
                            </li>
                            <li class="carousel__slide">
                                <img class="carousel__image" src="./portfolio-3/images/bcs-3.webp" alt=""
                                onerror="this.src='./portfolio-3/images/png/bcs-3.png';">
                            </li>
                        </ul>
                    </div>
                    <button class="carousel__button carousel__button--right">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
                
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




            <div class="project">
                
                <div class="project-content">
                    <p>Featured Project</p>
                    <h1>Cheffed - Full Stack</h1>
                    <h2>Platform built for food enthusiasts to showcase their specialty dishes and get requests from prospect clients. Featuring a fully functioning search bar.</h2>
                    <div class="tech-used">
                        <p>Ruby on Rails</p>
                        <p>React</p>
                        <p>JSON Tokens</p>
                    </div>
                    <div class="project-icons">
                        <a href="https://github.com/itacamba/cheffed-frontend" target="_blank" ><i class="fab fa-github"></i></a>
                        <a href="https://www.youtube.com/watch?v=gMuNcwAQXM0" target="_blank" ><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>

                <div class="carousel">
                    <button class="carousel__button carousel__button--left btn-2-left">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="carousel__track-container">
                        <ul class="carousel__track track-2">
                            <li class="carousel__slide current-slide-2">
                                <img class="carousel__image" src="./portfolio-3/images/cheffed-1.webp" alt=""
                                onerror="this.src='./portfolio-3/images/png/cheffed-1.png';">
                            </li>
                            <li class="carousel__slide">
                                <img class="carousel__image" src="./portfolio-3/images/cheffed-2.webp" alt=""
                                onerror="this.src='./portfolio-3/images/png/cheffed-2.png';">
                            </li>
                            <li class="carousel__slide">
                                <img class="carousel__image" src="./portfolio-3/images/cheffed-3.webp" alt=""
                                onerror="this.src='./portfolio-3/images/png/cheffed-3.png';">
                            </li>
                        </ul>
                    </div>
                    <button class="carousel__button carousel__button--right btn-2-right">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    
                </div>


            </div>



            <div class="project">
                
                <div class="carousel">
                    <button class="carousel__button carousel__button--left btn-3-left">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div class="carousel__track-container">
                        <ul class="carousel__track track-3">
                            <li class="carousel__slide current-slide-3">
                                <img class="carousel__image" src="./portfolio-3/images/portfolio-1.webp" alt=""
                                onerror="this.src='./portfolio-3/images/png/portfolio-1.png';">
                            </li>
                            <li class="carousel__slide">
                                <img class="carousel__image" src="./portfolio-3/images/portfolio-2.webp" alt=""
                                onerror="this.src='./portfolio-3/images/png/portfolio-2.png';">
                            </li>
                            <li class="carousel__slide">
                                <img class="carousel__image" src="./portfolio-3/images/portfolio-3.webp" alt=""
                                onerror="this.src='./portfolio-3/images/png/portfolio-3.png';">
                            </li>
                        </ul>
                    </div>
                    <button class="carousel__button carousel__button--right btn-3-right">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                    
                </div>

                <div class="project-content">
                    <p>Featured Project</p>
                    <h1>Portfolio Version 2</h1>
                    <h2>Personal Website presenting some of my projects, background and skills. Built originally with HTML, CSS and JavaScript</h2>
                    <div class="tech-used">
                        <p>HTML</p>
                        <p>CSS</p>
                        <p>JavaScript</p>
                    </div>
                    <div class="project-icons">
                        <a href="https://github.com/itacamba/portfolio-v2" target="_blank" ><i class="fab fa-github"></i></a>
                        <a href="javascript:void(0);" onclick="showPopUp()"><i class="fas fa-external-link-alt"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section id="freelance">
        <img src="./portfolio-3/images/women-in-tech-blue.webp"
        onerror="this.src='./portfolio-3/images/png/women-in-tech-blue.png';"/>
        <div class="freelance-content">
            <h1>I am available for freelancing</h1>
            <p>If you are looking to start project, or just need to accelerate the completion of one, contact me. Let's build something great!</p>
            <div class="hire-me">
                <a href="#contact" class="theme-btn">WORK WITH ME</a>
            </div>  
        </div>
    </section>

   <section id="contact">
       <h1>Get in Touch.</h1>
       <p>Have a project in mind or just want to say hi?
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
                <input type="submit" value="SEND MESSAGE" />
            </form>

        </div>
        <?php 
            endif;
        ?>
        <div class="social">
            <a href="https://www.linkedin.com/in/carla-sahagun" target="_blank">
                <i class="fab fa-linkedin-in"></i>
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

    <script src="./portfolio-3/index.js"></script>
    <script src="./portfolio-3/scrolling.js"></script>
    <script src="./portfolio-3/carousel.js"></script>
    <!-- <script>
        var prevScrollpos = window.pageYOffset;
        window.onscroll = function() {
            var currentScrollPos = window.pageYOffset;
            if (currentScrollPos > 0) {
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("header").style.top = "0";
                } else {
                    document.getElementById("header").style.top = "-100px";
                }
                prevScrollpos = currentScrollPos;
            }
        }
    </script> -->

    
</body>
</html>