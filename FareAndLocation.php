<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>IntelliRide - FareAndLocationManagement</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                    <img src="img/white_bus_icon.png" alt="Your Logo" style="width: 40px; height: auto;">
                </div>
                <div class="sidebar-brand-text mx-3">IntelliRide</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Management
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="BusManagement.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Bus Management</span>
                </a>

            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="PersonnelManagement.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Personnel Management</span>
                </a>

            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="PassengerManagement.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span><b>Passenger Management</b></span>
                </a>

            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="TransactionManagement.php">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Transactions Management</span>
                </a>

            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                system
            </div>





            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="FareAndLocation.php"
                    style="background-color: #4da3ff; color: white; padding: 10px; border-radius: 5px; display: block; text-decoration: none;">
                    <i class="fas fa-fw fa-table"></i>
                    <b><span>Fare and Location Management</span></b></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <h2 class="m-0 font-weight text-primary">Fare and Location Management</h2>
                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>





                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal"
                                    data-target="#accountSettingsModal">
                                    <i class="fas fa-user-cog fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Account Settings
                                </a>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- Page Heading -->
                    <a target="_blank" href="https://datatables.net"></a>

                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Fare Discount</h6>
                            <div class="d-flex align-items-center">

                                <!-- Combined Dropdown and Search Input -->

                            </div>
                        </div>



                    </div>

                    <!-- CRUD OPERATIONS -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">Location Data</h6>
                            <div class="d-flex align-items-center">

                                <!-- Combined Dropdown and Search Input -->

                            </div>
                        </div>

                        <!-- Transaction Data Table -->
                        <div id="transactionTableContainer">
                            <!-- Dynamic Transaction Data Table will be loaded here -->
                        </div>

                        <script>
                            $(document).ready(function () {
                                loadTransactionData(); // Load transaction data on page load

                                // Function to load transaction data
                                function loadTransactionData(column = 'Id', value = '') {
                                    $.ajax({
                                        url: 'CRUD/read_transaction.php',
                                        method: 'POST', // Change to POST
                                        data: { column: column, value: value }, // Send the selected column and value
                                        success: function (data) {
                                            $('#transactionTableContainer').html(data);
                                        },
                                        error: function (xhr, status, error) {
                                            console.error("An error occurred while loading data: " + error);
                                        }
                                    });
                                }

                                // Function to clear the search input
                                window.clearSearch = function () {
                                    $('#transactionSearch').val(''); // Clear the search input
                                    loadTransactionData(); // Load all data without search
                                };

                                // Function to search transactions
                                window.searchTransaction = function () {
                                    const searchValue = $('#transactionSearch').val();
                                    const selectedColumn = $('#columnSelect').val();
                                    loadTransactionData(selectedColumn, searchValue); // Call the load function with search parameters
                                };

                                // Function to open delete confirmation modal with selected transaction IDs
                                window.deleteSelectedTransactions = function () {
                                    const selectedTransactionIds = [];
                                    $('#transactionTable input[type="checkbox"]:checked').each(function () {
                                        selectedTransactionIds.push($(this).data('transaction-id'));
                                    });

                                    if (selectedTransactionIds.length === 0) {
                                        $('#noSelectionModal').modal('show');
                                        return;
                                    }

                                    console.log("Selected Transaction IDs: ", selectedTransactionIds);
                                    $('#confirmDeleteModal').data('selectedTransactionIds', selectedTransactionIds).modal('show');
                                };

                                // Confirm delete and send AJAX request to delete selected transactions
                                $('#confirmDeleteButton').on('click', function () {
                                    const selectedTransactionIds = $('#confirmDeleteModal').data('selectedTransactionIds');

                                    if (!selectedTransactionIds || selectedTransactionIds.length === 0) {
                                        console.error("No transaction IDs selected for deletion.");
                                        return;
                                    }

                                    $.ajax({
                                        type: 'POST',
                                        url: 'CRUD/delete_transaction.php',
                                        data: { transactionIds: selectedTransactionIds },
                                        success: function (response) {
                                            console.log("Delete response:", response); // Log server response for debugging
                                            $('#message').html(response);
                                            $('#confirmDeleteModal').modal('hide'); // Close modal after deletion
                                            loadTransactionData(); // Refresh the transaction table
                                        },
                                        error: function (xhr, status, error) {
                                            console.error("AJAX Error:", xhr.responseText); // Log error details for debugging
                                            $('#message').html("An error occurred: " + xhr.responseText);
                                        }
                                    });
                                });
                            });

                        </script>




                    </div>



                    <!-- Account Settings Modal -->
                    <div class="modal fade" id="accountSettingsModal" tabindex="-1" role="dialog"
                        aria-labelledby="accountSettingsModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="accountSettingsModalLabel">Verify Your Account</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form id="verifyForm">
                                        <div class="form-group">
                                            <label for="verifyAdmin">Current Admin</label>
                                            <input type="text" class="form-control" id="verifyAdmin"
                                                placeholder="Enter your current admin username" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="verifyPassword">Current Password</label>
                                            <input type="password" class="form-control" id="verifyPassword"
                                                placeholder="Enter your current password" required>
                                        </div>
                                        <div id="verifyMessage" class="text-danger"></div>
                                        <button type="button" class="btn btn-primary"
                                            onclick="verifyCurrentAccount()">Verify</button>
                                    </form>

                                    <!-- Hidden form for updating admin details -->
                                    <div id="updateForm" style="display: none;">
                                        <form>
                                            <div class="form-group">
                                                <label for="newAdmin">New Admin Username</label>
                                                <input type="text" class="form-control" id="newAdmin"
                                                    placeholder="Enter new admin username" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="newPassword">New Password</label>
                                                <input type="password" class="form-control" id="newPassword"
                                                    placeholder="Enter new password" required>
                                            </div>
                                            <button type="button" class="btn btn-success"
                                                onclick="updateAccount()">Update
                                                Account</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- Logout Modal-->
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">Select "Logout" below if you are ready to end your current
                                    session.
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                    <a class="btn btn-primary" href="login.php">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>





                    <!-- End of Main Content -->
                </div>

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; IntelliRide 2024</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->

            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

</body>

</html>