@extends('layouts.template')

@section('container')
    <div class="container-fluid py-4">
        {{-- <div class="row">
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
              </div>
        </div> --}}
        <div class="row">
            <div class="col-lg-6">
                <div class="card my-4">
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                      <h6 class="text-white text-capitalize ps-3">Accepted Works</h6>
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
                            <td class="align-middle">
                              <button type="button" class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Assign
                              </button>
                              {{-- <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Assign</a> --}}
                            </td>
                          </tr>
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
                            <td class="align-middle">
                              <button type="button" class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Assign
                              </button>
                              {{-- <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Assign</a> --}}
                            </td>
                          </tr>
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
                            <td class="align-middle">
                              <button type="button" class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Assign
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
            <div class="col-lg-6">
                <div class="card my-4">
                  <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                      <h6 class="text-white text-capitalize ps-3">Assigned Works</h6>
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
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Scheduled Date</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Assignee</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
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
                              <p class="text-xs font-weight-bold mb-0">Transporting</p>
                              <p class="text-xs text-secondary mb-0">Single Work</p>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                            </td>
                            <td>
                              <p class="text-xs text-secondary mb-0">Roger, Jason</p>
                            </td>
                            <td class="align-middle text-center">
                              <button type="button" class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Edit
                              </button>
                            </td>
                          </tr>
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
                            <td>
                              <p class="text-xs text-secondary mb-0">Jason</p>
                            </td>
                            <td class="align-middle text-center">
                              <button type="button" class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                Edit
                              </button>
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
                    <div class="input-group input-group-dynamic">
                      <textarea class="form-control" rows="5" placeholder="Job Description" spellcheck="false"></textarea>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="input-group input-group-static my-3">
                        <label>Scheduling Date</label>
                        <input type="datetime-localr" class="form-control" autofocus>
                    </div>
                    <div class="input-group input-group-static">
                        <label for="exampleFormControlSelect2" class="ms-0">Assign to (hold ctrl+click to choose multiple)</label>
                        <select multiple class="form-control" id="exampleFormControlSelect2">
                          <option>Nic</option>
                          <option>Roger</option>
                          <option>Jason</option>
                        </select>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="button" class="btn bg-gradient-success">Save</button>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('javascript')
@endsection