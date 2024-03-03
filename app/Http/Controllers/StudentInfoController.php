<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentInfoModel;
use App\Models\User;
use DB;
use Log;


class StudentInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studentInfos = StudentInfoModel::all();
        return view('public.home.index', compact('studentInfos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('public.home.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'address' => 'required|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    
        ]);
        try {
            DB::beginTransaction();
            
            $destinationPath = 'uploads';
                $photoExtension = $validatedData['image']->getClientOriginalExtension();
                $file = 'image'.uniqid().'.'.$photoExtension;
                $validatedData['image']->move($destinationPath, $file);

            StudentInfoModel::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'address' => $validatedData['address'],
                'image' => $file,
            ]);

            DB::commit();
                
        }
        catch (\Exception $e) {
            Log::error($e);
			DB::rollback();

			return redirect()
				->back()
				->with('flash_error', 'Something went wrong, please try again later.')
				->withInput();
        }
        return redirect()->route('home.create')->with('flash_success', 'Student information has been added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
