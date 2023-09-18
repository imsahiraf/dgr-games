<?php include "header.php"?>
<?php include "sidebar.php"?>
<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Orders</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">Orders</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title"></h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Order Values</th>
                                                            <th>Order Down Payment</th>
                                                            <th>Order Date</th>
                                                            <th>Order Quantity</th>
                                                            <th data-priority="3">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>1</th>
                                                            <td>Rs 450000</td>
                                                            <td>Rs 150000</td>
                                                            <td>2021-05-12</td>
                                                            <td>100 Kg</td>
                                                            <td><a class="btn btn-outline-secondary btn-sm eye" title="Edit">
                                                                <i class="fas fa-play" title="On"></i>
                                                            </a>
                                                            <a class="btn btn-outline-secondary btn-sm eye" title="Edit">
                                                                <i class="fas fa-stop" title="On"></i>
                                                            </a>
                                                               </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
        
                                        </div>
        
                                    </div>
                                </div>
                                <!-- end card -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
            </div>
<?php include "footer.php"?>