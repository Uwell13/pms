<?php

namespace App\Http\Controllers\Inventory\exitingdata;

use App\Http\Controllers\Controller;
use App\Models\inventory\InventoryComponents;
use App\Models\inventory\InventoryParts;
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $component  = InventoryComponents::whereHas('unit.sub_group.group.main_group')->paginate(2);
        return view('inventory.exitingdata.part.create', compact('component'));
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
            'component_id' => 'required',
            'code_part' => 'required',
            // 'd_cp' => 'nullable',
            'name' => 'required',
            'item_code' => 'required',
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
        $input['uuid'] = Uuid::uuid4();
        InventoryParts::create($input);

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
        $component  = InventoryComponents::whereHas('unit.sub_group.group.main_group')->paginate(2);
        $part = InventoryParts::find($id);
        return view('inventory.exitingdata.part.edit', compact('part','component'));
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
            'component_id' => 'required',
            'code_part' => 'required',
            // 'd_cp' => 'nullable',
            'name' => 'required',
            'uuid' => 'required',
            'item_code' => 'required',
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
        $part = InventoryParts::find($id);
        $part->update($input);

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
        InventoryParts::find($id)->delete();
        return redirect()->route('exitingdata.index')
            ->with('success', 'deleted successfully');
    }
}
