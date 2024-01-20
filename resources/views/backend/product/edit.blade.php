@extends('backend.layouts.app')

@section('content')
<div class="dashboard-breadcrumb mb-30">
    <h2>Product</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-6 col-md-4 m-auto">
        <div class="panel">
            <div class="panel-header">
                <h5>Edit Product</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('products.update', $products->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $products->id }}">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Category</label>
                            <select name="category_id" id="category" class="form-control form-control-sm @error('category_id') is-invalid @enderror">
                                <option value="">--selected --</option>
                                @foreach ($categorys as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $products->category_id?'selected':'' }}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Subcategory</label>
                            <select name="subcategory_id" id="subcategory" class="form-control form-control-sm @error('subcategory_id') is-invalid @enderror">
                                @if ($products->rel_to_subcat != null)
                                    <option value="{{ $products->subcategory_id }}">{{ $products->rel_to_subcat->name }}</option>
                                @else
                                    <option value="">-- Select --</option>
                                @endif
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" value="{{ $products->name }}">

                        </div>
                        <div class="col-12">
                            <label class="form-label">Title</label>
                            <input type="text" name="title" class="form-control form-control-sm" value="{{ $products->title }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Description</label>
                            <textarea rows="3" name="description" class="form-control form-control-sm">{{ $products->description }}</textarea>
                        </div>
                        <div class="col-12">
                            <div class="upload-category-thumbnail">
                                <label class="form-label" id="addCatThumb">Image</label>
                                <input type="file" name="image" class="form-control" id="thumbUpload" value="{{ $products->image }}">
                            </div>
                            <div class="my-3">
                                <img width="100" id="blah" src="{{ asset('uploads/product') }}/{{ $products->image }}" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control form-control-sm" id="">
                                <option value="1" {{ $products->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $products->status == 2 ? 'selected' : '' }}>Deactive</option>
                            </select>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <div class="btn-box">
                                <button type="submit" class="btn btn-sm btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection

@section('footer_script')
<script>
    $(document).ready(function() {
        $('#category').on('change', function() {
            var categoryId = $(this).val();
            if (categoryId) {
                $.ajax({
                    type: 'GET'
                    , url: '/api/subcategories/' + categoryId
                    , success: function(data) {
                        $('#subcategory').empty().append('<option value="">-- Select Subcategory --</option>');
                        $.each(data, function(key, value) {
                            $('#subcategory').append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#subcategory').empty().append('<option value="">-- Select Subcategory --</option>');
            }
        });
    });

</script>
@endsection
