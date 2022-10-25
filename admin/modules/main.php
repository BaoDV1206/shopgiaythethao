<div class="clear"></div>
<div class="main">
<?php 
        if(isset($_GET['action'])){
            $tam = $_GET['action'];
        }else{
            $tam = '';
        }
        if($tam == 'quanlyloaiday'){
            include("modules/ql_loaigiay/them.php");
        }
        else{
            include("modules/dashboard.php");
        }
        ?>
</div>