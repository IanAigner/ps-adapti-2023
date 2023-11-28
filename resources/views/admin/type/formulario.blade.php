{{-- Type --}}

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('type do type') }}</label>
    <div>
        <input type="text" id="type" name="type" value="{{ isset($type) ? $type->type : old('type') }}"
               class="form-control @error('type') is-invalid @enderror" placeholder="type do type" required>
        @error('type')
        <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

{{-- Descricao

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Descricao do ') }}</label>
    <div>
        <textarea id="descricao" name="descricao" class="form-control @error('descricao') is-invalid @enderror"
            placeholder="Escreva uma descrição curta sobre o "
            required>{{ isset($s) ? $s->descricao : old('descricao') }}</textarea>
        @error('descricao')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
--}}

{{-- Está contratado?

<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('Está contratado?') }}</label>
    <div>
        <input ="checkbox" id="estáFormado" name="contratado" value="1" data-expected-info="contratado"
            class="form-control @error('contratado') is-invalid @enderror" required>
        @error('contratado')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
--}}

{{-- type
<div class="row">
    <label class="col-sm-2 col-form-label">{{ __('type') }}</label>
    <div>
        <select id="type_id" name="type_id" class="form-control @error('type_id') is-invalid @enderror"
            required>
            <option value="">--- Selecione um type ---</option>
            @isset($types)
                @foreach ($types as $type)
                    <option @if (isset($) && $->type_id == $type->id) selected @endif value="{{ $type->id }}">
                        {{ $type->type }}
                    </option>
                @endforeach
            @endisset
        </select>
        @error('type_id')
            <span class="invalid-feedback" role="alert">
                <i class="fi-circle-cross"></i><strong> {{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>
--}}

{{-- Imagem
<div class="row">
    <div class="col-sm-2 col-form-label">
        <label class="@if (!isset($)) required @endif" for="image">Imagens</label>
        <input ="file" name="imagem" class="form-control" accept="image/*"
            @if (!isset($)) required @endif>
    </div>
</div>
--}}
