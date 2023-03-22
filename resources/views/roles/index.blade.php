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
                                <h4 class="mb-1">{{ $role->name }}</h4>
                                <div class="role-heading">
                                    
                                        <a href="{{ route('roles.edit', $role->id) }}" class="btn submit-btn"><i class=" ti ti-edit ti-ms"></i></a>
                                    
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                                        {{ Form::button('<i class="ti ti-trash"></i>', ['type' => 'submit', 'class' => 'submit-btn']) }}
                                        {!! Form::close() !!}
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
    {{-- {!! $roles->render() !!} --}}

    <!-- Add Role Modal -->
    <div class="modal fade" id="addRoleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-add-new-role">
            <div class="modal-content p-3 p-md-5">
                <button type="button" class="btn-close btn-pinned" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="text-center mb-4">
                        <h3 class="role-title mb-2">Add New Role</h3>
                        <p class="text-muted">Set role permissions</p>
                    </div>
                    <!-- Add role form -->
                    <form id="addRoleForm" class="row g-3" action="{{ route('roles.store') }}" method="POST">
                        @csrf
                        <div class="col-12 mb-4">
                            <label class="form-label" for="modalRoleName">Role Name</label>
                            <input type="text" id="modalRoleName" name="name" class="form-control" placeholder="Enter a role name" tabindex="-1" />
                        </div>
                        <div class="col-12">
                            <h5>Role Permissions</h5>
                            {{-- {{ $permissions[0] }} --}}
                            <!-- Permission table -->
                            <div class="table-responsive">
                                <table class="table table-flush-spacing">
                                    <tbody>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">Session </td>
                                            <td>
                                                <div class="row">
                                                    <div class="col-md mb-md-0 mb-2">
                                                        <div class="form-check custom-option custom-option-basic">
                                                            <label class="form-check-label custom-option-content" for="customRadioTemp1">
                                                                <input name="customRadioTemp" class="form-check-input" type="radio" id="customRadioTemp1" value="{{ $permissions[0]->id }}" name="permission[]" />
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0">{{ $permissions[0]->name }}</span>
                                                                    {{-- <span class="text-muted">Free</span> --}}
                                                                </span>
                                                                <span class="custom-option-body">
                                                                    {{-- <small>Get 1 project with 1 teams members.</small> --}}
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md">
                                                        <div class="form-check custom-option custom-option-basic">
                                                            <label class="form-check-label custom-option-content" for="customRadioTemp2">
                                                                <input name="customRadioTemp" class="form-check-input" type="radio" id="customRadioTemp2" value="{{ $permissions[0]->id }}" name="permission[]" />
                                                                <span class="custom-option-header">
                                                                    <span class="h6 mb-0">{{ $permissions[1]->name }}</span>
                                                                    {{-- <span class="text-muted">$ 5.00</span> --}}
                                                                </span>
                                                                <span class="custom-option-body">
                                                                    {{-- <small>Get 5 projects with 5 team members.</small> --}}
                                                                </span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">{{ strstr($permissions[2]->name, '-', true) }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" value="{{ $permissions[2]->id }}" name="permission[]" type="checkbox" id="userManagementRead" />
                                                        <label class="form-check-label" for="userManagementRead">
                                                            Read
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" value="{{ $permissions[3]->id }}" name="permission[]" type="checkbox" id="userManagementCreate" />
                                                        <label class="form-check-label" for="userManagementCreate">
                                                            Create
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" value="{{ $permissions[4]->id }}" name="permission[]" type="checkbox" id="userManagementUpdate" />
                                                        <label class="form-check-label" for="userManagementUpdate">
                                                            Update
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" value="{{ $permissions[5]->id }}" name="permission[]" type="checkbox" id="userManagementDelete" />
                                                        <label class="form-check-label" for="userManagementDelete">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">{{ strstr($permissions[6]->name, '-', true) }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" value="{{ $permissions[6]->id }}" name="permission[]" type="checkbox" id="contentManagementRead1" />
                                                        <label class="form-check-label" for="contentManagementRead1">
                                                            Read
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" value="{{ $permissions[7]->id }}" name="permission[]" type="checkbox" id="contentManagementCreate1" />
                                                        <label class="form-check-label" for="contentManagementCreate1">
                                                            Create
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" value="{{ $permissions[8]->id }}" name="permission[]" type="checkbox" id="contentManagementUpdate1" />
                                                        <label class="form-check-label" for="contentManagementUpdate1">
                                                            Update
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" value="{{ $permissions[9]->id }}" name="permission[]" type="checkbox" id="contentManagementDelete1" />
                                                        <label class="form-check-label" for="contentManagementDelete1">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-nowrap fw-semibold">{{ strstr($permissions[10]->name, '-', true) }}</td>
                                            <td>
                                                <div class="d-flex">
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" value="{{ $permissions[10]->id }}" name="permission[]" type="checkbox" id="contentManagementRead" />
                                                        <label class="form-check-label" for="contentManagementRead">
                                                            Read
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" value="{{ $permissions[11]->id }}" name="permission[]" type="checkbox" id="contentManagementCreate" />
                                                        <label class="form-check-label" for="contentManagementCreate">
                                                            Create
                                                        </label>
                                                    </div>
                                                    <div class="form-check me-3 me-lg-5">
                                                        <input class="form-check-input" value="{{ $permissions[12]->id }}" name="permission[]" type="checkbox" id="contentManagementUpdate" />
                                                        <label class="form-check-label" for="contentManagementUpdate">
                                                            Update
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" value="{{ $permissions[13]->id }}" name="permission[]" type="checkbox" id="contentManagementDelete" />
                                                        <label class="form-check-label" for="contentManagementDelete">
                                                            Delete
                                                        </label>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Permission table -->
                        </div>
                        <div class="col-12 text-center mt-4">
                            <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                        </div>
                    </form>
                    <!--/ Add role form -->
                </div>
            </div>
        </div>
    </div>
    <!--/ Add Role Modal -->
    <!--/ Role cards -->
    <!--/ Content -->
@endsection
