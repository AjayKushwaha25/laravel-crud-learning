<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Form;

class PagesController extends Controller
{
    public function index()
    {
        // dd(Form::select('name','email')->get());
        $formData = Form::get();
        return view('form')->with('data',$formData);
    }
    /*public function submit(Request $request)
    {
        // dd($request->all());
        $data = [
            'name' => $request->post('name'),
            'email' => $request->post('email'),
            'address' => $request->post('address'),
        ];
        DB::table('forms')->insert($data);
        return "submit successfully";
    }*/
    public function submit(Request $request)
    {
        // dd($request->all());
        Form::create($request->all());
        return redirect()->back()->with('success','submit successfully');
    }
    public function viewUpdate($id)
    {
        $formData = Form::where('id',$id)->first();
        // dd($formData);
        return view('update-form')->with('data',$formData);
    }
    public function update(Request $request,$id)
    {
        // dd($id);
        // Form::create($request->all());
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
        ];
        Form::where('id',$id)->update($data);
        return redirect()->back()->with('success','update successfully');
    }
    public function delete($id)
    {
        // dd($id);
        // dd($request->all());
        Form::where('id',$id)->delete();
        return redirect()->back()->with('delete','deleted successfully');
    }

}
