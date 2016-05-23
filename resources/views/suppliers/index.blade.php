 {{-- suppliers index page to show list of suppliers--}}
@extends('master')


@section('page_title')

<h3>List of Suppliers</h3>
<br>
{!! HTML::link('/suppliers/create','Create a new supplier') !!}

@stop

@section('main')

@if(count($suppliers) == 0)

<h4>No supplier created for the moment.</h4>
@else

{!! Form::open(['method' => 'get', 'route' => 'suppliers.export']) !!}

{!! Form::submit('Export',['class' => 'btn btn-default  space ']); !!}




    <table class="table">

        <thead>

            <tr>

                <th>Check for export </th>

                <th>Supplier Name</th>

                <th><center>Operations</center></th>

            </tr>

        </thead>

        <tbody>

  @foreach($suppliers as $supplier)
            <tr>

                 <td>{!! Form::checkbox('selected_export[]', $supplier->supplier_uniq_id) !!} </td>
                <td>{!! $supplier->supplier_name !!} </td>

                <td>


<!-- deleting form -->
<!--
    {!! Form::open(['method' => 'DELETE', 'data-confirm' => 'Are you sure?','action' => ['SuppliersController@destroy', $supplier->supplier_uniq_id]]) !!}

{!! Form::submit('Delete',['class' => 'btn btn-danger pull-right space ']); !!}

{!! Form::close() !!}

-->


 {!! Form::open(['method' => 'delete', 'data-confirm' => 'Are you sure?','action' => ['SuppliersController@destroy', $supplier->supplier_uniq_id]]) !!}

{!! Form::submit('Delete',['class' => 'btn btn-danger space pull-right ']); !!}

{!! Form::close() !!}

<!-- editing form -->

        
 {!! Form::open(['method' => 'GET', 'action' => ['SuppliersController@edit', $supplier->supplier_uniq_id]]) !!}

{!! Form::submit('Edit',['class' => 'btn btn-info pull-right space ']); !!}

{!! Form::close() !!}


<!-- viewing form -->
 {!! Form::open(['method' => 'GET', 'action' => ['SuppliersController@show', $supplier->supplier_uniq_id]]) !!}

{!! Form::submit('View',['class' => 'btn btn-success pull-right space ']); !!}

{!! Form::close() !!}



<!-- exporting to excel file -->



</td>
            </tr>
            @endforeach

        </tbody>

    </table>


{!! Form::close() !!}
@endif
@stop