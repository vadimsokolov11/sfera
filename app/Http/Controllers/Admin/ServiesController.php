<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Servies;
use Illuminate\Http\Request;

class ServiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $servies = Servies::orderBy('created_at', 'desc')->get();
        return view('admin.servies.index', ['servies' => $servies]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.servies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $new_servies = new Servies();
        $new_servies->title = $request->title;
        $new_servies->description = $request->description;
        $new_servies->price = $request->price;
        $new_servies->status = $request->status;
        $new_servies->save();

        return redirect()->back()->withSuccess('Услуга была успешно добавлена!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Servies $servies)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Servies $servies)
    {
        return view('admin.servies.edit', [
            'servies' => $servies
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Servies $servies)
    {
        $servies->title = $request->title;
        $servies->save();

        return redirect()->back()->withSuccess('Услуга была успешно обновлена!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Servies $servies)
    {
        //
    }
}
