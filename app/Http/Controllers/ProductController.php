<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list(Request $request) :View {
        return view('product.list', [
            'user' => $request->user(),
        ]);
    }

    public function edit(Request $request) :View {
        return view('product.edit', [
            'user' => $request->user(),
        ]);
    }

    public function store(Request $request) :View {
        return view('product.add', [
            'user' => $request->user(),
        ]);
    }

    public function delete(Request $request) {
        // TODO add delete method
    }
}
