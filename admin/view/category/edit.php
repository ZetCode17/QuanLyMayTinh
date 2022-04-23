<!-- Đây là trang chủ admin -->
 <?php require_once __DIR__."/../../layouts/header.php"; ?>          
        <!-- Page Heading NOI DUNG-->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Sửa danh mục
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-list"></i><a href="">Danh mục</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-plus"></i> Thêm mới
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form class="form-horizontal" action="Category.php" method="POST">
                    <div class="form-group row">
                        <input type="hidden" name="action" value="edit_category">
                        <input type="hidden" name="id" value="<?php echo $current_category['categoryID']; ?>">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Tên danh mục</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputEmail3" placeholder="new category" name="name" value="<?php echo $current_category['categoryName']; ?>">
                            <?php require_once("../../testError/testError.php"); ?>                          
                        </div>
                    </div>
                    <div class="form-group row">
                         <div class="col-sm-2"></div>
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
                    <!-- /.row -->
<?php require_once __DIR__."/../../layouts/footer.php"; ?>       
                