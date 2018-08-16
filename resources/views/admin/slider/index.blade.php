@extends('layouts.app')

@section('title', 'Slider')

@push('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <a href="{{ route('slider.create') }}" class="btn btn-info">Add New</a>
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">All Sliders</h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                  <thead class="text-primary">
                    <th>
                      ID
                    </th>
                    <th>
                      Title
                    </th>
                    <th>
                      Subtitle
                    </th>
                    <th>
                      Image
                    </th>
                    <th>
                      Created At
                    </th>
                    <th>
                      Updated At
                    </th>
                  </thead>
                  <tbody>
                    @foreach($sliders as $key=>$slider)
                      <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->sub_title }}</td>
                        <td>{{ $slider->image }}</td>
                        <td>{{ $slider->created_at }}</td>
                        <td>{{ $slider->updated_at }}</td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
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
