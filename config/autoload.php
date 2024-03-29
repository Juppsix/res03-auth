<?php  
  
// models  
require "models/Category.php";  
require "models/Product.php"; 
require "models/User.php";
  
// managers  
require "managers/AbstractManager.php";  
require "managers/CategoryManager.php";  
require "managers/ProductManager.php";  
require "managers/UserManager.php";

// controllers  
require "controllers/AbstractController.php";  
require "controllers/ShopController.php";  
require "controllers/AuthController.php";
// services  
require "services/Router.php";
