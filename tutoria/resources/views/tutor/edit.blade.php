@extends('layouts.app')

@section('content')
<div class="container">
<form action="{{url('/tutor/'.$tutor->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    @include('tutor.form',['modo'=>'editar']);
</form>
</div>
@endsection