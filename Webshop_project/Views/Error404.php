<link href="assets/css/error404.css" rel="stylesheet">    
<div class="container">
<h1>404</h1>
<h2>Error! Page not found.</h2>    
<p>This is not what are you looking for...</p>
<h3><a class="text-decoration-none" href='<?= explode("index", preg_quote($_SERVER['PHP_SELF']))[0]?>home'>Return to the home page</a></h3>
</div>