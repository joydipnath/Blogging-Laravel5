@extends('layouts.app')

@section('content')
 @foreach ($posts as $post)
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $post->authorName }}</div>
                <div class="panel-body">
                    

                        

                            <div class="col-md-6">
                                
                                    {{ $post->postContent }}
                                
                            </div>
                        
                            <div class="col-md-6">
                                
                                    {{ $post->created_at}}
                                
                            </div>
                       

                            <div class="col-md-6 col-md-offset-4">
                               <form method="post" action="/post/{{$post->id}}">
                                        {{ csrf_field() }}
                                        {{method_field('DELETE')}}
                                        <button class="btn btn-danger"> delete</button>
                                    </form>
                            </div>

                            <div class="col-md-6 ">
                               <form method="post" action="/post/{{$post->id}}">
                                        {{ csrf_field() }}
                                        {{method_field('PATCH')}}
                                        <button class="btn btn-primary"> Edit</button>
                                    </form>
                            </div>
                        

                  

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
