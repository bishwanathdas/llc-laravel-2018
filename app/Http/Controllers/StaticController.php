<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class StaticController extends Controller
{

    public function _construct(){

    }
    
    //
    public function showWelcome()
    {


    	    $data=[];

    		//$data['today']=date('d-m-Y');
    		//$data['time']=date('H:i:s');
    		//$data['location']=['city'=>'Dhaka','country'=>'Bangladesh'];

            $data['users'] = User::all();


    	/*$today=date('d-m-Y');
    	$time=date('H:i:s');
    	$location=['city'=>'Dhaka','country'=>'Bangladesh'];	
    	*/	
    	
    	//return view('home',$data);

    	return view('frontend.home',$data);

    	//return view('welcome')->with($data);

    	//return  view('welcome',compact('today','time','location'));

    }

    public function showTour()
    {

		$data=[];
    	return view('tour',$data);

    }

    public function showProduct()
    {

        $data=[];
        return view('forms.frmproduct',$data);

    }

    public function AddProduct()
    {

        $data=[];
        return view('forms.frmproduct',$data);

    }

    
}
