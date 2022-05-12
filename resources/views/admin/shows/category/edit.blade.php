@extends('admin.layouts.new')

@section('title')
    Update Category
@endsection


@section('content')

    <div class="card">
        <div class="card-header">
            <h3>Update Category</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.shows.category.update', $editShows->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="cat_title" style="color:black; font-size:1.2rem">News Category Title:<span
                                style="color:red;font-size:15px;">&nbsp;*</span></label><br>
                        <input type="text" name="category_title" value="{{ $editShows->category_title }}"
                            class="form-control"><br>
                    </div>

                    <div class="form-group col-md-6" style="padding-left:8rem">
                        <label style="color:black; font-size:1.2rem">News Category Status</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1"
                                {{ $editShows->status == '1' ? 'checked' : '' }}>
                            <label class="form-check-label" for="exampleRadios1">
                                Active
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0"
                                {{ $editShows->status == '0' ? 'checked' : '' }}>
                            <label class="form-check-label" for="exampleRadios2">
                                Not Active
                            </label>
                        </div>

                    </div>
                    <div>
                        <input type="submit" class="btn btn-primary" value="Update">
                        <a href="{{ route('admin.shows.categories') }}" class="btn btn-danger"> Cancel</a>
                    </div>
            </form>
        </div>
    </div>

@endsection
