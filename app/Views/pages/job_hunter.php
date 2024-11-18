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
    <body>
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-8">JOB HUNTER</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Job Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <div class="flex justify-between items-center mb-4">
                    <span class="bg-blue-100 text-blue-600 text-sm font-semibold px-2.5 py-0.5 rounded">70% Higher Salary</span>
                    <i class="far fa-bookmark text-purple-500"></i>
                </div>
                <div class="mb-4">
                    <img src="https://placehold.co/50x50" alt="Company logo" class="inline-block mr-2">
                    <span class="font-semibold">Operations Specialist (Product Enablement)</span>
                </div>
                <div class="mb-4">
                    <span class="text-gray-500">AI Rudder</span>
                    <i class="fas fa-check-circle text-teal-500 ml-1"></i>
                </div>
                <div class="mb-4">
                    <div class="flex items-center mb-2">
                        <i class="fas fa-map-marker-alt text-gray-500 mr-2"></i>
                        <span>On-site</span>
                    </div>
                    <div class="flex items-center mb-2">
                        <i class="fas fa-clock text-gray-500 mr-2"></i>
                        <span>Full Time</span>
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-money-bill-wave text-gray-500 mr-2"></i>
                        <span>Rp 7 - 15 Mio</span>
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <span class="bg-pink-100 text-pink-600 text-sm font-semibold px-2.5 py-0.5 rounded">On-Site</span>
                    <span class="text-teal-500 text-sm">5 priority slots left <i class="fas fa-info-circle"></i></span>
                </div>
            </div>
    </body>
    <?= $this->endSection();?>