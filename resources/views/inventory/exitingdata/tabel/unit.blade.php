 <!-- DataTable with Buttons -->
 <div class="card-datatable table-responsive pt-0">
    @can('Exiting-Data-Create')
        
    @endcan
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('unit.create') }}"> Create New Product</a>
    </div>
    <br />
    <table class="datatables-basic table">
        <thead>
        <tr>
            <th></th>
            <th></th>
            <th>Main Group</th>
            <th>Group</th>
            <th>Sub Group</th>
            <th>Unit Code</th>
            <th>Nama</th>
            <th>Full Code + Name</th>
            <th>List No</th>
            <th>Drawing No</th>
            <th>Vendor</th>
            <th>Type</th>
            <th>Unit No</th>
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
            @foreach ($unit as $unit)
            <tr>
                <td></td>
                <td></td>
                <td>
                    {{ $unit->sub_group->group->main_group->code_main_group }}-
                    {{ $unit->sub_group->group->main_group->name }}
                </td>
                <td>
                    {{ $unit->sub_group->group->code_group }}-
                    {{ $unit->sub_group->group->name }}
                </td>
                <td>
                    {{ $unit->sub_group->code_sub_group }}-
                    {{ $unit->sub_group->name }}
                </td>
                <td>{{ $unit->code_units }}</td>
                <td>{{ $unit->name }}</td>
                <td>
                    {{ $unit->sub_group->group->main_group->code_main_group }}
                    {{ $unit->sub_group->group->code_group }}
                    {{ $unit->sub_group->code_sub_group }}
                    {{ $unit->code_units }}-
                    {{ $unit->name }}
                </td>
                <td>{{ $unit->list_no }}</td>
                <td>{{ $unit->drawing_no }}</td>
                <td>{{ $unit->vendor }}</td>
                <td>{{ $unit->type }}</td>
                <td>{{ $unit->serial }}</td>
                <td>{{ $unit->issue_by }}</td>
                <td>{{ $unit->certificate_no }}</td>
                <td>{{ $unit->specification_detail }}</td>
                <td>{{ $unit->maintenance_detail }}</td>
                <td>{{ $unit->number_approval }}</td>
                <td>{{ $unit->date_approval }}</td>
                <td>{{ $unit->pnd_place }}</td>
                <td>{{ $unit->pnd_date }}</td>
                <td>{{ $unit->validity }}</td>
                <td>{{ $unit->maker }}</td>
                <td>{{ $unit->image }}</td>
                <td>
                @can('Exiting-Data-Edit')       
                    <a class="btn submit-btn" href="{{ route('unit.edit',$unit->id) }}"><i class=" ti ti-edit ti-ms"></i></a>
                @endcan

                @can('Exiting-Data-Delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['unit.destroy', $unit->id],'style'=>'display:inline']) !!}
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