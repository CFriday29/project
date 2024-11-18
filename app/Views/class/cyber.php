<?= $this->extend('assets/template');?>

<?= $this->section('content');?>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg mt-3">
    <!-- Left Section -->
    <div class="container">
    <div class="row">
        <div class="col-md-4 d-flex justify-content-start">
            <img class="card-img-top" src="<?= base_url('img/cyber.png') ?>" style="width: 100%;" />
        </div>

        <div class="col-md-8">
            <div class="right-section">
                <h3>SILABUS</h3>

                <div class="syllabus-item">
                    <input type="checkbox" id="html">
                    <label for="html">HyperText Markup Language (HTML)</label>
                </div>

                <div class="syllabus-item">
                    <input type="checkbox" id="css">
                    <label for="css">Cascading Style Sheets</label>
                </div>

                <div class="syllabus-item">
                    <input type="checkbox" id="javascript">
                    <label for="javascript">JavaScript</label>
                </div>

                <div class="syllabus-item">
                    <input type="checkbox" id="frameworks">
                    <label for="frameworks">Framework dan Library</label>
                </div>

                <div class="add-to-cart mt-3 d-flex justify-content-end">
                <button type="button" class="btn btn-primary">Add to Cart</button>
            </div>
            </div>
        </div>
    </div>
</div>
</main>
<?= $this->endSection();?>