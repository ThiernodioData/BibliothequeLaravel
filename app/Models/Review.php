<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Review extends Model
{
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = ['book_id', 'user_id', 'rating', 'comment'];

    public function show($id)
    {
        $book = Book::with('reviews.user')->findOrFail($id);
        return view('books.show', compact('book'));
    }

    public function store(Request $request, $bookId)
    {
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|max:1000',
        ]);

        $validated['book_id'] = $bookId; // injecter l’ID du livre depuis l’URL

        Review::create($validated);

        return redirect()->back()->with('success', 'Avis ajouté avec succès !');
    }


}
