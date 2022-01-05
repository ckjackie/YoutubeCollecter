@extends("includes.base")

@section("title")
我的影音清單
@endsection

@section("titlemessage")
{{ $title }}
@endsection

@section("maincontent")

<table>
    <td>
        <iframe width="800" height="600" src="https://www.youtube.com/embed/{{$vid}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </td>
    <td align =center width = 50%>
            <h3> 評論區</h3>
            <hr>
        @foreach($comm as $item)
            @if($item-> video_id === $vid)
            <h8>{{ $item-> content }}</h8>
            <hr>
            @endif
        @endforeach
        @auth
        <form action="/addcom/{{$id}}/" method="POST">
            @csrf
            發表您的看法:
            <br>

            <textarea name="com" cols="40" rows="5" required></textarea>
            <input type=submit value="發佈">

        </form>
        @endauth
    </td>
        </table>
@endsection

