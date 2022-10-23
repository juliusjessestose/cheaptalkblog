<div>
    <div class="col d-flex justify-content-center">
        <div class="w-25 container-fluid">
            <div class="row">
                <select name="" id="filter" class="form-select" wire:model.lazy="category">
                    <option value="all">All Categories</option>
                    <option value="Motivational">Motivational</option>
                    <option value="Life">Life</option>
                    <option value="Trust">Trust</option>
                    <option value="Time">Time</option>
                </select>
            </div>
        </div> 
        <div class="w-75">
            <input id="search" type="text" class="form-control" placeholder="Search..." wire:model="search">  
        </div>
    </div>
    <hr>

    <div class="d-flex justify-content-between flex-wrap">
        
        @foreach ($posts as $post)
        <div class="card align-self-stretch m-1 post-box-main" style="width: 49%">
            <div class="card-body" id="post-box">
                <div class="card-title">
                    <h4>{{ $post->title }}, <span id="category-span">{{ $post->category }}</span></h4>
                    <p id="timestamp"> {{ $post->created_at->format('F d, Y g:i A') }}</p> <br>
                    <p>{{ $post->content }}</p>
                </div>
            </div>
            <div id="post-box-footer" class="card-footer">
             
                <a href="{{ url('edit', ['post' => $post->id]) }}"><i class="fa-regular fa-pen-to-square"></i></a>
                <a href="{{ url('delete', ['post' => $post->id]) }}" ><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-end mt-3">
        {{ $posts->links() }}
    </div>

    <style>
        
    
    </style>
</div>


