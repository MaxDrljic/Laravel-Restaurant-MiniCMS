@extends('layouts.app')

@section('title', 'Slider')

@push('css')

@endpush

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">

          @if ($errors->any())
            @foreach($errors->all() as $error)
              <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <i class="material-icons">close</i>
                </button>
                <span>
                  <b> Warning - </b> {{ $error }}</span>
              </div>
            @endforeach
          @endif

          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Add New Slider</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <form method="post" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Title</label>
                        <input type="text" class="form-control" name="title">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="bmd-label-floating">Sub Title</label>
                        <input type="text" class="form-control" name="sub_title">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <label class="bmd-label-floating">Image</label>
                      <input type="file" name="image">
                    </div>
                  </div>
                  <a href="{{ route('slider.index') }}" class="btn btn-danger">Back</a>
                  <button type="submit" class="btn btn-primary">Save</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

// Additional functionality for slider tables
@push('scripts')
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready( function () {
      $('#table').DataTable();
    } );
  </script>
@endpush
