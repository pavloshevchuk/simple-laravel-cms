@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create blog entry</h1>
        <div class="row">
            <div class="col-sm-12">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <form role="form" method="POST"
                      action="{{ route('dashboardBlogStore') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                        <label for="title" class="control-label">Title</label>
                        <input id="title" type="text" class="form-control"
                               name="title" value="{{ old('title') }}"
                               autofocus>

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                        <label for="description" class="control-label">Description</label>
                        <textarea id="description"
                                  class="form-control" name="description"
                                  rows="5">{{ old('description') }}</textarea>

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Create
                        </button>
                        <a href="{{ route('dashboardBlogEntries') }}" class="btn btn-default">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
