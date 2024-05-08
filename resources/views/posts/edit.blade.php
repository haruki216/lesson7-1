<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body class="antiaiased">
       <form action="/posts/{{$post->id}}" method="POST">
           @csrf
           @method('PUT')
           <div class="title">
               <h2>title</h2>
               <input type="text" name=post[title] placeholder="タイトル" value={{$post->title}}/>
               <p class="title_error"style="color:red">{{$errors->first("post.title")}}</p>
            <div class="body">
                <h2>body</h2>
                <textarea name="post[body]" placeholder="今日も一日お疲れ様でした">{{$post->body }}</textarea>
             <p class="body_error"style="color:red">{{$errors->first("post.body")}}</p>
            </div>   
               <input type="submit"value ="update">   
           </div>
           
       </form>
        <div class="footer">
        <a href="/post/{{$post->id}}">戻る</a>
        </div>        
        
    </body>
</html>
Copy
