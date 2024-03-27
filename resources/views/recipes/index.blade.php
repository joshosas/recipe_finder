<x-layout>
    <h1 class="text-center mb-5">Recipes</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($recipes['results'] as $recipe)
        <div class="col">
            <div class="card h-100">
                <a href="/recipes/{{ $recipe['id'] }}" class="text-decoration-none">
                    <img src="{{ $recipe['image'] }}" class="card-img-top" alt="{{ $recipe['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $recipe['title'] }}</h5>
                        @if (isset($recipe['summary']))
                        <p class="card-text">{{ $recipe['sourceUrl"'] }}</p>
                        @else
                        <p class="card-text"> </p>
                        @endif
                    </div>
                </a>
            </div>
        </div>
        @endforeach
    </div>

    <!-- JOKES -->

    <h1 class="text-center mb-5">Jokes</h1>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        @foreach ($humors['jokes'] as $humor)
        <div class="col">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $humor['joke'] }}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>