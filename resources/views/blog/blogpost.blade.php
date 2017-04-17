@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create your post</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('post') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('authorName') ? ' has-error' : '' }}">
                            <label for="authorName" class="col-md-4 control-label">Author Name</label>

                            <div class="col-md-6">
                                <input id="authorName" type="text" class="form-control" name="authorName" value="{{ old('authorName') }}" required autofocus>

                                @if ($errors->has('authorName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('authorName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('postContent') ? ' has-error' : '' }}">
                            <label for="postContent" class="col-md-4 control-label">Content Area</label>

                            <div class="col-md-6">
                                <textarea rows="5" id="postContent" type="text" class="form-control" name="postContent" value="{{ old('postContent') }}" required></textarea>

                                @if ($errors->has('postContent'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postContent') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <!--   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                        <!-- <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                   Publish
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
