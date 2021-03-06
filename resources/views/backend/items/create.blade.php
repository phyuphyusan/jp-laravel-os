@extends('backendtemplate')
@section('title','Items')
@section('content')
<div class="container-fluid mt-4">
	<h2 class="text-center mb-4">Add New Item Form</h2>
	{{--Must Show related input errors--}}
	@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	<form method="post" action="{{route('items.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group row">
			<label for="inputCodeNo" class="col-sm-2 col-form-label">Codeno:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputCodeNo" name="codeno">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputName" class="col-sm-2 col-form-label">Name:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputName" name="name">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPhoto" class="col-sm-2 col-form-label">Photo:</label>
			<div class="col-sm-10">
				<input type="file" class="form-control" id="inputPhoto" name="photo">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputPrice" class="col-sm-2 col-form-label">Price:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputPrice" name="price">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputDiscount" class="col-sm-2 col-form-label">Discount:</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="inputDiscount" name="discount" value="0">
			</div>
		</div>
		<div class="form-group row">
			<label for="inputDescription" class="col-sm-2 col-form-label">Description:</label>
			<div class="col-sm-10">
				<textarea name="description" class="form-control" id="inputDescription"></textarea>
			</div>
		</div>
		<div class="form-group row">
			<label for="inputBrand" class="col-sm-2 col-form-label">Choose Brand:</label>
			<div class="col-sm-10">
				<select id="inputBrand" class="form-control" name="brand">
					<optgroup label="Choose Brand">
						@foreach($brands as $brand)
						<option value="{{$brand->id}}">{{$brand->name}}</option>
						@endforeach
					</optgroup>
				</select>
			</div>
		</div>
		<div class="form-group row">
			<label for="inpurSubcategory" class="col-sm-2 col-form-label">Choose Category:</label>
			<div class="col-sm-10">
				<select id="selectBrand" class="form-control" name="subcategory">
					<optgroup label="Choose Subcategory">
						@foreach($subcategories as $subcategory)
						<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
						@endforeach
					</optgroup>
				</select>
			</div>
		</div>
			<div class="form-group row mt-4">
				<div class="offset-2 col-sm-10">
					<input type="submit" class="btn btn-outline-primary" name="btnsubmit" value="Save">
				</div>
			</div>
	</form>
</div>
@endsection