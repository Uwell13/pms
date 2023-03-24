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
            <th>No</th>
            <th>Code</th>
            <th>Name Component</th>
            <th>Drawing No</th>
            <th>Type</th>
            <th>Specification</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($component as $component)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $component->code_component }}</td>
                <td>{{ $component->name }}</td>
                <td>{{ $component->drawing_no }}</td>
                <td>{{ $component->type }}</td>
                <td>{{ $component->specification_detail }}</td>
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