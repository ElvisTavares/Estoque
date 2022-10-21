
@extends('adminlte::page')

@section('title', 'Dashboard')
   
@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
 @vite([ 'resources/js/app.js'])   
 <div id='app'>
    
 <list-component></list-component>
 </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
     
@stop

@section('js')


  
@stop