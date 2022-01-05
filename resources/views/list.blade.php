@extends("includes.base")

@section("title")
影片清單
@endsection

@section("titlemessage")
<h2>我的影片清單</h2>
@endsection

@section("maincontent")
        <hr>
	@forelse ($data as $item)
    	<li><a href="/list/{{ $item->id }}">{{ $item->name }}</a></li>

        <table class="table table-striped">
            <tr><td>標題</td><td>VID</td>
            @foreach($data as $item)
            <tr>
                <td><a href="/show/{{ $item->id }}/">{{ $item->title }}</a></td>
                <td>{{ $item->vid }}</td>
            </tr>
            @endforeach
        </table>
	@empty
    	<p>目前清單沒有影片</p>
	@endforelse
@endsection