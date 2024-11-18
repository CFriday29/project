<?= $this->extend('assets/template');?>

<?= $this->section('content');?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
<div class="container-fluid py-5 d-flex justify-content-center">
    <form action="<?php echo site_url('pages/team'); ?>" method="post" enctype="multipart/form-data" style="max-width: 600px; width: 100%;">
        <h2>Data</h2>
        <div class="form-group">
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="firstName">Name</label>
                    <input type="text" id="name" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="age">Age</label>
                    <input type="text" id="age" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="originAgency">Origin Agency</label>
                    <input type="email" id="originAgency" class="form-control form-control-lg" />
                </div>
            </div>
            <h2>Alamat</h2>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="country">Country</label>
                    <input type="email" id="country" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="address">Address</label>
                    <input type="email" id="address" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="city">City</label>
                    <input type="email" id="city" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="state">State</label>
                    <input type="email" id="state" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="zipCode">Zip Code</label>
                    <input type="email" id="zipCode" class="form-control form-control-lg" />
                </div>
            </div>
            <h2>Credit Card Details</h2>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="cardName">Name On Card</label>
                    <input type="email" id="cardName" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="cardNumber">Card Number</label>
                    <input type="email" id="cardNumber" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
            <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="monthYear">Card Expiration</label>
                    <div class="d-flex align-items-center">
                        <div class="position-relative me-2" style="max-width: 120px;">
                            <select id="month" class="form-control form-control-lg">
                                <option value="" disabled selected>Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                            </select>
                            <i class="fas fa-caret-down position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); pointer-events: none;"></i>
                        </div>
                    <div class="position-relative" style="max-width: 120px;">
                        <select id="year" class="form-control form-control-lg">
                            <option value="" disabled selected>Year</opt>
                            <?php
                                $currentYear = date("Y");
                                for ($i = 0; $i < 10; $i++) {
                                $year = $currentYear + $i;
                                echo "<option value='$year'>$year</option>";
                                }
                            ?>
                        </select>
                        <i class="fas fa-caret-down position-absolute" style="right: 10px; top: 50%; transform: translateY(-50%); pointer-events: none;"></i>
                    </div>
                    </div>
            </div>
        </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="cardCode">Card Security Code</label>
                    <input type="email" id="cardCode" class="form-control form-control-lg" />
                </div>
            </div>
            <h2>Kontak</h2>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" id="email" class="form-control form-control-lg" />
                </div>
            </div>
            <div class="col-md-12 mb-4">
                <div data-mdb-input-init class="form-outline">
                    <label class="form-label" for="phone">Phone</label>
                    <input type="email" id="phone" class="form-control form-control-lg" />
                </div>
            </div>
        </div>     
        <div class="mt-4 pt-2 text-center">
            <input data-mdb-ripple-init class="btn btn-primary btn-lg" type="Bayar Sekarang" value="Bayar Sekarang" />
        </div>
    </form>
    </div>
 <?= $this->endSection();?>