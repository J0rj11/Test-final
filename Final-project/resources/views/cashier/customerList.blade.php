@extends('layouts.cashier')

@section('content')
<div class="main-panel">
<div class="content-wrapper">
        <div class="row">
          <div class="col-3" style="padding: 0">
            <h4 style=" font-weight: bold;">CUSTOMER INDEX</h4>
          </div>
          <div class="col-3" style="padding: 0px;">
            <p>List Customer</p>          
          </div>
        </div>

        <div class="col-12 grid-margin ">
          <div class="row">
            <div class="csswrapper">
              <div class="csstabs">
                <div class="csstab">
                  <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
                  <label for="tab-1" class="csstab-label">Customer List</label>
                    <div class="csstab-content">

                    
                        
                <div class="col-m-12 grid-margin stretch-card">
                <div class="card" style="background-color: #fff;">
                <div class="card-body" style="padding: 30px 0 0 60px;">
                  <form class="form-group row">
                          <div class="col">
                            <label>Search by</label>
                          
                            <select class="form-control">
                              <option></option>
                              <option></option>
                              <option></option>
                              <option></option>
                            </select>
                          </div>
                    <div class="col">
                      <label>Value</label>
                        <input class="typeahead" type="text" placeholder="">
                    </div>
                    <div class="col" style="padding-top: 32px;">
                      <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                  </form>
                </div>

                          <div class="card" style="background-color: transparent;">
                            <div class="card-body">
                                <div class="table-responsive">
                                  <table class="table table-hover table-striped">
                                    <thead style="color: #684b26">
                                      <tr>
                                        <th>Code</th>
                                        <th>Customer Name</th>
                                        <th>Contact</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td>C01</td>
                                        <td>Juan Dela Cruz </td>
                                        <td>09123456789</td>
                                        <td>Tandaay, Nabua Camarines Sur</td>
                                        <td>
                                          <label class="btn btn-secondary btn-sm">View</label>
                                          <label class="btn btn-dark btn-sm">Delete</label>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>C02</td>
                                        <td>Juan Dela Cruz </td>
                                        <td>09123456789 </td>
                                        <td>Tandaay, Nabua Camarines Sur</td>
                                        <td>
                                          <label class="btn btn-secondary btn-sm">View</label>
                                          <label class="btn btn-dark btn-sm">Delete</label>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>C03</td>
                                        <td>Juan Dela Cruz</td>
                                        <td>09123456789 </td>
                                        <td>Tandaay, Nabua Camarines Sur</td>
                                        <td>
                                          <label class="btn btn-secondary btn-sm">View</label>
                                          <label class="btn btn-dark btn-sm">Delete</label>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                          <label class="btn btn-secondary btn-sm">View</label>
                                          <label class="btn btn-dark btn-sm">Delete</label>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td ></td>
                                        <td>
                                          <label class="btn btn-secondary btn-sm">View</label>
                                          <label class="btn btn-dark btn-sm">Delete</label>
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
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection

