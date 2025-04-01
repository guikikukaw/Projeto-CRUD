<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
    public function index()
    {
        $games = Game::all();
        return response()->json($games);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'plataforma' => 'required|string|max:255',
        ]);

        $games = Game::create([
            'nome' => $validated['nome'],
            'genero' => $validated['genero'],
            'plataforma' => $validated['plataforma'],
        ]);

        return response()->json(['message' => 'O jogo foi criado com sucesso!', 'game' => $games], 201);
    }

    public function show($id)
    {
        $games = Game::find($id);

        if ($games) {
            return response()->json($games);
        } else {
            return response()->json(['error' => 'O jogo não foi encontrado.'], 404);
        }
    }

    public function update(Request $request, $id)
    {
        $games = Game::find($id);

        if (!$games) {
            return response()->json(['error' => 'O jogo não foi encontrado.'], 404);
        }

        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'genero' => 'required|string|max:255',
            'plataforma' => 'required|string|max:255',
        ]);

        $games->update
        ([
            'nome' => $validated['nome'],
            'genero' => $validated['genero'],
            'plataforma' => $validated['plataforma'],
        ]);
        return response()->json(['message' => 'O jogo foi atualizado com sucesso!', 'game' => $games]);
    }

    public function destroy($id)
    {
        $games = Game::find($id);

        if (!$games) {
            return response()->json(['error' => 'O jogo não foi encontrado.'], 404);
        }

        $games->delete();

        return response()->json(['message' => 'O jogo foi removido com sucesso.']);
    }
}