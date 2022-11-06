<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="css/profile.css?<?php echo time() ?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>

    <div class="container">
  
    <?php
                session_start();
               
                       ?>
        <div class="container-wrapper">
            <div class="home" id="Home">
                <div class="home-content"> <img src="./img/UploadImg/<?php echo $_SESSION['StudentData']->image;?>" class="profile-image" />
                    <div class="name">
                        <p><?php echo $_SESSION['StudentData']->name;?></p>
                        <p><?php echo $_SESSION['StudentData']->email;?></p>
                    </div>
                    <div class="social-media">
                        <ul>
                            <li> <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a> </li>
                            <li> <a href="#" target="_blank"><i class="fab fa-instagram"></i></a> </li>
                            <li> <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a> </li>
                            <li> <a href="#" target="_blank"><i class="fab fa-github"></i></a> </li>
                        </ul>
                    </div> <a href="#" target="_blank" class="btn-resume"> <i class="fas fa-download"></i> Download Resume</a>
                </div>
            </div> <!-- About Section-->
            <div class="about" id="About">
                <h2>About Me</h2>
                <!--About content-->
                <div class="about-wrapper">
                    <!--Left Div-->
                    <div class="left-about">
                        <p> Information </p>
                        <div class="about-image">
                            <div class="image-border"></div> <img src="./img/UploadImg/<?php echo $_SESSION['StudentData']->image;?>" />
                        </div>
                    </div>
                    <!--Right Div-->
                    <div class="right-about">
                        <div class="information">
                            <h3>Information</h3>
                            <!--inside Information div-->
                            <div class="info">
                                <!--Inside info Div-->
                                <div class="info-data"> <i class="fas fa-user"></i>
                                    <p><?php echo $_SESSION['StudentData']->name;?></p>
                                </div>
                                <div class="info-data"> <i class="fas fa-phone-alt"></i>
                                    <p><?php echo $_SESSION['StudentData']->phone;?></p>
                                </div>
                                <div class="info-data"> <i class="fas fa-envelope"></i>
                                    <p><?php echo $_SESSION['StudentData']->email;?></p>
                                </div>
                            </div> <br />
                            <!--Inside information div-->
                            <div class="Experience">
                                <h3>Experience</h3>
                                <!--Inside Experience Div-->
                                <div class="exp">
                                    <!--Inside exp div-->
                                    <div class="info-data"> <i class="fas fa-medal"></i>
                                        <div>
                                            <p>6 months Software Developer Trainee</p>
                                            <p> <?php echo $_SESSION['StudentData']->email;?></p>
                                        </div>
                                    </div>
                                    <div class="info-data"> <i class="fas fa-suitcase"></i>
                                        <div>
                                            <p>2+ <?php echo $_SESSION['StudentData']->email;?></p>
                                            <p>Completed</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Skills Section-->
            <div class="skills" id="Skills">
                <h2>My Expertise Area</h2>
                <!--Technology -->
                <div class="technologies">
                    <div class="frontend">
                        <div class="frontend-data">
                            <h3>Frontend</h3>
                            <div class="frontend-tech">
                                <div>
                                    <p><span>HTML/CSS</span><span>80%</span></p>
                                    <div></div>
                                </div>
                                <div>
                                    <p><span>Javascript</span><span>70%</span></p>
                                    <div></div>
                                </div>
                                <div>
                                    <p><span>Jquery</span><span>80%</span></p>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="backend">
                        <div class="backend-data">
                            <h3>Backend</h3>
                            <div class="backend-tech">
                                <div>
                                    <p><span>Java</span><span>80%</span></p>
                                    <div></div>
                                </div>
                                <div>
                                    <p><span>JSP/Servlet</span><span>80%</span></p>
                                    <div></div>
                                </div>
                                <div>
                                    <p><span>Hibernate/Spring</span><span>70%</span></p>
                                    <div></div>
                                </div>
                                <div>
                                    <p><span>Spring Boot</span><span>70%</span></p>
                                    <div></div>
                                </div>
                                <div>
                                    <p><span>Mysql</span><span>80%</span></p>
                                    <div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="work" id="Work">
                <h2>Recent Work</h2>
                <div class="recent-work">
                    <div> <img src=https://drive.google.com/uc?export=view&id=1wESYm0Xrs4PmF3yGx1fnd5itnae71txx /> <span><a href="#" target="_blank">Demo</a></span> <label>Login Form</label> </div>
                    <div> <img src=https://drive.google.com/uc?export=view&id=1nXAbA4ROZiOeyAbHwTxsr_7vBNgSWs4P /> <span><a href="#" target="_blank">Demo</a></span> <label>Music Homepage</label> </div>
                    <div> <img src=https://drive.google.com/uc?export=view&id=1KNMQG_hIJIHVVw7cXZXAOe0H2WNUhrFx /> <span><a href="#" target="_blank">Demo</a></span> <label>Naviagation Bar</label> </div>
                    <div> <img src=https://drive.google.com/uc?export=view&id=1yZ3m_vLs6QmU8wgGjn5X6u9Bh6J-nk90 /> <span><a href="#" target="_blank">Demo</a></span> <label>Portofolio Homepage</label> </div>
                    <div> <img src=https://drive.google.com/uc?export=view&id=1e8CqYQNoEX1Rq-hYW2ISv_72EP0pWuwO /> <span><a href="#" target="_blank">Demo</a></span> <label>Registration Form</label> </div>
                    <div> <img src=https://drive.google.com/uc?export=view&id=1mlyDyOJeEIk1I7ipFM4otQUr7RNrUXdo /> <span><a href="#" target="_blank">Demo</a></span> <label>Product Card </label> </div>
                    <div> <img src=https://drive.google.com/uc?export=view&id=150yxfDD_7jdL-7bQa_7W_looxFEQ7_fO /> <span><a href="#" target="_blank">Demo</a></span> <label>Singer Homepage</label> </div>
                    <div> <img src=https://drive.google.com/uc?export=view&id=1aHXSkCAoT3x9UiDXEPfsz7WMpZR81bK5 /> <span><a href="#" target="_blank">Demo</a></span> <label>Slider</label> </div>
                    <div> <img src=https://drive.google.com/uc?export=view&id=11Gf5yCR51SaTXdIf9LDGzxJTruzZFmZT /> <span><a href="#" target="_blank">Demo</a></span> <label>Cube Animation</label> </div>
                    <div> <img src=https://drive.google.com/uc?export=view&id=1K-u53o_2lESZsYrZKuwiZ5B9wm9xMqjT /> <span><a href="#" target="_blank">Demo</a></span> <label>Hotel Homepage</label> </div>
                    <div> <img src=https://drive.google.com/uc?export=view&id=1fZQw76EVt8v4F6tvw0luHLYaVTyOLjjp /> <span><a href="#" target="_blank">Demo</a></span> <label>Icon Design </label> </div>
                    <div> <img src=https://drive.google.com/uc?export=view&id=1_Ba29ykk3gfr1T04kWGqkjczxlVj1rVC /> <span><a href="#" target="_blank">Demo</a></span> <label>Profile Card</label> </div>
                </div>
            </div>
            <div class="contact" id="Contact">
                <h2>Any Project in Mind Contact us</h2>
                <div class="contact-form">
                    <div class="input-details">
                        <h3>Contact us</h3>
                        <div class="input-container"> <label>Full Name</label> <input type="text" placeholder="Full Name" /> </div>
                        <div class="input-container"> <label>Email Address</label> <input type="text" placeholder="Email Address" /> </div>
                    </div>
                    <div class="input-message"> <textarea placeholder="write message to us"></textarea> <button><i class="fas fa-arrow-right"></i>Send Message</button> </div>
                </div>
            </div>
        </div>
        <?php ?>
    </div>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="index.js"></script>
    <script src="./js/profile.js"></script>
</body>

</html>