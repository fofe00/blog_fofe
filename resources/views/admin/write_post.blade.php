@extends('app')
@section('content')
    <div class="ui stackable grid">

        <div class="ui form">
            <div class="field">
                <label>Text</label>
                <textarea></textarea>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script !src="">
        var simplemde = new SimpleMDE({ element: $("#MyID")[0] });
    </script>
@endsection
