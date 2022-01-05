@extends("includes.base")

@section("title")
影片清單
@endsection

@section("titlemessage")
<h2>我的影片清單</h2>
@endsection

@section("maincontent")
        <form action="/videolist/" method="POST">
            @csrf
            @auth
            使用者：<input type="text" name="user_id" size=20 value={{Auth::user()->id}} >
            @endauth
            清單名稱：<input type="text" name="name" size=20 required>
            <input type=submit value="加入">
        </form>
        <hr>
	@forelse ($videolist as $item)
    	<li>{{ $item->name }}</li>
	@empty
    	<p>目前沒有影片清單</p>
	@endforelse
@endsection