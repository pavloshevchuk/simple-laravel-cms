@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4>Blog</h4></div>
                    <!-- List group -->
                    <ul class="list-group">
                        <li class="list-group-item"><h4><a
                                    href="{{ url('dashboard/blog/create') }}">Create
                                new blog entry</a></h4></li>
                        <li class="list-group-item"><h4><a
                                    href="{{ url('dashboard/blog') }}">View all blog
                                entries</a></h4></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
