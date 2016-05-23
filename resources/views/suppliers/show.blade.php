@extends('master')


@section('page_title')

<h3>Supplier: {!! $supplier->supplier_name !!} </h3>

@stop

@section('main')


<div class="container">
	
<div class="col-md-2">Supplier Name:  </div>
<div class="col-md-10"> {!! $supplier->supplier_name !!}</div>

<br>
<div class="col-md-2">Supplier Country:  </div>
<div class="col-md-10"> {!! $supplier->supplier_country !!}</div>
<br>

<div class="col-md-2">Supplier Website:  </div>
<div class="col-md-10"> {!! $supplier->supplier_website !!}</div>
<br>

<div class="col-md-2">Supplier Phone #1:  </div>
<div class="col-md-10"> {!! $supplier->supplier_phone_number_one !!}</div>
<br>

<div class="col-md-2">Supplier Phone #2:  </div>
<div class="col-md-10"> {!! $supplier->supplier_phone_number_two !!}</div>
<br>

<div class="col-md-2">Supplier Email:  </div>
<div class="col-md-10"> {!! $supplier->supplier_email !!}</div>
<br>

<div class="col-md-2">Skype ID:  </div>
<div class="col-md-10"> {!! $supplier->skype_id !!}</div>
<br>

<div class="col-md-2"> P.O.Box:  </div>
<div class="col-md-10"> {!! $supplier->supplier_pobox !!}</div>
<br>

<div class="col-md-2">Contact Person Name:  </div>
<div class="col-md-10"> {!! $supplier->contact_person_name !!}</div>
<br>

<div class="col-md-2">Contact Person Phone:  </div>
<div class="col-md-10"> {!! $supplier->contact_person_phone !!}</div>
<br>

<div class="col-md-2">Reliability:  </div>
<div class="col-md-10"> {!! $supplier->reliability !!}</div>
<br>

<div class="col-md-2">Sells on Credit:  </div>
<div class="col-md-10"> {!! $supplier->sell_credit !!}</div>
<br>

<div class="col-md-2">Accepted Currency:  </div>
<div class="col-md-10"> {!! $supplier->supplier_currency !!}</div>
<br>

<div class="col-md-2">Legal Document:  </div>
<div class="col-md-10"><a href="/<?php echo $supplier->legal_document; ?>">Download the document.</a>


</div>
<br>

<div class="col-md-2">Comments:  </div>
<div class="col-md-10"> {!! $supplier->comments !!}</div>

</div>
<br>
<a href="{{ route('suppliers.index') }}" class="btn btn-danger"> Back to list </a>

<!-- deleting form -->
<br><br>
    {!! Form::open(['method' => 'DELETE', 'data-confirm' => 'Are you sure?','action' => ['SuppliersController@destroy', $supplier->supplier_uniq_id]]) !!}

{!! Form::submit('Delete',['class' => 'btn btn-danger space ']); !!}

{!! Form::close() !!}

<!-- editing form -->
<br>
  		
 {!! Form::open(['method' => 'GET', 'action' => ['SuppliersController@edit', $supplier->supplier_uniq_id]]) !!}

{!! Form::submit('Edit',['class' => 'btn btn-info space ']); !!}

{!! Form::close() !!}
@stop