<?php

namespace App\Http\Controllers;

use App\services\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    //Newsletter $newsletter is a dependency injection == new Newsletter()
    public function subscribe(Newsletter $newsletter)
    {
        request()->validate([
            'email' => ['email', 'required'],
        ]);
        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            throw \Illuminate\Validation\ValidationException::withMessages([
                'email' => 'This email could not be added to our newsletter list.',
            ])->redirectTo('/#newsletter');
        }

        return redirect('/')->with('success', 'You have been subscribed to our newsletter');
    }
}
