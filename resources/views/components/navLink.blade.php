@props(["active" => false])

<a {{$attributes }} aria-current="{{$active ? 'page': 'false'}}"  class="{{ $active ? "active" : ""}}" >
    {{$slot}}
</a>