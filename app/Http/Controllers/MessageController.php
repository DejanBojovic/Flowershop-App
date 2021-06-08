<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    public function addMessage(Request $request) {
        $this->validate($request, [
            'ime' => 'required',
            'email' => 'required|email',
            'naslov' => 'required',
            'tekst' => 'required'
        ]);

        Message::create([
            'ime' => $request->ime,
            'email' => $request->email,
            'naslov' => $request->naslov,
            'tekst' => $request->tekst
        ]);

        return redirect()->route('contact');
    }

    public function updateMessage($id) {
        $message = Message::where('messageID', $id)->get();

        if(!Gate::allows('update', $message[0])) {
            abort(403);
        }

        Message::where('messageID', $id)->update([
            'status' => 'Procitano'
        ]);

        return redirect()->route('dashboard');
    }

    public function updateMessages() {
        if(!Gate::allows('update')) {
            abort(403);
        }

        Message::query()->update([
            'status' => 'Procitano'
        ]);

        return redirect()->route('dashboard');
    }

    public function deleteMessage($id) {
        $message = Message::where('messageID', $id)->get();

        if(!Gate::allows('delete', $message[0])) {
            abort(403);
        }

        Message::where('messageID', $id)->delete();

        return redirect()->route('dashboard');
    }
}
