<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestUpdate;
use App\Http\Resources\Tests;
use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExampleController extends Controller
{
    protected $columns =['name','content'];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $test =Test::paginate();
//        return $test;
       return Tests::collection($test);
        return view('example.index',compact('test'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('example.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $test =  $request->validate([
            'name'=>'required|string',
            'content'=>'required',
            'photo'=>'required|file|image'
        ]);
      $test['photo'] = $request->file('photo')->store('test');
        $test['user_id']=22;
//        dd($request->only($this->columns));
        Test::create( $test);
        return  redirect('example');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $test = Test::find($id);
        return view("example.show",compact('test'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $test = Test::find($id);
        return view('example.edit',compact('test'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestUpdate $request, string $id)
    {
        $test = Test::find($id);
        $data = $request->validated();
        if ($request->hasFile('photo')){
            if(!empty( $test->photo)&& Storage::exists($test->photo)){
            Storage::delete($test->photo);
            }
            $data['photo']= $request->file('photo')->store('test');
        }
        else{
            unset($data['photo']);
        }
        $test->update($data );

        return redirect('example');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $test = Test::find($id);
        if (!empty($test->photo)&& Storage::exists($test->photo)){
            Storage::delete($test->photo);
            $test->delete();
        }

        return  $test;
    }
}
