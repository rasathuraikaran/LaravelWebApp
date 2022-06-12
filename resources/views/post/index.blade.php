<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>


    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div  class="container max-w-full mx-auto pt-4" style="width: 900px;">

        <h1 class="text-4xl font-bold mb-4 ">My Blog</h1>
        <a href="/posts/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4" >Add Post</a>

        @foreach ($posts as $post )

 <article class="mb-2">
<a href="/posts/{{$post->id}}/edit" class="text-xl font-bold text-blue-900">{{$post->title}}</a>
    <p class="text-md  text-gray-700">
      {{$post->content}}
    </p>
    <hr class="mt-2" >
</article>

 @endforeach
</div>

</body>
</html>
