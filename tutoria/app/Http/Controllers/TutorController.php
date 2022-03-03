<?php

namespace App\Http\Controllers;

use App\Models\Tutor;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use function GuzzleHttp\Promise\all;

class TutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['tutors']=Tutor::paginate(5);
        return view('tutor.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('tutor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $requisitos=[
            'Nombre'=>'required|string|max:100',
            'Apellidos'=>'required|string|max:100',
            'Correo'=>'required|email',
            'Contraseña'=>'required|string|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Apellidos.required'=>'El apellido es requerido',
            'Contraseña.required'=>'Se requiere una contraseña'
        ];

        $this->validate($request, $requisitos, $mensaje);

        //$datosTutor=request()->all();
        $datosTutor=request()->except('_token');
        Tutor::insert($datosTutor);
        //return response()->json($datosTutor);
        return redirect('tutor')->with('mensaje','Tutor agregado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function show(Tutor $tutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tutor=Tutor::findOrFail($id);
        return view('tutor.edit', compact('tutor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $requisitos=[
            'Nombre'=>'required|string|max:100',
            'Apellidos'=>'required|string|max:100',
            'Correo'=>'required|email',
            'Contraseña'=>'required|string|max:100',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Apellidos.required'=>'El apellido es requerido',
            'Contraseña.required'=>'Se requiere una contraseña'
        ];

        $this->validate($request, $requisitos, $mensaje);
        //


        $datosTutor=request()->except('_token','_method');
       Tutor::where('id','=',$id)->update($datosTutor);

       $tutor=Tutor::findOrFail($id);
        //return view('tutor.edit', compact('tutor'));
        return redirect('tutor')->with('mensaje','Tutor editado con exito');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tutor  $tutor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Tutor::destroy($id);
        //return redirect('tutor');
        return redirect('tutor')->with('mensaje','Tutor eliminado con exito');
    }
}
