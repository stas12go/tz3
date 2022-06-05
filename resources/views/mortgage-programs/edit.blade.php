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
    <x-mortgage-programs.form :action="route('mortgage-programs.update', $item->id)" :item="$item">
        @method('PUT')
    </x-mortgage-programs.form>
</x-app>
