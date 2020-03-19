<?php

Route::set('index.php', function(){
    Home::CreateView('Home');
});

Route::set('about_us', function(){
    AboutUS::CreateView('AboutUs');
    AboutUS::test();
});

Route::set('contact_us', function(){
    ContactUS::CreateView('ContactUs');
});

?>