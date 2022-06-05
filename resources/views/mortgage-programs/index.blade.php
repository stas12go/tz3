<x-app>
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('mortgage-programs.create') }}" class="btn btn-primary mb-3">Добавить</a>
    <table class="table table-hover">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название программы</th>
            <th scope="col">Процентная ставка, %</th>
            <th scope="col">Максимальный срок, лет</th>
            <th scope="col">Минимальный первоначальный взнос, %</th>
            <th scope="col">Управление</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($items as $key => $item)
            <x-mortgage-programs.table-row :key="$key + 1" :item="$item"/>
        @endforeach
        </tbody>
    </table>
</x-app>
