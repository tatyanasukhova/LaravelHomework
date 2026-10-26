<!DOCTYPE html>
<html>
<head><title>Сообщения</title></head>
<body>
    <h1>Все сообщения</h1>

    @if(session('success'))
        <div style="color:green">{{ session('success') }}</div>
    @endif

    <p><a href="{{ route('posts.create') }}">Добавить сообщение</a></p>

    @foreach($posts as $post)
        <div style="border:1px solid #ccc; margin:10px 0; padding:10px;">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <small>{{ $post->created_at }}</small>
        </div>
    @endforeach
</body>
</html>