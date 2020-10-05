<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employee;
use App\Location;

class LoggedController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function home()
  {
      return view('home');
  }

  public function create(){

    $locations = Location::all();

    return view( 'employees.create' , compact('locations') );
  }

  public function store(Request $request){

    $data = $request-> all();
    Employee::create($data);

    return redirect() -> route( 'employees-index' );
  }


  public function destroy($id){

    $employee= Employee::findOrFail($id);
    $employee -> delete();

    return redirect() -> route( 'employees-index' );
  }


  public function edit($id){

    $loc = Location::all();
    $emp = Employee::findOrFail($id);

    return view('employees.edit', compact('emp', 'loc'));
  }


  public function update (Request $request, $id){

    $data = $request->all();
    $emp = Employee::findOrFail($id);
    $emp -> update($data);

    return redirect() -> route( 'employees-index' );
  }

}
