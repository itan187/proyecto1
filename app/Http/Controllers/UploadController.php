<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Input;
use Validator;
use Response;
use Illuminate\Http\Request;

use App\Archivo; 
use App\Cliente; 
use App\OrdenCompra;

class UploadController extends Controller
{

    private $ordenCompra;

    private $archivo;

    private $clientes;

    private $request;

    public function __construct(Archivo $archivo, Cliente $clientes, Request $request, OrdenCompra $ordenCompra ) 
    {
        $this->ordenCompra = $ordenCompra;
        $this->archivo =  $archivo;
        $this->clientes = $clientes;
        $this->request  = $request;

    }

    public function index() 
    {
        return view('uploads');
    }

    public function storeCliente() 
    {
        $this->archivo->ruta = $this->uploadFactura();
        $this->archivo->nombre = $this->request->get('nomArchivo');
        $this->archivo->save();

        $this->clientes->fill($this->request->all())->save();
        return response()->json(['success' => true, 'message' => 'Información guardada correctamente']);
    }


    private function uploadFactura() 
    {
        $upload_success = $this->request->file('file')->store('archivos');
        return ($upload_success) ? $upload_success : false;
    }

    public function storeOdenCompra() 
    {
        $this->ordenCompra->fill($this->request->all());
        $this->ordenCompra->archivoOrden = $this->uploadOrdenCompra();
        $this->ordenCompra->save();

        return response()->json(['success' => true, 'message' => 'Información guardada correctamente']);        
    }

    private function uploadOrdenCompra() 
    {
        $upload_success = $this->request->file('archivoOrden')->store('ordenCompras');
        return ($upload_success) ? $upload_success : false;
    }

    
}
?>