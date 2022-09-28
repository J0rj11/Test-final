@extends('layouts.cashier')
@section('content')
<script>
	function supplier(){
		return {
			id: null,
			list: {!! $suppliers !!},
			form: {},
			tab: 2,

			toUpdateForm(c, i){
				this.id = i;
				this.tab = 1;
				this.form = Object.assign({}, c);
			},
			toReset: function(){
				this.form = {};
				this.id = null;
				this.tab = 2;
			},

			dbSubmit(){
				axios({
					url: this.id ? "/supplier/" + this.id : "/supplier",
					method: this.id ? "PUT" : "POST",
					data: this.form
				}).then(r => {
					if( this.id != null ){
						this.list.splice(this.id, 1, Object.assign({}, this.form));
					}else{
						this.form.id = Math.floor( Math.random() * 100 );
						this.list.push(this.form);
					}
					this.toReset();
				});
			},
			dbDelete: function(id, i){
				axios.delete("/supplier/" + id).then(r => {
					this.list.splice(i, 1);
				});
			}
		}
	}
</script>

<div class="sidebar-fixed main-panel" x-data="supplier()" >
	<div class="contentWrapper">
		<div class="row py-2">
			<h4>SUPPLIERS</h4>
		</div>
		<div class="col-12 grid-margin ">
			<div class="row">
				<div class="csswrapper">
					<div class="csstabs">
						<div class="csstab">
							<input type="radio" name="css-tabs" id="tab-1" value="1" x-model="tab" class="csstab-switch">
							<label for="tab-1" class="csstab-label"><span x-text="id != null ? 'Edit' : 'Add'" ></span> Supplier</label>
							<div class="csstab-content">
								<div class="card-body white-bg">
									<form class="ml-3 py-4 py-4">
										

										<div class="row">
					                      <div class="col-md-6">
					                        <div class="form-group row">
					                          <label class="col-sm-3 col-form-label">Supplier Code</label>
					                          <div class="col-sm-9">
					                            <input x-model="form.code" type="text" class="form-control">
					                          </div>
					                        </div>
					                      </div>

					                      <div class="col-md-6">
					                        <div class="form-group row">
					                          <label class="col-sm-3 col-form-label">Contact</label>
					                          <div class="col-sm-9">
					                            <input x-model="form.contact" type="text" class="form-control">
					                          </div>
					                        </div>
					                      </div>

					                      <div class="col-md-6">
					                        <div class="form-group row">
					                          <label class="col-sm-3 col-form-label">Supplier Name</label>
					                          <div class="col-sm-9">
					                            <input x-model="form.name" type="text" class="form-control">
					                          </div>
					                        </div>
					                      </div>                      
					                    </div>
										<div class="row">
					                      <div class="col-md-6">
					                        <div class="form-group row">
					                          <label class="col-sm-3 col-form-label">Address</label>
					                          <div class="col-sm-9">
					                            <input x-model="form.address" type="text" class="form-control">
					                          </div>
					                        </div>
					                      </div>
										</div>					
										<div x-show="id != null" class="pt-4 center">
											<button x-on:click.prevent="dbSubmit" type="submit" class="btn btn-primary btn-md">Update</button>
											<button x-on:click.prevent="toReset" type="submit" class="btn btn-primary btn-md">Cancel edit</button>
										</div>
										<div x-show="id == null" class="pt-4 center">
											<button x-on:click.prevent="dbSubmit" type="submit" class="btn btn-primary btn-md">Add supplier</button>
										</div>

									</form>
								</div>
							</div>
						</div>
						<div class="csstab">
							<input type="radio" name="css-tabs" id="tab-2" value="2" x-model="tab" class="csstab-switch">
							<label for="tab-2" class="csstab-label">List Supplier</label>
							<div class="csstab-content">
								<div class="card-body white-bg">
									<form class="form-group row px-1 pl-5">
										<div class="col">
											<label class="mb-2">Search by</label>
											<select class="form-control">
												<option></option>
												<option></option>
												<option></option>
												<option></option>
											</select>
										</div>
										<div class="col">
											<label class="mb-2">Value</label>
											<input class="typeahead" type="text" placeholder="">
										</div>
										<div class="col pt-4-5">
											<button type="submit" class="btn btn-primary mb-2">Search</button>
										</div>
									</form>
									<div class="card-body bg-transparent">
										<div class="table-responsive">
											<table class="table table-hover table-striped">
												<thead class="color">
													<tr>
														<th>Code</th>
														<th>Supplier Name</th>
														<th>Contact</th>
														<th>Address</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<template x-for="(product, index) in list" x-key="index" >
														<tr>
															<td x-text="product.code" ></td>
															<td x-text="product.name" ></td>
															<td x-text="product.contact" ></td>
															<td x-text="product.description" ></td>
															<td class="center" >
																<div role="button" class="btn btn-secondary btn-sm" @click.prevent="toUpdateForm(product, index)" >Update</div>
																<div role="button" class="btn btn-dark btn-sm" @click.prevent="dbDelete(product.id, index)" >Delete</div>
															</td>
														</tr>
													</template>
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