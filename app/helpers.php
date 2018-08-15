
<?php

use Illuminate\Support\Facades\Request;

function productImage($path){
     return file_exists('storage/'.$path)?('storage/'.$path):('images/not found');
}
function assestproductImage($path){
    return file_exists('storage/'.$path)?asset('storage/'.$path):asset('images/not found');
}