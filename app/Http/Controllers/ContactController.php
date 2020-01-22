<?php

namespace App\Http\Controllers;

use App\Actions\Contact\SendContactMailAction;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contacts.index');
    }

    public function store(ContactRequest $request, SendContactMailAction $sendContactMailAction)
    {
        $sendContactMailAction->run($request);
        return back();
    }
}
