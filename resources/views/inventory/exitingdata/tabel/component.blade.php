<!-- DataTable with Buttons -->
<div class="card-datatable table-responsive pt-0">
    @can('Exiting-Data-Create')    
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('component.create') }}"> Create New</a>
    </div>
    @endcan
    <br />
    <table class="datatables-basic table">
        <thead>
        <tr>
            <th></th>
            <th></th>
            <th>Main Group</th>
            <th>Group</th>
            <th>Sub Group</th>
            <th>Unit</th>
            <th>Component Code</th>
            <th>Nama</th>
            <th>Full Code + Name</th>
            <th>Item Code</th>
            <th>List No</th>
            <th>Drawing No</th>
            <th>Vendor</th>
            <th>Type</th>
            <th>Component No</th>
            <th>Issued By</th>
            <th>Certificate Number</th>
            <th>Specification</th>
            <th>Maintenance</th>
            <th>Approval Number</th>
            <th>Date Approval</th>
            <th>Place</th>
            <th>Date</th>
            <th>Validity</th>
            <th>Maker</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($component as $component)
            <tr>
                <td></td>
                <td></td>
                <td>
                    {{ $component->unit->sub_group->group->main_group->code_main_group }}-
                    {{ $component->unit->sub_group->group->main_group->name }}
                </td>
                <td>
                    {{ $component->unit->sub_group->group->code_group }}-
                    {{ $component->unit->sub_group->group->name }}
                </td>
                <td>
                    {{ $component->unit->sub_group->code_sub_group }}-
                    {{ $component->unit->sub_group->name }}
                </td>
                <td>
                    {{ $component->unit->code_units }}-
                    {{ $component->unit->name }}
                </td>
                <td>{{ $component->code_component }}</td>
                <td>{{ $component->name }}</td>
                <td>
                    {{ $component->unit->sub_group->group->main_group->code_main_group }}
                    {{ $component->unit->sub_group->group->code_group }}
                    {{ $component->unit->sub_group->code_sub_group }}-
                    {{ $component->unit->code_units }}-
                    {{ $component->code_component }}-
                    {{ $component->name }}
                </td>
                <td>{{ $component->item_code }}</td>
                <td>{{ $component->list_no }}</td>
                <td>{{ $component->drawing_no }}</td>
                <td>{{ $component->vendor }}</td>
                <td>{{ $component->type }}</td>
                <td>{{ $component->serial }}</td>
                <td>{{ $component->issue_by }}</td>
                <td>{{ $component->certificate_no }}</td>
                <td>{{ $component->specification_detail }}</td>
                <td>{{ $component->maintenance_detail }}</td>
                <td>{{ $component->number_approval }}</td>
                <td>{{ $component->date_approval }}</td>
                <td>{{ $component->pnd_place }}</td>
                <td>{{ $component->pnd_date }}</td>
                <td>{{ $component->validity }}</td>
                <td>{{ $component->maker }}</td>
                <td>{{ $component->image }}</td>
                <td>
                @can('Exiting-Data-Edit')       
                    <a class="btn submit-btn" href="{{ route('component.edit',$component->id) }}"><i class=" ti ti-edit ti-ms"></i></a>
                @endcan

                @can('Exiting-Data-Delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['component.destroy', $component->id],'style'=>'display:inline']) !!}
                    {{Form::button('<i class="ti ti-trash"></i>', ['type' =>'submit', 'class' => 'submit-btn'])}}
                    {!! Form::close() !!}
                @endcan
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
<!--/ DataTable with Buttons -->