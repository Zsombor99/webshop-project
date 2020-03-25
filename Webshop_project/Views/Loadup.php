<style>
.form-container {
    border: 1px solid #4e0e0f;
    padding: 20px 30px;
    margin-top: 5vh;
    -webkit-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    -moz-box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    box-shadow: -1px 4px 26px 11px rgba(0, 0, 0, 0.75);
    background-color: #28a745
}
.tx {
    color: #e4feff;
}
</style>
<div class="container-fluid">
<h1 class="text-center">Loadup Product</h1>
<div class="row">
<div class="col-md-4 col-sm-4 col-xs-12"></div>
    <div class="col-md-4 col-sm-4 col-xs-12">
        <form class="form-container" action="<?php Loadup::_Loadup() ?>" method="post">
            <div class="form-group">
                <label class="tx" for="Image">Image</label>
                <input id="Image" type="file" name="Image" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="tx" for="Category">Category</label>
                <select name="Category" id="Category">
                    <?php for($i = 1; $i <= Loadup::GetNumberOfCategory(); ++$i):?>
                        <?php echo "<option>". Loadup::GetNameOfCategoryById($i) ."</option>";?>
                    <?php endfor; ?>
                </select>
            </div>
            <div class="form-group">
                <label class="tx" for="ProductName">Product Name</label>
                <input id="ProductName" type="text" name="ProductName" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="tx" for="Price">Price</label>
                <input id="Price" type="number" name="Price" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="tx" for="Pieces">Pieces</label>
                <input id="Pieces" type="number" name="Pieces" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="tx" for="Description">Description</label>
                <input id="Desctiption" type="text" name="Description" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-warning btn-block"> Loadup </button>
        </form>
    </div>
</div>