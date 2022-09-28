@extends('layouts.cashier')
@section('content')

<script>
	function product(){
		return {
			id: null,
			list: {!! $products !!},
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
					url: this.id ? "/product/" + this.id : "/product",
					method: this.id ? "PUT" : "POST",
					data: this.form
				}).then(r => {
					if( this.id != null ){
						this.list.splice(this.id, 1, Object.assign({}, this.form));
					}else{
						this.list.push(r.data.product);
					}
					this.toReset();
				});
			},
			dbDelete: function(id, i){
				axios.delete("/product/" + id).then(r => {
					this.list.splice(i, 1);
				});
			}
		}
	}
</script>

<div class="sidebar-fixed main-panel" x-data="product()" >
	<div class="contentWrapper">
		<div class="row py-2">
			<h4>PRODUCT FORM</h4>
		</div>
		<div class="col-12 grid-margin ">
			<div class="row">
				<div class="csswrapper">
					<div class="csstabs">

						<div class="csstab">
							<input type="radio" name="css-tabs" id="tab-1" value="1" x-model="tab" class="csstab-switch">
							<label for="tab-1" class="csstab-label"><span x-text="id != null ? 'Edit' : 'Add'" ></span> Product</label>
							<div class="csstab-content">
								<div class="card-body white-bg">
									<form class="py-4 pl-5">
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Product Code</label>
											<div class="col-sm-9">
												<input x-model="form.code" type="text" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Product Name</label>
											<div class="col-sm-9">
												<input x-model="form.name" type="text" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Category</label>
											<div class="col-sm-9">
												<select x-model="form.category" class="form-control">
													<option value="" disabled >Select category</option>
													<option>Sample category 1</option>
													<option>Sample category 2</option>
													<option>Sample category 3</option>
												</select>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Quantity</label>
											<div class="col-sm-9">
												<input x-model="form.quantity" type="number" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Price</label>
											<div class="col-sm-9">
												<input x-model="form.price" type="number" class="form-control" >
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-2 col-form-label">Description</label>
											<div class="col-sm-9">
												<textarea x-model="form.description" class="form-control" ></textarea>
											</div>
										</div>

										<div x-show="id != null" class="pt-4 center">
											<button x-on:click.prevent="dbSubmit" type="submit" class="btn btn-primary btn-md">Update</button>
											<button x-on:click.prevent="toReset" type="submit" class="btn btn-primary btn-md">Cancel edit</button>
										</div>
										<div x-show="id == null" class="pt-4 center">
											<button x-on:click.prevent="dbSubmit" type="submit" class="btn btn-primary btn-md">Add product</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						
						<div class="csstab">
							<input type="radio" name="css-tabs" id="tab-2" value="2" x-model="tab" class="csstab-switch">
							<label for="tab-2" class="csstab-label">List Product</label>
							<div class="csstab-content">
								<div class="card-body white-bg">
									<form class="form-group row py-4 pl-5">
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
											<input class="typeahead" type="text">
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
														<th>Product Name</th>
														<th>Description</th>
														<th>Quantity</th>
														<th>Price</th>
														<th>Action</th>
													</tr>
												</thead>
												<tbody>
													<template x-for="(item, index) in list" :key="item.id" >
														<tr>
															<td x-text="item.code" ></td>
															<td x-text="item.name" ></td>
															<td x-text="item.description" ></td>
															<td x-text="item.quantity" ></td>
															<td>₱ <span x-text="item.price" ></span></td>
															<td class="center" >
																<div role="button" class="btn btn-secondary btn-sm" @click.prevent="toUpdateForm(item, index)" >Update</div>
																<div role="button" class="btn btn-dark btn-sm" @click.prevent="dbDelete(item.id, index)" >Delete</div>
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
</div>
</div>
@endsection