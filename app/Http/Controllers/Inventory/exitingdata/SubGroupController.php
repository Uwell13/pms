<?php

namespace App\Http\Controllers\Inventory\exitingdata;

use App\Http\Controllers\Controller;
use App\Models\inventory\InventorySubGroups;
use Illuminate\Http\Request;

class SubGroupController extends Controller
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
        return view('inventory.exitingdata.subgroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'group_id' => 'required',
            'uuid' => 'required',
            'code_sub_group' => 'required|numeric|digits:1',
            'name' => 'required',
        ]);

        $input = $request->all();
        InventorySubGroups::create($input);

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
        $subgroup = InventorySubGroups::find($id);
        return view('inventory.exitingdata.subgroup.edit', compact('subgroup'));
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
        'group_id' => 'required',
        'uuid' => 'required',
        'code_sub_group' => 'required|numeric|digits:1',
        'name' => 'required',
            ]);

            $input = $request->all();
            $subgroup = InventorySubGroups::find($id);
            $subgroup->update($input);

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
        InventorySubGroups::find($id)->delete();
        return redirect()->route('exitingdata.index')
            ->with('success', 'deleted successfully');
    }
}
