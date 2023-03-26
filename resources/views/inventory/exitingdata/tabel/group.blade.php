 <!-- DataTable with Buttons -->
 <div class="card-datatable table-responsive pt-0">
    @can('Exiting-Data-Create')
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('group.create') }}"> Create New</a>
    </div>
    @endcan
    <br />
    <table class="datatables-basic table">
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th>Main Group</th>
                <th>Code Group</th>
                <th>Name Group</th>
                <th>Full Code + Name</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($groups as $group)
                <tr>
                    <td></td>
                    <td></td>
                    <td>{{ $group->main_group->code_main_group }}-
                        {{ $group->main_group->name }}</td>
                    <td>{{ $group->code_group }}</td>
                    <td>{{ $group->name }}</td>
                    <td>
                        {{ $group->main_group->code_main_group }}
                        {{ $group->code_group }}-
                        {{ $group->name }}

                    </td>
                    <td>
                @can('Exiting-Data-Edit')       
                    <a class="btn submit-btn" href="{{ route('group.edit',$group->id) }}"><i class=" ti ti-edit ti-ms"></i></a>
                @endcan

                @can('Exiting-Data-Delete')
                    {!! Form::open(['method' => 'DELETE','route' => ['group.destroy', $group->id],'style'=>'display:inline']) !!}
                    {{Form::button('<i class="ti ti-trash"></i>', ['type' =>'submit', 'class' => 'submit-btn'])}}
                    {!! Form::close() !!}
                @endcan
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <!-- Modal to add new record -->
    <div class="offcanvas offcanvas-end" id="add-new-record-2">
    <div class="offcanvas-header border-bottom">
      <h5 class="offcanvas-title" id="exampleModalLabel">New Record</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body flex-grow-1">
      <form class="add-new-record pt-0 row g-2" id="form-add-new-record" onsubmit="return false">
        <div class="col-sm-12">
          <label class="form-label" for="basicFullname">Full Name</label>
          <div class="input-group input-group-merge">
            <span id="basicFullname2" class="input-group-text"><i class="ti ti-user"></i></span>
            <input type="text" id="basicFullname" class="form-control dt-full-name" name="basicFullname" placeholder="John Doe" aria-label="John Doe" aria-describedby="basicFullname2" />
          </div>
        </div>
        <div class="col-sm-12">
          <label class="form-label" for="basicPost">Post</label>
          <div class="input-group input-group-merge">
            <span id="basicPost2" class="input-group-text"><i class='ti ti-briefcase'></i></span>
            <input type="text" id="basicPost" name="basicPost" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" aria-describedby="basicPost2" />
          </div>
        </div>
        <div class="col-sm-12">
          <label class="form-label" for="basicEmail">Email</label>
          <div class="input-group input-group-merge">
            <span class="input-group-text"><i class="ti ti-mail"></i></span>
            <input type="text" id="basicEmail" name="basicEmail" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
          </div>
          <div class="form-text">
            You can use letters, numbers & periods
          </div>
        </div>
        <div class="col-sm-12">
          <label class="form-label" for="basicDate">Joining Date</label>
          <div class="input-group input-group-merge">
            <span id="basicDate2" class="input-group-text"><i class='ti ti-calendar'></i></span>
            <input type="text" class="form-control dt-date" id="basicDate" name="basicDate" aria-describedby="basicDate2" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
          </div>
        </div>
        <div class="col-sm-12">
          <label class="form-label" for="basicSalary">Salary</label>
          <div class="input-group input-group-merge">
            <span id="basicSalary2" class="input-group-text"><i class='ti ti-currency-dollar'></i></span>
            <input type="number" id="basicSalary" name="basicSalary" class="form-control dt-salary" placeholder="12000" aria-label="12000" aria-describedby="basicSalary2" />
          </div>
        </div>
        <div class="col-sm-12">
          <button type="submit" class="btn btn-primary data-submit me-sm-3 me-1">Submit</button>
          <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="offcanvas">Cancel</button>
        </div>
      </form>
    </div>
    </div>
    </div>
    <!--/ DataTable with Buttons -->