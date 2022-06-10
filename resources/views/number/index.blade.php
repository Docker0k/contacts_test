@php
/** @var \App\Models\Number[] $numbers */
@endphp
@foreach($numbers as $obj)
    <tr>
        <td>{{ $obj->id }}</td>
        <td>{{ $obj->number }}</td>
        <td>{{ $obj->type_text }}</td>
        <td>
            <div class=" relative flex justify-right">
                {!! \App\Components\Buttons::edit('number.edit', ['number' => $obj->id], true, 'btn-primary number-edit ajax-request') !!}
                {!! \App\Components\Buttons::delete('number.remove', ['number' => $obj->id], true, 'btn-danger number-remove ajax-action') !!}
            </div>
        </td>
    </tr>
@endforeach
