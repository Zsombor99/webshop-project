    <!--<div class="container-fluid">
        <h1 class="text-center">Loadup Product</h1>
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <form class="form-container" action="<?php LoadUp::_LoadUp() ?>" method="post">
                    <div class="form-group">
                        <label class="tx" for="Image">Image</label>
                        <input id="Image" type="file" name="ProductImage" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label class="tx" for="Category">Category</label>
                        <select name="ProductCategory[]" id="Category">
                            <?php //for($i = 1; $i <= LoadUp::GetCountOfCategory(); ++$i):?>
                                <option value="<?//= $i ?>"><?//= LoadUp::GetNameOfCategoryById($i) ?></option>
                            <?php //endfor ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="tx" for="ProductName">Product Name</label>
                        <input id="ProductName" type="text" name="ProductName" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label class="tx" for="Price">Price</label>
                        <input id="Price" type="number" name="ProductPrice" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label class="tx" for="Pieces">Quantity</label>
                        <input id="Quantity" type="number" name="ProductQuantity" class="form-control" required="required">
                    </div>
                    <div class="form-group">
                        <label class="tx" for="Description">Description</label>
                        <input id="Desctiption" type="text" name="ProductDesctiption" class="form-control" required="required">
                    </div>
                    <button type="submit" class="btn btn-warning btn-block">Loadup</button>
                </form>
            </div>
        </div>
    </div>
    
    Régi verzió a fenti.
    
    -->
    <h1 class="heading-h1">Loadup Product</h1>       
    <form class="loadup-form" action="<?php LoadUp::_LoadUp() ?>" method="post">
        <div>
            <label for="Image">Image</label>
            <input id="Image" type="file" name="ProductImage" required="required" />
        </div>
        <div>
            <label for="Category">Category</label>
            <select name="ProductCategory[]" id="Category">
                <?php for($i = 1; $i <= LoadUp::GetCountOfCategory(); ++$i):?>
                <option value="<?= $i ?>"><?= LoadUp::GetNameOfCategoryById($i) ?></option>
                <?php endfor ?>
            </select>
        </div>
        <div>
            <label for="ProductName">Product Name</label>
            <input id="ProductName" type="text" name="ProductName" required="required" />
        </div>
        <div>
            <label for="Price">Price</label>
            <input id="Price" type="number" name="ProductPrice" required="required" />
        </div>
        <div>
            <label for="Pieces">Quantity</label>
            <input id="Quantity" type="number" name="ProductQuantity" required="required" />
        </div>
        <div>
            <label for="Description">Description</label>
            <input id="Desctiption" type="text" name="ProductDescription" required="required" />
        </div>
        <button class="button loadup-button" type="submit">Loadup</button>
    </form>