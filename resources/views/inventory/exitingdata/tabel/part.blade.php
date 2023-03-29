<!-- DataTable with Buttons -->
<div class="card-datatable table-responsive pt-0">
    @can('Exiting-Data-Create')
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('part.create') }}"> Create New</a>
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
            <th>Component</th>
            <th>Part Code</th>
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
            @foreach ($part as $part)
            <tr>
                <td></td>
                <td></td>
                <td>
                    {{ $part->component->unit->sub_group->group->main_group->code_main_group }}-
                    {{ $part->component->unit->sub_group->group->main_group->name }}
                </td>
                <td>
                    {{ $part->component->unit->sub_group->group->code_group }}-
                    {{ $part->component->unit->sub_group->group->name }}
                </td>
                <td>
                    {{ $part->component->unit->sub_group->code_sub_group }}-
                    {{ $part->component->unit->sub_group->name }}
                </td>
                <td>
                    {{ $part->component->unit->code_units }}-
                    {{ $part->component->unit->name }}
                </td>
                <td>
                    {{ $part->component->code_component }}-
                    {{ $part->component->name }}
                </td>
                <td>{{ $part->code_part }}</td>
                <td>{{ $part->name }}</td>
                <td>
                    {{ $part->component->unit->sub_group->group->main_group->code_main_group }}
                    {{ $part->component->unit->sub_group->group->code_group }}
                    {{ $part->component->unit->sub_group->code_sub_group }}-
                    {{ $part->component->unit->code_units }}-
                    {{ $part->component->code_component }}-
                    {{ $part->code_part }}-
                    {{ $part->name }}
                </td>
                <td>{{ $part->item_code }}</td>
                <td>{{ $part->list_no }}</td>
                <td>{{ $part->drawing_no }}</td>
                <td>{{ $part->vendor }}</td>
                <td>{{ $part->type }}</td>
                <td>{{ $part->serial }}</td>
                <td>{{ $part->issue_by }}</td>
                <td>{{ $part->certificate_no }}</td>
                <td>{{ $part->specification_detail }}</td>
                <td>{{ $part->maintenance_detail }}</td>
                <td>{{ $part->number_approval }}</td>
                <td>{{ $part->date_approval }}</td>
                <td>{{ $part->pnd_place }}</td>
                <td>{{ $part->pnd_date }}</td>
                <td>{{ $part->validity }}</td>
                <td>{{ $part->maker }}</td>
                <td>{{ $part->image }}</td>
                <td>
                    @can('Exiting-Data-Edit')       
                        <a class="btn submit-btn" href="{{ route('part.edit',$part->id) }}"><i class=" ti ti-edit ti-ms"></i></a>
                    @endcan
    
                    @can('Exiting-Data-Delete')
                        {!! Form::open(['method' => 'DELETE','route' => ['part.destroy', $part->id],'style'=>'display:inline']) !!}
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