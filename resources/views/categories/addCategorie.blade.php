@extends('layouts.dashboard_layouts')

@section('title')
    <title>Add Categorie</title>
@endsection

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

        <form method="post" action="{{ url('/addCategorie') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="addCategorie">Add a new category</label>
                <input name="addCategorie" type="text" class="form-control" id="addCategorie" aria-describedby="addCategorie" placeholder="Please enter your new category here ...">
            </div>
            <button type="submit" class="btn btn-success">Add a new Category </button>
        </form>

@endsection