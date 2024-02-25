         <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-globe"></i>
                </div>
                <div class="sidebar-brand-text mx-3">G Earth<sup>Beta</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item <?php echo stripos($_SERVER['PHP_SELF'], "index") !== FALSE ? "active" : "" ?>">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                SALES
            </div>

            <li class="nav-item <?php echo stripos($_SERVER['PHP_SELF'], "deliveryreceipts") !== FALSE ? "active" : "" ?>">
                <a class="nav-link" href="deliveryreceipts.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Delivery Receipts</span></a>
            </li>
            <li class="nav-item <?php echo stripos($_SERVER['PHP_SELF'], "collections") !== FALSE ? "active" : "" ?>">
                <a class="nav-link" href="collections.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Collections</span></a>
            </li>
            <li class="nav-item <?php echo stripos($_SERVER['PHP_SELF'], "reports") !== FALSE ? "active" : "" ?>">
                <a class="nav-link" href="reports.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Reports</span></a>
            </li>
            <li class="nav-item <?php echo stripos($_SERVER['PHP_SELF'], "changerequest") !== FALSE ? "active" : "" ?>">
                <a class="nav-link" href="changerequest.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Change Requests</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                REFERENCES
            </div>

            <li class="nav-item <?php echo stripos($_SERVER['PHP_SELF'], "customers") !== FALSE ? "active" : "" ?>">
                <a class="nav-link" href="customers.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Customers</span></a>
            </li>

            <li class="nav-item <?php echo stripos($_SERVER['PHP_SELF'], "products") !== FALSE ? "active" : "" ?>">
                <a class="nav-link" href="products.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Products</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item <?php echo stripos($_SERVER['PHP_SELF'], "accounts") !== FALSE ? "active" : "" ?>">
                <a class="nav-link" href="accounts.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Accounts</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

<!-- ////////////////////MODAL AREA////////////////////// -->

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
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Delivery R Modal-->
<div class="modal fade" id="dRModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TITLE HERE</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Text Here</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary">Save</a>
            </div>
        </div>
    </div>
</div>

<!-- Collections Modal-->
<div class="modal fade" id="colModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TITLE HERE</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Text Here</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary">Save</a>
            </div>
        </div>
    </div>
</div>

<!-- Customer Modal-->
<div class="modal fade" id="custModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TITLE HERE</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Text Here</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary">Save</a>
            </div>
        </div>
    </div>
</div>

<!-- Products Modal-->
<div class="modal fade" id="prodModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TITLE HERE</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Text Here</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary">Save</a>
            </div>
        </div>
    </div>
</div>

<!-- Accounts Modal-->
<div class="modal fade" id="accountModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TITLE HERE</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Text Here</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary">Save</a>
            </div>
        </div>
    </div>
</div>



