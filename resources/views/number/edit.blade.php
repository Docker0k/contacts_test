@php
    /** @var \App\Models\Number $number */
@endphp
@extends('layouts.popup')

@section('content')
    {!! Form::open([
        'url' => route('number.update', $number->id),
        'class' => 'ajax-form number-form',
        'method' => 'POST'
    ]) !!}
    <h3 class="box-title">Данные контакта</h3>
    <div class="form-group">
        <label for="number" class="control-label">Номер</label>
        <input class="form-control" id="number" name="number" type="text" required value="{{ $number->number }}">
    </div>

    <div class="form-group">
        <label for="type" class="control-label">Тип</label>
        <select id="type" name="type" class="form-control">
            @foreach($types as $key => $value)
                <option value="{{ $key }}" {{ $key == $number->type ? 'selected' : null }}>{{ $value }}</option>
            @endforeach
        </select>
    </div>

    <section class="buttons-block buttons-block--sticky col-md-12">
        <button type="submit" class="btn btn-flat btn-m btn-success" name="submit_only">
            Сохранить
        </button>
    </section>
    {!! Form::close() !!}
@stop
