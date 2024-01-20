@extends('backend.layouts.app')

@section('content')

<div class="dashboard-breadcrumb mb-30">
    <h2>Category</h2>
</div>
<div class="row g-4">
    <div class="col-xxl-6 col-md-4 m-auto">
        <div class="panel">
            <div class="panel-header">
                <h5>Edit Category</h5>
            </div>
            <div class="panel-body">
                <form action="{{ route('category.update', $categorys->id) }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="id" value="{{ $categorys->id }}">
                    <div class="row g-3">
                        <div class="col-12">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control form-control-sm" value="{{ $categorys->name }}">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control form-control-sm" id="">
                                <option value="1" {{ $categorys->status == 1 ? 'selected' : '' }}>Active</option>
                                <option value="2" {{ $categorys->status == 2 ? 'selected' : '' }}>Deactive</option>
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
