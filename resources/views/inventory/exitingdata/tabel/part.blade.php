<!-- DataTable with Buttons -->
<div class="card-datatable table-responsive pt-0">
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
    </div>
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
                <td>{{ ++$i }}</td>
                <td>{{ $part->code_part }}</td>
                <td>{{ $part->name }}</td>
                <td>{{ $part->list_no }}</td>
                <td>{{ $part->type }}</td>
                <td>{{ $part->serial }}</td>
                <td>{{ $part->quantity }}</td>
            </tr>
        </tbody>
        @endforeach
    </table>
    </div>
<!--/ DataTable with Buttons -->