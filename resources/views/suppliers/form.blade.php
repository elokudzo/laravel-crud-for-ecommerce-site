
<!-- supplier name-->
@if($errors->any())

<ul class="alert alert-danger">
  @foreach($errors->all() as $error )
<li>{{ $error }}</li>

@endforeach
</ul>
@endif
<div class="form-group {{ $errors->has('supplier_name') ? 'has-error':'' }}">
{!! Form::label('supplier_name', 'Supplier Name', array('class' => 'col-lg-2 col-sm-2 control-label')) !!} 
  
    <div class="col-lg-10">
  {!! Form::text('supplier_name',null, array('class' => 'form-control','id'=>'supplier_name','placeholder'=>'Supplier \'s Name')) !!}
  {!! $errors->first('supplier_name','<span class="help-block">:message</span>')!!}
    </div>

</div>


<!-- supplier uniq id -->

<!--  supplier country -->


<div class="form-group {{ $errors->has('supplier_country') ? 'has-error':'' }}">
      {!! Form::label('supplier_country', 'Supplier Country', array('class' => 'col-lg-2 col-sm-2 control-label')) !!} 
        
     <div class="col-lg-10">

          {!! Form::text('supplier_country',null, array('class' => 'form-control','id'=>'supplier_country')) !!}
  {!! $errors->first('supplier_country','<span class="help-block">:message</span>')!!}               
      </div>
</div>

<!-- supplier website -->

<div class="form-group">
  {!! Form::label('supplier_website', 'Supplier Website', array('class' => 'col-lg-2 col-sm-2 control-label')) !!} 
  
    <div class="col-lg-10">
       {!! Form::text('supplier_website',null, array('class' => 'form-control','id'=>'supplier_website')) !!}
                 
     </div>
</div>

<!-- supplier phone number 1  -->

<div class="form-group {{ $errors->has('supplier_phone_number_one') ? 'has-error':'' }}">
   {!! Form::label('supplier_phone_number_one', 'Supplier Phone #1', array('class' => 'col-lg-2 col-sm-2 control-label')) !!} 

  <div class="col-lg-10">
           {!! Form::text('supplier_phone_number_one',null,array('class' => 'form-control','id'=>'supplier_phone_number_one')) !!}   
           {!! $errors->first('supplier_phone_number_one','<span class="help-block">:message</span>')!!}                                      
 </div>

</div>

<!-- supplier phone number 2 -->

<div class="form-group">
       
 {!! Form::label('supplier_phone_number_two', 'Supplier Phone #2', array('class' => 'col-lg-2 col-sm-2 control-label')) !!}
       
   <div class="col-lg-10">

    {!! Form::text('supplier_phone_number_two',null, array('class' => 'form-control','id'=>'supplier_phone_number_two')) !!}
                                 
 </div>
</div>

<!-- supplier email  -->

<div class="form-group">
  
{!! Form::label('supplier_email', 'Supplier Email', array('class' => 'col-lg-2 col-sm-2 control-label')) !!}
       
    <div class="col-lg-10">
 {!! Form::text('supplier_email',null, array('class' => 'form-control','id'=>'supplier_email')) !!}
                                   
     </div>
</div>

<!--  supplier skype id -->

<div class="form-group">
                         
       {!! Form::label('skype_id', 'Skype ID', array('class' => 'col-lg-2 col-sm-2 control-label')) !!}
 
                              
         <div class="col-lg-10">
        {!! Form::text('skype_id',null, array('class' => 'form-control','id'=>'skype_id')) !!}
                                   
         </div>
</div>

<!-- Supplier pobox -->
                                
<div class="form-group">
  {!! Form::label('supplier_pobox', 'P.O.Box', array('class' => 'col-lg-2 col-sm-2 control-label')) !!}
    
              <div class="col-lg-10">

{!! Form::text('supplier_pobox',null, array('class' => 'form-control','id'=>'supplier_pobox','placeholder'=>'P.O.Box')) !!}
                                               
             </div>
</div>

<!-- Contact person name -->

<div class="form-group">

  {!! Form::label('contact_person_name', 'Contact Person Name', array('class' => 'col-lg-2 col-sm-2 control-label')) !!}
   
            
        <div class="col-lg-10">
{!! Form::text('contact_person_name',null, array('class' => 'form-control','id'=>'contact_person_name','placeholder'=>'Contact Person Name')) !!}    
                                       
  </div>
</div>

<!--  Contact person phone number-->

<div class="form-group">
  {!! Form::label('contact_person_phone', 'Contact Person Phone', array('class' => 'col-lg-2 col-sm-2 control-label')) !!}
  
    <div class="col-lg-10">

  {!! Form::text('contact_person_phone',null, array('class' => 'form-control','id'=>'contact_person_phone','placeholder'=>'Contact Person Phone #')) !!} 

   </div>
</div>

<!-- Catalog -->

<div class="form-group {{ $errors->has('catalog') ? 'has-error':'' }}">
  
  {!! Form::label('catalog', 'Supplier\'s Catalog', array('class' => 'col-lg-2 col-sm-2 control-label')) !!}
                                       
     <div class="col-lg-10">
    {!! Form::textarea('catalog' ) !!} 
    {!! $errors->first('catalog','<span class="help-block">:message</span>')!!}                                
     </div>

</div>

<!-- reliability  -->

<div class="form-group {{ $errors->has('catalog') ? 'has-error':'' }}">
  {!! Form::label('reliability', 'Reliability', array('class' => 'col-lg-2 col-sm-2 control-label')) !!}
          
     <div class="col-lg-10">
  {!!  Form::select('reliability',array(''=>'','1' => '1/5', '2' => '2/5','3' => '3/5','4' => '4/5','5' => '5/5')) !!}
                               {!! $errors->first('reliability','<span class="help-block">:message</span>')!!}                          
      </div>

</div>

<!-- Sells on credit -->

<div class="form-group {{ $errors->has('sell_credit') ? 'has-error':'' }}">
        {!! Form::label('sell_credit', 'Sells on Credit', array('class' => 'col-lg-2 col-sm-2 control-label')) !!}
                                          
              <div class="col-lg-10">

  {!!Form::radio('sell_credit', 'yes','true') !!} Yes  {!!Form::radio('sell_credit', 'no') !!} No
{!! $errors->first('sell_credit','<span class="help-block">:message</span>')!!}
              </div>
</div>

<!-- supplier currency -->
                    
<div class="form-group {{ $errors->has('supplier_currency') ? 'has-error':'' }}">
       
     {!! Form::label('supplier_currency', 'Accepted Currency', array('class' => 'col-lg-2 col-sm-2 control-label')) !!}
                                     
       <div class="col-lg-10">
            {!!  Form::select('supplier_currency', array('USD' => 'USD', 'CFA' => 'CFA','EURO' => 'EURO','NAIRA' => 'NAIRA','YEN' => 'YEN','GHANA_CEDIS'=>'CEDI')) !!}
            {!! $errors->first('supplier_currency','<span class="help-block">:message</span>')!!}
                                                                       
      </div>
</div>
<!--  legal document -->

<div class="form-group">
            {!! Form::label('legal_document', 'Legal Document', array('class' => 'col-lg-2 col-sm-2 control-label')) !!}

             
                                      <div class="col-lg-10">
                                      {!! Form::file('legal_document') !!}
                                                                             
           </div>
</div>

<!--  Comment -->

 <div class="form-group">
             {!! Form::label('comments', 'Comments', array('class' => 'col-lg-2 col-sm-2 control-label')) !!}

            <div class="col-lg-10">

               {!! Form::textarea('comments' ) !!}     
                                              
           </div>
   </div>

    <div class="form-group">

              
<!-- submit button -->
   {!! Form::button('Submit', array('class'=>'btn btn-info', 'type'=>'submit')) !!}    
                   

                  