<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


<!-- navbar if role is admin  -->
<?php
if($_SESSION['role'] == 'admin'){

?>
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                <div class="sidebar-brand-icon rotate-n-15">
                  
                </div>
                <div class="sidebar-brand-text mx-3">IPD KIU</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="notfication.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Notfications</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="team.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Team</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="courses.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Courses</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="timetable.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>TimeTable</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Blog</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="students.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>students</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Feedbacks.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>FeedBacks</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#" data-bs-target="#logoutModal" data-bs-toggle="modal"  class="text-white">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Logout</span></a>
            </li>
<?php
}?>


 
            



        </ul>


        
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="logout.php" >Logout</a>
                </div>
            </div>
        </div>
    </div>