
@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{url('/alumno')}}" method="post" enctype="multipart/form-data">
            @csrf
            @include('alumno.form',['modo'=>'crear'])
        </form>
    </div>
@endsection
