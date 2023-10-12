<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>編集ページ</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="content__title">
                <h2>Title</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class="content__body">
                <h2>Body</h2>
                <input type='text' name='post[body]' value="{{ $post->body }}"
            </div>
            <input type="submit" value="保存">
        </form>
    </body>
</html>
