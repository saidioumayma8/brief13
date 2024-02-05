@if(count($posts))
<div class="flex justify-between">
    @foreach($posts as $post)
        <div class="post col-md-6 col-lg-4 col-xl-3">
             <div class="rounded position-relative fruite-item">
                <div class="fruite-img">
                    <img src="images/storage/{{$post->image}}" class="img-fluid w-100 rounded-top" alt="idk">
                </div>
                {{-- <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div> --}}
                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                    <h1>{{ $post->title }}</h1>
                    <p>{{$post->body}}</p>
                    <p><h2>ingeredients:</h2>{{$post->ingredients}}</p>
                </div>
            </div>
            <button class="text-white bg-secondary px-3 py-1 rounded position-absolute"><a href="/edit-post/{{$post->id}}">Edit</button>
            <form action="/delete-post/{{$post->id}}" method="POST" class="inline">
                @csrf
                @method("DELETE")
                <button class="text-white bg-secondary px-3 py-1 rounded position-absolute" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
        @endforeach
                    </div>

                    @else
                    nothing with this name

@endif
