<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\User;

use Storage;


class Usercontroller extends Controller
{

   public function uploadAvatar(Request $request){

    if ($request->hasFile('image')) {

        User::uplaodAvatar($request->image);
        
        return redirect(route('todo.index'));
    }
    
   
    
    return redirect()->back()->with('error','image not uplaoded! please choose a file');



   }






    public function index(){

        //$user = new User();
        

        //$user->name ='laveena';
        //$user->email ='laveena@gmail.com';
        //$user->password =bcrypt('lavee27');
        //$user->save();

        //$user = User::all();
        //return $user;

       // User::where('id',3)->delete();
      
      // $data = [
       //  'name' => 'rammiah',
       //  'email' => 'rammiah@gmail.com',
       //  'password'=> ('rammiah05'),
   // ];


       //User::create($data);

      // $user = User::all();
      // return $user;


       // DB::insert('insert into users (name,email,password)
        //values (?,?,?)',['kavitha','kavitha@gmail.com','password']);

        //$users=DB::select('select * from users');
        //return $users;
        

        //DB::update('update users set name = ? where id=1',['karthiga']);
        //DB::delete('delete from users where id=1');
        
        
           return view('home');
       }
}
