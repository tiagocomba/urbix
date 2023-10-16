<?php
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Teclado;
use App\Models\Carritos;

class Carrito extends Controller
{
    public function index()
    {
        $teclado = new Teclado();

        $datos['teclados'] = $teclado->orderBy('id_teclado', 'ASC')->findAll();

        $datos['cabecera'] = view('templates/cabecera');
        $datos['pie'] = view('templates/piepagina');

        // Cargamos la vista "carrito.php" con los mismos datos
        $vistaCarrito = view('main/form/carrito', $datos);

        // Devolvemos la vista
        return $vistaCarrito;
    }
    public function guardar()
    {
        // Obtener los datos del producto desde la segunda vista
        $id = $this->request->getVar('id_teclado');
        $nombre = $this->request->getVar('nombre'); 
        $precio = $this->request->getVar('precio');
    

        // Obtener id_user desde la sesión
        $id_user = session('user')->id_user;


        // Crear una instancia del modelo que representa el carrito
        $carrito = new Carritos();
    
       // Verificar si el producto ya está en el carrito para el usuario actual
$producto_en_carrito = $carrito->where('id_teclado', $id)
->where('id_user', $id_user)
->first();

if ($producto_en_carrito) {
// Actualizar cantidad 
$carrito->update($producto_en_carrito['id_carrito'], ['cantidad' => $producto_en_carrito['cantidad'] + 1]);
} else {
// Insertar nuevo producto en el carrito
$datos = [
'id_user' => $id_user,
'id_teclado' => $id,
'nombre' => $nombre,
'precio' => $precio,
'cantidad' => 1, 
];

$carrito->insert($datos);
}

return redirect()->to('carrito');
    }
    
}