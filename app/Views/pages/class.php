<?= $this->extend('assets/template');?>

<?= $this->section('content');?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-3 shadow-none border-radius-xl" id="navbarBlur"
        data-scroll="true">
        <div class="container-fluid py-1 px-3">
            <div class="search-container" style="margin-top: 20px;">
                <input type="text" class="search-input" placeholder="Search">
                <i class="fas fa-search search-icon"></i>
            </div>
            <div class="notification" style="margin-right: 12px; margin-top: 20px">
                <i class="fas fa-bell"></i>
            </div>
            <div class="profile-pic" style="margin-top: 20px;"></div>
            <span class=" username"style="margin-top: 20px;">Mailaffaiza</span>
                <span class="role"style="margin-top: 20px;">Admin</span>
                <i class="fas fa-caret-down"style="margin-top: 20px;"></i>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="container-fluid py-2">
        <div class="row">
            <h3 class="mb-0 h4 font-weight-bolder">Class</h3>
        </div>
        <div class="row align-i">
            <div class="col-lg-4 col-md-4 mt-4 mb-4 text-center">
                <div class="card">
                    <img class="card-img-top mx-auto d-flex text-center " src=" <?= base_url('img/cyber.png')?>"
                        style=" margin: auto">
                    </img>
                    <div class="card-body">
                        <h5 class="card-title">Front End Developer</h5>
                        <p class="card-text">Belajar cara membangun model yang dapat membuat prediksi atau mengambil
                            keputusan.</p>
                        <a href="#" class="btn btn-primary">Lihat Kelas</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-4 mb-4 text-center">
                <div class="card">
                    <img class="card-img-top mx-auto d-flex text-center " src=" <?= base_url('img/database.png')?>"
                        style=" margin: auto">
                    </img>
                    <div class="card-body">
                        <h5 class="card-title">Back End Developer</h5>
                        <p class="card-text">Mempelajari tentang komponen-komponen utama aplikasi android dan cara
                            mengaturnya.</p>
                        <a href="#" class="btn btn-primary">Lihat Kelas</a>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->endSection();?>