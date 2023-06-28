@extends('apps._layouts._master')
@section('breadcrumb')
    <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
            <a href="javascript:void(0);">Schedules</a>
        </li>
        <li class="breadcrumb-item">
          <a href="javascript:void(0);">Create Criteria</a>
      </li>
        <li class="breadcrumb-item active">Candidate</li>
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
  <div class="row">
    <div class="col-md-4">
      <div class="card mb-6">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Subject</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label class="form-label" for="basic-default-fullname">Subject Name</label>
              <input type="text" class="form-control" id="basic-default-fullname" disabled placeholder="S1" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-default-message">Description</label>
              <textarea
                id="basic-default-message"
                class="form-control" disabled placeholder="Description S1"
              ></textarea>
            </div>
          </form>
          <br>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card mb-6">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Criteria Candidate</h5>
        </div>
        <div class="card-body">
          <form>
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label" for="basic-default-fullname">Name *</label>
                    <input type="text" class="form-control" id="basic-default-fullname"/>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="basic-default-fullname">Rate *</label>
                    <input type="number" step="0.1" class="form-control" id="basic-default-fullname" />
                </div>
                <div class="col-md-6">
                    <br>
                    <label class="form-label" for="basic-default-fullname">Category *</label>
                   <select class="form-select">
                        <option value="">Choose Category</option>
                        <option value="bobot proker">Bobot Proker</option>
                        <option value="bobot karyawan" selected>Bobot Karyawan</option>
                   </select>
                </div>
                <div class="col-md-6">
                    <br>
                    <label class="form-label" for="basic-default-fullname">Variable *</label>
                    <select class="form-select">
                        <option value="">Choose Variable</option>
                        <option value="C1">C1</option>
                        <option value="C2">C2</option>
                   </select>
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <br>
                    <button type="submit" class="btn btn-primary pull-right">Add Criteria</button>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>
                            C1
                        </th>
                        <th>C2</th>
                        <th>C3</th>
                        <th>C4</th>
                        <th>C5</th>
                        <th>PV</th>
                    </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td>C1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>C2</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>C3</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>C4</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>C5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary pull-right" style="margin:15px;">Calculate</button>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-body">
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">PEV : </label>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">CI : </label>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">CR : </label>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">RI : </label>
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="basic-default-fullname">Status : </label>
                  </div>
            </div>
            <div class="col-md-12">
                <a href="{{ route('schedules.create.candidate.input', ['subject' => 1]) }}" class="btn btn-success pull-right" style="margin-bottom:15px;">Next</a>
                <a href="{{ route('schedules.create.proker', ['subject' => 1]) }}" class="btn btn-success pull-right" style="margin-bottom:15px;">Prev</a>
            </div>
        </div>
    </div>
    </div>
  </div>
@endsection
@push('scripts')
  <script>
      $(document).ready(function() {
        $('.menu-item').each(function(e){
          if($(this).data('menu') == "subject"){
            $(this).addClass('active');
          }else{
            $(this).removeClass('active');
          }
        })
      })
  </script>
@endpush