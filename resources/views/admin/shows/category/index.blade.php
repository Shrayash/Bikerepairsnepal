@extends('admin.layouts.new')

@section('title')
    Shows Category Index
@endsection

@section('content')

    <div class="container" style="max-width: 80rem;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong>Shows</strong> Categories </h3>

                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close"
                                style="float:right;">&times;</a>
                            {{ session()->get('message') }}
                        </div>

                    @elseif(session()->has('error'))
                        <div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close"
                                style="float:right;">&times;</a>
                            {{ session()->get('error') }}
                        </div>

                    @endif
                    <div class="card-body">
                        <a href="{{ route('admin.shows.category.create') }}" class="btn btn-primary"> Add Shows
                            Category</a>
                        <br><br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Category Title</th>
                                        <th>Slug</th>
                                        <th>Status</th>
                                        <th>Created date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if (count($showsCategory) > 0)
                                        @php $counter = 1;  @endphp
                                        @foreach ($showsCategory as $category)

                                            <tr>
                                                <td> {{ $counter }}</td>
                                                <td> {{ $category->category_title }}</td>
                                                <td> <span class="badge badge-primary">{{ $category->slug }} </span></td>
                                                <td>
                                                    @if ($category->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">InActive</span>
                                                    @endif
                                                </td>
                                                <td><span class="badge badge-secondary"> {{ $category->created_at }}
                                                    </span>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.shows.category.edit', $category->id) }}"
                                                        class="btn btn-primary">
                                                        <i class="fas fa-edit" style="font-size:15px;"></i>
                                                    </a>
                                                    &nbsp;&nbsp;
                                                    <a href="{{ route('admin.shows.category.delete', $category->id) }}"
                                                        class="btn btn-danger show_confirm">
                                                        <i class="fas fa-trash" style="font-size:15px;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @php $counter++;  @endphp
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="6">There are 0 News Categories present. Try adding a News Category.
                                            </td>
                                        </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $('.show_confirm').click(function(e) {
            if (!confirm('Are you sure you want to delete this News Category?')) {
                e.preventDefault();
            }
        });
    </script>
@endsection
