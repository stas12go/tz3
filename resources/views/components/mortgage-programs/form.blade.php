<form {{ $attributes }} method="POST">
    {{ $slot }}
    @csrf
    <div class="form-group row mb-3">
        <label for="mortgageProgramName" class="col-4 col-form-label">Название программы</label>
        <div class="col-8">
            <input type="text" class="form-control" id="mortgageProgramName" name="mortgageProgramName" placeholder="Название программы" value="{{ old('mortgageProgramName', $item->name ?? '') }}" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label for="interestRate" class="col-4 col-form-label">Процентная ставка, %</label>
        <div class="col-8">
            <input type="text" class="form-control" id="interestRate" name="interestRate" placeholder="Процентная ставка, %" value="{{ old('interestRate', $item->interest_rate ?? '') }}" required>
        </div>
    </div>
    <div class="form-group row mb-3">
        <label for="maxTerm" class="col-4 col-form-label">Максимальный срок, лет</label>
        <div class="col-8">
            <input type="text" class="form-control" id="maxTerm" name="maxTerm" placeholder="Максимальный срок, лет" value="{{ old('maxTerm', $item->max_term ?? '') }}" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="minInitialFee" class="col-4 col-form-label">Минимальный первоначальный взнос, %</label>
        <div class="col-8">
            <input type="text" class="form-control" id="minInitialFee" name="minInitialFee" placeholder="Минимальный первоначальный взнос, %" value="{{ old('minInitialFee', $item->min_initial_fee ?? '') }}" required>
        </div>
    </div>
    <button class="btn btn-primary mt-3" type="submit">Сохранить</button>
    <a href="{{ route('mortgage-programs.index') }}" class="btn btn-secondary mt-3 ms-3">Назад</a>
</form>
