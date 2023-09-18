<?php include "header.php"?>
<?php include "sidebar.php"?>
<div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Add Product</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Add Product</li>
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
                                        <h4 class="card-title">Add Product</h4>
                                        
                                    </div>
                                    <div class="card-body p-4">
        
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <div class="mb-3">
                                                        <label for="example-text-input" class="form-label">Name</label>
                                                        <input class="form-control" type="text"  id="example-text-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-search-input" class="form-label">Image</label>
                                                        <input class="form-control" type="file"  id="example-search-input">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="example-search-input" class="form-label">Price</label>
                                                        <input class="form-control" type="text"  id="example-search-input">
                                                    </div>
                                                    
                                                    <div class="mb-3">
                                                        <label for="example-url-input" class="form-label">Description</label>
                                                        <textarea class="form-control" type="text"  id="editor"></textarea>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                      

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

               
            </div>
<?php include "footer.php"?>