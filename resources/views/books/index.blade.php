@extends('layouts.app')

@section('content')
    <!-- Latest Posts Section -->
    <section id="latest-posts" class="latest-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Latest Posts</h2>
        <div><span>Check Our</span> <span class="description-title">Latest Posts</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

            @foreach ($books as $book)
                <div class="col-lg-4">
                    <article>

                        {{-- Image de couverture du livre --}}
                        <div class="post-img">
                            <img src="{{ asset($book->image) }}" alt="Couverture de {{ $book->title }}" class="img-fluid">
                        </div>

                        {{-- Auteur du livre --}}
                        <p class="post-category">{{ $book->author }}</p>

                        {{-- Titre du livre --}}
                        <h2 class="title">
                            <a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a>
                        </h2>

                        {{-- Métadonnées : description + date de publication --}}
                        <div class="d-flex align-items-center">
                            <img src="{{ asset( $book->image ) }}" alt="Auteur" class="img-fluid post-author-img flex-shrink-0" style="width: 50px; height: 50px;">
                            <div class="post-meta">
                                <p class="post-author">{{ $book->author }}</p>
                                <p class="post-date">
                                    <time datetime="{{ $book->published_at }}">{{ \Carbon\Carbon::parse($book->published_at)->format('d M Y') }}</time>
                                </p>
                            </div>
                        </div>

                        {{-- Brève description (optionnel) --}}
                        <!-- <p class="mt-2">{{ \Illuminate\Support\Str::limit($book->description, 100, '...') }}</p> -->

                    </article>
                </div><!-- End book list item -->
            @endforeach

        </div>
      </div>

      
            <!-- Pagination -->
        <div class="d-flex justify-content-center mt-5">
        {{ $books->links('pagination::bootstrap-5') }}
        </div>

    </section><!-- /Latest Posts Section -->
@endsection
