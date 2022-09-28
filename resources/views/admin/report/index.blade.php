@extends('layouts.admin')

@section('content')
<div class="sidebar-fixed main-panel">
  <div class="contentWrapper">
    <div class="row py-2">
      <h4>REPORTS</h4>
      <p class="pl-2">Sold Item</p> 
    </div>
    <div class="col-12 grid-margin ">
      <div class="row">
        <div class="csswrapper">
          <div class="csstabs">
            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
              <label for="tab-1" class="csstab-label">Sold Item</label>
              <div class="csstab-content">
   
                <div class="card white-bg">
                  <div class="card-body">
                    <form class="form-group row py-4 pl-5">
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
                    <div class="col pt-4">
                      <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </div>
                  </form>

                  <div class="card-body bg-transparent">
                    <form>
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">
                          <thead class="color">
                            <tr>
                              <th>Date</th>
                              <th>Code</th>
                              <th>Product Name</th>
                              <th>Quantity</th>
                              <th>Total</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr> 
                              <td>05/22/2022 </td>
                              <td>A1</td>
                              <td>PVC Pipe #2</td>
                              <td>55</td>
                              <td> ₱ 250.00 </td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022 </td>
                              <td>A1</td>
                              <td>PVC Pipe #2</td>
                              <td>55</td>
                              <td> ₱ 250.00 </td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022 </td>
                              <td>A1</td>
                              <td>PVC Pipe #2</td>
                              <td>55</td>
                              <td> ₱ 250.00 </td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022 </td>
                              <td>A1</td>
                              <td>PVC Pipe #2</td>
                              <td>55</td>
                              <td> ₱ 250.00 </td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022 </td>
                              <td>A1</td>
                              <td>PVC Pipe #2</td>
                              <td>55</td>
                              <td> ₱ 250.00 </td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022 </td>
                              <td>A1</td>
                              <td>PVC Pipe #2</td>
                              <td>55</td>
                              <td> ₱ 250.00 </td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td>
                                <button type="submit" class="btn btn-secondary btn-sm">Submit Report</button>
                              </td>
                            </tr> 
                            
                          </tbody>
                        </table>
                      </div>
                    </form>
                  </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-2" class="csstab-switch">
              <label for="tab-2" class="csstab-label">Delivery</label>
              <div class="csstab-content">
                <div class="card-body white-bg">
                  <form class="form-group row px-1 pl-5">
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
                    <div class="col pt-4">
                      <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </div>
                  </form>

                  <div class="card bg-transparent">
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">
                          <thead class="color">
                            <tr>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Truck #</th>
                              <th>Client's Name</th>
                              <th>Items</th>
                              <th>Amount</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>10:35:16 AM</td>
                              <td>#1R</td>
                              <td>Juan Dela Cruz</td>
                              <td>50 Hollowblocks </td>
                              <td>₱ 250.00</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>11:25:05 AM</td>
                              <td>#1R</td>
                              <td>Juan Dela Cruz</td>
                              <td>5 cubics sand</td>
                              <td>₱ 250.00</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>11:45:16 AM</td>
                              <td>#2G</td>
                              <td>Juan Dela Cruz</td>
                              <td>Plywood</td>
                              <td>₱ 250.00</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>01:07:10 PM</td>
                              <td>#2G</td>
                              <td>Juan Dela Cruz</td>
                              <td>5 cubics gravel</td>
                              <td>₱ 250.00</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>02:35:00 PM</td>
                              <td>#1R</td>
                              <td>Juan Dela Cruz</td>
                              <td>Plywood</td>
                              <td>₱ 250.00</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>04:15:20 PM</td>
                              <td>#2G</td>
                              <td>Juan Dela Cruz</td>
                              <td>PVC Pipe</td>
                              <td>₱ 250.00</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
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

            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-3" class="csstab-switch">
              <label for="tab-3" class="csstab-label">Expenses</label>
              <div class="csstab-content">
                <div class="card-body white-bg">
                  <h3>EXPENSE REPORT</h3>
                  <form class="form-group row mb-3 px-1 pl-5">
                    <div class="col">
                      <label>Date</label>
                      <input class="typeahead" type="text" placeholder="">
                    </div>
                    <div class="col pt-4 ml-7">
                      <button type="submit" class="btn btn-primary mb-2">Add Expenses</button>
                    </div>
                  </form>
                    <div class="card-body bg-transparent">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped">
                          <thead class="color">
                            <tr>
                              <th>Date</th>
                              <th>Expense Account</th>
                              <th>Amount</th>
                              <th>Notes</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>Gas</td>
                              <td>₱ 500.00</td>
                              <td>Truck #2G</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>Payroll</td>
                              <td>₱ 750.00</td>
                              <td>Salary 5 worker</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr> 
                              <td>05/22/2022</td>
                              <td>Car Repair</td>
                              <td>₱ 100.00</td>
                              <td>Truck #1R</td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Edit</label>
                                <label class="btn btn-dark btn-sm">Delete</label>
                              </td>
                            </tr>
                            <tr class="color"> 
                              <td class="font-weight-bolder">TOTAL:</td>
                              <td>₱ 1,350.00</td>
                              <td></td>
                              <td></td>
                              <td>
                                <label class="btn btn-secondary btn-sm">Submit</label>
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
</div>

@endsection

