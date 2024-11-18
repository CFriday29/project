<?= $this->extend('assets/template');?>

<?= $this->section('content');?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
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
<body>
    <div class="container-fluid py-2">
        <h2>Add User</h2>
          <form action="<?php echo site_url('user/save'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <!-- <div class="col"> -->
                    <div class="upload-photo">
                        <img src="https://via.placeholder.com/100" alt="Profile Photo" class="profile-img">
                        <label for="photo">Upload Photo</label>
                        <input type="file" id="photo" name="photo" accept="image/*">
                    </div>
                <!-- </div> -->
            </div>
            <div class="container" style="justify-content: center;">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-half">
                                <label for="first_name">First Name</label>
                                <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-half">
                                <label for="last_name">Last Name</label>
                                <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <div class="form-half">
                                <label for="email">Your Email</label>
                                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <div class="form-half">
                                <label for="phone">Phone Number</label>
                                <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          </form>
    </div>
</body>
<!-- <div class="row">
            <form action="<?php echo site_url('user/save'); ?>" method="post" enctype="multipart/form-data">
                <div class="col">
                    <div class="upload-photo">
                        <img src="https://via.placeholder.com/100" alt="Profile Photo" class="profile-img">
                        <label for="photo">Upload Photo</label>
                        <input type="file" id="photo" name="photo" accept="image/*">
                    </div>

                    <div class="form-group">
                        <div class="form-half">
                            <label for="first_name">First Name</label>
                            <input type="text" id="first_name" name="first_name" placeholder="Enter your first name" required>
                        </div>
                        <div class="form-half">
                            <label for="last_name">Last Name</label>
                            <input type="text" id="last_name" name="last_name" placeholder="Enter your last name" required>
                        </div>
                    </div>
                </div>
                
                <div class="col">
                    <div class="form-group">
                        <div class="form-half">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-half">
                            <label for="phone">Phone Number</label>
                            <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-half">
                            <label for="dob">Date of Birth</label>
                            <input type="date" id="dob" name="dob" required>
                        </div>
                        <div class="form-half">
                            <label for="gender">Gender</label>
                            <select id="gender" name="gender" required>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                </div>
                

                <div class="form-group-full">
                    <button type="submit">Add Now</button>
                </div>
            </form>
        </div>   -->
    <?= $this->endSection();?>