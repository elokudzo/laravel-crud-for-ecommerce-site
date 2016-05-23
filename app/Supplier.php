<?php namespace App;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model {
    use SoftDeletes;

    protected $dates = ['deleted_at'];
	
 protected $fillable = array('supplier_name','supplier_country','supplier_website','supplier_phone_number_one','supplier_phone_number_two','supplier_email','skype_id','supplier_pobox','contact_person_name','contact_person_phone','catalog','reliability','sell_credit','supplier_currency','legal_document','comments','approval','created_by','supplier_uniq_id');

}
