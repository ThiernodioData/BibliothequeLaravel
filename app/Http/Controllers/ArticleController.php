<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function articles(){
        $articles = [
            [
                'title' => 'Dolorum optio tempore voluptas dignissimos',
                'slug' => 'dolorum-optio',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'image' => 'assets/img/blog/blog-post-1.webp',
                'category' => 'Politics',
                'author' => 'Maria Doe',
                'author_image' => 'assets/img/person/person-f-12.webp',
                'date' => '2022-01-01'
            ],
            [
                'title' => 'Nisi magni odit consequatur autem nulla dolorem',
                'slug' => 'nisi-magni',
                'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
                'image' => 'assets/img/blog/blog-post-2.webp',
                'category' => 'Sports',
                'author' => 'Allisa Mayer',
                'author_image' => 'assets/img/person/person-f-13.webp',
                'date' => '2022-06-05'
            ],
            [
                'title' => 'Possimus soluta ut id suscipit ea ut in quo quia et soluta',
                'slug' => 'possimus-soluta',
                'content' => 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit...',
                'image' => 'assets/img/blog/blog-post-3.webp',
                'category' => 'Entertainment',
                'author' => 'Mark Dower',
                'author_image' => 'assets/img/person/person-m-10.webp',
                'date' => '2022-06-22'
            ],
            [
                'title' => 'Non rem rerum nam cum quo minus olor distincti',
                'slug' => 'non-rem-rerum',
                'content' => 'Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse...',
                'image' => 'assets/img/blog/blog-post-4.webp',
                'category' => 'Sports',
                'author' => 'Lisa Neymar',
                'author_image' => 'assets/img/person/person-f-14.webp',
                'date' => '2022-06-30'
            ],
            [
                'title' => 'Accusamus quaerat aliquam qui debitis facilis consequatur',
                'slug' => 'accusamus-quaerat',
                'content' => 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt...',
                'image' => 'assets/img/blog/blog-post-5.webp',
                'category' => 'Politics',
                'author' => 'Denis Peterson',
                'author_image' => 'assets/img/person/person-m-11.webp',
                'date' => '2022-01-30'
            ],
            [
                'title' => 'Distinctio provident quibusdam numquam aperiam aut',
                'slug' => 'distinctio-provident',
                'content' => 'At vero eos et accusamus et iusto odio dignissimos ducimus...',
                'image' => 'assets/img/blog/blog-post-6.webp',
                'category' => 'Entertainment',
                'author' => 'Mika Lendon',
                'author_image' => 'assets/img/person/person-f-15.webp',
                'date' => '2022-02-14'
            ],
            [
                'title' => 'Dolorum optio tempore voluptas dignissimos',
                'slug' => 'dolorum-optio',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit...',
                'image' => 'assets/img/blog/blog-post-7.webp',
                'category' => 'Politics',
                'author' => 'Maria Doe',
                'author_image' => 'assets/img/person/person-f-7.webp',
                'date' => '2025-01-01'
            ],
            [
                'title' => 'Nisi magni odit consequatur autem nulla dolorem',
                'slug' => 'nisi-magni',
                'content' => 'Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua...',
                'image' => 'assets/img/blog/blog-post-10.webp',
                'category' => 'Sports',
                'author' => 'Allisa Mayer',
                'author_image' => 'assets/img/person/person-f-4.webp',
                'date' => '2026-06-05'
            ],
            [
                'title' => 'Possimus soluta ut id suscipit ea ut in quo quia et soluta',
                'slug' => 'possimus-soluta',
                'content' => 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit...',
                'image' => 'assets/img/blog/blog-post-9.webp',
                'category' => 'Entertainment',
                'author' => 'Mark Dower',
                'author_image' => 'assets/img/person/person-m-12.webp',
                'date' => '2023-06-22'
            ],
        ];

        return $articles;
        
    }
    public function index() {
        $articles = $this->articles();
        return view('books.index', compact('articles'));
    }
    

    public function show($slug)
    {
        $articles = $this->articles();
        $article = collect($articles)->firstWhere('slug', $slug);

        if (!$article) {
            abort(404);
        }

        return view('books.show', compact('article'));
    }
}
