<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;

class ContactsController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request): Response
    {
        $contacts = Contact::paginate(10);
        return response()->view(
            'contact.index',
            [
                'contacts' => $contacts
            ]
        );
    }

    /**
     * @return Response
     */
    public function create(): Response
    {
        return response()->view(
            'contact.create'
        );
    }

    /**
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function store(Request $request)
    {

        $contact = new Contact();
        $contact->fill($request->all());
        $contact->save();
        return redirect(route('contact.edit', $contact->id));
    }

    /**
     * @param Contact $contact
     * @return Response
     */
    public function edit(Contact $contact): Response
    {
        return response()->view(
            'contact.edit',
            [
                'contact' => $contact,
                'numbers' => $contact->numbers
            ]
        );
    }

    /**
     * @param Contact $contact
     * @param Request $request
     * @return Application|RedirectResponse|Redirector
     */
    public function update(Contact $contact, Request $request)
    {
        $contact->fill($request->all());
        $contact->save();
        return redirect(route('contact.edit', $contact->id));
    }

    /**
     * @param Contact $contact
     * @return Application|RedirectResponse|Redirector
     */
    public function remove(Contact $contact)
    {
        $contact->delete();
        return redirect(route('contact.index'));
    }
}
