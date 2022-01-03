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
            使用者ID：<input type="text" name="user_id" size=20 value={{Auth::user()->id}} >
            清單名稱：<input type="text" name="name" size=20 required>
            啟始計數:<input type="text" name="count" size=20 value=0 required>
            <input type=submit value="加入">
        </form>
        <hr>
	@forelse ($videolist as $item)
    	<li>{{ $item->name }}</li>
	@empty
    	<p>目前沒有影片清單</p>
	@endforelse
@endsection