@extends('layouts.cashier')

@section('content')
<div class="main-panel">
  <div class="contentWrapper">
    <div class="row py-2">
      <h4>CUSTOMER INDEX</h4>
      <p class="pl-2">List Customer</p> 
    </div>
    <div class="col-12 grid-margin ">
      <div class="row">
        <div class="csswrapper">
          <div class="csstabs">
            <div class="csstab">
              <input type="radio" name="css-tabs" id="tab-1" checked class="csstab-switch">
              <label for="tab-1" class="csstab-label">List Transaction</label>
              <div class="csstab-content">
                <div class="col-m-12 grid-margin stretch-card">
                  <div class="card white-bg">
                    <div class="py-3 pl-4">OUT190081
                      <div class="float-right">
                        <button type="button" class="btn btn-outline-primary btn-sm mr-5">
                          <i class="fa fa-arrow-left menu-icon"></i>
                          <span class="menu-title">Back</span>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-hover table-striped mb-4">
                          <thead class="color">
                            <tr>
                              <th>Code</th>
                              <th>Customer Name</th>
                              <th>Total Item</th>
                              <th>Total Payment</th>
                              <th>Payment Method</th>
                              <th>Due</th>
                              <th>Date</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>OUT190081 </td>
                              <td>Juan Dela Cruz </td>
                              <td>5</td>
                              <td>₱ 1,500.00 </td>
                              <td>Cash</td>
                              <td></td>
                              <td>2022-07-26</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>

                    <h4>TRANSACTION DATA</h4>    
                      <div class="card-body bg-transparent">
                        <div class="table-responsive">
                          <table class="table table-hover table-striped">
                            <thead class="color">
                              <tr>
                                <th>Product Name</th>
                                <th>Category</th>
                                <th>Quantity</th>
                                <th>Price/Item</th>
                                <th>Subtotal</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>PVC Pipe #2</td>
                                <td>Pipes</td>
                                <td>2</td>
                                <td>₱ 250.00</td>
                                <td>₱ 500.00</td>
                              </tr>
                              <tr>
                                <td>PVC Pipe #2</td>
                                <td>Pipes</td>
                                <td>2</td>
                                <td>₱ 250.00</td>
                                <td>₱ 500.00</td>
                              </tr>
                              <tr>
                                <td>PVC Pipe #2</td>
                                <td>Pipes</td>
                                <td>2</td>
                                <td>₱ 250.00</td>
                                <td>₱ 500.00</td>
                              </tr>
                              <tr class="font-weight-bolder color">
                                <td>Total</td>  
                                <td></td>  
                                <td></td>  
                                <td></td>  
                                <td>₱ 1500,00</td>
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

