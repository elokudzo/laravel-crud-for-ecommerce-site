<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateSupplierRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{//to be changed with user authentication done
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
		
		'supplier_name'=>'required',
		'supplier_country'=>'required',
		'catalog'=>'required',
		'supplier_phone_number_one'=>'required',
		'sell_credit'=>'required',
		'reliability'=>'required',
		'supplier_currency'=>'required',
		
		
		];
	}

}
