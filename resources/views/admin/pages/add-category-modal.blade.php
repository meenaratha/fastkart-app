 <!-- Modal -->
 <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- modal-md class doesn't exist by default, it's for demonstration -->
      <div class="modal-content">
        <form action="" id="categoryform" method="" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" id="id">
             <input type="hidden" name="user_id" id="user_id">
        <div class="modal-header">
          <h5 class="modal-title" id="categorytitle">Add Category</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- New Product Add Start -->
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Category Information</h5>
                            </div>

                            <div class="theme-form theme-form-2 mega-form">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Category Name</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" type="text" name="category_name" id="category_name"
                                            placeholder="Category Name">
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- New Product Add End -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" id="btn-save" class="btn btn-primary">Add Category</button>
        </div>
    </form>
      </div>
    </div>
  </div>
