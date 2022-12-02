
<div class="modal fade" id="<?php echo $row["id"]?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
            <!-- ID -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="id">Giới tính:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Nam nhập 1, Nữ nhập 0" name="productgender" value="<?php echo $row["gender"]?>">
                </div>
            </div>
            <!-- Name -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="name">Name:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="NHập tên SP" name="productName">
                </div>
            </div>
            <!-- Description -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="description">Description:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Nhập mô tả" name="productDescription">
                </div>
            </div>
            <!-- img link -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="linkimg">Image link:</label>
                <div class="col-md-7">
                    <input type="text" class="form-control" placeholder="Nhập link image" name="productImgLink">
                </div>
            </div>
            <!-- price -->
            <div class="form-group row">
                <label class="col-md-3 col-form-label" for="price">Price:</label>
                <div class="col-md-7">
                    <input type="number" class="form-control" placeholder="Nhập giá SP" name="productPrice">
                </div>
            </div>

            <div class="form-group text-center">
                <button class="btn btn-primary" name="btnsubmitAdd">Thêm</button>
            </div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>