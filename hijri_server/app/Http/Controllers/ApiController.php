<?php 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Response;
use File;
use App\User;
use Illuminate\Routing\Route;
use App\Stock;
use App\Order;
use App\Mail\EmailVerification;
use Hash;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Storage;
use App\Http\Controllers\Controller;
class ApiController extends Controller {


public function orderPage(Request $request){

	return view('order')->with('design',$request->design);

}

public function order(Request $request){

	/*Mail::send('orderTemplate',['name' => $request->name,'phone' => $request->phone,'design' => $request->design,'address' => $request->address],function($m) use ($request){
        $m->from('email@hijriinteriors.com','Hijri Interiors');
        $m->to('zainsidd@yahoo.com','Dear Admin')->subject('New Order');
    });
	return view('404');*/
	
	/*$response = array(
	                'status' => true,
	                'name' => $request->name
	    );
	
	return Response::json($response);*/
	$order = new Order;
	$order->name = $request->name;
	$order->phone = $request->phone;
	$order->address = $request->address;
	$order->design = $request->design;
	$order->save();


	/*$order=DB::insert('insert into orders (name,phone,address,design) values(?,?,?,?)',[$request->name,$request->phone,$request->address,$request->design]);*/

	$response = array(
	                'status' => true,
	                'order' => $order
	    );
	
	return Response::json($response);

}

public function clothPage(Request $request){

    $product_type = $request->type;
	

	$products = Stock::where('sub_category','=',$product_type)->get();

	$response = array(
	                'status' => true,
	                'products' => $products
	    );
	
	return Response::json($response);


}

public function blindPage(Request $request){

    $product_type = $request->type;

	$products = Stock::where('sub_category','=',$product_type)->get();

	$response = array(
	                'status' => true,
	                'products' => $products
	    );
	
	return Response::json($response);

}

public function floorPage(Request $request){

    $product_type = $request->type;

	$products = Stock::where('sub_category','=',$product_type)->get();

	$response = array(
	                'status' => true,
	                'products' => $products
	    );
	
	return Response::json($response);

}

public function designPage(Request $request){

	$product_type = $request->type;
	

	$products = Stock::where('type','=',$product_type)->get();

	$response = array(
	                'status' => true,
	                'products' => $products
	    );
	
	return Response::json($response);

}

public function contact(Request $request){

	Mail::send('contactTemplate',['name' => $request->name,'email' => $request->email,'subj' => $request->subject,'msg' => $request->message],function($m) use ($request){
            $m->from('email@hijriinteriors.com','Hijri Interiors');
            $m->to('zainsidd@yahoo.com','Dear Admin')->subject('User Contacted');
        });
	return view('404');

}



}