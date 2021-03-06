@extends('layouts.dashboard_layouts')

@section('title')
    <title>Add Tache</title>
@endsection

@section('content')
    <!-- Page Heading title produit -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h2 class="h3 mb-0 text-gray-800">Add Tache</h2>
        </div>
    </div>

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

    <form method="post" action="{{ url('addTache') }}" enctype="multipart/form-data" >
        {{ csrf_field() }}

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="produit">Tittle of the Tache</label>
                <input type="text" name="title" class="form-control" id="produit" placeholder="Add a title of the Tache ...">
            </div> 
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputState">Categorie</label>
                <select name="categorie_id" id="inputState" class="form-control">
                    @foreach($categories as $categorie)
                        <option value="{{ $categorie->id }}" >{{ $categorie->categorie }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="descriptionP">Tache Description</label>
            <textarea name="textareaP" class="form-control" id="descriptionP" rows="6"></textarea>
        </div>

        <button type="submit" class="btn btn-info">Add a New Tache</button>
    </form>

@endsection