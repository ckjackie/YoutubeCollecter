@extends("includes.base")

@section("title")
我的影片清單
@endsection

@section("titlemessage")
<h2>Youtube Collecter</h2>
@endsection

@section("maincontent")
<h2>影音列表</h2>
    @if(Auth::user())
        {{ Auth::user()->email }}
    @else
        訪客
    @endif

        <hr>
        
        @auth
        <form action="/add/" method="POST">
            @csrf
            VID:<input type="text" name="vid" size=20 required>
            清單:<input type="text" name="vid" size=20 required>
            <input type=submit value="加入">
        </form>
        @endauth

        <table class="table table-striped">
            <tr><td>清單名稱</td><td>標題</td><td>VID</td>
                @auth
                <td>管理</td></tr>
                @endauth
            @foreach($data as $item)
            <tr>
                <td>{{ $item->video_list_id }}</td>
                <td><a href="/show/{{ $item->id }}/">{{ $item->title }}</a></td>
                <td>{{ $item->vid }}</td>
                @auth
                <td><a href="/delete/{{ $item->id }}">刪除</a></td>
                @endauth
            </tr>
            @endforeach
        </table>
@endsection