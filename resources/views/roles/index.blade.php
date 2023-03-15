@extends('layouts.main')
@section('content')
<!-- Content -->
<div class="container-xxl flex-grow-1 container-p-y">
            
            
    <h4 class="fw-semibold mb-4">Roles List</h4>

    <!-- Role cards -->
    
    <div class="row g-4">
      @foreach ($roles as $key => $role)
      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="card">
          <div class="card-body">
            <div class="d-flex justify-content-between">
              <h6 class="fw-normal mb-2">Permission </h6>
              <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy" class="avatar avatar-sm pull-up">
                  <img class="rounded-circle" src="../../assets/img/avatars/5.png" alt="Avatar">
                </li>
              </ul>
            </div>
            <div class="d-flex justify-content-between align-items-end mt-1 text-sm">
                <h4 class="mb-1">{{$role->name}}</h4>
              <div class="role-heading">
                @can('role-edit')
                <a href="{{ route('roles.edit',$role->id) }}" class="btn submit-btn" ><i class=" ti ti-edit ti-ms"></i></a>
                @endcan
                @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                {{Form::button('<i class="ti ti-trash"></i>', ['type' =>'submit', 'class' => 'submit-btn'])}}
                {!! Form::close() !!}    
                @endcan
            </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      <div class="col-xl-4 col-lg-6 col-md-6">
        <div class="card h-100">
          <div class="row h-100">
            <div class="col-sm-5">
              <div class="d-flex align-items-end h-100 justify-content-center mt-sm-0 mt-3">
                <img src="../../assets/img/illustrations/add-new-roles.png" class="img-fluid mt-sm-4 mt-md-0" alt="add-new-roles" width="83">
              </div>
            </div>
            <div class="col-sm-7">
              <div class="card-body text-sm-end text-center ps-sm-0">
                @can('role-create')
                <a href="{{ route('roles.create') }}" class="btn btn-primary mb-2 text-nowrap add-new-role">Add New Role</a>
                @endcan
                <p class="mb-0 mt-1">Add role, if it does not exist</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>
    {!! $roles->render() !!}
    <!--/ Role cards -->
<!--/ Content -->
@endsection
