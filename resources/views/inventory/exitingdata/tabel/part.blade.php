<!-- DataTable with Buttons -->
<div class="card-datatable table-responsive pt-0">
    @can('Exiting-Data-Create')
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('part.create') }}"> Create New</a>
    </div>
    @endcan
    <br />
    <table class="dt-complex-header table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Code</th>
            <th>Name Part</th>
            <th>Part No</th>
            <th>Ref No</th>
            <th>Req No</th>
            <th>Qyt</th>
            <th>Action</th>
        </tr>
        </thead>
        @foreach ($part as $part)
        <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $part->code_part }}</td>
                <td>{{ $part->name }}</td>
                <td>{{ $part->list_no }}</td>
                <td>{{ $part->type }}</td>
                <td>{{ $part->serial }}</td>
                <td>{{ $part->quantity }}</td>
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
        </tbody>
        @endforeach
    </table>
    </div>
<!--/ DataTable with Buttons -->