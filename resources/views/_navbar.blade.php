<nav id="navbar-box" class="navbar navbar-expand-lg ">
    <div class="container">
        <h1><a id="navbar-links" class="navbar-brand " href="{{url('/')}}">Cheap Talks Blog</a></h1>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                @if(auth()->guest())

                @else
                    
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/dashboard')}}">Home</a>
                </li>
                <li class="nav-item">
                <a id="navbar-links" class="nav-link" href="{{url('/posts/my-posts')}}">Posts</a>
                </li>
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/posts/recent-posts')}}">Timeline</a>
                </li>
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/logs')}}">Logs</a>
                </li>
                <li class="nav-item">
                    <a id="navbar-links" class="nav-link" href="{{url('/logout')}}">&nbsp; <i class="fa-solid fa-right-to-bracket"></i></a>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>

<style>
 @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap'); */

#navbar-box{
    height: 70px;
    padding-left: 30px; 
    padding-right: 30px; 
    background-color: #30414B;
}
.navbar-brand{
    font-size: 35px;
   
}

#navbar-links{
    color: #33ACFF;
    font-family: 'Raleway', sans-serif;
    font-weight: bold;
}

.nav-link{
    margin-left: 10px;
}
    
</style>

