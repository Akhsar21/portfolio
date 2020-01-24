<?php

namespace App\Http\Controllers;

use App\Actions\Contact\SendContactMailAction;
use App\Http\Requests\ContactRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index()
    {
        return view('pages.contacts.index');
    }

    /**
     * @param ContactRequest $request
     * @param SendContactMailAction $sendContactMailAction
     * @return RedirectResponse
     */
    public function store(ContactRequest $request, SendContactMailAction $sendContactMailAction)
    {
        $sendContactMailAction->run($request);
        return back();
    }
}
