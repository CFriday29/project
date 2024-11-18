<?= $this->extend('assets/template'); ?>


<?= $this->section('content'); ?>
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
        <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="material-symbols-rounded">notifications</i>
        </a>
        <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
          <li class="mb-2">
            <a class="dropdown-item border-radius-md" href="javascript:;">
              <div class="d-flex py-1">
                <div class="my-auto">
                  <img src="../assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="text-sm font-weight-normal mb-1">
                    <span class="font-weight-bold">New message</span> from Laur
                  </h6>
                  <p class="text-xs text-secondary mb-0">
                    <i class="fa fa-clock me-1"></i>
                    13 minutes ago
                  </p>
                </div>
              </div>
            </a>
          </li>
          <li class="mb-2">
            <a class="dropdown-item border-radius-md" href="javascript:;">
              <div class="d-flex py-1">
                <div class="my-auto">
                  <img src="../assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="text-sm font-weight-normal mb-1">
                    <span class="font-weight-bold">New album</span> by Travis Scott
                  </h6>
                  <p class="text-xs text-secondary mb-0">
                    <i class="fa fa-clock me-1"></i>
                    1 day
                  </p>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a class="dropdown-item border-radius-md" href="javascript:;">
              <div class="d-flex py-1">
                <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                  <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <title>credit-card</title>
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                      <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF" fill-rule="nonzero">
                        <g transform="translate(1716.000000, 291.000000)">
                          <g transform="translate(453.000000, 454.000000)">
                            <path class="color-background" d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z" opacity="0.593633743"></path>
                            <path class="color-background" d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="d-flex flex-column justify-content-center">
                  <h6 class="text-sm font-weight-normal mb-1">
                    Payment successfully completed
                  </h6>
                  <p class="text-xs text-secondary mb-0">
                    <i class="fa fa-clock me-1"></i>
                    2 days
                  </p>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
      <div class="profile-pic" style="margin-top: 20px;"></div>
      <span class=" username" style="margin-top: 20px;">Mailaffaiza</span>
      <span class="role" style="margin-top: 20px;">Admin</span>
      <i class="fas fa-caret-down" style="margin-top: 20px;"></i>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="container emp-profile">
    <form method="post">
      <div class="row">
        <div class="col-md-4">
          <div class="profile-img">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt="" />
            <div class="file btn btn-lg btn-primary">
              Change Photo
              <input type="file" name="file" />
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="profile-head">
            <h5>
              Kshiti Ghelani
            </h5>
            <h6>
              Web Developer and Designer
            </h6>
            <ul class="nav nav-tabs pt-md-7" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-2">
          <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" />
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 offset-md-4">
          <div class="tab-content profile-tab" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <div class="row">
                <div class="col-md-2">
                  <label>Name</label>
                </div>
                <div class="col-md-2">
                  <p>Kshiti Ghelani</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <label>Email</label>
                </div>
                <div class="col-md-2">
                  <p>kshitighelani@gmail.com</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <label>Phone</label>
                </div>
                <div class="col-md-2">
                  <p>123 456 7890</p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <label>Profession</label>
                </div>
                <div class="col-md-2">
                  <p>Web Developer</p>
                </div>
              </div>
            </div>
          </div>
        </div>
    </form>
  </div>
  <?= $this->endSection(); ?>