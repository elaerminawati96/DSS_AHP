@extends('apps._layouts._master')
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
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="card-header">List Schedules</h5>
                    </div>
                    <div class="col-md-6">
                        <div class="demo-inline-spacing pull-right">
                            <button type="button" class="btn btn-primary">Add Subject</button>
                            <button type="button" class="btn btn-success">Export</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="demo-inline-spacing pull-right">
                              <input class="form-control" type="search" value="Search ..." id="html5-search-input" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked />
                                </div>
                            </th>
                            <th>Subject</th>
                            <th>Description</th>
                            <th>Status</th>
                            <th></th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked />
                                    </div>
                                </td>
                                <td>Subject 1</td>
                                <td>
                                    Schedule for June 2023
                                </td>
                                <td><span class="badge bg-label-primary me-1">Complete</span></td>
                                <td>
                                    <button type="button" class="btn btn-outline-info">Details</button>
                                </td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck3" checked />
                                    </div>
                                </td>
                                <td>Subject 2</td>
                                <td>
                                    Schedule for July 2023
                                </td>
                                <td><span class="badge bg-label-primary me-1">Incoming</span></td>
                                <td>
                                    <button type="button" class="btn btn-outline-info">Details</button>
                                </td>
                                <td>
                                <div class="dropdown">
                                    <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                    </button>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-edit-alt me-1"></i> Edit</a
                                    >
                                    <a class="dropdown-item" href="javascript:void(0);"
                                        ><i class="bx bx-trash me-1"></i> Delete</a
                                    >
                                    </div>
                                </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row" style="padding: 20px;">
            <div class="col-md-12">
                <div class="demo-inline-spacing">
                    <!-- Basic Pagination -->
                    <nav aria-label="Page navigation">
                    <ul class="pagination justify-content-end">
                        <li class="page-item first">
                        <a class="page-link" href="javascript:void(0);"
                            ><i class="tf-icon bx bx-chevrons-left"></i
                        ></a>
                        </li>
                        <li class="page-item prev">
                        <a class="page-link" href="javascript:void(0);"
                            ><i class="tf-icon bx bx-chevron-left"></i
                        ></a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">1</a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">2</a>
                        </li>
                        <li class="page-item active">
                        <a class="page-link" href="javascript:void(0);">3</a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">4</a>
                        </li>
                        <li class="page-item">
                        <a class="page-link" href="javascript:void(0);">5</a>
                        </li>
                        <li class="page-item next">
                        <a class="page-link" href="javascript:void(0);"
                            ><i class="tf-icon bx bx-chevron-right"></i
                        ></a>
                        </li>
                        <li class="page-item last">
                        <a class="page-link" href="javascript:void(0);"
                            ><i class="tf-icon bx bx-chevrons-right"></i
                        ></a>
                        </li>
                    </ul>
                    </nav>
                    <!--/ Basic Pagination -->
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