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
            <th>No</th>
            <th>Code</th>
            <th>Name Unit</th>
            <th>Drawing No</th>
            <th>Data Source</th>
            <th>Type</th>
            <th>Model</th>
            <th>Specification</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($unit as $unit)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $unit->code_units }}</td>
                <td>{{ $unit->name }}</td>
                <td>{{ $unit->drawing_no }}</td>
                <td>{{ $unit->serial }}</td>
                <td>{{ $unit->type }}</td>
                <td>{{ $unit->quantity }}</td>
                <td>{{ $unit->specification_detail }}</td>
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