@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard / Blog</h1>
        @if (Session::has('message'))
            <div class="alert alert-info">{!! Session::get('message') !!}</div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <a href="{{ route('dashboardBlogForm') }}"
                   class="btn btn-primary">Create a
                    new blog entry</a>
            </div>
        </div>
        <table class="table table-striped table-hover ">
            <thead>
            <tr>
                <th>#</th>
                <th>Title</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Operations</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($entries as $entry)
                <tr>
                    <td>{{ $entry['id'] }}</td>
                    <td>{{ $entry['title'] }}</td>
                    <td>{{ $entry['created'] }}</td>
                    <td>{{ $entry['updated'] }}</td>
                    <td>
                        <div class="btn-group">
                            <a href="#" class="btn btn-sm btn-default">View</a>
                            <a href="#"
                               class="btn btn-sm btn-default dropdown-toggle"
                               data-toggle="dropdown"
                               aria-expanded="false"><span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Update</a></li>
                                <li><a href="#">Delete</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
