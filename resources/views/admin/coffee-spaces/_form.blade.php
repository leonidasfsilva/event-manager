<div class="row">
    <div class="mb-3 col-md-6">
        <label class="form-label">Nome do Espaço</label>
        <input type="text" class="form-control" name="name" placeholder="Nome" value="{{ isset($coffeeSpace->name) ? $coffeeSpace->name : '' }}" {{ !isset($formReadOnly) ?: 'disabled'}}>
    </div>
    <div class="mb-3 col-md-6">
        <label class="form-label">Lotação do Espaço</label>
        <input type="text" class="form-control" name="capacity" placeholder="Lotação" value="{{ isset($coffeeSpace->capacity) ? $coffeeSpace->capacity : '' }}" {{ !isset($formReadOnly) ?: 'disabled'}}>
    </div>
</div>
