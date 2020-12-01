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
            <th scope="col">Taches</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php $i = 1; ?>
        @foreach($taches as $tache)
            <tr>
                <th scope="row">{{ $i++ }}</th>
                <td>{{ $tache->title }}</td>
                <td>
                    <a href="{{ '/tache_update/'.$tache->id }}"><button class="btn btn-success" > Update</button></a>
                    <a href="{{ '/tache_delete/'.$tache->id }}"><button class="btn btn-danger" > Delete</button></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection