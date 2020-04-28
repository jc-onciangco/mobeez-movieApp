@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies mb-24">
            <h2 class="uppercase tracking-wider text-yellow-400 text-lg font-semibold mb-4">Popular Movies</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 scroll-600 border-rounded-10-corner-ltb px-4 py-4 custom-gray-3 shadow-2xl">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie"/>
                @endforeach
            </div>
        </div>
        <div class="now-playing-movies mb-24">
            <h2 class="uppercase tracking-wider text-yellow-400 text-lg font-semibold mb-4">Now Playing</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 scroll-600 border-rounded-10-corner-ltb px-4 py-4 custom-gray-3 shadow-2xl">
                @foreach ($popularMovies as $movie)
                    <x-movie-card :movie="$movie"/>
                @endforeach
            </div>
        </div>
    </div>
@endsection

{{-- <div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($popularMovies as $movie)
                <x-movie-card :movie="$movie" />
            @endforeach

        </div>
    </div> <!-- end pouplar-movies -->

    <div class="now-playing-movies py-24">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            @foreach ($nowPlayingMovies as $movie)
                <x-movie-card :movie="$movie" />
            @endforeach
        </div>
    </div> <!-- end now-playing-movies -->
</div> --}}
