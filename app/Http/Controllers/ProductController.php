<?php

  namespace App\Http\Controllers;

  use App\Models\Product;
  use Illuminate\Http\Request;

  class ProductController extends Controller
  {
      public function index()
      {
          $products = Product::all();
          return view('products.index', compact('products'));
      }

      public function create()
      {
          return view('products.create');
      }

      public function store(Request $request)
      {
          $validated = $request->validate([
              'nome' => 'required|string|max:255',
              'categoria' => 'required|string|max:255',
              'marca' => 'required|string|max:255',
          ]);

          $product = Product::create([
              'nome' => $validated['nome'],
              'categoria' => $validated['categoria'],
              'marca' => $validated['marca'],
          ]);

          return redirect()->route('products.index')->with('success', 'O produto foi criado com sucesso!');
      }

      public function show($id)
      {
          $product = Product::findOrFail($id);
          return view('products.show', compact('product'));
      }

      public function edit($id)
      {
          $product = Product::findOrFail($id);
          return view('products.edit', compact('product'));
      }

      public function update(Request $request, $id)
      {
          $product = Product::findOrFail($id);

          $validated = $request->validate([
              'nome' => 'required|string|max:255',
              'categoria' => 'required|string|max:255',
              'marca' => 'required|string|max:255',
          ]);

          $product->update([
              'nome' => $validated['nome'],
              'categoria' => $validated['categoria'],
              'marca' => $validated['marca'],
          ]);

          return redirect()->route('products.index')->with('success', 'O produto foi atualizado com sucesso!');
      }

      public function destroy($id)
      {
          $product = Product::findOrFail($id);
          $product->delete();

          return redirect()->route('products.index')->with('success', 'O produto foi removido com sucesso!');
      }
  }