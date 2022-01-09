
    <ul class="nav navbar-right top-nav" style="background-color: #004D97;">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;"><i class="fa fa-user"></i> 
                <?php 
                    if(checkSession('admin_name')){
                        echo getSession('admin_name');
                    }elseif (checkSession('men_name')) {
                        echo getSession('men_name');
                    }
                ?> 
            <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <!-- <li>
                    <a href="detail_profile.php?detail_acc=<?php echo getSession('account_id'); ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                </li> -->
                <li class="divider"></li>
                <li>
                    <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>