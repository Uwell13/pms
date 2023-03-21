 <!-- DataTable with Buttons -->
 <div class="card-datatable table-responsive pt-0">
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('group.create') }}"> Create New Product</a>
    </div>
    <br />
    <table class="dt-complex-header table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Code</th>
                <th>Name Group</th>
                <th>Action</th>
            </tr>
            </thead>
            @foreach ($group as $group)
            <tbody>
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $group->code_group }}</td>
                    <td>{{ $group->name }}</td>
                    <td>
                @can('Users-Edit')       
                    <a class="btn submit-btn" href="{{ route('group.edit',$group->id) }}"><i class=" ti ti-edit ti-ms"></i></a>
                @endcan

                @can('Users-Delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['group.destroy', $group->id],'style'=>'display:inline']) !!}
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