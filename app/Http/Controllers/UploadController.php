<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Input;
use Validator;
use Response;
use Illuminate\Http\Request;

use App\Factura; 
use App\Cliente; 

class UploadController extends Controller
{

    private $factura;

    private $clientes;

    private $request;

    public function __construct(Factura $factura, Cliente $clientes, Request $request ) 
    {
        $this->factura =  $factura;
        $this->clientes = $clientes;
        $this->request  = $request;

    }

    public function index() 
    {
        return view('uploads');
    }

    public function uploadFiles( ) 
    {
       
        //if( $this->uploadFactura() !== false ) {
            $this->factura->archivofact = $this->uploadFactura();
            $this->factura->save();
        //}
        
        //$this->clientes->fill($this->request->all())->save();
        return redirect('/upload')->with('message', 'Se ha subido correctamente');
    }

    private function storageInfo() {
        // Validar
    }

    private function uploadFactura() 
    {
        /*$file = array_get($input,'file');
        $destinationPath = 'uploads';
        $extension = $file->getClientOriginalExtension();
        $fileName = rand(11111, 999999) . '.' . $extension; 
        $upload_success = $file->move($destinationPath, $fileName);*/

        $upload_success = $this->request->file('file')->store('facturas');
        return ($upload_success) ? $upload_success : false;
    }

    
}
?>