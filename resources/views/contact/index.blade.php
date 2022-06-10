@php
    /**
     * @var \App\Models\Contact[] $contacts
    */
@endphp
@extends('layouts.main')
@section('body')

    <div class="relative flex justify-right bg-gray-100 dark:bg-gray-900 pt-30">
    {!! \App\Components\Buttons::custom('Создать', 'contact.create', null, true, 'btn-success') !!}
    </div>
    @if($contacts->count())
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        <table class="table-scroll">
            <thead>
            <tr>
                <th>ID</th>
                <th>ФИО</th>
                <th>Описание</th>
                <th></th>
            </tr>
            </thead>
            <tbody class="body-screen">
            @foreach($contacts as $obj)
                <tr>
                    <td>{{ $obj->id }}</td>
                    <td>{{ $obj->name }}</td>
                    <td>{{ $obj->description }}</td>
                    <td>
                        <div class=" relative flex justify-right">
                        {!! \App\Components\Buttons::edit('contact.edit', ['contact' => $obj->id], true) !!}
                        {!! \App\Components\Buttons::delete('contact.remove', ['contact' => $obj->id], true) !!}
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="relative flex justify-center py-4 bg-gray-100">
        {{ $contacts->onEachSide(1)->links('parts.pagination') }}
    </div>
    @else
        <div
            class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <h1>Контактов еще нет. Создайте хотя бы один</h1>
        </div>
        <div class="relative flex justify-center py-4 bg-gray-100">
        </div>
    @endif
@endsection
