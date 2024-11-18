<?= $this->extend('assets/template');?>

<?= $this->section('content');?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<div class="container-fluid py-5 d-flex justify-content-center">
    <form action="<?php echo site_url('pages/team'); ?>" method="post" enctype="multipart/form-data" style="max-width: 600px; width: 100%;">
        <div class="form-group">
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="firstName">Name</label>
                    <input type="text" id="name" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="company">Company</label>
                    <input type="text" id="company" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="emailAddress">Email</label>
                    <input type="email" id="emailAddress" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="mobilePhone">Mobile Phone</label>
                    <input type="email" id="mobilePhone" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="username">Username</label>
                    <input type="email" id="username" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="password">Password</label>
                    <input type="email" id="password" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="confirmPassword">Confirm Password</label>
                    <input type="email" id="confirmPassword" class="form-control form-control-lg" />
                </div>
            </div>
        </div>
        <div class="mt-4 pt-2 text-center">
            <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="submit" value="Submit" />
        </div>
    </form>
</div>
 <?= $this->endSection();?>