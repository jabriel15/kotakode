<?php require_once("auth.php"); ?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TanyaKode.com | login</title>

    <!-- ==== STYLE.CSS ==== -->
    <link rel="stylesheet" href="assets/css/home.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap-grid.css">

    <!-- ====  REMIXICON CDN ==== -->
    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css"
        rel="stylesheet"
    />

    <!-- =====Link Font ====== -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,300;0,500;0,700;1,300;1,500;1,700&display=swap" rel="stylesheet">

    <!-- ==== ANIMATE ON SCROLL CSS CDN  ==== -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    </head>

<body>

    <div class="screen-cover d-none d-xl-none"></div>

    <div class="row">
        <div class="col-12 col-lg-3 col-navbar d-none d-xl-block">
        <aside class="sidebar">
    <a href="#" class="sidebar-logo">
        <div class="d-flex justify-content-start align-items-center">
            <span>TanyaKode</span>
        </div>

        <button id="toggle-navbar" onclick="toggleNavbar()">
            <img src="assets/img/svg/navbar-times.svg" alt="">
        </button>
    </a>

    <h5 class="sidebar-title">Features</h5>

    <a href="dashboard.php" class="sidebar-item" onclick="toggleActive(this)">

        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21 14H14V21H21V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10 14H3V21H10V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21 3H14V10H21V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10 3H3V10H10V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

        <span>Forum</span>
    </a>

    <a href="tags.php" class="sidebar-item" onclick="toggleActive(this)">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21 14H14V21H21V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10 14H3V21H10V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21 3H14V10H21V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10 3H3V10H10V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

        <span>Tags</span>
    </a>

    <a href="blogs.php" class="sidebar-item active" onclick="toggleActive(this)">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M21 14H14V21H21V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10 14H3V21H10V14Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21 3H14V10H21V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M10 3H3V10H10V3Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

        <span>Blogs</span>
    </a>

    <h5 class="sidebar-title">Others</h5>

    <a href="logout.php" class="sidebar-item" onclick="toggleActive(this)">

        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 17L21 12L16 7" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M21 12H9" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H9" stroke="#ABB3C4" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

        <span>Logout</span>
    </a>

</aside>
</div>

<div class="col-12 col-xl-9">
    <div class="nav">
        <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
            <div class="d-flex justify-content-start align-items-center">
                <button id="toggle-navbar" onclick="toggleNavbar()">
                    <img src="assets/img/svg/burger.svg" class="mb-2" alt="">
                </button>
                <h2 class="nav-title">Blog</h2>
            </div>
            <button class="btn-notif d-block d-md-none"><img src="assets/img/svg/bell.svg" alt=""></button>
        </div>

    <div class="content">
        <div class="row">
            <div class="col">
                <p>Tempat santai bagi programmer untuk menjelajah hal seputar pemrograman dalam bentuk sumber referensi bacaan, tutorial coding/proyek IT, serta berita terbaru terkait framework coding.</p>
                <div class="row g-2">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Search by keywords">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Search by tags">
                    </div>
                    <input type="submit" value="search" class="btn btn-primary">
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-sm-12">
                <div class="card mb-3"">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="assets/img/blog1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Koneksi DB server dengan Web Service REST API</h5>
                            <p class="card-text">Web service adalah aplikasi web yang menjembatani koneksi antara aplikasi lain seperti mobile dan desktop dengan basis data server. contohnya aplikasi mobile saat ingin mengakses database harus melalui web service terlebih dahulu. Web service adalah aplikasi berbasis web juga, sehingga dapat dibuat dengan menggunakan bahasa pemrograman berbasis web....</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-12">
                <div class="card mb-3"">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="assets/img/blog3.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Panduan Lengkap Tutorial REST API</h5>
                            <p class="card-text">Blog tutorial ini panduan lengkap untuk pemula untuk membuat REST API menggunakan PHP Native dengan Studi Kasus Aplikasi Notes.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-sm-12">
                <div class="card mb-3"">
                    <div class="row g-0">
                        <div class="col-md-4">
                        <img src="assets/img/blog2.png" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Tutorial Konsep dan Pembuatan REST API</h5>
                            <p class="card-text">Konten blog ini berisi tentang tuorial dan pembuatan konsep REST API Aplikasi Pemesanan Pakaian.</p>
                            <p class="card-text"><small class="text-muted">Last updated 4 mins ago</small></p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div> 
        
    </div>
</div>
</div>




<!-- Bootstrap JS -->
<script src="assets/bootstrap/dist/js/bootstrap.bundle.js"></script>

<script>
const navbar = document.querySelector('.col-navbar')
const cover = document.querySelector('.screen-cover')

const sidebar_items = document.querySelectorAll('.sidebar-item')

function toggleNavbar() {
    navbar.classList.toggle('d-none')
    cover.classList.toggle('d-none')
}

function toggleActive(e) {
    sidebar_items.forEach(function(v, k) {
        v.classList.remove('active')
    })
    e.closest('.sidebar-item').classList.add('active')

}
</script>
</body>

</html>