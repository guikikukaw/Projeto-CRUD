<?php

  namespace App\Http\Controllers;

  use App\Models\User;
  use Illuminate\Http\Request;

  class UserController extends Controller
  {

      public function index()
      {
          $users = User::all();
          return view('users.index', compact('users'));
      }

      public function create()
      {
          return view('users.create');
      }

      public function store(Request $request)
      {
          $validated = $request->validate([
              'nome' => 'required|string|max:255',
              'email' => 'required|email|max:255',
              'senha' => 'required|string|min:8|confirmado',
          ]);

          $user = User::create([
              'nome' => $validated['nome'],
              'email' => $validated['email'],
              'senha' => bcrypt($validated['senha']),
          ]);

          return redirect()->route('users.index')->with('sucesso', 'O usuário foi criado com sucesso!');
      }

      public function show($id)
      {
          $user = User::findOrFail($id);
          return view('users.show', compact('user'));
      }

      public function edit($id)
      {
          $user = User::findOrFail($id);
          return view('users.edit', compact('user'));
      }

      public function update(Request $request, $id)
      {
          $user = User::findOrFail($id);

          $validated = $request->validate([
              'nome' => 'required|string|max:255',
              'email' => 'required|email|max:255',
              'senha' => 'nullable|string|min:8|confirmed',
          ]);

          $user->update([
              'nome' => $validated['nome'],
              'email' => $validated['email'],
              'senha' => $validated['senha'] ? bcrypt($validated['senha']) : $user->password,
          ]);

          return redirect()->route('users.index')->with('success', 'O usuário foi atualizado com sucesso!');
      }

      public function destroy($id)
      {
          $user = User::findOrFail($id);
          $user->delete();

          return redirect()->route('users.index')->with('success', 'O Usuário foi removido com sucesso!');
      }
  }