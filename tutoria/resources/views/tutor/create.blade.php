
@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{url('/tutor')}}" method="post" enctype="multipart/form-data">
    @csrf
    @include('tutor.form',['modo'=>'crear']);
</form>
</div>
@endsection