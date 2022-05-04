<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\history;

class ClientController extends Controller
{
    public function home()
    {
        $clients = Client::latest()->paginate(5);
        return view('home', compact('clients'));
    }
    public function clients()
    {
        $clients = Client::latest()->get();

        return view('clients', compact('clients'));
    }
    public function transfer($id)
    {

        $client = Client::where('id', $id)->first();
        $all_clients = Client::latest()->get();
        return view('transfer', compact('client', 'all_clients'));
    }
    public function final_process(Request $request, $id)
    {
        $sender = Client::where('id', $id)->first();

        $invoice = $request->receiver_invoice;
        $info = Client::where('id', $invoice)->first();

        $transfer_amount = $request->transfer_amount;


        $sender_previous = $sender->amount;
        $sender_remaining = $sender_previous - $transfer_amount;

        if ($transfer_amount > $sender_previous || $transfer_amount <= 0) {
            return redirect()->back()->with('failed', 'Check Transfer Amount!!!');
        }


        return view('final_transfer', compact('info', 'transfer_amount', 'sender', 'sender_remaining'));
    }
    public function submitted(Request $request, $sender, $receiver, $remaining, $transfer)

    {
        $sender_info = Client::where('id', $sender)->first();
        $receiver_info = Client::where('id', $receiver)->first();

        $receiver_previous_amount = $receiver_info->amount;
        $receiver_new_amount = $receiver_previous_amount + $transfer;

        $receiver_update_amount = Client::find($receiver);
        $receiver_update_amount->amount = $receiver_new_amount;
        $receiver_update_amount->save();

        $sender_update_amount = Client::find($sender);
        $sender_update_amount->amount = $remaining;
        $sender_update_amount->save();


        // dd($transfer);
        $add = new history();

        $add->sender_invoice = $sender_info->invoice;
        $add->sender_fullname = $sender_info->fullname;
        $add->sender_email = $sender_info->email;
        $add->transfer = $transfer;
        $add->receiver_invoice = $receiver_info->invoice;
        $add->receiver_fullname = $receiver_info->fullname;
        $add->receiver_email = $receiver_info->email;
        $add->status = 1;

        $add->save();
        return redirect()->route('history');
    }
    public function history()
    {
        $history = History::latest()->get();

        return view('history', compact('history'));
    }
}
