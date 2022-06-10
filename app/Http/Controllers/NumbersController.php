<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Number;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class NumbersController extends Controller
{
    /**
     * @param Contact $contact
     * @param Request $request
     * @return Response
     */
    public function create(Contact $contact, Request $request): Response
    {
        $types = [
            Number::TYPE_MOBILE => 'Мобильный',
            Number::TYPE_WORK => 'Рабочий',
            Number::TYPE_HOME => 'Домашний',
            Number::TYPE_BASIC => 'Основной',
            Number::TYPE_BUSINESS_FAX => 'Рабочий факс',
            Number::TYPE_HOME_FAX => 'Домашний факс',
            Number::TYPE_PAGER => 'Пейджер',
            Number::TYPE_ANOTHER => 'Другой',
        ];
        return response()->view(
            'number.create',
            [
                'contact' => $contact,
                'types' => $types
            ]
        );
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $number = new Number();
        $number->fill($request->all());
        $number->save();

        $html = view('number.index', ['numbers' => $number->contact->numbers])->render();
        return response()->json([
            'success' => true,
            'html' => $html
        ]);
    }

    /**
     * @param Number $number
     * @return Response
     */
    public function edit(Number $number): Response
    {
        $types = [
            Number::TYPE_MOBILE => 'Мобильный',
            Number::TYPE_WORK => 'Рабочий',
            Number::TYPE_HOME => 'Домашний',
            Number::TYPE_BASIC => 'Основной',
            Number::TYPE_BUSINESS_FAX => 'Рабочий факс',
            Number::TYPE_HOME_FAX => 'Домашний факс',
            Number::TYPE_PAGER => 'Пейджер',
            Number::TYPE_ANOTHER => 'Другой',
        ];
        return response()->view(
            'number.edit',
            [
                'number' => $number,
                'types' => $types
            ]
        );
    }

    /**
     * @param Number $number
     * @param Request $request
     * @return JsonResponse
     */
    public function update(Number $number, Request $request): JsonResponse
    {
        $number->fill($request->all());
        $number->save();

        $html = view('number.index', ['numbers' => $number->contact->numbers])->render();
        return response()->json([
            'success' => true,
            'html' => $html
        ]);
    }

    /**
     * @param Number $number
     * @return JsonResponse
     */
    public function remove(Number $number): JsonResponse
    {
        $contact = $number->contact;
        $number->delete();

        $html = view('number.index', ['numbers' => $number->contact->numbers])->render();
        return response()->json([
            'success' => true,
            'html' => $html
        ]);
    }
}
