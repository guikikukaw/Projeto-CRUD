<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return view('games.index', compact('games'));
    }

    public function create()
    {
        return view('games.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'plataforma' => 'required|string|max:255',
        ]);

        $game = Game::create($validated);

        return redirect()->route('games.index')->with('success', 'Jogo criado com sucesso!');
    }

    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('games.show', compact('game'));
    }

    public function edit($id)
    {
        $game = Game::findOrFail($id);
        return view('games.edit', compact('game'));
    }

    public function update(Request $request, $id)
    {
        $game = Game::findOrFail($id);

        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'plataforma' => 'required|string|max:255',
        ]);

        $game->update($validated);

        return redirect()->route('games.index')->with('success', 'O jogo foi atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $game = Game::findOrFail($id);
        $game->delete();

        return redirect()->route('games.index')->with('success', 'O jogo foi excluído com sucesso!');
    }
}