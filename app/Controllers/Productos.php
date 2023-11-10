<?php 
namespace App\Controllers;
use App\Models\UserModel;
use CodeIgniter\Controller;
use App\Models\Producto;
use App\Models\Tipo;
class Productos extends Controller{

    public function index(){

        $user = session('user');
    
        if (!$user || $user->id_user < 1) {
            // El usuario no ha iniciado sesión, redirigir a la página de inicio de sesión
            return redirect()->to('/login');
        }
    
        // El usuario ha iniciado sesión, verificar su rol
        $rol = $user->rol; 
    
        if ($rol == 1) {
            // Si el usuario tiene rol 1, cargar la vista listar
            $producto = new Producto();

            // Obtén los productos con la información del tipo asociado
            $productos = $producto->productotipo();
        
            $datos['productos'] = $productos;
            $datos['cabecera'] = view('templates/cabecera');
            $datos['pie'] = view('templates/piepagina');
        
            return view('main/crud/listar', $datos);
        } else {
            // Si el usuario no tiene rol 1, redirigir a la página dashboard
            return redirect()->to('/dashboard');
        }
    }

    public function crear() {
        $tipoModel = new Tipo();
        $datos['tipos'] = $tipoModel->tipoprod();

        $datos['cabecera'] = view('templates/cabecera');
        $datos['pie'] = view('templates/piepagina');

    return view('main/crud/crear', $datos);
    }
    
        

    public function guardar(){

        $producto = new Producto();

        $validacion = $this->validate([
            'nombre' => 'required|min_length[3]|max_length[255]',
            'precio' => 'required|numeric',
            'descripcion_prod' => 'required|min_length[3]|max_length[255]',
            'imagen' => [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen,9320]',
            ],
        ]);

        if(!$validacion){
            $session = session();
            $session->setFlashdata('mensaje', 'Verifique la información del formulario');
            return redirect()->back()->withInput();
        }

        if($imagen=$this->request->getFile('imagen')){
            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('uploads', $nuevoNombre);

            $tipoProductoID = $this->request->getVar('tipoprod'); // Obtener la ID del tipo de producto seleccionado

          $producto = new Producto();

          $datos = [
            'nombre' => $nombre = $this->request->getVar('nombre'),
            'precio' => $precio = $this->request->getVar('precio'),
            'descripcion_prod' => $nombre = $this->request->getVar('descripcion_prod'),
            'imagen' => $nuevoNombre,
            'id_tipoprod' => $tipoProductoID, // Almacenar la ID del tipo de producto
        ];
        $producto->insertproducto($datos);
        
        }

        return $this->response->redirect(site_url('/listar'));
    }

    public function eliminar($id=null){

        $producto = new Producto();
        $producto->obteneriddelete($id);
        $ruta=('uploads/'.$datosProducto['imagen']);
        unlink($ruta);

        return $this->response->redirect(site_url('/listar'));

    }

    public function editar($id = null){
        $producto = new Producto();
        $tipo = new Tipo();
    
        $datos['producto'] = $producto->obtenerid($id);
        
        // Obtén la lista de tipos de productos
        $datos['tipos'] = $tipo->tipoprod();
    
        $datos['cabecera'] = view('templates/cabecera');
        $datos['pie'] = view('templates/piepagina');
    
        return view('main/crud/editar', $datos);
    }
    

    public function actualizar(){

        $tipoProductoID = $this->request->getVar('tipoprod'); // Obtener la ID del tipo de producto seleccionado

        $producto = new Producto();
        $datos=[
            'nombre'=>$nombre= $this->request->getVar('nombre'),
            'precio'=>$nombre= $this->request->getVar('precio'),
            'descripcion_prod'=>$nombre= $this->request->getVar('descripcion_prod'),
            'id_tipoprod' => $tipoProductoID // Actualizar la ID del tipo de producto
        ];
        $id=$this->request->getVar('id_producto');


        $validacion = $this->validate([
            'nombre' => 'required|min_length[3]|max_length[255]',
            'precio' => 'required|numeric',
            'tipoprod' => 'required|numeric',
            'descripcion_prod' => 'required|min_length[3]|max_length[255]',
        ]);

        if(!$validacion){
            $session = session();
            $session->setFlashdata('mensaje', 'Verifique la información del formulario');
            return redirect()->back()->withInput();
        }

        $producto->updateprod($id,$datos);

        $validacion = $this->validate([
            'imagen' => [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen,9320]',
            ],
        ]);

        if($validacion){
            
        if($imagen=$this->request->getFile('imagen')){

        // Obtén la información actual del producto
            $datosProducto = $producto->obtenerid($id);

            $ruta=('uploads/'.$datosProducto['imagen']);
            unlink($ruta);

            $nuevoNombre = $imagen->getRandomName();
            $imagen->move('uploads/', $nuevoNombre);

            // Actualiza el registro en la base de datos con el nuevo nombre de la imagen
            $datos=['imagen'=>$nuevoNombre];
            $producto->updateprod($datos, $id);
        }

        }
        return $this->response->redirect(site_url('/listar'));
       
    }
    

    public function inicio(){

        return view('inicio/vista');
    }

    public function about(){

        return view('inicio/about');
    }

    public function catalogo(){

        $producto = new Producto();
        $productos = $producto->productotipo();

        $datos['productos'] = $productos;

        return view('main/catalogo/catalogo', $datos);
    }

    public function desc_producto(){

        $producto = new Producto();
        $productos = $producto->productotipo();

        $datos['productos'] = $productos;
        return view('main/catalogo/desc_producto', $datos);
 }
    
    
}
 
