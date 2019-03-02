<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\student;
class abc extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('home');
        $data = DB::table('employees')
            ->join('edeps', 'employees.id', '=', 'edeps.eid')
            ->select('employees.*', 'employees.name', 'edeps.department')
            ->get();
        $data = student::paginate(3);
         return view('home')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name =$request->name;
        $price = $request->price;
        $city =$request->city;
        $obj = new student;
         $obj->name = $name;
         $obj->price = $price;
         $obj->city=$city;
         $obj->save();
         echo "<script>
         alert('data saved');
         window.location.href='localhost:8000/student';
         </script>";

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
         $data = DB::table('students')->where('id',$id)->get();
         return view('records')->with('data',$data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = student::find($id);
        return view('update')->with('r',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $name =  $request->name;
        $price = $request->price;
        $city = $request->city;
        $obj = student::find($id);
         $obj->name = $name;
         $obj->price = $price;
         $obj->city=$city;
         $obj->save();
         return redirect('student');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        student::find($id)->delete();
        return redirect('student');

    }
    public function mymethod(){
        return view('register');

    }
    public function search(Request $r){
                // $id =  $r->search;
                // $data = student::find($id);
                // if($data!=null){
                //         return view('searchresult')->with('d',$data);
                // }else{
                //         echo "Id not found";
                // }
                

                // $name = $r->search;
                 // $price = $r->price;
                 // $data = DB::table('students')->where('name',$name)->where('price',$price)->get();
                 // return view('welcome')->with('abc',$data);
   

                // $data = DB::table('students')->where('price','>=',$price)->get();
                // return view('welcome')->with('abc',$data);

                $search = $r->search;
                $op= $r->option;
                $data = DB::table('students')->where($op,'like','%'.$search.'%')->get();
                 return view('welcome')->with('abc',$data); 

    }
}
