<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Your Cool App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>

<body class="font-sans bg-gray-100">

@auth
    <div class="container mx-auto my-8 p-8 bg-white rounded shadow">
        <p class="text-2xl font-bold text-green-600 mb-4">Congrats, you're logged in!</p>
        <form action="/logout" method="post">
            @csrf
            <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Logout</button>
        </form>

        <div class="mt-8 border-t-2 pt-4">
            <h2 class="text-xl font-bold mb-4">Create New recette</h2>
            <form action="create-post" method="post">
                @csrf
                <input type="text" name="title" placeholder="Enter recette title" class="w-full border p-2 mb-2">
                <textarea name="description" placeholder="Enter recette description" class="w-full border p-2 mb-2"></textarea>
                <textarea name="ingredients" placeholder="Enter recette ingredients" class="w-full border p-2 mb-2"></textarea>
                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupFile01">Upload</label>
                    <input type="file" class="form-control" id="inputGroupFile01">
                  </div>                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create recette</button>

            </form>
        </div>

        <div class="mt-8">
            <h2 class="text-xl font-bold mb-4">All Posts</h2>
            @foreach($posts as $post)
                <div class="bg-gray-200 p-4 mb-4 rounded">
                    <h3 class="text-lg font-bold mb-2">{{$post["title"]}} <span class="text-gray-600">by {{$post->user->name}}</span></h3>
                    <p class="mb-4">{{$post["body"]}}</p>
                    <p class="text-blue-500 hover:underline"><a href="/edit-post/{{$post->id}}">Edit</a></p>
                    <form action="/delete-post/{{$post->id}}" method="POST" class="inline">
                        @csrf
                        @method("DELETE")
                        <button class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </div>
            @endforeach
            @foreach($posts as $post)
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    {{-- <img src="img/{{$post->image}}" class="img-fluid w-100 rounded-top" alt="idk"> --}}
                                                </div>
                                                <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">Fruits</div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4>{{ $post->title }}</h4>
                                                    <p>{{$post->body}}</p>

                                                </div>
                                            </div>
                                            <p class="text-blue-500 hover:underline"><a href="/edit-post/{{$post->id}}">Edit</a></p>

                                            <form action="/delete-post/{{$post->id}}" method="POST" class="inline">
                                                @csrf
                                                @method("DELETE")
                                                <button class="text-red-500 hover:underline" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </div>
                                        @endforeach
        </div>
    </div>

@else

    <div class="container mx-auto my-8 p-8 bg-white rounded shadow">
        <div class="mb-8">
            <h2 class="text-xl font-bold mb-4">Register</h2>
            <form action="/register" method="post">
                @csrf
                <input type="text" name="name" placeholder="Name" class="w-full border p-2 mb-2">
                <input type="email" name="email" placeholder="Email" class="w-full border p-2 mb-2">
                <input type="password" name="password" placeholder="Password" class="w-full border p-2 mb-2">
                <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Register</button>
            </form>
        </div>

        <div>
            <h2 class="text-xl font-bold mb-4">Login</h2>
            <form action="/login" method="post">
                @csrf
                <input type="text" name="loginname" placeholder="Username" class="w-full border p-2 mb-2">
                <input type="password" name="loginpassword" placeholder="Password" class="w-full border p-2 mb-2">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Login</button>
            </form>
        </div>
    </div>

@endauth

</body>

</html>
