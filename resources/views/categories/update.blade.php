@extends('layouts.dashboard_layouts')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
        <!--
        <img src="images/{{ Session::get('image') }}">-->
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some issues with your contribution.
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form method="post" action="{{ url('/updateCategorie/'.$categories->id) }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="updateCategorie">Edit this Category</label>
                <input name="updateCategorie" type="text" class="form-control" id="updateCategorie" aria-describedby="updateCategorie" value="{{ $categories->categorie }}" >
            </div>
            <button type="submit" class="btn btn-success">Edit this Category </button>
        </form>

@endsection