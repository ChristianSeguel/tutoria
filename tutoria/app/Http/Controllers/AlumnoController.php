<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Tutor;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['alumnos']=Alumno::paginate(5);
        return view('alumno.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $alumno= new Alumno();
        $tutors= Tutor::all();
        return view('alumno.create',compact('alumno','tutors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $requisitos=[
            'Nombre'=>'required|string|max:100',
            'Apellidos'=>'required|string|max:100',
            'Correo'=>'required|email',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Apellidos.required'=>'El apellido es requerido'
        ];

        $this->validate($request, $requisitos, $mensaje);

        //$datosAlumno=request()->all();
        $datosAlumno=request()->except('_token');
        Alumno::insert($datosAlumno);
        //return response()->json($datosAlumno);
        return redirect('alumno')->with('mensaje','Alumno agregado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $alumno=Alumno::findOrFail($id);
        $tutors= Tutor::all();
        return view('alumno.edit', compact('alumno','tutors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $requisitos=[
            'Nombre'=>'required|string|max:100',
            'Apellidos'=>'required|string|max:100',
            'Correo'=>'required|email',
        ];
        $mensaje=[
            'required'=>'El :attribute es requerido',
            'Apellidos.required'=>'El apellido es requerido'
        ];

        $this->validate($request, $requisitos, $mensaje);
        //


        $datosAlumno=request()->except('_token','_method');
        Alumno::where('id','=',$id)->update($datosAlumno);

        $alumno=Alumno::findOrFail($id);
        //return view('alumno.edit', compact('alumno'));
        return redirect('alumno')->with('mensaje','Alumno editado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Alumno::destroy($id);
        return redirect('alumno')->with('mensaje','Alumno eliminado con exito');
    }
}
