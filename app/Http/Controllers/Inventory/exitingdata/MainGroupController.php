<?php

namespace App\Http\Controllers\Inventory\exitingdata;

use App\Http\Controllers\Controller;
use App\Models\inventory\InventoryMainGroups;
use App\Models\ship\Ship;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class MainGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.exitingdata.maingroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'code_main_group' => 'required|integer|between:0,9',
            'name' => 'required',
        ]);

        $input = $request->all();
        $ship_id = Ship::where('uuid', session('ship_uuid'))->get()->first();
        $input['ship_id'] = $ship_id->id;
        $input['uuid'] = Uuid::uuid4();

        InventoryMainGroups::create($input);

        return redirect()->route('exitingdata.index')
            ->with('success', 'Main Group created successfully');
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
        $maingroup = InventoryMainGroups::find($id);
        return view('inventory.exitingdata.maingroup.edit', compact('maingroup'));
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
        $this->validate($request, [
            'code_main_group' => 'required|integer|between:0,9'.$id,
              'name' => 'required',
              'ship_id' => 'required|exists:ships,id',
            ]);

            $input = $request->all();
            $maingroup = InventoryMainGroups::find($id);
            $maingroup->update($input);

            return redirect()->route('exitingdata.index')
            ->with('success', 'Update successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        InventoryMainGroups::find($id)->delete();
        return redirect()->route('exitingdata.index')
            ->with('success', 'deleted successfully');
    }
}
