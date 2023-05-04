@extends('layouts.app')

@section('page.main')
    <div class="container py-5">
        <div class="row row-cols-4 gap-5">
            @foreach ($movies as $movie)
            <div class="card ms-card col" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Title: {{ $movie->title }}</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Original Ttile : {{ $movie->original_title }}</h6>
                  <p class="card-text">Language: {{ $movie->nationality }}</p>
                  <p class="card-text">Release date: {{ $movie->date }}</p>
                  <p class="card-text">Vote: {{ $movie->vote }}</p>
                </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection
