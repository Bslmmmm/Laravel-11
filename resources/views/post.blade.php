<!DOCTYPE html>
<html>

<head>
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <x-layout>
        <x-slot:title>{{ $title }}</x-slot:title>

        <article class="py-8 max-w-screen-md border-b ">
        
            <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post ['title']}}</h2>
        
        <div class="text-base text-gray-500">
            <a href="#">{{ $post ['author'] }}</a> 06 November 2024
        </div>

        <p class="my-4 font-light">
           {{ ($post ['body'] )}}
        </p>
        <a href="/posts" class="font-medium text-blue-500 hover:underline">&laquo; Back to Blog </a>
        </article>

    </x-layout>
</body>

</html>