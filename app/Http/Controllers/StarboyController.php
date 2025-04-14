<?php

namespace App\Http\Controllers;

use App\Models\Starboy;
use Illuminate\Http\Request;
use Illuminate\View\View;

class StarboyController extends Controller
{
    // Read (Index) - Menampilkan semua data
    public function index(): View
    {
        $starboys = Starboy::all();
        return view("starboys.index", ["starboys" => $starboys]);
    }

    // Create (Form) - Menampilkan form create
    public function create(): View
    {
        return view("starboys.create");
    }

    // Create (Store) - Menyimpan data baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'old' => 'required|integer',
            'tier' => 'required|string',
            'role' => 'required|string',
            'level' => 'required|integer'
        ]);

        Starboy::create($validated);

        return redirect()->route('starboys.index')->with('success', "Starboy {$starboy->name} created successfully.");
    }

    // Read (Show) - Menampilkan detail
    public function show(Starboy $starboy): View
    {
        return view("starboys.show", compact('starboy'));
    }

    // Update (Form) - Menampilkan form edit
    public function edit(Starboy $starboy): View
    {
        return view("starboys.edit", compact('starboy'));
    }

    // Update (Action) - Menyimpan perubahan
    public function update(Request $request, Starboy $starboy)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'old' => 'required|integer',
            'tier' => 'required|string',
            'role' => 'required|string',
            'level' => 'required|integer'
        ]);

        $starboy->update($validated);

        return redirect()->route('starboys.index')->with('success', "Starboy {$starboy->name} updated successfully.");
    }

    // Delete - Menghapus data
    public function destroy(Starboy $starboy)
    { 
        try {
            $starboy->delete();
            return redirect()->route('starboys.index')
                        ->with('success', "Starboy {$starboy->name} berhasil dihapus!");
        } catch (\Exception $e) {
            return redirect()->route('starboys.index')
                        ->with('error', "Gagal {$starboy->name} menghapus Starboy!");
        }
    }
}