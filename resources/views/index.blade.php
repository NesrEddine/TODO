@extends('layouts.layouts')

@section('title') 
	<title>Accueil</title>
@endsection

@section('categories')
    <div class="col-lg-3">
        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="#" class="list-group-item active">CATEGORIES</a>
          @foreach($categories as $categorie)
              <a href="#" class="list-group-item">{{ $categorie->categorie }}</a>
           @endforeach
        </div>
    </div>
@endsection

@section('content')

 <div class="col-lg-9">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="{{ asset('images/todo.jpg') }}" alt="">
          <div class="card-body">
            @foreach($taches as $tache)
              <h3 class="card-title">{{ $tache->title }}</h3>
              <p class="card-text">{{ $tache->tache }}</p>  
              <small class="text-muted">Posted by {{ Auth::user()->name }} on {{ $tache->created_at }}</small>
              <hr>
              <a href="#" class="btn btn-success"> Update</a>
              <a href="#" class="btn btn-success"> Delete</a>
            @endforeach
          </div>
        </div>
        <br>

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

@endsection