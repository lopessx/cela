<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function list(Request $request) :View {
        return view('category.list', [
            'user' => $request->user(),
        ]);
    }

    public function edit(Request $request) :View {
        return view('category.edit', [
            'user' => $request->user(),
        ]);
    }

    public function store(Request $request) :View {
        return view('category.add', [
            'user' => $request->user(),
        ]);
    }

    public function delete(Request $request) {
        // TODO add delete method
    }
}
