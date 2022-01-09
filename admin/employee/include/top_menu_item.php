    <ul class="nav navbar-right top-nav" style="background-color: #004D97;">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: white;"><i class="fa fa-user"></i> 
                <?php 
                    if(checkSession('admin_name')){
                        echo getSession('admin_name');
                    }elseif (checkSession('employee_name')) {
                        echo getSession('employee_name');
                    }
                ?> 
            <b class="caret"></b></a>
            <ul class="dropdown-menu">
  
                <li class="divider"></li>
                <li>
                    <a href="../../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>
    </ul>