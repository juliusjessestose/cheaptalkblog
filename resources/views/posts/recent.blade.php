@extends('base')
@section('content')
@livewireScripts


<div class="d-flex">
    <div>
        <h1 id="top"></h1>
    </div>
  
</div>
<hr>
<div class="d-flex justify-content-between flex-wrap">

    @foreach ($recentPost as $post)
        <div id="post-box" class="card align-self-stretch m-1" style="width: 31%">
            <div class="card-body">
                <div class="card-title">
                    <h4 id="post-title">{{ $post->title }} <span><h6>{{ $post->category }}</h6></span> </h4>
                    <p class="timestamp"><b>by: </b> {{ $post->user->lname }}, {{ $post->user->fname }} <br>
                   <b>created: </b>{{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div class="card-footer">
                @if($post->isEditable())
                    <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                    <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
                    @else 
                    <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-heart"></i></a>&nbsp;
                    <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-regular fa-comment-dots"></i></i></a>&nbsp;
                    <a class="buttons-for-non-user" href="" onclick="return false;"><i class="fa-solid fa-share-nodes"></i></a>                    
                @endif
            </div>
        </div>
    @endforeach

</div>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Lavishly+Yours&display=swap');
    
    #top{
        margin-top: 30px;
        margin-bottom: 30px;
        /* font-family: 'Tangerine', cursive; */
        font-family: 'Lavishly Yours', cursive;
        font-weight: bold;
        font-size: 50px;
    }



</style>
@endsection
