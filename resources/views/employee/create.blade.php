@extends('layout.app', ['title' => 'Input Employee', 'breadcrumbs' => 'Master', 'sub_breadcrumbs' => 'Input Employee'])
@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Input Employee</h4>
        </div>
        <div class="card-body">
            <form action="#" method="post">
                <div class="row gy-5">
                    <div class="col-lg-3">
                        <div>
                            <label for="formFile" class="form-label">
                                <div class="avatar-xl">
                                    <div class="avatar-title rounded bg-soft-danger text-danger">
                                        Foto
                                    </div>
                                </div>
                            </label>
                            <input class="form-control" type="file" accept="image/*" id="formFile">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="mb-2">
                                <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                                <input type="text" required class="form-control" id="name"
                                    placeholder="Input Name ...">
                            </div>
                            <div class="mb-2">
                                <label for="nip" class="form-label">NIP <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="nip" placeholder="Input NIP ...">
                            </div>
                            <div class="mb-2">
                                <label for="no_ktp" class="form-label">No KTP <span class="text-danger">*</span></label>
                                <input type="number" required class="form-control" id="no_ktp"
                                    placeholder="Input No KTP ...">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="row">
                            <div class="mb-2">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" required class="form-control" id="email"
                                    placeholder="Input Email ...">
                            </div>
                            <div class="mb-2">
                                <label for="alamat" class="form-label">Alamat <span class="text-danger">*</span> </label>
                                <textarea class="form-control" id="alamat" rows="4" placeholder="Input Alamat ..."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gy-5">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-4">
                        <div class="mb-2">
                            <label for="phone_number" class="form-label">Phone Number <span
                                    class="text-danger">*</span></label>
                            <input type="number" required class="form-control" id="phone_number"
                                placeholder="Input Phone Number ...">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="mb-2 row">
                            <div class="col-md-6">
                                <div class="">
                                    <label for="password" class="form-label">Departement <span
                                            class="text-danger">*</span></label>
                                    <select class="js-example-basic-single" name="departement">
                                        <option>--- Select Departement ----</option>
                                        <option>User</option>
                                        <option>Admin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="">
                                    <label for="password" class="form-label">Position <span
                                            class="text-danger">*</span></label>
                                    <select class="js-example-basic-single" name="position">
                                        <option>--- Select Position ----</option>
                                        <option>User</option>
                                        <option>Admin</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-start gap-3 mt-4">
                    <button type="button" class="btn btn-primary btn-label right ms-auto nexttab nexttab"
                        data-nexttab="pills-info-desc-tab"><i
                            class="ri-arrow-right-line label-icon align-middle fs-16 ms-2"></i>Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
