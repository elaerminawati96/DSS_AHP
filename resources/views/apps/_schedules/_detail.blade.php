@extends('apps._layouts._master')
@section('breadcrumb')
    <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
            <a href="javascript:void(0);">Schedules</a>
        </li>
        <li class="breadcrumb-item">
          <a href="javascript:void(0);">Detail</a>
      </li>
        <li class="breadcrumb-item active">{{ strtoupper($id) }}</li>
    </ol>
@endsection
@section('css')
    <style>
        .pull-right {
            float: right;
            margin-right:15px;
        }
    </style>
@endsection
@section('content')
    <div class="card">
        <div class="carg-header">
            <div class="row" style="padding: 15px;">
                <div class="col-md-6">
                    Subject : {{ strtoupper($id) }}
                    <br>
                    Description : Schedule for June 2023
                </div>
                <div class="col-md-6">
                    <a href="{{ route('schedules.create', ['subject' => 1]) }}" class="btn btn-warning pull-right" style="margin-bottom:15px;">Edit</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    PROKER
                    <div class="table-responsive text-nowrap" style="overflow-y: auto; max-height:500px;">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>Proker</th>
                                <th>Location</th>
                                <th>Datetime</th>
                                <th>Note</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>1</td>
                                    <td>P1</td>
                                    <td>Jogja</td>
                                    <td>2023-06-1 07:00 PM</td>
                                    <td>Note 1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>P2</td>
                                    <td>Jogja</td>
                                    <td>2023-06-2 07:00 PM</td>
                                    <td>Note 2</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>P3</td>
                                    <td>Jogja</td>
                                    <td>2023-06-3 07:00 PM</td>
                                    <td>Note 3</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>P4</td>
                                    <td>Jogja</td>
                                    <td>2023-06-4 07:00 PM</td>
                                    <td>Note 4</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>P5</td>
                                    <td>Jogja</td>
                                    <td>2023-06-5 07:00 PM</td>
                                    <td>Note 5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="col-md-6">
                    CANDIDATES
                    <div class="table-responsive text-nowrap" style="overflow-y: auto; max-height:500px;">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    No
                                </th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Position</th>
                                <th>Phone Number</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>1</td>
                                    <td>EMP1</td>
                                    <td>Tata Kota</td>
                                    <td>Chief</td>
                                    <td>081234567890</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>EMP2</td>
                                    <td>Tata Kota</td>
                                    <td>Chief</td>
                                    <td>081234567890</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>EMP3</td>
                                    <td>Tata Kota</td>
                                    <td>Chief</td>
                                    <td>081234567890</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>EMP4</td>
                                    <td>Tata Kota</td>
                                    <td>Chief</td>
                                    <td>081234567890</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>EMP5</td>
                                    <td>Tata Kota</td>
                                    <td>Chief</td>
                                    <td>081234567890</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <a href="{{ route('schedules.result', ['id' => 'S1']) }}" class="btn btn-info" style="margin-top:15px;">Show Result</a>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
  <script>
      $(document).ready(function() {
        $('.menu-item').each(function(e){
          if($(this).data('menu') == "schedules"){
            $(this).addClass('active');
          }else{
            $(this).removeClass('active');
          }
        })
      })
  </script>
@endpush