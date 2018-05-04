<?php

namespace App\Http\Controllers;

use App\User;
use App\Dog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use View;
use Illuminate\Support\Facades\Input;
use Session;
use Hash;
use DB;

class DogController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Profile Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */
    public function showDogList()
    {
        $currentUser = Session::get('session-user');
      
        $dogs = DB::table('dogs')->where('user_id', $currentUser->id)->get();
        return View::make('dogs')->with('dogs', $dogs);
    }

    public function showDogInfo($id){
        $dog = DB::table('dogs')->find($id);
        return View::make('dogprofile')->with('dog', $dog);;
    }  

    public function updateDogInfo($id){
        $dog = Dog::find($id);

        $dog->name = Input::get('name');
        $dog->breed = Input::get('breed');
        $dog->date_of_birth = Input::get('dateofbirth');
      
        $dog->save();
        echo 'Your dog info has been updated!';
        return View::make('dogprofile')->with('dog', $dog);;
    }

    public function showInsertDog() {
        return View::make('insertdog');
    }

    public function saveDogInfo() {
        $dog = new Dog;
        $dog->name = Input::get('name');
        $dog->breed = Input::get('breed');
        $dog->date_of_birth = Input::get('dateofbirth');

        $currentUser = Session::get('session-user');
        $dog->user_id = $currentUser->id;

        $dog->save();
        return View::make('welcome2');
    }

}