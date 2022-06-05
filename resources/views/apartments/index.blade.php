<x-app>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('apartments.create') }}" class="btn btn-primary mb-3">Добавить</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Тип квартиры</th>
            <th scope="col">Цена, руб.</th>
            <th scope="col">Управление</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $key => $item)
            <x-apartments.table-row :key="$key + 1" :item="$item"/>
        @endforeach
        </tbody>
    </table>
</x-app>
