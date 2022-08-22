@extends('layouts.template')

@section('container')
    <div class="container-fluid py-4">
        {{-- <div class="row">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
              </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="card my-4">
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                      <h6 class="text-white text-capitalize ps-3">Finished Works</h6>
                    </div>
                  </div>
                  <div class="card-body px-0 pb-2">
                    <div class="row p-3">
                      <div class="col-6"></div>
                      <div class="col-6 text-end">
                        {{-- <a href="{{ route('Incoming Works Edit Add') }}">
                          <button class="btn bg-gradient-primary" type="button">New Order</button>
                        </a> --}}
                      </div>
                    </div>
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Service Type</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Requested Date</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actual Start</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actual End</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Grand Total</th>
                            <th class="text-secondary opacity-7"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                              <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                  <h6 class="mb-0 text-sm">John Michael</h6>
                                  <p class="text-xs text-secondary mb-0">john@creative-tim.com</p>
                                </div>
                              </div>
                            </td>
                            <td>
                              <p class="text-xs font-weight-bold mb-0">Mowing</p>
                              <p class="text-xs text-secondary mb-0">Bi Weekly</p>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18 - 01:00 PM</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18 - 02:00 PM</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">$127.45</span>
                            </td>
                            <td class="align-middle">
                              <button type="button" class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Details
                              </button>
                              {{-- <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Assign</a> --}}
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal modal-lg fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="exampleModalLabel">John Michael - Mowing - Req Date ( 8/18/2022 )</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
                <div class="col-lg-3">
                        <div class="input-group input-group-static mb-4">
                            <label >Service Type</label>
                            <input type="text" class="form-control" value="Mowing" disabled>
                        </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group input-group-static mb-4">
                        <label >Work Type</label>
                        <input type="text" class="form-control" value="Bi Weekly" disabled>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group input-group-static mb-4">
                        <label >Works / Pick Up Location</label>
                        <input type="text" class="form-control" value="123 Main st" disabled>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group input-group-static mb-4">
                        <label >Drop Off Location</label>
                        <input type="text" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="input-group input-group-static mb-4">
                        <label >Customer's Note</label>
                        <input type="text" class="form-control" value="Call me when arrives home" disabled>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-group input-group-static mb-4">
                        <label >Known Preference</label>
                        <input type="text" class="form-control" value="Muddy Land" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="input-group input-group-static mb-4">
                  <label>Job Description</label>
                  <textarea class="form-control" rows="3" placeholder="Job Description" spellcheck="false" disabled>Hauled away debris behind house ahead of sale of property</textarea>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-group input-group-static mb-4">
                  <label>Employee Notes</label>
                  <textarea class="form-control" rows="3" placeholder="Employee Notes" spellcheck="false" disabled>All clear</textarea>
                </div>
              </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                  <div class="input-group input-group-static mb-4">
                      <label >Assigne</label>
                      <input type="text" class="form-control" value="Roger, Jason" disabled>
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group input-group-static mb-4">
                      <label >Actual Start</label>
                      <input type="text" class="form-control" value="8/18/2022 - 01:00 PM" disabled>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group input-group-static mb-4">
                      <label >Actual End</label>
                      <input type="text" class="form-control" value="8/18/2022 - 02:00 PM" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                  <div class="input-group input-group-static mb-4">
                      <label>Total</label>
                      <input type="text" class="form-control" value="$80.00" disabled>
                  </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group input-group-static mb-4">
                      <label >Tax</label>
                      <input type="text" class="form-control" value="$15.00" disabled>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group input-group-static mb-4">
                      <label >Tipping Fee</label>
                      <input type="text" class="form-control" value="$32.45" disabled>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="input-group input-group-static mb-4">
                      <label >Grand Total</label>
                      <input type="text" class="form-control" value="$127.45" disabled>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('javascript')
@endsection