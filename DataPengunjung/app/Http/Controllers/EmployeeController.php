<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        $data = Employee :: all();
        return view('datapengunjung', compact('data'));
    }

    public function tambahpengunjung(){
        return view ('tambahdata');
    }

    public function insertdata(Request $request){
        //dd($request -> all ());
        Employee::create ($request -> all ());
        return redirect()-> route('pengunjung')-> with('success', 'Data Telah Ditambahkan');

    }

    public function tampilkandata($id){
        $data = Employee :: find ($id);
        //dd($data);
        return view('tampildata', compact('data'));
    }
    public function updatedata(Request $request, $id){
        $data = Employee :: find ($id);
        $data -> update ($request -> all ());
        return redirect()-> route('pengunjung')-> with('success', 'Data Telah Di Update');

    }

    public function delete ($id){
        $data = Employee :: find ($id); 
        $data -> delete ();
        return redirect()-> route('pengunjung')-> with('success', 'Data Telah Di Hapus');
    }
}
