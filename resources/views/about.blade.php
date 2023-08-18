<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nasril Blog - About</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="shortcut icon" href="{{ asset('blog') }}/assets/images/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Ubuntu:wght@700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('portfolio') }}/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="alert-overlay">
        <div id="alert-box">
            <div class="alert-header">
                <span class="alert-title">Peringatan!</span>
                <button class="close-btn" onclick="closeAlert()">&times;</button>
            </div>
            <div class="alert-body">
                <p>Maaf, website ini belum responsive. Silakan buka di perangkat dengan layar yang lebih lebar.</p>
            </div>
        </div>
    </div>
    <button id="back-to-top-btn"><i class="bx bxs-chevrons-up"></i></button>
    <!-- header design -->
    <header>
        <ul class="navlist">
            <li><a href="/" class="">HOME</a></li>
            <li><a href="#portfolio" class="">PORTFOLIO</a></li>
            <li><a href="#contact" class="">HIRE ME</a></li>
        </ul>
        <div id="light-dark-btn" class="bx bxs-moon"></div>
        <div class="bar-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
    </header>
    <!-- home section design -->
    <section class="home" id="home">
        <div class="row-home">
            <div class="home-content">
                <h1>ACHMAD NASRIL SHOFBRIANSYAH</h1>
                <div class="text-home-animation">
                    <h1>I'm<span class="multiText"></span></h1>
                </div>
                <p>My interests lie in the field of cybersecurity, with a particular focus on penetration testing and bug bounty hunting.</p>
                <div class="home-social-media">
                    <a href="#"><i class="bx bxl-blogger"></i></a>
                    <a href="#"><i class="bx bxl-linkedin"></i></a>
                    <a href="#"><i class="bx bxl-github"></i></a>
                    <a href="#"><i class="bx bxl-instagram"></i></a>
                </div>
                <a href="{{ asset('portfolio') }}/img/CV-Achmad-Nasril-Shofbriansyah.pdf" download="CV-Achmad-Nasril-Shofbriansyah.pdf" class="btn">Download CV</a>
                <a href="#contact" class="btn2">Contact Me</a>
            </div>
            <div class="home-img">
                <img src="{{ asset('portfolio') }}/img/sudah.webp" alt="home-gambar" />
            </div>
        </div>
    </section>

    <!-- about section design -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="{{ asset('portfolio') }}/img/about-img.webp" alt="img-home" />
        </div>
        <div class="about-text">
            <h2>About <span>Me</span></h2>
            <p>
                I am a graduate of computer and network engineering with good academic/non-academic achievements from
                Walisongo 2 Gempol Vocational School. During school, I was also active as a tool man and also often attended
                online/offline training. Apart from that, I am also a freelancer. I understand matters relating to network systems,
                cyber security supported by the ability to configure network devices, the Linux server operating system,
                recognition bugs that exist on the website and operating system. I am also able to communicate well in
                Indonesian
            </p>
            <p>Aside from my interest in cyber security, I also have experience in repairing computers, laptops, and smartphones. I find it rewarding to be able to troubleshoot and solve technical issues for myself and others.</p>
            <a href="" class="btn-about">Read More</a>
        </div>
    </section>
    <!-- Skill section design -->
    <section class="skill" id="skill"></section>
    <!-- portfolio section design -->
    <section class="portfolio" id="portfolio">
        <div class="main-text">
            <p>This is my portfolio</p>
            <h2><span>My</span> Portfolio</h2>
            <div class="button-group">
                <button id="btn-sertifikat" class="btn-list"><i class="bx bxs-certification"></i> Certificate</button>
                <button id="btn-foto" class="btn-list"><i class="bx bxs-camera"></i> Photo</button>
            </div>
        </div>
        <div class="portfolio-over">
            <div class="portfolio-content" id="image-list">
                <div class="row">
                    <img src="{{ asset('portfolio') }}/img/python-intro.webp" alt="" data-kategori="sertifikat" />
                    <div class="layer">
                        <a href="{{ asset('portfolio') }}/img/python-intro.webp" data-lightbox="models" data-title="Caption1"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('portfolio') }}/img/lks-sahabat-ganjar.webp" alt="" data-kategori="sertifikat" />
                    <div class="layer">
                        <a href="{{ asset('portfolio') }}/img/lks-sahabat-ganjar.png" data-lightbox="models" data-title="Caption2"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('portfolio') }}/img/5570834.jpg" alt="" data-kategori="sertifikat" />
                    <div class="layer">
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('portfolio') }}/img/5570834.jpg" alt="" data-kategori="sertifikat" />
                    <div class="layer">
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('portfolio') }}/img/5570834.jpg" alt="" data-kategori="sertifikat" />
                    <div class="layer">
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('portfolio') }}/img/5570834.jpg" alt="" data-kategori="sertifikat" />
                    <div class="layer">
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('portfolio') }}/img/5570834.jpg" alt="" data-kategori="sertifikat" />
                    <div class="layer">
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('portfolio') }}/img/5570834.jpg" alt="" data-kategori="sertifikat" />
                    <div class="layer">
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('portfolio') }}/img/5570834.jpg" alt="" data-kategori="sertifikat" />
                    <div class="layer">
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
                <div class="row">
                    <img src="{{ asset('portfolio') }}/img/5570834.jpg" alt="" data-kategori="sertifikat" />
                    <div class="layer">
                        <a href="#"><i class="bx bx-link-external"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section design -->
    <section class="contact" id="contact">
        <div class="contact-text">
            <h2>Contact <span>Me!</span></h2>
            <h4>If you Lorem ipsum dolor sit amet.</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nobis error natus obcaecati rem cupiditate!</p>
            <div class="list">
                <li><a href="#">08977461894</a></li>
                <li><a href="#">arilsofbriansyah@gmail.com</a></li>
                <li><a href="#">Like Shake</a></li>
            </div>
            <div class="contact-icons">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-facebook"></i></a>
            </div>
        </div>
        <div class="contact-form">
            <form action="">
                <input type="text" placeholder="Your Name" required />
                <input type="email" placeholder="Your Email" required />
                <input type="number" placeholder="number" required />
                <textarea name="" id="" cols="35" rows="10" placeholder="How i can help you"></textarea>
                <input type="submit" value="Send Message" class="submit" required />
            </form>
        </div>
    </section>
    <!-- End section design -->
    <section class="end">
        <div class="last-text">
            <p>Copyright @ Cococrans27</p>
        </div>
    </section>
    <!-- Custom js design -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script type="text/javascript" src="{{ asset('portfolio') }}/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox-plus-jquery.min.js" integrity="sha512-U9dKDqsXAE11UA9kZ0XKFyZ2gQCj+3AwZdBMni7yXSvWqLFEj8C1s7wRmWl9iyij8d5zb4wm56j4z/JVEwS77g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>
