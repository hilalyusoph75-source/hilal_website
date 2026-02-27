<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hilal Yusoph | Portfolio</title>
    <link rel="stylesheet" href="style.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>

<!-- WRAPPER START -->
<div class="wrapper">

    <!-- NAVBAR -->
    <nav class="navbar">
        <a href="#about">About</a>
        <a href="#hobbies">Hobbies</a>
        <a href="#skills">Skills</a>
        <a href="#contact">Contact</a>
    </nav>

    <!-- HERO SECTION -->
    <section class="hero">
        <div class="hero-content">
            <h1>Hello, I'm <span>Hilal Yusoph</span></h1>
            <p>IT Student • Future Front-End Developer</p>
            <a href="#contact" class="btn">Hire Me</a>
        </div>
    </section>

    <main class="container">

        <!-- ABOUT -->
        <section class="card" id="about">
            <h2>About Me</h2>
            <p>
                I am an IT student passionate about technology and problem-solving. 
                I am currently learning web development, networking, and system management 
                to build modern and useful applications.
            </p>
        </section>

        <!-- HOBBIES -->
        <section class="card" id="hobbies">
            <h2>Hobbies & Interests</h2>
            <ul>
                <li>Dancing TikTok</li>
                <li>Listening to Music</li>
                <li>Watching YouTube</li>
                <li>Content Creation</li>
            </ul>
        </section>

        <!-- SKILLS -->
        <section class="card" id="skills">
            <h2>Skills</h2>
            <div class="skills">
                <span>HTML</span>
                <span>CSS</span>
                <span>Basic Editing</span>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="card" id="contact">
            <h2>Contact</h2>
            <p>Email: <strong>hilalyusoph@gmail.com</strong></p>
            <p>
                Facebook: 
                <a href="https://www.facebook.com/hilalangni123" target="_blank">
                    Visit Profile
                </a>
            </p>
        </section>

    </main>
</div>
<!-- WRAPPER END -->

<!-- FOOTER -->
<footer class="footer">
    &copy; <span id="year"></span> Hilal Yusoph. All rights reserved.
</footer>

<script>
    document.getElementById("year").textContent = new Date().getFullYear();
</script>

</body>
</html>