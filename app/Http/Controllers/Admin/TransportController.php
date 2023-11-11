<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transport;

class TransportController extends Controller
{
    public function index(){
        $transport = DB::table('transport')->get();
        return view('admin.transport.index', compact('transport'));
        // return 'Сторінка транспорту';
    }
    public function create(){
        return view('admin.transport.create');
        
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $lastTransportId = Transport::max('transport_id');

        $transport = new Transport;
        $transport->transport_id = $lastTransportId + 1;
        $transport->transport_name = $request->input('name');
        $transport->save();

        return redirect()->route('transports.index')->with('success', 'Транспорт успішно створений!');        
    }
    public function show($id){
        $transport = Transport::find($id);
        if ($transport) {
            return view('admin.transport.show', compact('transport'));
        } else {
            return redirect()->route('transport.index')->with('error', 'Транспорт не знайдено або його не існує');
        }
    }
    public function edit($id){
        $oldTransport = Transport::find($id);
        $newTransportName = '';
        return view('admin.transport.edit', compact('oldTransport', 'newTransportName'));
        
        
    }
    public function update(Request $request, $id){
        $newTransportName = $request->input('new_transport_name');
        $oldTransport = Transport::find($id);

        if ($oldTransport) {
            $oldTransport->transport_name = $newTransportName;
            $oldTransport->save();
        }

        return redirect()->route('transports.index')->with('success', 'Транспорт успішно змінений!');
        
    }
    public function delete($id){
        $transport = Transport::find($id);
        if($transport){
            $transport->delete();
            return redirect()->route('transports.index')->with('success', 'Транспорт успішно видалений!');
        } else {
            return redirect()->route('transports.index')->with('error', 'Помилка видалення транспорту!');
        }
        
    }
}
