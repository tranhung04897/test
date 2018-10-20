<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Users;
use App\Http\Requests\RegisterRequest;
class AuthController extends Controller
{
	public function __construct(Users $mUsers){
		$this->mUsers = $mUsers;
	}
    public function getRegis(){
    	return view('auth.register');
    }
    public function postRegis(RegisterRequest $request){
   
    	$fullname = $request->post('fullname');
    	$email = $request->post('email');
    	$password = $request->post('password');
    	$phone = $request->post('phone');
    	$address = $request->post('address');
    	$gender = $request->post('gender');
    	$arItem = array(
    		'fullname'=>$fullname,
    		'email'=>$email,
    		'password'=>$password,
    		'phone'=>$phone,
    		'address'=>$address,
    		'gender'=>$gender,);
    	$check = $this->mUsers->getCheck($email);
    	if($check >0){
    		$request->session()->flash('status','Email này đã tồn tại, vui lòng nhập Email khác.');
       		return redirect()->route('auth.register');
    	}else{
		if(Users::insert($arItem)){
	   		$request->session()->flash('status','Đăng Ký Thành Công');
       		return redirect()->route('auth.register');
    	}else {
            $request->session()->flash('status','Đăng Ký Thất Bại, Vui lòng kiểm tra lại!');
            return redirect()->route('auth.register');
        }
    }
    }
}
