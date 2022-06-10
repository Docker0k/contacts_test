@php
    /**
     * @var \App\Models\Contact $contact
     * @var \App\Models\Number[]|\Illuminate\Database\Eloquent\Collection $numbers
    */
@endphp
@extends('layouts.main')
@section('body')
    <form action="{{ route('contact.store') }}" method="post"
          class=" bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        {!! csrf_field() !!}
        <section class="buttons-block buttons-block--sticky col-md-12">
            <button type="submit" class="btn btn-flat btn-m btn-success" name="submit_only">
                Сохранить
            </button>
            <a href="{{ route('contact.index') }}" class="btn btn-flat btn-m btn-danger">
                <i class="fa fa-close"></i> Закрыть
            </a>
        </section>

        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">Данные контакта</h3>
            </div>
            <div class="box-body">
                <div class="form-group">
                    <label for="name" class="control-label">Имя</label>
                    <input class="form-control" id="name" name="name" required type="text" value="">
                </div>

                <div class="form-group">
                    <label for="description" class="control-label">Описание</label>
                    <input class="form-control" id="description" name="description" type="text" value="">
                </div>
            </div>
        </div>
    </form>
@endsection
