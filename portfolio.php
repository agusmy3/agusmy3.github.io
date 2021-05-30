<?php
include("header.php");
include('arr_portfolio.php');
?>

  <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"> Portfolio </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active"><a href="#">Portfolio</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-success card-outline">
             
              <div class="card-body">
                <div>
                  <div class="btn-group w-100 mb-2">
                    <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="Android"> Android </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="Web"> Web </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="SPK"> SPK </a>
                    <a class="btn btn-info" href="javascript:void(0)" data-filter="E-commerce"> E-commerce </a>
                  </div>
                </div>
                <div>
                  <div class="filter-container p-0 row">
                      <?php
                      foreach($arr_portfolio as $k => $v){
                          $arr_cate = "";
                          foreach($v['category'] as $cat){
                              $arr_cate .= $cat.",";
                          }
                        ?>


                        <div class="filtr-item col-sm-12 col-md-3" data-category="<?= substr($arr_cate, 0, -1);?>" data-sort="sample">
                            <div class="card card-primary card-outline">
                                <div class="card-body">

                                    <div class="row">
                                    <div class="col-md-12 text-center">
                                    <img src="dist/img/<?= $v['main_photo'];?>" style="height: 200px;width: 100%">
                                    </div>
                                    </div>

                                </div>
                                
                                <div class="card-footer">
                                <a href="#" data-toggle="modal" data-target="#modal-port" data-index="<?= $k;?>" class="btn btn-info btn-block btn-sm modal-port"><i class="fas fa-eye fa-fw"></i> See More</a>
                                </div>
                            </div>
                        </div>                        

                        <?php
                      }
                      ?>
                    
                    
                  </div>
                </div>

              </div>
            </div>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

    <div class="modal fade" id="modal-port">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Description</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <span class="desc_port"></span>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

<?php
include("footer.php");
?> 
