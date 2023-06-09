<?php
namespace App\Http\Controllers;
use App\HTTP\Controllers\PostController;

if (isset($_POST["submit"])) {
    
    $name = $_POST["ProductName"];
    $desc = $_POST["ProductDescription"];
    $id = $_POST["ProductID"];
    $sales = $_POST["ProductSales"];
}