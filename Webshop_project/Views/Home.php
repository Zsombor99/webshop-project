<link rel="stylesheet" type="text/css" href="assets/css/home.css">
<h1 class="mt-4 w-100 text-center">Welcome!</h1>

<div class="row w-100 h-100 mx-0 py-5">
    <div class="col-4">
        <form id="home-input-categorys" class="row w-100 h-100" action="<?php Home::_getProducts() ?>">
            <label for="categorySelect">Category:</label>
            <select id="categorySelect" size="3" class="custom-select" multiple>
                <option value="Any">Any</option>
                <?php Home::_PrintCategories() ?>
            </select>
            <label class="mt-4" for="priceMinInput">Price minimum:</label>
            <input id="priceMinInput" type="number" class="form-control" min="0" />

            <label class="mt-4" for="priceMaxInput">Price maximum:</label>
            <input id="priceMaxInput" type="number" class="form-control" min="0" />
            <div class="form-check mt-4">
                <input class="form-check-input" type="checkbox" value="" id="onlyInStockCheckBox">
                <label class="form-check-label" for="onlyInStockCheckBox">
                    Only show items in stock
                </label>
            </div>
            <button class="mx-auto mt-4 btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    <div class="col">
        <?php
        Home::_getAllProducts();
        ?>
        <!--  <div class="mt-4 card shadow">
            <div class="card-body">
                <h2>Product name</h2>
                <h4 class="text-muted">$12345</h4>
                <p>In Stock: 3</p>
                <p>Category: Something</p>
                <p>Description: Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>-->
    </div>
</div>