@extends('layouts.layout')


@section('content')
<div class="container-fluid">

    <div class="container">
        <!-- Title -->
        <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
            <h2 class="h5 mb-3 mb-lg-0"><a href="{{ url('/admin/customers') }}" class="text-muted"><i class="bi bi-arrow-left-square me-2"></i></a> Create new customer</h2>
            <div class="hstack gap-3">
                <button class="btn btn-light btn-sm btn-icon-text"><i class="bi bi-x"></i> <span class="text">Cancel</span></button>
                <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span class="text">Save</span></button>
            </div>
        </div>

        <!-- Main content -->
        <div class="row">
            <!-- Left side -->
            <div class="col-lg-8">
                <!-- Basic information -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6 mb-4">Basic information</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">First name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Last name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Phone number</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Address -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6 mb-4">Address</h3>
                        <div class="mb-3">
                            <label class="form-label">Address Line 1</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address Line 2</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Country</label>
                                    <select class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select country">
                                        <option></option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="DK">Denmark</option>
                                        <option value="TL">East Timor</option>
                                        <option value="GM">Gambia</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">State</label>
                                    <select class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select state">
                                        <option></option>
                                        <option value="AL">Alabama</option>
                                        <option value="CA">California</option>
                                        <option value="DE">Delaware</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="KS">Kansas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">City</label>
                                    <select class="select2 form-control select2-hidden-accessible" data-select2-placeholder="Select city">
                                        <option></option>
                                        <option value="b">Bangkok</option>
                                        <option value="d">Dubai</option>
                                        <option value="h">Hong Kong</option>
                                        <option value="k">Kuala Lumpur</option>
                                        <option value="l">London</option>
                                        <option value="n">New York City</option>
                                        <option value="m">Macau</option>
                                        <option value="p">Paris</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">ZIP code</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right side -->
            <div class="col-lg-4">
                <!-- Status -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6">Status</h3>
                        <select class="form-select">
                            <option value="draft" selected>Draft</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>
                <!-- Avatar -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6">Avatar</h3>
                        <input class="form-control" type="file">
                    </div>
                </div>
                <!-- Notes -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6">Notes</h3>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <!-- Notification settings -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h3 class="h6">Notification Settings</h3>
                        <ul class="list-group list-group-flush mx-n2">
                            <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <h6 class="mb-0">News and updates</h6>
                                    <small>News about product and feature updates.</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch">
                                </div>
                            </li>
                            <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <h6 class="mb-0">Tips and tutorials</h6>
                                    <small>Tips on getting more out of the platform.</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" checked>
                                </div>
                            </li>
                            <li class="list-group-item px-0 d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <h6 class="mb-0">User Research</h6>
                                    <small>Get involved in our beta testing program.</small>
                                </div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
