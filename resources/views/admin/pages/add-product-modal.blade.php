
<!--model start--->
<div class="modal bg-white fade" tabindex="-1" id="add_product_modal">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content shadow-none">
            <div class="modal-header">
               <h2 id="ProductTittle" style="font-size: 30px;color:blue;font-weight:600;">Add Product </h2>
                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <i class="fas fa-times" style="font-size: 25px;"></i>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">

                <div class="container" >
                  <form id="ProductForm" name="ProductForm"  action="javascript:void(0)"
                   class="form d-flex flex-column flex-lg-row "
                   method="POST" enctype="multipart/form-data">
                   @csrf
                   <input type="hidden" name="id" id="id">
                   <input type="hidden" name="user_id" id="user_id">


                      <!-- First Column -->
                      <div class="col-lg-8 pe-lg-2  " style="margin-top: 17px;" >
                        <div class="card mb-3">
                          <div class="card-header bg-body-tertriary">
                            <h6 class="mb-0">Basic information</h6>
                          </div>

                          <div class="card-body">

                              <div class="row gx-2">
                                <div class="col-12 mb-3">
                                  <label class="form-label" for="product-name">Product name:</label>
                                  <input class="form-control" id="product_name" name="product_name" type="text">
                                </div>

                                <div class="col-12 mb-3">
                                    <label class="form-label" for="manufacturar-name">Product Code:</label>
                                    <input class="form-control" id="product_code" name="product_code" type="text">
                                </div>
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="identification-no">Product Type:</label>
                                    <input class="form-control" id="product_type" name="product_type" type="text">
                                </div>
                                <div class="col-12 mb-3"><label class="form-label" for="product-summary">Offer </label>
                                    <input class="form-control" id="offer" name="offer" type="number">
                                </div>
                              </div>

                          </div>

                        </div>

                        <div class="card mb-3">
                          <div class="card-header bg-body-tertiary">
                            <h6 class="mb-0">Add images</h6>
                          </div>
                          <div class="card-body">
                            <div class="image-container">
                              <h1 style="font-size: 20px;">Product Thumbnail Images</h1>
                              <div class="upload-container">
                                <div class="border-container">
                                  <label class="upload__btn">
                                  <div class="icons fa-4x" style="align-items: center;">
                                    <i class="fas fa-file-image" data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                                    <i class="fas fa-file-alt" data-fa-transform="shrink-2 up-4"></i>
                                    <i class="fas fa-file-pdf" data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
                                  </div>
                                  <p>
                          Drag and drop files here, or
                          <b id="file-browser">browse</b> your computer.
                                 </p>
                                 <input type="file"  name="product_thumbnail" id="product_thumbnail"  multiple="" data-max_length="10" class="upload__inputfile">
                                  </label>
                                </div>
                                     <!---preview images---->
                                     <div class="prev" style="margin-top: 30px;">
                                      <div class="upload__img-wrap"></div>
                                     </div>
                              </div>

                            </div>
                        </div></div>

                        <div class="card mb-3">
                          <div class="card-header bg-body-tertiary">
                            <h6 class="mb-0">Details</h6>
                          </div>
                          <div class="card-body">
                            <div class="row gx-2">
                                <div class="col-12 mb-3">
                                    <label class="form-label" for="product-description">Product short description:</label>
                                    <div class="create-product-description-textarea">
                                      <textarea class="form-control"  name="product_short_description" id="product_short_description" rows="3" >
                                      </textarea>
                                    </div>
                                  </div>
                              <div class="col-12 mb-3">
                                <label class="form-label" for="product-description">Product description:</label>
                                <div class="create-product-description-textarea">
                                  <textarea class="form-control"  name="product_description" id="product_description" rows="6" >
                                  </textarea>
                                </div>
                              </div>
                              <div class="col-sm-6 mb-3">
                                <label class="form-label" for="import-status">Add Weight </label>

                                <button type="button"  class="align-items-center btn btn-theme d-flex" id="addButton">
                                    <i data-feather="plus-square"></i>Add Product Weight</button>
                                    <div id="dynamicInput" style="margin-top: 20px; ">
                                        <!-- Dynamic fields will be added here -->
                                    </div>

                            </div>
                              <div class="col-sm-6 mb-3"><label class="form-label" for="origin-country">Brand of Origin: </label>
                                <select class="form-select" id="brand" name="brand">
                                  {{-- <option value="" disabled selected>Select Brand</option> --}}

                                  <option value="Egypt">Egypt</option>
                                  <option value="Vietnam">Vietnam</option>
                                  <option value="Ethiopia">Ethiopia</option>
                                  <option value="DR Congo">DR Congo</option>
                                  <option value="Iran">Iran</option>
                                  <option value="Turkey">Turkey</option>
                                  <option value="Germany">Germany</option>
                                  <option value="France">France</option>
                                </select>
                            </div>
                            </div>
                          </div>
                        </div>

                        <div class="card mb-3 mb-lg-0">
                          <div class="card-header bg-body-tertiary">
                            <h6 class="mb-0">Store Information</h6>
                          </div>
                          <div class="card-body">

                            <div class="row gx-2 flex-between-center mb-3">
                                <div class="create-product-description-textarea">
                                    <textarea class="form-control"  name="store_info" id="store_info" rows="6" >
                                    </textarea>
                                  </div>

                            </div>

                          </div>
                        </div>
                      </div>

                      <!-- Second Column -->
                      <div class="col-lg-4 ps-lg-2 "  >
                        <div class="sticky-sidebar">
                            <div class="card mb-3">
                                <div class="card-header bg-body-tertiary">
                                  <h6 class="mb-0">Product Image</h6>
                                </div>
                                <div class="card-body">

                                 <!-- Upload  -->
                                 <div id="file-upload-form" class="uploader">
                                    <input id="file-upload" type="file" name="productimage" accept="image/*" />

                                    <label for="file-upload" id="file-drag">
                                      <img id="file-image" src="#" alt="Preview" class="hidden">
                                      <div id="start">
                                        <i class="fa fa-download" aria-hidden="true"></i>
                                        <div>Select a file or drag here</div>
                                        <div id="notimage" class="hidden">Please select an image</div>
                                        <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                                      </div>
                                      <div id="response" class="hidden">
                                        <div id="messages"></div>
                                        <progress class="progress" id="file-progress" value="0">
                                          <span>0</span>%
                                        </progress>
                                      </div>
                                    </label>
                                  </div>


                                </div>
                              </div>

                          <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                              <h6 class="mb-0">Type</h6>
                            </div>
                            <div class="card-body">
                              <div class="row gx-2">
                                <div class="col-12 mb-3"><label class="form-label" for="product-category">Select category:</label>
                                    <select class="form-select" id="product_category" name="product_category">
                                    <option value="computerAccessories">Computer &amp; Accessories</option>
                                    <option>Class, Training, or Workshop</option>
                                    <option>Concert or Performance</option>
                                    <option>Conference</option>
                                    <option>Convention</option>
                                    <option>Dinner or Gala</option>
                                    <option>Festival or Fair</option>
                                  </select></div>
                                {{-- <div class="col-12"><label class="form-label" for="product-subcategory">Select sub-category:</label><select class="form-select" id="product-subcategory" name="product-subcategory">
                                    <option value="laptop">Laptop</option>
                                    <option>Class, Training, or Workshop</option>
                                    <option>Concert or Performance</option>
                                    <option>Conference</option>
                                    <option>Convention</option>
                                    <option>Dinner or Gala</option>
                                    <option>Festival or Fair</option>
                                  </select></div> --}}
                              </div>
                            </div>
                          </div>
                          <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                              <h6 class="mb-0">Tags</h6>
                            </div>
                            <div class="card-body">
                                <label class="form-label" for="product-tags">Add a keyword:</label>
                                <div class="choices" data-type="text" aria-haspopup="true" aria-expanded="false">

                                        <input class="form-control " id="meta_tag" type="text" name="meta_tag"  value="">

                                        <label class="form-label" for="product-tags">Type key tag (,)</label>

                                </div>
                            </div>
                          </div>
                          <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                              <h6 class="mb-0">Pricing</h6>
                            </div>
                            <div class="card-body">
                              <div class="row gx-2">
                                <div class="col-8 mb-3">
                                    <label class="form-label" for="base-price">Base Price: <span data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Product regular price" data-bs-original-title="Product regular price">
                                    <svg class="svg-inline--fa fa-question-circle fa-w-16 text-primary fs--1 ms-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg><!-- <span class="fas fa-question-circle text-primary fs--1 ms-1"></span> Font Awesome fontawesome.com --></span></label>
                                        <input class="form-control" id="original_price" name="original_price" type="number">
                                    </div>
                                <div class="col-4"> <label class="form-label" for="price-currency">Currency:</label><select class="form-select" id="price-currency" name="price-currency">
                                    <option value="usd">USD</option>
                                    <option value="eur">EUR</option>
                                    <option value="gbp">GBP</option>
                                    <option value="cad">CAD</option>
                                  </select></div>
                                <div class="col-12 mb-4">
                                    <label class="form-label" for="discount-percentage">Discount Price</label>
                                    <input class="form-control" id="discount_price" name="discount_price" type="number"></div>
                                <div class="col-12"><label class="form-label" for="final-price">Discount in percentage:<span data-bs-toggle="tooltip" data-bs-placement="top" aria-label="Product final price" data-bs-original-title="Product final price">
                                    <svg class="svg-inline--fa fa-question-circle fa-w-16 text-primary fs--1 ms-1" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                        <path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path></svg><!-- <span class="fas fa-question-circle text-primary fs--1 ms-1"></span> Font Awesome fontawesome.com --></span>
                                    </label>
                                    <input class="form-control" id="discount_percentage" name="discount_percentage"  type="number">
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                              <h6 class="mb-0">Stock status</h6>
                            </div>
                            <div class="card-body">
                                <div class="col-12 mb-4">
                                    <label class="form-label" for="import-status"> </label>
                                    <select class="form-select" id="stock" name="stock">
                                      <option value="in-stock">In stock</option>
                                      <option value="Unavailabel">Unavailable </option>


                                    </select></div>
                            </div>
                          </div>
                          <div class="card mb-3">
                            <div class="card-header bg-body-tertiary">
                              <h6 class="mb-0">Status</h6>
                            </div>
                            <div class="card-body">
                                <div class="col-12 mb-4">
                                    <label class="form-label" for="import-status">Status  </label>
                                    <select class="form-select" id="status" name="status">
                                      <option value="in-stock">In products</option>
                                      <option value="Unavailabel">Out of Produts </option>


                                    </select></div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>

               </div>




            <div class="modal-footer">
                <button type="button"  id="kt_ecommerce_add_product_cancel" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                 <!--begin::Button-->
                 <button type="submit" id="product_save" class="btn btn-primary add_product_submit">
                    <span class="indicator-label">
                      Save Changes
                    </span>
                    <span class="indicator-progress" style="display: none;">
                      Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                  </button>
        <!--end::Button-->
    </form>
            </div>

        <!--end::Form-->
        </div>
    </div>
</div>

<!--model end--->
<script src="{{ asset('admin/product/product.js') }}"></script>

<script>
    //dynamic input fields

  document.addEventListener('DOMContentLoaded', function () {
    const addButton = document.getElementById('addButton');
    const container = document.getElementById('dynamicInput');

    addButton.addEventListener('click', function () {
        // alert("jjk");
        const newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.name = 'dynamicInput[]'; // Use array notation for easier server-side processing
        newInput.name = 'dynamicInput[]'; // Use array notation for easier server-side processing
        newInput.className = 'form-control'; // Example: Set class for Bootstrap styling
        container.appendChild(newInput);

        // Optional: Add a line break or other separators if desired
        const lineBreak = document.createElement('br');
        container.appendChild(lineBreak);
    });
});

</script>
