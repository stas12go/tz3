<x-app>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <x-apartments.form :action="route('apartments.update', $item->id)" :item="$item">
        @method('PUT')
    </x-apartments.form>


    <div class="row">
        @foreach($item->mortgagePrograms as $mortgageProgram)
            <div class="card me-3 mb-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $mortgageProgram->name }}</h5>
                    <p class="card-text">Ежемесячный платёж по программе: {{ $mortgageProgram->monthlyPayment }} руб.</p>
                    <a href="{{ route('mortgage-programs.edit', $mortgageProgram->id) }}" class="btn btn-primary">Изменить</a>
                </div>
            </div>
        @endforeach
    </div>
</x-app>
