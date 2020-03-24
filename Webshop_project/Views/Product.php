<h1>Product</h1>
<style>

/**
    ez majd mehet abba a cssbe ami a layouthoz lesz rendelve valamikor ..
 */
    .product_container {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-evenly;
        align-items: flex-start;
        align-content: center;

    }
    .product_item {
        box-shadow: 0 0 3px 1px rgba(40,167,69, 0.5);
        margin: 15px;
        transition: all 200ms;
    }
    .product_item img {
        width: 150px;
        height: 150px;
        display: block;
        margin: auto;
        border: 0;
        
    }
    .product_item h2 {
        font-size: 18px;
        font-weight: bold;
        text-align: center;
        margin: 10px 0;
    }
    .price {
        font-size: 16px;
        display: block;
        padding: 5px;
        text-align: center;
        font-weight: bold;
    }
    .product_item a {
        display: block;
        border-radius: 0;
    }
    .product_item hr {
        border-bottom: 1px solid rgba(40,167,69, 0.5);
    }
    .product_item:hover{
        background: rgba(50,205,50,0.3);
        transition: all 200ms;
    }
    .instock {
        display: block;
        margin: auto;
        text-align: center;
        font-style: italic;
    }
</style>
<p>Number of products in database: <?=Product::GetNumberOfProducts()?></p>
<div class="product_container">
<?php for($i = 1; $i <= Product::GetNumberOfProducts(); ++$i): ?>
    <div class="product_item">
        <img src="assets/pictures/<?=rand(1,4)?>.png" />
        <h2><?= Product::GetNameOfProductById($i)?></h2>
        <hr />
        <span class="instock"><?=" InStock: ". Product::GetInStockNumberOfProductById($i) ?></span>
        <span class="price"><?=Product::GetPriceOfProductById($i)?> Ft</span>
        <a class="btn btn-success" href="">Buy it!</a>
    </div>

<?php endfor; ?>
<div class="row" />
<?php for($i = 0; $i < 300 ; ++$i): ?>
    <div class="product_item">
        <img src="assets/pictures/<?=rand(1,4)?>.png" />
        <h2><?php $a = ["Big", "Tomato", "Mouth", "Body", "Apple", "Balls", "Hamburger", "Yellow stone", "Dildo"]; echo $a[rand(0, count($a) - 1)] ?></h2>
        <hr />
        <span class="instock"><?php $a = ["Yes","No"]; echo "InStock: ".$a[rand(0,count($a) - 1 )] ?></span>
        <span class="price"><?=rand(1,5000)?> $</span>
        <a class="btn btn-success" href="">Buy it!</a>
    </div>
<?php endfor; ?>

</div>