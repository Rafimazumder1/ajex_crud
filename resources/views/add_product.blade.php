<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form id="addProductForm" action="" method="">
        @csrf
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Form to add product -->
           <!-- CSRF protection for Laravel -->
            <div class="form-group my-2">
              <label for="productName">Name:</label>
              <input type="text" class="form-control" id="Name" name="Name" placeholder="Enter product name">
              @error('Name')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <div class="form-group my-2">
              <label for="productPrice ">Price:</label>
              <input type="text" class="form-control" id="price" name="productPrice" placeholder="Enter product price">
              @error('productPrice')
              <div class="text-danger">{{ $message }}</div>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary add_product">Save</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  