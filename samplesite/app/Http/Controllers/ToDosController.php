<?php

namespace App\Http\Controllers;

use Google\Client;
use Google\Service\Tasks;
use Illuminate\Support\Facades\Auth;

class ToDosController extends Controller
{
    public function index()
    {
        $client = new Client();
        $client->setClientId(env('GOOGLE_CLIENT_ID'));
        $client->setClientSecret(env('GOOGLE_CLIENT_SECRET'));
        $client->setRedirectUri(env('GOOGLE_REDIRECT_URI'));
        $client->setAccessToken(Auth::user()->google_token);
        $service = new Tasks($client);
        $taskLists = $service->tasklists->listTasklists();
        $tasks = $service->tasks->listTasks($taskLists->getItems()[0]->getId(), ['maxResults' => 10]);
        return view('todos', ['tasks' => $tasks->getItems()]);
    }
}
