@extends('layouts.dashboard')

@section('content')
@vite([ 'resources/js/app.js'])   

 <div id='app'>
  <insert-component></insert-component>
 </div>
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
     
@stop

@section('js')


  
@stop