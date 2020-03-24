<?php
class Home extends Controller
{
    public static $Title = "Home";
    public static function _PrintCategories()
    {
        $category = self::Query("SELECT `id`, `Name` FROM `category`");
        foreach ($category as $item) {
            echo '<option value="' . $item[1] . '">' . $item[1] . '</option>';
        }
    }

    public static function _getProducts()
    {
        $products = self::Query("SELECT `id`,`name`,`instock`,`description`,`price`,`categoryid`  FROM product");
    }

    public static function _getAllProducts()
    {
        $products = self::Query("SELECT `id`,`name`,`instock`,`description`,`price`,`categoryid` FROM product");
        //echo $products;
        $_SESSION['products'] = [];
        foreach ($products as $product) {
            array_push($_SESSION['products'], $product);
            echo '
            <div class="mt-4 card shadow">
            <div class="card-body">
                <h2>' . $product[1] . '</h2>
                <h4 class="text-muted">$' . $product[4] . '</h4>
                <p>In Stock: ' . $product[2] . '</p>
                <p>Category: ' . Home::_getCategoryNameById($product[5]) . '</p>
                <p>Description: ' . $product[3] . '</p>
            </div>
        </div>
            ';
        }
    }

    public static function _getCategoryNameById($id)
    {
        $name = self::Query("SELECT `name` FROM category WHERE `id`=?", [$id]);
        if (count($name) === 1) {
            return $name[0][0];
        }
        return false;
    }
}
