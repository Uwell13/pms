<!-- DataTable with Buttons -->
<div class="card-datatable table-responsive pt-0">
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('maingroup.create') }}"> Create New Product</a>
    </div>
    <br />
    <table class="dt-complex-header table table-bordered">
        <thead>
        <tr>
            <th>No</th>
            <th>Code</th>
            <th>Name Main Group</th>
            <th>Ship</th>
            <th>Action</th>
        </tr>
        </thead>
        @foreach ($maingroup as $mgroup)
        <tbody>
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $mgroup->code_main_group }}</td>
                <td>{{ $mgroup->name }}</td>
                <td>{{ $mgroup->ship_id }}</td>
                <td>
                @can('Users-Edit')       
                    <a class="btn submit-btn" href="{{ route('maingroup.edit',$mgroup->id) }}"><i class=" ti ti-edit ti-ms"></i></a>
                @endcan

                @can('Users-Delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['maingroup.destroy', $mgroup->id],'style'=>'display:inline']) !!}
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