<?php

namespace App\Http\Controllers;
use App\Models\Donors;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Collection;

class DonorController extends Controller
{
    public function home(){
        $donors =Donors::paginate(10);

        // dd($donors);
        return view('index',['donors'=>$donors]);
    }
    public function create(Request $request){
        // $validatedData = $request->validate([
        //     'name'=>'required',
        //     'sex'=>'required',
        //     'age'=>'required',
        //     'bloodg'=>'required'
        // ]);

        
        $donor = new Donors;
    //    Donors::create($validatedData);
        $donor -> name = $request->post('dname');
        $donor -> sex = $request->post('dsex');
        $donor -> age = $request->post('dage');
        $donor -> bloodg = $request->post('dbloodg');
        $donor -> status = $request->post('status');
        $donor->save();
        return redirect('/');
    }
    public function update($id){
        $donor = Donors::findOrFail($id);
        // if(!$donor) return abort(404);
        // dd($donor); 
        return view('update',['donor'=>$donor]);
    }
    // public function edit(Request $request,Donors $donor){
    //      $validatedData = $request->validate([
    //          'name'=>'required',
    //          'sex'=>'required',
    //          'age'=>'required',
    //          'bloodg'=>'required'
    //      ]);
    //      dd(validatedData);
        //  $donor->name=$validatedData['name'];
        //  $donor->sex=$validatedData['sex'];
        //  $donor->age=$validatedData['age'];
        //  $donor->bloodg=$validatedData['bloodg'];
        //  $donor->save();
        //  return redirect('/');
    public function delete(Donors $donor){
        $donor->delete();
        return back();
    }
    public function search(){
        $search = $_GET['search'];
        $donors = Donors::where('name','LIKE','%'.$search.'%')->get();
        // $donors = Donors::where('bloodg','LIKE','%'.$search.'%')->get();
        return view('search',compact('donors'));
    }
   public function choose(){
       $choose = $_GET['choose'];
       $donors = Donors::where('bloodg','LIKE','%'.$choose.'%')->get();
       return view('search',compact('donors'));


       
   }
}
