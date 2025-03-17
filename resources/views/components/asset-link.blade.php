@props(['src', 'type'])
@if($type === 'js')
    <script src="{{ $src }}"></script>
@elseif($type === 'css')
    <link rel="stylesheet" href="{{ $src }}">
@endif
