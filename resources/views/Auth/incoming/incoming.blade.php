@extends('layouts.template')

@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-success shadow-success border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Incoming Works</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="row p-3">
                  <div class="col-6"></div>
                  <div class="col-6 text-end">
                    <a href="{{ route('Incoming Works Edit Add') }}">
                      <button class="btn bg-gradient-primary" type="button">New Order</button>
                    </a>
                  </div>
                </div>
                <div class="table-responsive p-0">
                  <table class="table align-items-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Incoming Date</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client Name</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Service Type</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Requested Date</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Works / Pick Up Location</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Drop Off Location</th>
                        <th class="text-secondary opacity-7"></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                        </td>
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
                        <td class="align-middle text-center text-sm">
                          {{-- <span class="badge badge-sm bg-gradient-success">Online</span> --}}
                          <p class="text-xs font-weight-bold mb-0">123 Main St</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xs font-weight-bold mb-0">123 Main St</p>
                        </td>
                        <td class="align-middle">
                          <button type="button" class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Details
                          </button>
                          {{-- <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Details</a> --}}
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                        </td>
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
                        <td class="align-middle text-center text-sm">
                          {{-- <span class="badge badge-sm bg-gradient-success">Online</span> --}}
                          <p class="text-xs font-weight-bold mb-0">Townsview Crt</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xs font-weight-bold mb-0">Dundonald Ave</p>
                        </td>
                        <td class="align-middle">
                          <button type="button" class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Details
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td class="align-middle text-center">
                          <span class="text-secondary text-xs font-weight-bold">23/04/18</span>
                        </td>
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
                        <td class="align-middle text-center text-sm">
                          {{-- <span class="badge badge-sm bg-gradient-success">Online</span> --}}
                          <p class="text-xs font-weight-bold mb-0">123 Main St</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                          <p class="text-xs font-weight-bold mb-0">123 Main St</p>
                        </td>
                        <td class="align-middle">
                          <button type="button" class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Details
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

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title font-weight-normal" id="exampleModalLabel">New Work</h5>
            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-6">
                <div class="input-group input-group-static mb-4">
                  <label >Phone Number</label>
                  <input type="text" class="form-control" value="555 555 55555" readonly>
                </div>
                <div class="input-group input-group-static mb-4">
                  <label >Email</label>
                  <input type="text" class="form-control" value="sample@mail.com" readonly>
                </div>
                <div class="input-group input-group-static mb-4">
                  <label >Service Type</label>
                  <input type="text" class="form-control" value="Mowing" readonly>
                </div>
                
                <div class="input-group input-group-static mb-4">
                  <label >Work Type</label>
                  <input type="text" class="form-control" value="Bi Weekly" readonly>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-group input-group-static mb-4">
                  <label >First Name</label>
                  <input type="text" class="form-control" value="John" readonly>
                </div>
                <div class="input-group input-group-static mb-4">
                  <label >Last Name</label>
                  <input type="text" class="form-control" value="Michael" readonly>
                </div>
                <div class="input-group input-group-static mb-4">
                  <label >Works / Pick Up Location</label>
                  <input type="text" class="form-control" value="123 Main st" readonly>
                </div>
                <div class="input-group input-group-static mb-4">
                  <label >Drop Off Location</label>
                  <input type="text" class="form-control" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="input-group input-group-static my-3">
                  <label>Scheduling Date</label>
                  <input type="datetime-local" class="form-control" readonly>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="input-group input-group-static mb-4">
                  <label >Customer's Note</label>
                  <input type="text" class="form-control" value="Call me when arrives home" readonly>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="input-group input-group-static mb-4">
                  <label >Known Preference</label>
                  <input type="text" class="form-control" value="Muddy Land" readonly>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn bg-gradient-danger">Reject</button>
            <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Pending</button>
            <button type="button" class="btn bg-gradient-success">Accept</button>
          </div>
        </div>
      </div>
    </div>
@endsection