<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\user;
use Crypt;
use Session;
class users extends Controller
{
   public function list(){
      //$users = DB::table('users')->paginate(15);
      //$userdata = User::paginate(2);
      $userdata = User::all();
		//$userdata 	= User::all()->paginate(2);
		return view('userlist',['user'=>$userdata]);
   }
   public function create(){
   		return view('create');
   }
   public function loginsubmit(Request $req){
	   $user= user::where("email",$req->input('email'))->get();
      //if(Crypt::decryt($user[0]->password)==$req->input('password')){
         $req->session()->put('userEmail',[$req->input('email')]);
         return redirect('/user');
      //}
   }
   public function createsubmit(Request $req){
   		$user =new user;
         $user->name=$req->name;
         $user->email=$req->email;
         $user->password=Crypt::encrypt($req->input('password'));
         $result=$user->save();
         if($result){
            $req->session()->flash('status','Record Created successfully');
            return redirect('/user');
         }
   }
   public function delete($id){
   		//return $id;
         user::find($id)->delete();
         Session()->flash('status','delete record successfully');
         return redirect('/user');
   }
   public function edit($id){
      $data    =user::find($id);
      return view('edit',['data'=>$data]);
   }
   public function update(Request $req){
      $user          =user::find($req->input('id'));
      $user->name    =$req->input('name');
      $user->email   =$req->input('email');
      $user->save();
      $req->session()->flash('status','record updated successfully');
      return redirect('/user');
   }
}
