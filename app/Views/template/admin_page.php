<!doctype html>
<!-- 
* Bootstrap Simple Admin Template
* Version: 2.1
* Author: Alexis Luna
* Website: https://github.com/alexis-luna/bootstrap-simple-admin-template
-->
<html lang="en">

<?= $this->include('template/head'); ?>

<body>
    <div class="wrapper">
        <!-- Sidebar komponen -->
        <?= $this->include('template/sidebar'); ?>
        <!-- end sidebar -->
        <div id="body" class="active">
            <!-- navbar navigation component -->
            <?= $this->include('template/navbar'); ?>
            <!-- end of navbar navigation -->
            <!-- cKOnten -->
            <?= $this->renderSection('content'); ?>
        </div>
    </div>
    <!-- JS -->
    <?= $this->include('template/js'); ?>
</body>

</html>