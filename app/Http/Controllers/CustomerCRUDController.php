<?php
namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['customers'] = Customer::orderBy('BranchCode','asc')->paginate(20);
        return view('customers.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  
        $request->validate([
            // 'ClientType' => 'required',
            'BranchCode' => 'required',
            'MainCode' => 'required|unique:customers',
            'ClientCode' => 'required'
            // 'CusImagename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);
            $customer = new Customer;
            $customer->ClientType = $request->Clientstyp;
            $customer->BranchCode = $request->BranchCode;  //database name ----- form name attribute
            $customer->MainCode = $request->MainCode;
            $customer->ClientCode = $request->ClientCode;
            $customer->CustomerName= $request->cusname;
            $customer->CustomerFName= $request->cusfname;
            $customer->CustomerMName= $request->cusmname;
            $customer->CusDOB= $request->cusdob;
            $customer->CustomerPAdd= $request->cpaddress;
            $customer->CustomerCAdd= $request->ccaddress;
            $customer->Addressofctzshp= $request->addctz; 
            $customer->CusContactNum= $request->connumber;
            $customer->CusCtnshpNum= $request->ctznumber;
            $customer->CusCtzshpDistrict= $request->ctzissdis;
           // $customer->image = request()->file('CusImage')->store('public/images');

            if($request->CusImage) {
                $fileName = time().'_'.$request->CusImage->getClientOriginalName();
                $filePath = $request->file('CusImage')->storeAs('uploads', $fileName, 'public');
                $customer->CusImagename = time().'_'.$request->CusImage->getClientOriginalName();
                $customer->file_path = '/storage/' . $filePath;
            }

        //   dd($customer);
            $customer->save();
            return redirect()->route('customers.index')
            ->with('success','Customer has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('customers.show')->with('CustomerArr',Customer::all());
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
        dd($request);
        $request->validate([
            'ClientType' => 'required',
            'BranchCode' => 'required',
            'MainCode' => 'required',
            'ClientCode' => 'required'
            ]);
            $customer = customer::find($customer->$id);
            $customer->ClientType = $request->Clientstyp;
            $customer->BranchCode = $request->BranchCode;  //database name ----- form name attribute
            $customer->MainCode = $request->MainCode;
            $customer->ClientCode = $request->ClientCode;
            $customer->CustomerName= $request->cusname;
            $customer->CustomerFName= $request->cusfname;
            $customer->CustomerMName= $request->cusmname;
            $customer->CusDOB= $request->cusdob;
            $customer->CustomerPAdd= $request->cpaddress;
            $customer->CustomerCAdd= $request->ccaddress;
            $customer->Addressofctzshp= $request->addctz; 
            $customer->CusContactNum= $request->connumber;
            $customer->CusCtnshpNum= $request->ctznumber;
            $customer->CusCtzshpDistrict= $request->ctzissdis;
            $customer->CusCtnshpNum= $request->ctznumber;
            $customer->save();
            $customer->create($request->validate());
            return redirect()->route('customers.index')
            ->with('success','Customer has been updated successfully.');
    }
  
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        // echo'<pre>';
        // print_r($id);
        //  Customer::destroy(array('id',$customer));
         $customer->delete();
         return redirect()->route('customers.index')
        ->with('success','Customer has been deleted successfully');  
    }
    }
