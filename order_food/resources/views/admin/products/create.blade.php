@extends('layouts.admin')
@section('content')


<div class="row">
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <h3> Add products
                    <a href="{{ route('admin.products.create') }}" class="btn btn-primary btn-sm text-white float-end">
                        Back
                    </a>
                </h3>
            </div>
         <div class="crad-body">
            @if ($errors->any())
            <div class="alert alert-warning">
                @foreach ($errors->all() as $error )
                <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                        Home
                    </button>
                    </li>

                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">
                        Details
                      </button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="false">
                     Product Image
                    </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade border p-3 show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <!-- Home tab content here -->
                        <div class="mb-3">
                            <label for="category_id">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="name">Product Name</label>
                            <input type="text" name="name" id="name" class="form-control" />
                        </div>
                        <div class="mb-3">
                            <label for="small_description">Small Description (500 words)</label>
                            <textarea name="small_description" id="small_description" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control" rows="4"></textarea>
                        </div>
                    </div>
                    <div class="tab-pane fade border p-3 " id="details-tab-pane" role="tabpanel" aria-labelledby="details-tab" tabindex="0">
                        <!-- Details tab content here -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="original_price">Original Price</label>
                                    <input type="text" name="original_price" id="original_price" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="selling_price">Selling Price</label>
                                    <input type="text" name="selling_price" id="selling_price" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label>Product quantity</label>
                                    <input type="number" name="quantity" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <input type="text" name="status" id="status" style="width: 50px; height:50px;">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade border p-3 " id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                        <!-- Image tab content here -->
                        <div class="mb-3">
                            <label for="image">Upload Product Image</label>
                            <input type="file" name="image[]"  multiple class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    </div>
</div>


@endsection
