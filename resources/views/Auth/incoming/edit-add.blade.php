@extends('layouts.template')

@section('container')
<div class="container-fluid px-2 px-md-4">
  <div class="row p-4">
      <div class="col-lg-4">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <h6 class="mb-0">Customer's Data</h6>
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <form>
                  <div class="input-group input-group-dynamic mb-4">
                    <label class="form-label">Phone Number</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                    <label class="form-label">First Name</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                    <label class="form-label">Last Name</label>
                    <input type="text" class="form-control">
                  </div>
              </form>
            </div>
          </div>
      </div>
      <div class="col-lg-8">
        <div class="card">
          <div class="card-header">
            <div class="row">
              <h6 class="mb-0">Works Order</h6>
            </div>
          </div>
          <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <div class="input-group input-group-static mb-4">
                    <label for="exampleFormControlSelect1" class="ms-0">Service Type</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>-- Select Service --</option>
                      <option>Mowing</option>
                      <option>Transport</option>
                      <option>Odd Job</option>
                      <option>Property Service</option>
                      <option>Junk Removal</option>
                      <option>Demolition</option>
                    </select>
                  </div>
                  <div class="input-group input-group-static mb-4">
                    <label for="exampleFormControlSelect2" class="ms-0">Work Type</label>
                    <select class="form-control" id="exampleFormControlSelect2">
                      <option>-- Select Type --</option>
                      <option>Single Work</option>
                      <option>Weekly</option>
                      <option>Bi Weekly</option>
                      <option>Seasonal</option>
                    </select>
                  </div>
                  <div class="input-group input-group-static my-3">
                    <label>Scheduling Date</label>
                    <input type="datetime-local" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="input-group input-group-dynamic mb-4">
                    <label class="form-label">Works / Pick Up Location</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="input-group input-group-dynamic mb-4">
                    <label class="form-label">Drop Off Location</label>
                    <input type="text" class="form-control">
                  </div>
                  <div class="input-group input-group-dynamic">
                    <textarea class="form-control" rows="3" placeholder="Customer's Notes" spellcheck="false"></textarea>
                  </div>
                  <div class="input-group input-group-dynamic">
                    <textarea class="form-control" rows="3" placeholder="Known Preference" spellcheck="false"></textarea>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
  </div>
  <div class="row p-4">
    <div class="card">
      <div class="card-body p-3 pb-0">
        <button class="btn bg-gradient-success w-100" type="button">Save Order</button>
      </div>
    </div>
  </div>
</div>
@endsection