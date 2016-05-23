@extends('master')


@section('page_title')

<h3>Edit the supplier </h3>

@stop

@section('main')

{!! Form::model($supplier,['route'=>['suppliers.update',$supplier->supplier_uniq_id],'method'=>'PATCH','class'=>'form-horizontal','files'=>true]) !!}

    @include('suppliers.form')

{!! Form::close() !!}
<br>
<br><br>



@stop