<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Review;
use App\Models\User;

class BookController extends Controller
{
    public function index()
    {
        // $this->insertUser('Diallo', 'diallo@gmail.com', 'password123');
        // $this->insertUser('Sow',  'sow@gmail.com', 'password123');
        // $this->insertUser('tall',  'tall@gmail.com', 'password123');
        // $this->insertUser('diop',  'dip@gmail.com', 'password123');
        $books = Book::paginate(6);
        return view('books.index', compact('books'));
    }

    public function home()
    {
        $books = Book::all();
        return view('welcome', compact('books'));
    }
    
    public function show($id)
    {
        $book = Book::with('reviews.user')->findOrFail($id);
        $users = User::all(); // pour sélection dans le formulaire
        // recuperer le riview / commentaire
        // $review = Review::where('book_id', $id)->get();
        return view('books.show', compact('book', 'users'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'book_id' => 'required|exists:books,id',
            'user_id' => 'required|exists:users,id',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'required|string|max:1000',
        ]);

        Review::create($validated);

        return redirect()->back()->with('success', 'Avis ajouté avec succès !');
    }
    
    public function insertUser($name, $email, $password)
    {
        try {
            // Connexion à SQLite (adapter le chemin vers ta base)
            $pdo = new \PDO('sqlite:' . base_path('database/database.sqlite'));

            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

            // Hachage du mot de passe (comme Laravel)
            $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

            // Requête SQL d'insertion
            $sql = "INSERT INTO users (name, email, password, created_at, updated_at) 
                    VALUES (:name, :email, :password, datetime('now'), datetime('now'))";

            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':password' => $hashedPassword,
            ]);

            echo "✅ Utilisateur inséré avec succès !\n";
        } catch (\PDOException $e) {
            echo "❌ Erreur : " . $e->getMessage();
        }
    }

}
