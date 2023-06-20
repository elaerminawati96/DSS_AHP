@extends('layout.app', ['title' => 'Input User', 'breadcrumbs' => 'Master', 'sub_breadcrumbs' => 'Input User'])
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Input User</h4>
        </div>
        <div class="card-body">
            <div class="form mb-2">
                <label for="">Chosee Employee Account</label>
            </div>
            <div class="form mb-2 row">
                <div class="col-md-4">
                    <select class="js-example-basic-single" name="roles">
                        <option>--- Select Employee ----</option>
                    </select>
                </div>
                <div class="col-md-4"><button type="button" class="btn btn-sm btn-primary">Add New Employee</button></div>
            </div>
            <div class="form row mb-2">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-3"><span>Name</span></div>
                        <div class="col-md-1"><span>:</span></div>
                        <div class="col-md-8"><span>XXX</span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><span>NIP</span></div>
                        <div class="col-md-1"><span>:</span></div>
                        <div class="col-md-8"><span>XXX</span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><span>No KTP</span></div>
                        <div class="col-md-1"><span>:</span></div>
                        <div class="col-md-8"><span>XXX</span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><span>Phone Number</span></div>
                        <div class="col-md-1"><span>:</span></div>
                        <div class="col-md-8"><span>XXX</span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><span>Default Email</span></div>
                        <div class="col-md-1"><span>:</span></div>
                        <div class="col-md-8"><span>XXX</span></div>
                    </div>
                    <div class="row">
                        <div class="col-md-3"><span>Address</span></div>
                        <div class="col-md-1"><span>:</span></div>
                        <div class="col-md-8"><span>XXX</span></div>
                    </div>
                </div>
                <div class=" col-md-4">
                    <div class="mb-2">
                        <label for="Username" class="form-label">Username <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="Username" placeholder="Username">
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-4">
                        <label for="password" class="form-label">Level</label>
                        <select class="js-example-basic-single" name="roles">
                            <option>--- Select Level ----</option>
                            <option>User</option>
                            <option>Admin</option>
                        </select>
                    </div>
                    <div>
                        <label for="password" class="form-label">Status</label>
                        <select class="js-example-basic-single" name="roles">
                            <option>Active</option>
                            <option>Deactive</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-start gap-3 mt-4">
                <button type="button" class="btn btn-primary btn-label right ms-auto nexttab nexttab"
                    data-nexttab="pills-info-desc-tab"><i
                        class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Save</button>
            </div>
        </div>
    </div>
@endsection
