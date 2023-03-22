<?php

namespace App\Http\Controllers\Inventory\exitingdata;

use App\Http\Controllers\Controller;
use App\Models\inventory\InventoryUnits;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventory.exitingdata.unit.create');
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
        'sub_group_id' => 'required',
        'code_units' => 'required',
        'name' => 'required',
        'uuid' => 'required',
        'item_code' => 'required',
        // 'd_cu' => 'nullable',
        'list_no' => 'nullable',
        'drawing_no' => 'nullable',
        'vendor' => 'nullable',
        'type' => 'nullable',
        'serial' => 'nullable',
        'issue_by' => 'nullable',
        'certificate_no' => 'nullable',
        'specification_detail' => 'nullable',
        'maintenance_detail' => 'nullable',
        'number_approval' => 'nullable',
        'date_approval' => 'nullable',
        'pnd_place' => 'nullable',
        'pnd_date' => 'nullable',
        'validity' => 'nullable',
        'maker' => 'nullable',
        'image' => 'nullable',
        ]);

        $input = $request->all();
        InventoryUnits::create($input);

        return redirect()->route('exitingdata.index')
            ->with('success', 'create successfully');
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
        $unit = InventoryUnits::find($id);
        return view('inventory.exitingdata.unit.edit', compact('unit'));
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
        'sub_group_id' => 'required',
        'code_units' => 'required',
        'name' => 'required',
        'uuid' => 'required',
        'item_code' => 'required',
        // 'd_cu' => 'nullable',
        'list_no' => 'nullable',
        'drawing_no' => 'nullable',
        'vendor' => 'nullable',
        'type' => 'nullable',
        'serial' => 'nullable',
        'issue_by' => 'nullable',
        'certificate_no' => 'nullable',
        'specification_detail' => 'nullable',
        'maintenance_detail' => 'nullable',
        'number_approval' => 'nullable',
        'date_approval' => 'nullable',
        'pnd_place' => 'nullable',
        'pnd_date' => 'nullable',
        'validity' => 'nullable',
        'maker' => 'nullable',
        'image' => 'nullable',
        ]);

        $input = $request->all();
        $unit = InventoryUnits::find($id);
        $unit->update($input);

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
        InventoryUnits::find($id)->delete();
        return redirect()->route('exitingdata.index')
            ->with('success', 'deleted successfully');
    }
}
