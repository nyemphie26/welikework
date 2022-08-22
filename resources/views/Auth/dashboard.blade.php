@extends('layouts.template')

@section('container')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                  <div class="nav-wrapper position-relative end-0">
                      <ul class="nav nav-pills nav-fill p-1" role="tablist">
                          <li class="nav-item">
                          <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" data-bs-target="#todays" aria-controls="todays" aria-selected="true" href="javascript:;" role="tab">
                              <i class="material-icons text-lg position-relative">home</i>
                              <span class="ms-1">Today's Work</span>
                              {{-- <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button> --}}
                          </a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" data-bs-target="#awaiting" aria-controls="awaiting" href="javascript:;" role="tab" aria-selected="false">
                              <i class="material-icons text-lg position-relative">email</i>
                              <span class="ms-1">Awaiting Confirmation</span>
                          </a>
                          </li>
                          <li class="nav-item">
                          <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" data-bs-target="#scheduled" aria-controls="scheduled" href="javascript:;" role="tab" aria-selected="false">
                              <i class="material-icons text-lg position-relative">settings</i>
                              <span class="ms-1">Scheduled Work</span>
                          </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="tab-content">
                  {{-- Tab Pane 1 --}}
                  <div class="tab-pane fade show active" id="todays" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="table-responsive p-0">
                      <table class="table align-items-center mb-0">
                        <thead>
                          <tr>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Scheduled Date</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Client Name</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Service Type</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Work / Pick Up Location</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Drop Off Location</th>
                            <th class="text-secondary opacity-7"></th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">23/04/18 - 01:00 PM</span>
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
                              <span class="text-secondary text-xs font-weight-bold">123 Main st</span>
                            </td>
                            <td class="align-middle text-center">
                              <span class="text-secondary text-xs font-weight-bold">-</span>
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
                  {{-- Tab Pane 2 --}}
                  <div class="tab-pane fade" id="awaiting" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
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
                  <div class="tab-pane fade" id="scheduled" role="tabpanel" aria-labelledby="messages-tab" tabindex="0"><h1>TAB3</h1></div>
                </div>
              </div>
            </div>
        </div>
    </div>
@endsection