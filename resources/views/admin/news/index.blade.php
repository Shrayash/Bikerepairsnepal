@extends('admin.layouts.new')

@section('title')

    News Index

@endsection



@section('content')

    <div class="container" style="max-width: 80rem;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3><strong>News</strong> Listing </h3>

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
                        <a href="{{ route('admin.news.create') }}" class="btn btn-primary"> Add News</a>
                        <br><br>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>News Title</th>
                                        <th>Image</th>
                                        <th>Category</th>
                                        <th>Region</th>
                                        <th>Author</th>
                                        <th>Is Featured?</th>
                                        <th>Status</th>
                                        <th>Created date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if (count($news) > 0)
                                        @php $counter = 1;  @endphp
                                        @foreach ($news as $data)

                                            <tr>
                                                <td> {{ $counter }}</td>
                                                <td> {{ $data->title }}</td>
                                                <td> <img src="{{ asset('uploads/news_images/' . $data->image) }}"
                                                        height="100px" width="100px" alt="{{ $data->image }}"></td>
                                                <td> {{ $data->cat_name }}</td>
                                                <td> {{ $data->reg_name }}</td>
                                                <td> {{ $data->author_id }}</td>
                                                <td> {{ $data->is_featured }}</td>
                                                <td>
                                                    @if ($data->status == 1)
                                                        <span class="badge badge-success">Active</span>
                                                    @else
                                                        <span class="badge badge-danger">InActive</span>
                                                    @endif
                                                </td>
                                                <td><span class="badge badge-primary">
                                                        {{ date('Y/m/d', strtotime($data->created_at)) }} </span>
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.news.edit', $data->id) }}"
                                                        class="btn btn-primary">
                                                        <i class="fas fa-edit" style="font-size:15px;"></i>
                                                    </a>
                                                    &nbsp;&nbsp;
                                                    <a href="{{ route('admin.news.delete', $data->id) }}"
                                                        class="btn btn-danger show_confirm">
                                                        <i class="fas fa-trash" style="font-size:15px;"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @php $counter++;  @endphp
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="10">There are no News present. Try adding a News.</td>
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
