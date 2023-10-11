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

        $datos['teclados'] = $teclado->orderBy('id', 'ASC')->findAll();

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
        $nombre = $this->request->getVar('nombre'); 
        $precio = $this->request->getVar('precio');
        $imagen = $this->request->getVar('imagen');
    
        // Crear una instancia del modelo que representa el carrito
        $carrito = new Carritos();
    
        // Verificar si el producto ya está en el carrito
        $producto_en_carrito = $carrito->where('nombre', $nombre)->first();
    
        if ($producto_en_carrito) {
            // Actualizar cantidad 
            $carrito->update($producto_en_carrito['id_carrito'], ['cantidad' => $producto_en_carrito['cantidad'] + 1]);
        } else {
            // Insertar nuevo producto en el carrito
            $datos = [
                'nombre' => $nombre,
                'precio' => $precio,
                'imagen' => $imagen,
                'cantidad' => 1, 
            ];
    
            $carrito->insert($datos);
        }
    
        return redirect()->to('carrito');
    }
    
}