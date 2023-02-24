<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SearchController extends Controller
{
    public function index()
    {
        return view('search.index');
    }

    public function autoComplete(Request $request)
    {
        $data = User::select('name')
            ->where('name', 'LIKE', '%' . $request->get('query') . '%')
            ->get();

        return response()->json($data);
    }
}
