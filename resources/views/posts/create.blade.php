<!DOCTYPE html>
<html>
<head><title>Новое сообщение</title></head>
<body>
    <h1>Создать сообщение</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <div>
            <label>Заголовок:</label>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title') <div style="color:red">{{ $message }}</div> @enderror
        </div>

        <div>
            <label>Содержание:</label>
            <textarea name="content">{{ old('content') }}</textarea>
            @error('content') <div style="color:red">{{ $message }}</div> @enderror
        </div>

        <button type="submit">Отправить</button>
    </form>

    <p><a href="{{ route('posts.index') }}">К списку</a></p>
</body>
</html>