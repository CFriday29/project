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
            <h3 class="mb-0 h4 font-weight-bolder">TEAM</h3>
        </div>
        <div class="d-flex justify-content-end">
         <button onclick="window.location.href='<?=base_url('Form/add_team')?>'" class="btn btn-primary">Add Team
         </button>
        </div>
        <div class="row align-i">
            <div class="col-lg-3 col-md-3 mt-3 mb-3 text-center">
                <div class="card" style="border: none; border-radius: 20px;">
                    <div class="card-body">
                        <div>
                        <img class="" src=" <?= base_url('img/front.png')?>"
                        style="border-radius: 100%; width: 150px; height: 150px;">
                        </img>
                        </div>
                        <h3 class="mt-3">
                            Jason Price
                        </h3>
                        <p style="opacity: 75%;">Admin</p>
                        
                        <div class="">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td class="text-end">
                                            Email :
                                        </td>
                                        <td>
                                            example@gmail.com
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mt-3 mb-3 text-center">
                <div class="card" style="border: none; border-radius: 20px;">
                    <div class="card-body">
                        <div>
                        <img class="" src=" <?= base_url('img/front.png')?>"
                        style="border-radius: 100%; width: 150px; height: 150px;">
                        </img>
                        </div>
                        <h3 class="mt-3">
                            Jukkoe Sisao
                        </h3>
                        <p style="opacity: 75%;">CEO</p>
                        
                        <div class="">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td class="text-end">
                                            Email :
                                        </td>
                                        <td>
                                            example@gmail.com
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mt-3 mb-3 text-center">
                <div class="card" style="border: none; border-radius: 20px;">
                    <div class="card-body">
                        <div>
                        <img class="" src=" <?= base_url('img/front.png')?>"
                        style="border-radius: 100%; width: 150px; height: 150px;">
                        </img>
                        </div>
                        <h3 class="mt-3">
                        Harriet King
                        </h3>
                        <p style="opacity: 75%;">CTO</p>
                        
                        <div class="">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td class="text-end">
                                            Email :
                                        </td>
                                        <td>
                                            example@gmail.com
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 mt-3 mb-3 text-center">
                <div class="card" style="border: none; border-radius: 20px;">
                    <div class="card-body">
                        <div>
                        <img class="" src=" <?= base_url('img/front.png')?>"
                        style="border-radius: 100%; width: 150px; height: 150px;">
                        </img>
                        </div>
                        <h3 class="mt-3">
                        Lenora Benson
                        </h3>
                        <p style="opacity: 75%;">Lead</p>
                        
                        <div class="">
                            <table class="w-100">
                                <tbody>
                                    <tr>
                                        <td class="text-end">
                                            Email :
                                        </td>
                                        <td>
                                            example@gmail.com
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
    <?= $this->endSection();?>