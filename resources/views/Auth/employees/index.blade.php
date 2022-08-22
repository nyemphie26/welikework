@extends('layouts.template')

@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Employees</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="row p-3">
                  <div class="col-6"></div>
                  <div class="col-6 text-end">
                    <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal" data-bs-target="#modal-form">New Employee</button>
                  </div>
                </div>
                <h3> Your Employee List here</h3>
              </div>
            </div>
        </div>
    </div>

    
    <!-- Modal -->
    <div class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="card card-plain">
                  <div class="card-header pb-0 text-left">
                    <h3 class="font-weight-bolder text-success text-gradient">Add New Employee</h3>
                  </div>
                  <div class="card-body">
                    <form role="form text-left">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Base Wage</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                      <div class="text-center">
                        <button type="button" class="btn btn-round bg-gradient-secondary mt-4 mb-0" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-round bg-gradient-success mt-4 mb-0">Save</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection