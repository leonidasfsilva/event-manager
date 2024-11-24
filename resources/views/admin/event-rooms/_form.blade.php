<div class="row">
    <div class="mb-3 col-md-6">
        <label class="form-label">Nome da Sala</label>
        <input type="text" class="form-control" name="name" placeholder="Nome" value="{{ isset($eventRoom->name) ? $eventRoom->name : '' }}" {{ !isset($formReadOnly) ?: 'disabled'}}>
    </div>
    <div class="mb-3 col-md-6">
        <label class="form-label">Lotação da Sala</label>
        <input type="text" class="form-control" name="capacity" placeholder="Lotação" value="{{ isset($eventRoom->capacity) ? $eventRoom->capacity : '' }}" {{ !isset($formReadOnly) ?: 'disabled'}}>
    </div>
</div>
