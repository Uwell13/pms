@extends('layouts.main')

@section('content')

<!-- Content -->
        
<!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">        
    <div class="col-12">
        <div class="card">
          <h5 class="card-header">Form Update User</h5>
          <div class="card-body">
            @if (count($errors) > 0)
              <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
              </div>
            @endif
            {!! Form::model($unit, ['method' => 'PATCH','route' => ['unit.update', $unit->id]]) !!}
            {{-- <form class="form-repeater"> --}}
              <div data-repeater-list="group-a">
                <div data-repeater-item>
                  <div class="row">
                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Sub Group Id</label>
                      <select id="select2Basic" class="select2 form-select form-select-lg" data-allow-clear="true" name="sub_group_id">
                        @foreach ($subgroups as $sgroup)
                        <option value="{{ $sgroup->uuid }}">{{ $sgroup->group->main_group->code_main_group }}{{ $sgroup->gRoup->code_group }}{{ $sgroup->code_sub_group }}-{{ $sgroup->name }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-2">Code Unit</label>
                      <input type="text" id="form-repeater-1-2" class="form-control" placeholder="Format 000" name="code_units" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Name</label>
                      <input type="text" id="form-repeater-1-5" class="form-control" placeholder="Name" name="name" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Item Code</label>
                      <input type="text" id="form-repeater-1-5" class="form-control" placeholder="Item Code" name="item_code" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">List No</label>
                      <input type="text" id="form-repeater-1-5" class="form-control" placeholder="List No" name="list_no" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Drawing No</label>
                      <input type="text" id="form-repeater-1-5" class="form-control" placeholder="Drawing" name="drawing_no" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Vendor</label>
                      <input type="text" id="form-repeater-1-5" class="form-control" placeholder="Vendor" name="vendor" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Type</label>
                      <input type="text" id="form-repeater-1-5" class="form-control" placeholder="Type" name="type" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Unit No</label>
                      <input type="text" id="form-repeater-1-5" class="form-control" placeholder="Unit No" name="serial" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Issued By</label>
                      <input type="text" id="form-repeater-1-5" class="form-control" placeholder="Issued By" name="issue_by" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-4 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Certificate</label>
                      <input type="text" id="form-repeater-1-5" class="form-control" placeholder="Certificate" name="certificate_no" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-6 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Specification</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="specification_detail"></textarea>
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-6 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Maintenance</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="maintenance_detail"></textarea>
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-6 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Approval Number</label>
                      <input type="text" id="form-repeater-1-5" class="form-control" name="number_approval" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-6 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Approval Date</label>
                      <input type="date" id="form-repeater-1-5" class="form-control" id="html5-date-input" name="date_approval" />  
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-6 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">PLace</label>
                      <input type="text" id="form-repeater-1-5" class="form-control" name="pnd_place" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-6 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Date</label>
                      <input type="date" id="form-repeater-1-5" class="form-control" id="html5-date-input" name="pnd_date" />  
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-6 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Validity</label>
                      <input type="date" id="form-repeater-1-5" class="form-control" id="html5-date-input" name="validity" />  
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-6 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Maker</label>
                      <input type="text" id="form-repeater-1-5" class="form-control" name="maker" />
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-6 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Upload Image</label>
                      <input type="file" id="form-repeater-1-5" class="form-control" id="formFileMultiple" name="image" />  
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
              <div class="mb-0">
                <a href="{{ route('exitingdata.index') }}" class="btn btn-danger">Back</a>
                <button class="btn btn-success" type="submit">
                  <i class="ti ti-plus me-1"></i>
                  <span class="align-middle">Update</span>
                </button>
                {{-- <button class="btn btn-primary" data-repeater-create>
                  <i class="ti ti-plus me-1"></i>
                  <span class="align-middle">Add</span>
                </button> --}}
              </div>
              {!! Form::close() !!}
            {{-- </form> --}}
          </div>
        </div>
      </div>
      <!-- /Form Repeater -->    
@endsection