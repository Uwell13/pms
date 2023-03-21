@extends('layouts.main')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-xl-12">
            <h6 class="text-muted">Inventory/Exiting Data</h6>
            <div class="nav-align-top mb-4">
              <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                <li class="nav-item">
                  <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-main-group" aria-controls="navs-pills-justified-main-group" aria-selected="true"><i class="tf-icons ti ti-table-filled ti-xs me-1"></i> Main Group</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-group" aria-controls="navs-pills-justified-group" aria-selected="false"><i class="tf-icons ti ti-table-filled ti-xs me-1"></i> Group</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-sub-group" aria-controls="navs-pills-justified-sub-group" aria-selected="false"><i class="tf-icons ti ti-table-filled ti-xs me-1"></i> Sub Group</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-unit" aria-controls="navs-pills-justified-unit" aria-selected="false"><i class="tf-icons ti ti-table-filled ti-xs me-1"></i> Unit</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-component" aria-controls="navs-pills-justified-component" aria-selected="false"><i class="tf-icons ti ti-table-filled ti-xs me-1"></i> Component</button>
                </li>
                <li class="nav-item">
                  <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-part" aria-controls="navs-pills-justified-part" aria-selected="false"><i class="tf-icons ti ti-table-filled ti-xs me-1"></i> Part</button>
                </li>
              </ul>
              <div class="tab-content">
                  <div class="tab-pane fade show active" id="navs-pills-justified-main-group" role="tabpanel">
                    @include('inventory.exitingdata.tabel.maingroup')
                </div>
                <div class="tab-pane fade" id="navs-pills-justified-group" role="tabpanel">
                    @include('inventory.exitingdata.tabel.group')
                </div>
                <div class="tab-pane fade" id="navs-pills-justified-sub-group" role="tabpanel">
                    @include('inventory.exitingdata.tabel.subgroup')
            </div>
                <div class="tab-pane fade" id="navs-pills-justified-unit" role="tabpanel">
                    @include('inventory.exitingdata.tabel.unit')
                </div>
                <div class="tab-pane fade" id="navs-pills-justified-component" role="tabpanel">
                    @include('inventory.exitingdata.tabel.component')
                </div>
                <div class="tab-pane fade" id="navs-pills-justified-part" role="tabpanel">
                    @include('inventory.exitingdata.tabel.part')
                </div>
            </div>
            </div>
          </div>
    </div>
</div>
@endsection
