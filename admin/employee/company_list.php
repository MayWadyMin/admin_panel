<?php 
    include_once "include/staff_header.php"; 

    // Navigation
    include_once "include/staff_nav.php";

    include_once '../function/pagination.php';

    $commons = new Common;

    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 3;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    // $query = "SELECT company.company_id,company.company_name,company.company_email,company.company_address FROM company";
  

    if (!empty($_POST["search"]) || !empty($_SESSION['input'])) {
        if (!empty($_POST['search'])) {
            $_SESSION['input'] = $_POST['search_value'];
            $search_value = $_POST['search_value'];
        } else {
            $search_value = $_SESSION['input'];
        }
        $query = "SELECT * FROM company WHERE title company_name '%$search_value%' OR company_email LIKE '%$search_value%' OR company_address LIKE '%$search_value%'";
    } else {
        $query = "SELECT * FROM company ORDER BY company_id";
    }
    $paginator  = new Pagination( $commons->pdo, $query );
    $results    = $paginator->getData( $limit, $page );


?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Company Lists
                        </h1>
                    </div>
                    <div class="col-md-12">

                    <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" action="" method="POST">
                        <div class="input-group">
                            <input style="height:45px;" name="search_value" required type="text" value="
                                <?php if (!empty($_POST['search_value']) && empty($_SESSION['input'])) {
                                    echo $_POST['search_value'];
                                }
                                if (!empty($_SESSION['input'])) {
                                    echo $_SESSION['input'];
                                } ?>" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit" value="search" name="search">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->

                        <!-- Search -->
                        <form class="form-inline search-box" action="" method="POST">
                            <input class="form-control mr-sm-2" name="search_value" required type="text" value="
                                <?php if (!empty($_POST['search_value']) && empty($_SESSION['input'])) {
                                    echo $_POST['search_value'];
                                }
                                if (!empty($_SESSION['input'])) {
                                    echo $_SESSION['input'];
                                } ?>" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                            <button class="btn btn-primary" type="submit" name="search">Search</button>
                        </form>
                        <!-- CSV Export link -->
                        <span class="export-btn"><a href="../function/csv_export.php" class="btn btn-success "><i class="dwn"></i> Export</a></span>
                    </div> 
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                            
                                </tr>

        
                                <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
                                        <tr>
                                                <td><?php echo $results->data[$i]['company_name']; ?></td>
                                                <td><?php echo $results->data[$i]['company_email']; ?></td>
                                                <td><?php echo $results->data[$i]['company_address']; ?></td>
                                        </tr>
                                <?php endfor; ?>

                            </table>
                            <?php echo $paginator->createLinks( $links, 'pagination pagination-sm' ); ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    <!-- footer -->
    <?php include_once "include/staff_footer.php"; ?>

<script>
    $(function(){
        $('.confirm_del').click(function(){
            return confirm('Are you sure you want to delete!');
        });
        $('.confirm_edit').click(function(){
            return confirm('Are you sure you want to edit!');
        });
    });
</script>