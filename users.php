<?php include "header.php"?>
<?php include "sidebar.php"?>
<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">사용자</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                            <li class="breadcrumb-item active">사용자</li>
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
                                        <h4 class="card-title">사용자</h4>
                                        <!-- <a href="add-product.php" class="btn btn-secondary">Add Product</a> -->
                                    </div>
                                    <div class="card-body">
                                        <div class="table-rep-plugin">
                                            <div class="table-responsive mb-0" data-pattern="priority-columns">
                                                <table id="tech-companies-1" class="table table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>Id</th>
                                                            <th>Name</th>
                                                            <th data-priority="1">Username</th>
                                                            <th data-priority="3">Wallet Balance</th>
                                                            <th data-priority="3">Email</th>
                                                            <th data-priority="3">Phone Number</th>
                                                            <!--<th data-priority="3">Action</th>-->
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>1</th>
                                                            <th>트리나 </th>
                                                            <td>트리나624</td>
                                                            <td>₩ 4151</td>
                                                            <td>트리나624@naver.com</td>
                                                            <td>82578965428</td>
                                                            <!--<td><a class="btn btn-outline-secondary btn-sm eye" title="Edit">-->
                                                            <!--    <i class="fas fa-toggle-on" title="On"></i>-->
                                                            <!--</a>-->
                                                            <!--    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">-->
                                                            <!--    <i class="fas fa-pencil-alt" title="Edit"></i>-->
                                                            <!--</a></td>-->
                                                        </tr>
                                                        <tr>
                                                            <th>2</th>
                                                            <th>하윤 </th>
                                                            <td>하윤892</td>
                                                            <td>₩ 1451</td>
                                                            <td>하윤892@daum.com</td>
                                                            <td>8265984365</td>
                                                            <!--<td><a class="btn btn-outline-secondary btn-sm eye" title="Edit">-->
                                                            <!--    <i class="fas fa-toggle-on" title="On"></i>-->
                                                            <!--</a>-->
                                                            <!--    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">-->
                                                            <!--    <i class="fas fa-pencil-alt" title="Edit"></i>-->
                                                            <!--</a></td>-->
                                                        </tr>
                                                        <tr>
                                                            <th>3</th>
                                                            <th>지아 </th>
                                                            <td>지아1455</td>
                                                            <td>₩ 785</td>
                                                            <td>지아1455@naver.com</td>
                                                            <td>825698542658</td>
                                                            <!--<td><a class="btn btn-outline-secondary btn-sm eye" title="Edit">-->
                                                            <!--    <i class="fas fa-toggle-on" title="On"></i>-->
                                                            <!--</a>-->
                                                            <!--    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">-->
                                                            <!--    <i class="fas fa-pencil-alt" title="Edit"></i>-->
                                                            <!--</a></td>-->
                                                        </tr>
                                                        <tr>
                                                            <th>4</th>
                                                            <th>지우</th>
                                                            <td>지우517</td>
                                                            <td>₩ 7785</td>
                                                            <td>지우517@naver.com</td>
                                                            <td>82756923658</td>
                                                            <!--<td><a class="btn btn-outline-secondary btn-sm eye" title="Edit">-->
                                                            <!--    <i class="fas fa-toggle-on" title="On"></i>-->
                                                            <!--</a>-->
                                                            <!--    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">-->
                                                            <!--    <i class="fas fa-pencil-alt" title="Edit"></i>-->
                                                            <!--</a></td>-->
                                                        </tr>
                                                        <?php 
                                                        $arr=array("naver","daum");
                                                        $handle = fopen("name.txt", "r");
                                                        // echo $handle;
                                                        $i = 4;
                                                        if ($handle) {
                                                            while (($line = fgets($handle)) !== false) {
                                                            $i++;
                                                            $num=array("",rand(000,999),rand(00,99),rand(0,9));
                                                            $key = array_rand($arr);
                                                            $nkey = array_rand($num);
                                                            ?>
                                                                <tr>
                                                                    <th><?php echo $i?></th>
                                                                    <th><?php echo $line?></th>
                                                                    <td><?php echo $line.rand(000,999)?></td>
                                                                    <td><?php echo '₩ '.rand(000000,999999)?></td>
                                                                    <td><?php echo $line.$num[$nkey].'@'.$arr[$key].'.com';?></td>
                                                                    <td><?php echo '82'.rand(1000000000,9999999999)?></td>
                                                                    <!--<td><a class="btn btn-outline-secondary btn-sm eye" title="Edit">-->
                                                                    <!--    <i class="fas fa-toggle-on" title="On"></i>-->
                                                                    <!--</a>-->
                                                                    <!--    <a class="btn btn-outline-secondary btn-sm edit" title="Edit">-->
                                                                    <!--    <i class="fas fa-pencil-alt" title="Edit"></i>-->
                                                                    <!--</a></td>-->
                                                                </tr><?php
                                                            }
                                                        
                                                            fclose($handle);
                                                        } else {
                                                            echo "Something went wrong while loading data";
                                                        } 
?>
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