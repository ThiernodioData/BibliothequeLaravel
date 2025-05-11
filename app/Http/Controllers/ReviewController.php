<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
class ReviewController extends Controller
{
    
public function store(Request $request, $bookId)
{
    $validated = $request->validate([
        'user_id' => 'required|exists:users,id',
        'rating' => 'required|integer|between:1,5',
        'comment' => 'required|string|max:1000',
    ]);

    $validated['book_id'] = $bookId;

    \App\Models\Review::create($validated);

    return redirect()->back()->with('success', 'Avis ajouté avec succès !');
}

}
