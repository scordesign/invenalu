<div class="box box-info padding-1">
    <div class="box-body">
        
        

        <div class="form-group">
            {{ Form::label('Producto') }}
            {{ Form::select('name_id', $codigos , $producto->name_id, ['class' => 'form-control' . ($errors->has('name_id') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('name_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('Bodegas') }}
            {{ Form::select('bodega_id', $bodegas , $producto->bodega_id, ['class' => 'form-control' . ($errors->has('bodega_id') ? ' is-invalid' : ''), 'placeholder' => 'Bodega']) }}
            {!! $errors->first('bodega_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Grupos') }}
            {{ Form::select('grupo_id', $grupos , $producto->grupo_id, ['class' => 'form-control' . ($errors->has('grupo_id') ? ' is-invalid' : ''), 'placeholder' => 'Grupo']) }}
            {!! $errors->first('grupo_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Ubicación') }}
            {{ Form::text('ubicacion', $producto->ubicacion, ['class' => 'form-control' . ($errors->has('ubicacion') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
            {!! $errors->first('ubicacion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Registro Conteo 1') }}
            {{ Form::text('conteo1', $producto->conteo1, ['class' => 'form-control' . ($errors->has('conteo1') ? ' is-invalid' : ''), 'placeholder' => 'Conteo 1']) }}
            {!! $errors->first('conteo1', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Registro Conteo 2') }}
            {{ Form::text('conteo2', $producto->conteo2, ['class' => 'form-control' . ($errors->has('conteo2') ? ' is-invalid' : ''), 'placeholder' => 'Conteo 2']) }}
            {!! $errors->first('conteo2', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Diferencias Conteo 1 & 2') }}
            {{ Form::text('deferencia12', $producto->deferencia12, ['class' => 'form-control' . ($errors->has('deferencia12') ? ' is-invalid' : ''), 'placeholder' => 'Diferencia']) }}
            {!! $errors->first('deferencia12', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Conteo 3') }}
            {{ Form::text('conteo3', $producto->conteo3, ['class' => 'form-control' . ($errors->has('conteo3') ? ' is-invalid' : ''), 'placeholder' => 'Conteo 3']) }}
            {!! $errors->first('conteo3', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>