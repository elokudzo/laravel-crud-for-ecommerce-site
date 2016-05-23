@extends('master')


@section('page_title')


<h3>Create a new supplier</h3>

@stop

@section('main')
	
{!! Form::open(array('route'=>'suppliers.store','files'=>true,'class'=>'form-horizontal') )!!}

    @include('suppliers.form')

{!! Form::close() !!}



@stop