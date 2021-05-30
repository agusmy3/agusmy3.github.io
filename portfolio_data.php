<?php
include('arr_portfolio.php');
$data = $_GET['data'];
?>

<div class="card card-primary card-outline">
    <div class="card-body">

        <div class="row">
        <div class="col-md-5 text-center">
        <img src="dist/img/<?= $arr_portfolio[$data]['main_photo'];?>" style="height: 200px;width: 100%">
        </div>
        
        <div class="col-md-7">
        <ul>
            <li>Name : <?= $arr_portfolio[$data]['name']?></li>
            <li>Category : 
                <ul>
                    <?php
                    foreach($arr_portfolio[$data]['category'] as $cat){
                    ?>
                    <li><?= $cat;?></li>
                    <?php
                    }
                    ?>
                </ul>
            </li>
            <li>Technology : 
                <ul>
                    <?php
                    foreach($arr_portfolio[$data]['technology'] as $tech){
                    ?>
                    <li><?= $tech;?></li>
                    <?php
                    }
                    ?>
                </ul>
            </li>
            <li>Feature : 
                <ul>
                    <?php
                    foreach($arr_portfolio[$data]['feature'] as $feat){
                    ?>
                    <li><?= $feat;?></li>
                    <?php
                    }
                    ?>
                </ul>
            </li>
        </ul>
        </div>
        </div>

    </div>
    
</div>