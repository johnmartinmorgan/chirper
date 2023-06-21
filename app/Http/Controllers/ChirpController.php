<?php

namespace App\Http\Controllers;

use App\Models\Chirp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ChirpController extends Controller
{
    public function index(): View
    {
        return view('chirps.index');
    }

    public function create()
    {
        //
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request -> validate([
            'message' => 'required|string|max:255',
        ]);
        $request->user()->chirps()->create($validated);
        return redirect(route('chirps.index'));
    }

    public function show(Chirp $chirp)
    {
        //
    }

    public function edit(Chirp $chirp)
    {
        //
    }

    public function update(Request $request, Chirp $chirp)
    {
        //
    }

    public function destroy(Chirp $chirp)
    {
        //
    }
}
