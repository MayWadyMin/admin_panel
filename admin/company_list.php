<?php 
    include_once "include/admin_header.php"; 
    include_once "function/delete_company.php";

    //   Navigation
    include_once "include/admin_nav.php"; 

    include_once 'function/pagination.php';

    $commons = new Common;

    $limit      = ( isset( $_GET['limit'] ) ) ? $_GET['limit'] : 3;
    $page       = ( isset( $_GET['page'] ) ) ? $_GET['page'] : 1;
    $links      = ( isset( $_GET['links'] ) ) ? $_GET['links'] : 7;
    $query = "SELECT company.company_id,company.company_name,company.company_email,company.company_address FROM company";
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
                    <div class="col-md-6 add-new">
                        <a class="btn btn-primary" href="company_create.php" role="button">Add New Company</a>
                    </div>
                    <div class="col-md-6">
                        <!-- Search -->
                        <form class="form-inline search-box">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-primary" type="submit">Search</button>
                        </form>
                        <!-- CSV Export link -->
                        <span class="export-btn"><a href="function/csv_export.php" class="btn btn-success "><i class="dwn"></i> Export</a></span>
                    </div> 
                    
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th colspan="2">Action</th>
                                </tr>
                           
                                <?php for( $i = 0; $i < count( $results->data ); $i++ ) : ?>
                                    <tr>
                                            <td><?php echo $results->data[$i]['company_name']; ?></td>
                                            <td><?php echo $results->data[$i]['company_email']; ?></td>
                                            <td><?php echo $results->data[$i]['company_address']; ?></td>
                
                                            <td><a href="company_edit.php?edit_id=<?php echo $results->data[$i]['company_id']; ?>" formaction="" class="btn btn-xs btn-success confirm_edit">Edit</a></td>
                                            <td><a href="company_list.php?del_id=<?php echo $results->data[$i]['company_id']; ?>" formaction="" class="btn btn-xs btn-danger confirm_del">Delete</a></td>
                                      
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
    <?php include_once "include/admin_footer.php"; ?>

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