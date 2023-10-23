<?php 
namespace App\Models;

use CodeIgniter\Model;

class Producto extends Model{
    protected $table      = 'productos';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id_producto';
     protected $allowedFields = ['nombre','precio','imagen','descripcion_prod','id_tipoprod'];
}