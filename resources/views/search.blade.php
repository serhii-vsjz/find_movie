<html>
<body>
    <form action="{{ route('search') }}" method="post">
        @csrf
        <input type="text" name="title"/>
        <input type="submit" value="search"/>
    </form>
</body>
</html>