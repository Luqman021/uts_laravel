<?php

namespace App\Http\Controllers;

use App\Models\Inbox;

use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function index()
    {
        $inboxes = Inbox::paginate(10);
        return view('index', compact('inboxes'));
    }
}
