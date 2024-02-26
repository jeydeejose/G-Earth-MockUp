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
<div class="modal fade" id="dRModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Input Delivery Receipt</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="datepicker" class="col-sm-4 control-label">Date</label>
                    <div class="col-sm-8">
                        <div class="date">
                            <input type="date" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-4 control-label">DR #</label>
                    <div class="col-sm-8">
                        <select class="form-control" required>
                            <option value="" selected>- Select -</option>
                            <option value="">DR # 2024-1</option>
                            <option value="">DR # 2024-2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-4 control-label">Product</label>
                    <div class="col-sm-8">
                        <select class="form-control" required>
                            <option value="" selected>- Select -</option>
                            <option value="">DR # 2024-1</option>
                            <option value="">DR # 2024-2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Quantity</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Adjusted amount</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Total</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Truck #</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-4 control-label">Approved by</label>
                    <div class="col-sm-8">
                        <select class="form-control" required>
                            <option value="" selected>- Select -</option>
                            <option value="">DR # 2024-1</option>
                            <option value="">DR # 2024-2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-4 control-label">Checked by</label>
                    <div class="col-sm-8">
                        <select class="form-control" required>
                            <option value="" selected>- Select -</option>
                            <option value="">DR # 2024-1</option>
                            <option value="">DR # 2024-2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-4 control-label">Delivered by</label>
                    <div class="col-sm-8">
                        <select class="form-control" required>
                            <option value="" selected>- Select -</option>
                            <option value="">DR # 2024-1</option>
                            <option value="">DR # 2024-2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-4 control-label">Acknowledged by</label>
                    <div class="col-sm-8">
                        <select class="form-control" required>
                            <option value="" selected>- Select -</option>
                            <option value="">DR # 2024-1</option>
                            <option value="">DR # 2024-2</option>
                        </select>
                    </div>
                </div>
            </div>
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
                <h5 class="modal-title" id="exampleModalLabel">Input Collection</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="datepicker" class="col-sm-4 control-label">Date</label>
                    <div class="col-sm-8">
                        <div class="date">
                            <input type="date" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-4 control-label">DR #</label>
                    <div class="col-sm-8">
                        <select class="form-control" required>
                            <option value="" selected>- Select -</option>
                            <option value="">DR # 2024-1</option>
                            <option value="">DR # 2024-2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Particular</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test" disabled>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Cash/Check Payment</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Amount</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test">
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-4 control-label">Acknowledged by</label>
                    <div class="col-sm-8">
                        <select class="form-control" required>
                            <option value="" selected>- Select -</option>
                            <option value="">DR # 2024-1</option>
                            <option value="">DR # 2024-2</option>
                        </select>
                    </div>
                </div>
            </div>
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
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Customer code</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Address</label>
                    <div class="col-sm-8">
                    <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">TIN</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="test">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Set Price</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="test">
                    </div>
                </div>
            </div>
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
                <h5 class="modal-title" id="exampleModalLabel">Input Product</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Unit</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Description</label>
                    <div class="col-sm-8">
                        <textarea class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Set Amount</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control" name="test">
                    </div>
                </div>
            </div>
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
                <h5 class="modal-title" id="exampleModalLabel">Input Account</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Firstname</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Lastname</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test">
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-4 control-label">Role</label>
                    <div class="col-sm-8">
                        <select class="form-control" required>
                            <option value="" selected>- Select -</option>
                            <option value="">DR # 2024-1</option>
                            <option value="">DR # 2024-2</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Contact #</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-4 control-label">Email address</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="test">
                    </div>
                </div>
                <div class="form-group">
                    <label for="gender" class="col-sm-4 control-label">Position</label>
                    <div class="col-sm-8">
                        <select class="form-control" required>
                            <option value="" selected>- Select -</option>
                            <option value="">DR # 2024-1</option>
                            <option value="">DR # 2024-2</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary">Save</a>
            </div>
        </div>
    </div>
</div>



