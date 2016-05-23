<?php namespace App\Http\Controllers;

use App\Supplier;

use App\Http\Requests\CreateSupplierRequest;
use Illuminate\Http\Request;

use Illuminate\HttpResponse;

use App\Http\Controllers\Controller;


class SuppliersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	private $supplier;


	public function __construct(Supplier $supplier){

		$this->supplier = $supplier;

	}

	public function index()
	{
		$suppliers = $this->supplier->get();

		return view('suppliers.index',compact('suppliers'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{


		return view('suppliers.create');
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Supplier $supplier,CreateSupplierRequest $request)
	{
		

	  	
	$data = $request->except(['legal_document']);
	$data['supplier_uniq_id'] = strval(rand(1,1000));


  	$data['legal_document'] = "";


  if($request->hasFile('legal_document')){

	$req = $data['supplier_uniq_id'];
	$req .="_";
	$req .= $request->file('legal_document')->getClientOriginalName();

  	$request->file('legal_document')->move(public_path('assets/suppliers'),$req );
    $data['legal_document'] = 'assets/suppliers/' . $req;
		}

	$data['created_by'] = strval(rand(1,1000));
	


	$data['approval'] = "yes";


    $supplier->create($data);

	return redirect()->route('suppliers.index');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Supplier $supplier)
	{
		return view('suppliers.show',compact('supplier'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Supplier $supplier)

	{
	//	$supplier = Supplier::where('supplier_uniq_id', '=','204' )->take(1)->first();


		//dd($supplier);

		return view('suppliers.edit',compact('supplier'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Supplier $supplier , CreateSupplierRequest $request)
	{

		
			$data = $request->except(['legal_document']);

			if($request->hasFile('legal_document')){

			$req = $supplier->supplier_uniq_id;
			$req .="_";
			$req .= $request->file('legal_document')->getClientOriginalName();
			
			$request->file('legal_document')->move(public_path('assets/suppliers'), $req);
    		$data['legal_document'] = 'assets/suppliers/' . $req;
			$supplier->fill($data);
			$supplier->save();
		}
		else{

			$supplier->fill($data);
			$supplier->save();
		}

		

		return redirect()->route('suppliers.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy(Supplier $supplier)
	{
	
		$supplier->delete();
		return redirect()->route('suppliers.index');		
	}




public function export(Request $myrequest){

$list = $myrequest->input('selected_export');



\Excel::create('jackfile',function($excel)use($list){

$excel->sheet('firstsheet',function($sheet) use($list){

$suppliers = Supplier::whereIn('supplier_uniq_id',$list)->get()->toArray();

        // setting column names for data - you can of course set it manually
        $sheet->appendRow(array_keys($suppliers[0])); // column names

        // getting last row number (the one we already filled and setting it to bold
        $sheet->row($sheet->getHighestRow(), function ($row) {
            $row->setFontWeight('bold');
        });

        // putting suppliers data as next rows
        foreach ($suppliers as $supplier) {
            $sheet->appendRow($supplier);
        }
    });

})->download('xlsx');


		

}


}
