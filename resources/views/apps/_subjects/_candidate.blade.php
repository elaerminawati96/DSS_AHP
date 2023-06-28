@extends('apps._layouts._master')
@section('breadcrumb')
    <ol class="breadcrumb breadcrumb-style1">
        <li class="breadcrumb-item">
            <a href="javascript:void(0);">Schedules</a>
        </li>
        <li class="breadcrumb-item">
            <a href="javascript:void(0);">Create</a>
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
    <div class="card mb-12">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="row mb-3">
                        <label class="col-form-label" for="basic-default-name">Employee*</label>
                        <div class="col-sm-10">
                            <select name="criteria" id="criteria" class="form-select">
                                <option value="">Choose Criteria</option>
                                <option value="A" selected>Mr A</option>
                                <option value="B">Mr B</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label" for="basic-default-name">Department*</label>
                        <div class="col-sm-10">
                            <select name="criteria" id="criteria" class="form-select" disabled>
                                <option value="IT">IT</option>
                                <option value="TK" selected>Tata Kota</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label" for="basic-default-name">Position*</label>
                        <div class="col-sm-10">
                            <select name="criteria" id="criteria" class="form-select" disabled>
                                <option value="chief" selected>Chief</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row mb-3">
                        <label class="col-form-label" for="basic-default-name">Phone Number*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="081234567890" disabled/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label" for="basic-default-name">Email*</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" placeholder="abc@yopmail.com" disabled/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label" for="basic-default-message">Address</label>
                        <div class="col-sm-10">
                            <textarea
                                id="basic-default-message"
                                class="form-control" disabled placeholder="Yogyakarta"></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row mb-3">
                        <label class="col-form-label" for="basic-default-name">Rate*</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="basic-default-name" step="0.1" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label" for="basic-default-message">Criteria</label>
                        <div class="col-sm-10">
                            <select name="criteria" id="criteria" class="form-select">
                                <option value="">Choose Criteria</option>
                                <option value="C1">C1</option>
                                <option value="C2">C2</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" style="float: right;">Add</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    EMP1
                                </th>
                                <th>EMP2</th>
                                <th>EMP3</th>
                                <th>EMP4</th>
                                <th>EMP5</th>
                                <th>PV</th>
                            </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>EMP1</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>EMP2</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>EMP3</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>EMP4</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>EMP5</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-4">
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
                <div class="col-md-8">
                    <button type="submit" class="btn btn-primary pull-right" style="margin:15px 0px;">Calculate</button>
                </div>
                <div class="col-md-4">
                    <a href="{{ route('schedules') }}"class="btn btn-success pull-right" style="margin:15px 5px;">Save</button>
                    <a href="{{ route('schedules.create.candidate', ['subject' => 1]) }}" class="btn btn-success pull-right" style="margin:15px 5px;">Prev</a>
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