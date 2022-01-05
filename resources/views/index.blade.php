@extends("includes.base")

@section("title")
我的影片清單
@endsection

@section("titlemessage")
<h2>Youtube Collecter</h2>
@endsection

@section("maincontent")
    @if(Auth::user())
        <br>
        <h5>影音列表-{{ Auth::user()->email }}</h5>
    @else
        <br>
        <h5>影音列表-訪客</h5>
    @endif

        <hr>
        
        @auth
        <form action="/add/" method="POST">
            @csrf
            標題:<input type="text" name="title" size=20 required>
            VID:<input type="text" name="vid" size=20 required>
            <input type=submit value="加入"><hr>
        </form>
        @endauth

        <table class="table table-striped">
            <tr><td>標題</td><td>VID</td>
                @auth
                <td>管理</td></tr>
                @endauth
            @foreach($data as $item)
            <tr>
                <td><a href="/show/{{ $item->id }}/">{{ $item->title }}</a></td>
                <td>{{ $item->vid }}</td>
                @auth
                <td><a href="/delete/{{ $item->id }}">刪除</a></td>
                @endauth
            </tr>
            @endforeach
        </table>
@endsection