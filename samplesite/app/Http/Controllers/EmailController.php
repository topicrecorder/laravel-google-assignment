<?php

namespace App\Http\Controllers;

use Google\Client;
use Google\Service\Gmail;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    public function index()
    {
        $client = new Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
        $client->setAccessToken(Auth::user()->google_token);
        $service = new Gmail($client);
        $messages = $service->users_messages->listUsersMessages('me', ['maxResults' => 10]);
        $emails = [];
        foreach ($messages->getMessages() as $message) {
            $msg = $service->users_messages->get('me', $message->id);
            $headers = $msg->getPayload()->getHeaders();
            $subject = collect($headers)->where('name', 'Subject')->first()->value;
            $emails[] = ['subject' => $subject];
        }
        return view('email', ['emails' => $emails]);
    }
}
