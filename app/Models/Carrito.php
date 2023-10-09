<?php 
namespace App\Models;

use CodeIgniter\Model;

class Carrito extends Model{
    protected $table      = 'compras';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields = ['cantidad','ptotal',];
}