<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width", initial-scale="1">
    <title>Mendrez Sem - Home</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- REMIX ICONS -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>

<!-- HEADER -->
<header>
    <a href="#" class="logo">Mendrez<span>Sem.</span></a>

    <ul class="navigation-list">
        <li><a href="#" class="active">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="freelancing.php">Freelancing</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="collaboration.php">Collaboration</a></li>
    </ul>

    <div class="top-button">
        <a href="#" class="contact-me-btn">Contact me</a>
    </div>
</header>
<!-- HERO -->

<section class="main-section">
    <div class="main-content">
        <h4 class="first-h4">Bonjour!</h4>
        <h1>I'm <span class="input"></span></h1>
        <h4 class="second-h4">How can I assist you today?</h4>
        <p>To showcase my skills, experience, and passion for technology, providing a platform to share my knowledge, projects, and achievements. Utilizing my background in computer science and proficiency in web development, I aim to create an engaging online presence that reflects my dedication to continuous learning and my ability to contribute to the field of technology. Through my personal website, I aspire to connect with like-minded individuals, collaborate on exciting projects, and inspire others to pursue their own passions in the world of technology.</p>
        <div class="socialmedia-buttons">
            <a href="https://www.facebook.com/SemmMendrez" target="_blank"><i class="ri-facebook-fill"></i></a>
            <a href="https://www.behance.net/semarsonmendrez" target="_blank"><i class="ri-behance-fill"></i></a>
            <a href="https://dribbble.com/mendrezsemm" target="_blank"><i class="ri-dribbble-line"></i></a>
            <a href="https://www.linkedin.com/in/mendrezsemm/" target="_blank"><i class="ri-linkedin-fill"></i></a>
            <a href="https://www.youtube.com/@SemMendrez" target="_blank"><i class="ri-youtube-fill"></i></a>           
        </div>
        <div class="main-button">
            <button onclick="downloadFile()" class="download-button">Download CV</button>
        </div>
    </div>
</section>

<!-- JS LINK -->
<script src="assets/js/script.js"></script>

<!-- TYPED JS -->
<script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

<!-- TYPED JS MAIN CODE -->
<script>
    var typed = new Typed(".input", {
        strings:["Sem", "Sem Mendrez", "Student", "Computer Science", "Web Developer", "Freelancer", "CSR"], 
        typeSpeed: 70,
        backSpeed: 65,
        loop:true
    })
</script>

<!-- DOWNLOAD FILE MAIN CODE -->
<script>
    function downloadFile() {
      
      const link = document.createElement('a');
      link.href = 'assets/files/Resume - Mendrez, Semarson.pdf';
      link.download = 'Mendrez Sem - Resume.pdf';

      document.body.appendChild(link);

      link.click();

      document.body.removeChild(link);
    }
  </script>



</body>
</html>