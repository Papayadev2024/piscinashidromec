<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIndexRequest;
use App\Http\Requests\UpdateIndexRequest;
use App\Models\Index;
use App\Models\Message;
use App\Models\Service;
use App\Models\Category;
use App\Models\General;
use App\Models\Testimony;
use App\Models\ClientLogos;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use PhpParser\Node\Stmt\TryCatch;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $servicios = Service::where('status', '=', true)->where('visible', '=',  true)->get();
        $titulos = Category::all();
        $testimonios = Testimony::where('status', '=', true)->where('visible', '=',  true)->get();
        $logos = ClientLogos::all();
        $generales = General::all()->first();
        
        return view('public.index', compact('servicios', 'titulos', 'generales', 'testimonios', 'logos'));
    }


    public function servicios($id)
    {
        /* dump($id); */
        $servicioById = Service::where('id', '=', $id)->first();
        $servicios = Service::where('status', '=', true)->where('visible', '=',  true)->get();
        $generales = General::all()->first();
        return view('public.servicios', compact('generales', 'servicios', 'servicioById'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreIndexRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Index $index)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Index $index)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIndexRequest $request, Index $index)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Index $index)
    {
        //
    }

    /**
     * Save contact from blade
     */
    public function guardarContacto(Request $request)
    {
        
        //Del modelo
        //'full_name', 'email', 'phone', 'message', 'status', 'is_read'
        $data = $request->all();
        $data['full_name'] = $request->name. ' ' . $request->last_name;
    
       try {
        $reglasValidacion = [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'phone' => 'required|string|max:99999999999',
            'message' => 'required|string|max:255'
        ];
        $mensajes = [
            'name.required' => 'El campo nombre es obligatorio.',
            'last_name.required' => 'El campo apellido es obligatorio.',
            'email.required' => 'El campo correo electrónico es obligatorio.',
            'email.email' => 'El formato del correo electrónico no es válido.',
            'email.max' => 'El campo correo electrónico no puede tener más de :max caracteres.',
            'phone.required' => 'El campo teléfono es obligatorio.',
            'phone.integer' => 'El campo teléfono debe ser un número entero.',
            'address.required' => 'El campo dirección es obligatorio.',
            'message.required' => 'El campo mensaje es obligatorio.',
        ];
        $request->validate($reglasValidacion, $mensajes);
        $formlanding = Message::create($data);
        // return redirect()->route('landingaplicativos', $formlanding)->with('mensaje','Mensaje enviado exitoso')->with('name', $request->nombre);
        return response()->json(['message'=> 'Mensaje enviado con exito']);
       } catch (ValidationException $e) {
       
        return response()->json(['message'=> $e->validator->errors()], 400);
       }

       
    }

    
}