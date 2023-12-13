<?php

namespace App\Http\Controllers;
use App\Models\empModel;
use Illuminate\Http\Request;

class employe extends Controller
{
    public function employedata(){
        return view('emp-data');
}
public function employe_data(Request $request){
    // print_r($request -> all());
    // return view('registration');
    $request->validate([

        'name' => 'required',
        'email' => 'required | email',
        'pass' => 'required'
    ]);

   $data = new empModel();
   $data->name = $request['name'];
   $data->email = $request['email'];
   $data->password = $request['pass'];
   $data->save();
   return redirect('/employe');

    }

    public function user_view(){
        $records = empModel::all();
        // echo '<pre>';
        // print_r($records->toArray());
        // echo '<pre>';

        $userdata = compact('records');
        return view('emp-view')->with($userdata);
    }


}