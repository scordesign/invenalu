<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name_id') }}
            {{ Form::text('name_id', $producto->name_id, ['class' => 'form-control' . ($errors->has('name_id') ? ' is-invalid' : ''), 'placeholder' => 'Name Id']) }}
            {!! $errors->first('name_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bodega_id') }}
            {{ Form::text('bodega_id', $producto->bodega_id, ['class' => 'form-control' . ($errors->has('bodega_id') ? ' is-invalid' : ''), 'placeholder' => 'Bodega Id']) }}
            {!! $errors->first('bodega_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('grupo_id') }}
            {{ Form::text('grupo_id', $producto->grupo_id, ['class' => 'form-control' . ($errors->has('grupo_id') ? ' is-invalid' : ''), 'placeholder' => 'Grupo Id']) }}
            {!! $errors->first('grupo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('unidad_id') }}
            {{ Form::text('unidad_id', $producto->unidad_id, ['class' => 'form-control' . ($errors->has('unidad_id') ? ' is-invalid' : ''), 'placeholder' => 'Unidad Id']) }}
            {!! $errors->first('unidad_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ubicacion_id') }}
            {{ Form::text('ubicacion_id', $producto->ubicacion_id, ['class' => 'form-control' . ($errors->has('ubicacion_id') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion Id']) }}
            {!! $errors->first('ubicacion_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('conteo1') }}
            {{ Form::text('conteo1', $producto->conteo1, ['class' => 'form-control' . ($errors->has('conteo1') ? ' is-invalid' : ''), 'placeholder' => 'Conteo1']) }}
            {!! $errors->first('conteo1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('conteo2') }}
            {{ Form::text('conteo2', $producto->conteo2, ['class' => 'form-control' . ($errors->has('conteo2') ? ' is-invalid' : ''), 'placeholder' => 'Conteo2']) }}
            {!! $errors->first('conteo2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('deferencia12') }}
            {{ Form::text('deferencia12', $producto->deferencia12, ['class' => 'form-control' . ($errors->has('deferencia12') ? ' is-invalid' : ''), 'placeholder' => 'Deferencia12']) }}
            {!! $errors->first('deferencia12', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('conteo3') }}
            {{ Form::text('conteo3', $producto->conteo3, ['class' => 'form-control' . ($errors->has('conteo3') ? ' is-invalid' : ''), 'placeholder' => 'Conteo3']) }}
            {!! $errors->first('conteo3', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>