<?php


namespace App\Http\Controllers\CRUD;


use App\Http\Controllers\Controller;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Response;
use App\Models\WholesaleCustomer;

class WholesaleCustomerController extends Controller
{
    public function index(){
        $wholesale_customers = WholesaleCustomer::all();

        $join = Transaction::join('wholesale_customer','wholesale_customer.id','=','transaction.wholesale_customer_id')->
            select('transaction.cash', 'wholesale_customer.name', 'wholesale_customer.id', 'wholesale_customer.credit_limit')->get();
        return view("wholesale-customer",[
            "customers"=> $wholesale_customers,
            "join"=>$join
        ]);

    }
    public function update(Request $request){
        $id = $request->input("updateId");

        if(empty($id)){
            return abort(400);
        }

        $customer = WholesaleCustomer::find($id);

        if(empty($customer)){
            return abort(404);
        }

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contactNumber' => 'required|regex:/(0)[0-9]{9}\b/',
            'address'=> 'required',
            'creditLimit'=> 'required'
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $customer->update([
            "name"=> $request->input("name"),
            "phone_number"=> $request->input("contactNumber"),
            "description"=> $request->input("description"),
            "address"=> $request->input("address"),
            "mostly_purchased_product"=> $request->input("mostlyPurchased"),
            "credit_limit"=> $request->input("creditLimit"),
            "bank_name"=> $request->input("bankName")
        ]);

        return [
            'success'=> true,
            "customer"=> [
                "id"=> $customer->getKey(),
                "name"=> $customer->name,
                "contactNumber"=> $customer->phone_number,
                "description"=> $customer->description,
                "address"=> $customer->address,
                "mostlyPurchased"=> $customer->mostly_purchased_product,
                "creditLimit"=> $customer->credit_limit,
                "bankName"=> $customer->bank_name

            ]
        ];
    }

    public function create(Request $request){

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'contactNumber' => 'required',
            'address'=> 'required',
            'creditLimit'=> 'required'
        ]);

        if ($validator->fails()) {
            return Response::json([
                'success'=> false,
                'errors'=> $validator->errors()
            ],400);
        }

        $customer = WholesaleCustomer::create([
            "name"=> $request->input("name"),
            "phone_number"=> $request->input("contactNumber"),
            "description"=> $request->input("description"),
            "address"=> $request->input("address"),
            "mostly_purchased_product"=> $request->input("mostlyPurchased"),
            "credit_limit"=> $request->input("creditLimit"),
            "bank_name"=> $request->input("bankName")

        ]);

        return [
            'success'=> true,
            "customer"=> [
                "id"=> $customer->getKey(),
                "name"=> $customer->name,
                "contactNumber"=> $customer->phone_number,
                "description"=> $customer->description,
                "address"=> $customer->address,
                "mostlyPurchased"=> $customer->mostly_purchased_product,
                "creditLimit"=> $customer->credit_limit,
                "bankName"=> $customer->bank_name

            ]

        ];
    }

    public function delete(Request $request){
        $id = $request->input("id");

        if(empty($id)){
            return abort(400);
        }

        $customer = WholesaleCustomer::find($id);

        if(empty($customer)){
            return abort(404);
        }

        $customer->delete();

        return [
            "success"=> true
        ];
    }
}
