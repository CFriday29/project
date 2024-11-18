<!-- application/views/layout/content.php -->
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
    <div class="order">
        <h1>Order List</h1>
        <div class="filter-container">

            <button class="btn btn-outline-secondary">Filter By</button>
            <div class="filter-item">
                <input type="date" class="form-control" value="2019-02-14">
            </div>
            <!-- <select>
                <option>Date</option>
            </select> -->
            <div class="col-auto">
                <select class="form-select">
                    <option selected>Order Type</option>
                </select>
            </div>
            <div class="col-auto">
                <select class="form-select">
                    <option selected>Order Status</option>
                </select>
            </div>
            <button>Reset Filter</button>
        </div>
        <br>
        <div class="container">
            <table class="table order-table">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Date</th>
                        <th>Type</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>00001</td>
                        <td>Christine Brooks</td>
                        <td>089 Kutch Green Apt. 448</td>
                        <td>14 Feb 2019</td>
                        <td>Electric</td>
                        <td><span class="status completed">Completed</span></td>
                    </tr>
                    <tr>
                        <td>00002</td>
                        <td>Rosie Pearson</td>
                        <td>979 Immanuel Ferry Suite 526</td>
                        <td>14 Feb 2019</td>
                        <td>Book</td>
                        <td><span class="status processing">Processing</span></td>
                    </tr>
                </tbody>

                <!-- Add more rows as needed -->
            </table>
        </div>

    </div>
    <?= $this->endSection();?>

</main>