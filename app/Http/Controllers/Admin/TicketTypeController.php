<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Ticket;

class TicketTypeController extends Controller
{
    public function index(){
        $tickets = DB::table('tickets')->get();
        return view('admin.tickets.index', compact('tickets'));
        // return 'Сторінка квитків';
    }

    public function create(){
        return view('admin.tickets.create');        
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);
        
        $lastTicketId = Ticket::max('ticket_id');

        $tickets = new Ticket;
        $tickets->ticket_id = $lastTicketId + 1;
        $tickets->ticket_type = $request->input('name');
        $tickets->save();

        return redirect()->route('tickets.index')->with('success', 'Квиток успішно створений!');
        
    }

    public function show($id){
        $tickets = Ticket::find($id);

        if ($tickets) {
            return view('admin.tickets.show', compact('tickets'));
        } else {
            return redirect()->route('admin.tickets.index')->with('error', ' Тип квитка не знайдено або його не існує');
        }
        
    }

    public function edit($id){
        $oldTicket = Ticket::find($id);
        $newTicketName = '';
        
        return view('admin.tickets.edit', compact('oldTicket', 'newTicketName'));
    }

    public function update(Request $request, $id){
        $newTicketName = $request->input('new_ticket_name');
        $oldTicket = Ticket::find($id);

        if ($oldTicket) {
            $oldTicket->ticket_type = $newTicketName;
            $oldTicket->save();
        }

        return redirect()->route('tickets.index')->with('success', 'Квиток успішно змінений!'); 
    }

    public function delete($id){
        $tickets = Ticket::find($id);

        if($tickets) {
            $tickets->delete();
            return redirect()->route('tickets.index')->with('success', 'Квиток успішно видалений!');
        } else {
            return redirect()->route('tickets.index')->with('error', 'Помилка видалення квитка!');
        }
    }
}
