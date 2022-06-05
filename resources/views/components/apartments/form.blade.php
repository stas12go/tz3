<form {{ $attributes }} method="POST">
    {{ $slot }}
    @csrf
    <div class="form-group row mb-3">
        <label for="name" class="col-4 col-form-label">Название</label>
        <div class="col-8">
            <input type="text" class="form-control" id="name" name="name" placeholder="Название" value="{{ old('name', $item->name ?? '') }}" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label for="type" class="col-4 col-form-label">Тип</label>
        <div class="col-8">
            <input type="text" class="form-control" id="type" name="type" placeholder="Тип" value="{{ old('type', $item->type ?? '') }}" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label for="price" class="col-4 col-form-label">Цена, руб</label>
        <div class="col-8">
            <input type="text" class="form-control" id="price" name="price" placeholder="Цена, руб" value="{{ old('price', $item->price ?? '') }}" required>
        </div>
    </div>
    <button class="btn btn-primary my-3" type="submit">Сохранить</button>
    <a href="{{ route('apartments.index') }}" class="btn btn-secondary my-3 ms-3">Назад</a>
</form>
