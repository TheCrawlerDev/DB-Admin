<!DOCTYPE html>
<html lang="en">
<?php include(VIEW_DIR.'inc/head.php');?>
<body>
    <div class="wrapper">
        <?php include(VIEW_DIR.'inc/dashboard.php');?>
        <div class="main-panel">
            <!-- Navbar -->
            
            <!-- End Navbar -->
            <?php include(VIEW_DIR.$data['page'].'.php');?>
            <?php include(VIEW_DIR.'inc/footer.php');?>
        </div>
    </div>

</body>
</html>