<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Input;
use Validator;
use Response;
use Illuminate\Http\Request;

use App\Archivo; 
use App\Cliente; 

class UploadController extends Controller
{

    private $archivo;

    private $clientes;

    private $request;

    public function __construct(Archivo $archivo, Cliente $clientes, Request $request ) 
    {
        $this->archivo =  $archivo;
        $this->clientes = $clientes;
        $this->request  = $request;

    }

    public function index() 
    {
        return view('uploads');
    }

    public function uploadFiles() 
    {
       
        $this->archivo->ruta = $this->uploadFactura();
        $this->archivo->nombre = $this->request->get('nomArchivo');
        $this->archivo->save();

        $this->clientes->fill($this->request->all())->save();
        return response()->json(['success' => true, 'message' => 'Información guardada correctamente']);
    }

    private function storageInfo() {
    }

    private function uploadFactura() 
    {
        $upload_success = $this->request->file('file')->store('facturas');
        return ($upload_success) ? $upload_success : false;
    }

    
}
?>