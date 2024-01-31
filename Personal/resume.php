<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>_resume</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
<?php
    include 'header.php';
?>
<div class="resume-content">
    <div class="auto-type">
        <span class="fixed-text">{"</span>
        <span class="typing"></span>
        <span class="fixed-text">"}</span>
    </div>
    <div class="second-text-services">
        <p> A snapshot of my journey showcases a commitment to excellence and a passion for innovation. 
            With a diverse skill set and hands-on experience, 
            I bring valuable contributions to every project I undertake. Take a closer look at my highlights:</p>
    </div>
    <div class="download">
        <button class="buttonDownload"><a href="./cv/resume.pdf" target="_blank">{download_resume}</a></button>
    </div>

    <div class="experience">
        <p class="about-text"> < experience > </p>
        <span class="about-bottom">
            Here is my experiences when I was at my academy
        </span>
    </div>

    <div class="grid-services">
        <div class="services-items1">
                <span class="logo-about">{2019-2020}</span>
                    <div class="services-type1">
                        <span class="fixed-text-services">< </span>
                        <span class="typingservices1"></span>
                        <span class="fixed-text-services"> ></span>
                    </div>
        </div>
            
        <div class="services-items2">
                <div class="p-about">
                    <p class="work">//Software Developer</p>
                    <br>
                    <p>I played a pivotal role in crafting innovative software solutions. 
                        I actively collaborated with cross-functional teams, 
                        contributing to the overall success of projects and ensuring the delivery of high-quality software products.
                    </p>
                </div>
        </div>
        <div class="services-items3">
            <span class="logo-about">{2020-2021}</span>

                    <div class="services-type1">
                        <span class="fixed-text-services"><</span>
                        <span class="typingservices2"></span>
                        <span class="fixed-text-services"> ></span>
                    </div>
        </div>
        <div class="services-items4">
            <div class="p-about">
                <p class="work">//Web Designer</p>
                <br>
                <p>I had the privilege of shaping visually captivating and user-friendly websites. 
                    My role involved translating creative concepts into seamless designs, ensuring a positive and engaging user experience. 
                    Through collaboration and attention to detail, I aimed to create impactful digital experiences for users.
                </p>
            </div>
        </div>

        <div class="services-items5">
            <span class="logo-about">{2021-2023}</span>

                    <div class="services-type1">
                        <span class="fixed-text-services"><</span>
                        <span class="typingservices3"></span>
                        <span class="fixed-text-services"> ></span>
                    </div>
        </div>
        <div class="services-items6">
            <div class="p-about">
                <p class="work">//Data Analyst</p>
                    <br>
                <p>I played a crucial role in extracting actionable insights from large datasets.I queried, cleaned, and analyzed data to unveil valuable patterns and trends. 
                I applied my database skills to optimize data workflows and streamline analytical processes. I aimed to empower decision-makers with accurate and relevant information for strategic planning and business growth.
                </p>
            </div>
        </div>
        <div class="services-items7">
            <span class="logo-about">{2023-present}</span>

                    <div class="services-type1">
                        <span class="fixed-text-services"><</span>
                        <span class="typingservices4"></span>
                        <span class="fixed-text-services"> ></span>
                    </div>
        </div>
        <div class="services-items8">
            <div class="p-about">
                <p class="work">//Web Developer</p>
                <br>
                <p>I immersed myself in the dynamic world of web technologies to create seamless and innovative digital experiences.
                    I actively contributed to the development of responsive and user-friendly websites. 
                    Through collaborative problem-solving and a keen eye for detail, I aimed to deliver web solutions that not only met but exceeded user expectations.
                </p>
            </div>
        </div>
    </div>
    

    <div class="contact">
    <div class="contact-text">
        <p class="logo-footer">
            {*}
        </p>
        <p class="about-text"> < contact_me > </p>
        <p class="yellow">Let's connect and explore how we can work together to achieve great things!</p>

        <input type="text" name="name" placeholder="_name" class="input-name"> 
        <input type="email" name="email" placeholder="_email" class="input-email">
        <input type="textarea" name="message" placeholder="_message" class="input-message">
    </div>
    <div class="submit">
    <button class="button">{send}</button>
    </div>
    </div>

    <?php
        include 'footer.php';
    ?>
</div>


<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed(".typing",{
            strings : ["_resume"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: false
        })

        var typed1 = new Typed(".typingservices1",{
            strings : ["_STI College Batangas"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: false
        })

        var typed2 = new Typed(".typingservices2",{
            strings : ["_STI College Batangas"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: false
        })

        var typed3 = new Typed(".typingservices3",{
            strings : ["_STI College Batangas"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: false
        })

        var typed3 = new Typed(".typingservices4",{
            strings : ["_Gzone Tech"],
            typeSpeed: 150,
            backSpeed: 150,
            loop: false
        })
    </script>
</body>
</html>