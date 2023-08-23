<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>CMS Sample</title>
   
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">    
    <link href="assets/sb-admin-2.min.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
   

</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/display">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Dashboard</div>
            </a>
            
            <hr class="sidebar-divider">
                <div class="sidebar-heading">
                    Interface
                </div>

                <li class="nav-item">
                        <a class="nav-link collapsed" href="/display" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span>Student List</span>
                        </a>

                        <a class="nav-link collapsed" href="/list" data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog "></i>
                            <span>Staff List</span>
                        </a>

                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">    
                 </li>

                <hr class="sidebar-divider">

                    <div class="sidebar-heading">
                        Addons
                    </div>

                    <li class="nav-item">
                        <a class="nav-link" href="/student">
                            <i class="fas fa-fw fa-chart-area"></i>
                            <span>Add Student</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/registration">
                            <i class="fas fa-fw fa-chart-area"></i>
                            <span>Add Staff</span></a>
                    </li>
                    <li class="nav-item">
                        
                    </li>

                <hr class="sidebar-divider d-none d-md-block">

                <form action="/logout" method="POST">
                    @csrf
                    <button class="px-3 ml-2 text-white bg-primary border-primary border-0">Log out</button>
                </form>
        </ul>
        
            {{$slot}}

          
        <footer class="sticky-footer bg-white mt-100">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Sample 2023</span>
                </div>
            </div>
        </footer>
      
    </div>
    

</div>





<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
    </body>
</html>
      