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

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Categorie</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        @foreach($categories as $categorie)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $categorie->categorie }}</td>
                <td>
                    <a href="{{ '/updateCategorie/'.$categorie->id }}"><button class="btn btn-success" > Update </button></a>
                    <a href="{{ '/deleteCategorie/'.$categorie->id }}"><button class="btn btn-danger" > Delete </button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection