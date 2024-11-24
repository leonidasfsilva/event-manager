<div class="row mb-5">
    <div class="mb-3 col-md-6">
        <label class="form-label" for="inputEmail4">Nome</label>
        <input type="text" class="form-control" name="name" placeholder="Nome" value="{{ isset($participant->name) ? $participant->name : '' }}" {{ !isset($formReadOnly) ?: 'disabled'}}>
    </div>
    <div class="mb-3 col-md-6">
        <label class="form-label" for="inputPassword4">Sobrenome</label>
        <input type="text" class="form-control" name="lastname" placeholder="Sobrenome" value="{{ isset($participant->lastname) ? $participant->lastname : '' }}" {{ !isset($formReadOnly) ?: 'disabled' }}>
    </div>
</div>
