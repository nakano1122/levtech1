<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>編集ページ</title>
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                //編集画面（タイトル）
            </div>
            <div class="body">
                <h2>Body</h2>
                //編集画面（ボディ）
            </div>
            //編集終了ボタン（保存）
        </form>
    </body>
</html>
