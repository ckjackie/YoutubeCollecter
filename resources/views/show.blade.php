@extends("includes.base")

@section("title")
我的影音清單
@endsection

@section("titlemessage")
{{ $vid }}
@endsection

@section("maincontent")
<iframe width="800" height="600" src="https://www.youtube.com/embed/{{$vid}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
@endsection

