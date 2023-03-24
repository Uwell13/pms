<!-- DataTable with Buttons -->
<div class="card-datatable table-responsive pt-0">
    @can('Exiting-Data-Create')
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('subgroup.create') }}"> Create New</a>
    </div>
    @endcan
    <br />
    <table class="datatables-basic table">
        <thead>
        <tr>
            <th>No</th>
            <th>Code</th>
            <th>Name Sub Group</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($subgroup as $sgroup)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $sgroup->code_sub_group }}</td>
                <td>{{ $sgroup->name }}</td>
                <td>
                @can('Exiting-Data-Edit')       
                    <a class="btn submit-btn" href="{{ route('subgroup.edit',$sgroup->id) }}"><i class=" ti ti-edit ti-ms"></i></a>
                @endcan

                @can('Exiting-Data-Delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['subgroup.destroy', $sgroup->id],'style'=>'display:inline']) !!}
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