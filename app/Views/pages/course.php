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
            <h3 class="mb-0 h4 font-weight-bolder">Programming</h3>
        </div>

        <div class="row align-i">
            <div class="col-lg-4 col-md-4 mt-4 mb-4 text-center">
                <div class="card">
                    <img class="card-img-top mx-auto d-flex text-center " src=" <?= base_url('img/cyber.png')?>"
                        style=" margin: auto">
                    </img>
                    <div class="card-body">
                        <h5 class="card-title">Cyber Security</h5>
                        <p class="card-text">Mengajarkan cara menjaga keamanan informasi dan sistem dalam dunia digital.
                        </p>
                        <button onclick="window.location.href='<?=base_url('class/cyber')?>'" class="btn btn-primary">Lihat Kelas</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-4 mb-4 text-center">
                <div class="card">
                    <img class="card-img-top mx-auto d-flex text-center " src=" <?= base_url('img/database.png')?>"
                        style=" margin: auto">
                    </img>
                    <div class="card-body">
                        <h5 class="card-title">Database Programming</h5>
                        <p class="card-text">Belajar cara membuat, mengelola, dan mengambil data dari database</p>
                        <a href="#" class="btn btn-primary">Lihat Kelas</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-4 mb-4 text-center">
                <div class="card">
                    <img class="card-img-top mx-auto d-flex text-center " src=" <?= base_url('img/cloud.png')?>"
                        style=" margin: auto">
                    </img>
                    <div class="card-body">
                        <h5 class="card-title">Cloud Computing</h5>
                        <p class="card-text">Memanfaatkan platform, dan perangkat lunak yang disediakan melalui
                            internet.</p>
                        <a href="#" class="btn btn-primary">Lihat Kelas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <h3 class="mb-0 h4 font-weight-bolder">Programming</h3>
        </div>
        <div class="row align-i">
            <div class="col-lg-4 col-md-4 mt-4 mb-4 text-center">
                <div class="card">
                    <img class="card-img-top mx-auto d-flex text-center " src=" <?= base_url('img/fullstack.png')?>"
                        style=" margin: auto">
                    </img>
                    <div class="card-body">
                        <h5 class="card-title">Full Stack Developer</h5>
                        <p class="card-text">Dapat menguasai front-end maupun back-end dalam pengembangan website atau
                            aplikasi.</p>
                        <a href="#" class="btn btn-primary">Lihat Kelas</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-4 mb-4 text-center">
                <div class="card">
                    <img class="card-img-top mx-auto d-flex text-center " src=" <?= base_url('img/analys.png')?>"
                        style=" margin: auto">
                    </img>
                    <div class="card-body">
                        <h5 class="card-title">Data Analys</h5>
                        <p class="card-text">Mengajarkan cara mengolah data, menemukan pola, dan menarik kesimpulan.</p>
                        <a href="#" class="btn btn-primary">Lihat Kelas</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 mt-4 mb-4 text-center">
                <div class="card">
                    <img class="card-img-top mx-auto d-flex text-center " src=" <?= base_url('img/engineer.png')?>"
                        style=" margin: auto">
                    </img>
                    <div class="card-body">
                        <h5 class="card-title">Data Engineer</h5>
                        <p class="card-text">Mencakup berbagai keterampilan teknis, seperti pemrograman, database, dan
                            cloud computing</p>
                        <a href="#" class="btn btn-primary">Lihat Kelas</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->endSection();?>