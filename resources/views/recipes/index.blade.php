<x-layout>
    <h1>Recipes</h1>
    <div class="row">
        @foreach ($recipes['results'] as $recipe)
        <div class="col-md-6 mb-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $recipe['title'] }}</h5>
                    <img src="{{ $recipe['image'] }}" class="img-fluid" alt="{{ $recipe['title'] }}">
                </div>
            </div>
        </div>
        @endforeach
    </div>
</x-layout>