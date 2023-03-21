@extends('layouts.main')

@section('content')

        
<!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">        
    <div class="col-12">
        <div class="card">
          <h5 class="card-header">Create Main Group</h5>
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
            {!! Form::open(array('route' => 'maingroup.store','method'=>'POST')) !!}
              <div data-repeater-list="group-a">
                <div data-repeater-item>
                  <div class="row">
                    <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                    <label class="form-label" for="form-repeater-1-1">UUID</label>
                    {!! Form::text('uuid', null, array('placeholder' => 'uuid', 'id' => 'form-repeater-1-1','class' => 'form-control')) !!}
                    {{-- <input type="text" id="form-repeater-1-1" class="form-control"  name="uuid" /> --}}
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-2">Code Main Group</label>
                      {!! Form::text('code_main_group', null, array('placeholder' => 'code Main Group', 'id' => 'form-repeater-1-1','class' => 'form-control')) !!}
                      {{-- <input type="text" id="form-repeater-1-2" class="form-control" name="codemain" /> --}}
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Name</label>
                      {!! Form::text('name', null, array('placeholder' => 'Name', 'id' => 'form-repeater-1-1','class' => 'form-control')) !!}
                      {{-- <input type="text" id="form-repeater-1-5" class="form-control" name="name" /> --}}
                    </div>
                    <div class="mb-3 col-lg-6 col-xl-3 col-12 mb-0">
                      <label class="form-label" for="form-repeater-1-3">Ship Id</label>
                      {!! Form::text('ship_id', null, array('placeholder' => 'Ship Id', 'id' => 'form-repeater-1-1','class' => 'form-control')) !!}
                      {{-- <input type="text" id="form-repeater-1-5" class="form-control" name="name" /> --}}
                    </div>
                  </div>
                  <hr>
                </div>
              </div>
              <div class="mb-0">
                <a href="{{ route('exitingdata.index') }}" class="btn btn-danger">Back</a>
                <button class="btn btn-success" type="submit">
                  <i class="ti ti-plus me-1"></i>
                  <span class="align-middle">Tambah</span>
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