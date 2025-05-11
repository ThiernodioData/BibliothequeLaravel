@extends('layouts.app')

@section('content')
<main class="main">

<!-- Page Title -->
<div class="page-title">
  <div class="breadcrumbs">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/><i class="bi bi-house"></i> Accueil</a></li>
        <li class="breadcrumb-item"><a href="#">Livres</a></li>
        <li class="breadcrumb-item active current">{{ $book->title }}</li>
      </ol>
    </nav>
  </div>

  <div class="title-wrapper">
    <h1>Détails du Livre</h1>
  </div>
</div><!-- End Page Title -->

<div class="container">
  <div class="row">

    <div class="col-lg-8">

      <!-- Blog Details Section -->
      <section id="blog-details" class="blog-details section">
        <div class="container" data-aos="fade-up">

          <article class="article">

            <div class="hero-img" data-aos="zoom-in">
              <img src="{{ asset($book['image']) }}" alt="Featured blog image" class="img-fluid" loading="lazy">
              <div class="meta-overlay">
                <div class="meta-categories">
                  <a href="#" class="category">{{ $book['author'] }}</a>
                  <span class="divider">•</span>
                  <span class="reading-time"><i class="bi bi-clock"></i>{{ $book['published_at'] }}</span>
                </div>
              </div>
            </div>

            <div class="article-content" data-aos="fade-up" data-aos-delay="100">
              <div class="content-header">
                <h1 class="title">{{ $book['title'] }}</h1>

                <div class="author-info">
                  <div class="author-details">
                  <img src="{{ asset($book['image']) }}" alt="Author" class="author-img">

                    <div class="info">
                      <h4>{{ $book['author'] }}</h4>
                      <span class="role">Auteur</span>
                    </div>
                  </div>
                  <div class="post-meta">
                    <span class="date"><i class="bi bi-calendar3"></i>{{ $book['published_at'] }}</span>
                    <span class="divider">•</span>
                    <span class="comments"><i class="bi bi-chat-text"></i> 18 Comments</span>
                  </div>
                </div>
              </div>

              <div class="content">
                <p class="lead">
                  {{ $book['description'] }}
                </p>

     

                <div class="content-image right-aligned">
                  <img src="{{ asset($book['image']) }}" class="img-fluid" alt="Modern web development tools" loading="lazy">
                  <figcaption>{{ $book['title'] }}</figcaption>
                </div>

                <h2>{{ $book['title'] }}</h2>
                <p>
                  {{ $book['description'] }}
                </p>
                <ul>
                  <li>Enhanced code reusability across different frameworks</li>
                  <li>Better encapsulation of functionality</li>
                  <li>Improved maintenance and scalability</li>
                  <li>Framework-agnostic component development</li>
                </ul>

                <div class="highlight-box">
                  <h3>Key Trends in 2025</h3>
                  <ul class="trend-list">
                    <li>
                      <i class="bi bi-lightning-charge"></i>
                      <span>Edge Computing and Serverless Architecture</span>
                    </li>
                    <li>
                      <i class="bi bi-shield-check"></i>
                      <span>Enhanced Security Measures</span>
                    </li>
                    <li>
                      <i class="bi bi-phone"></i>
                      <span>Progressive Web Apps (PWAs)</span>
                    </li>
                  </ul>
                </div>

                <h2>Performance Optimization</h2>
                <p>
                  Performance remains a critical factor in web development, with an increasing focus on Core Web Vitals and user experience metrics. Modern applications must be optimized for both speed and efficiency.
                </p>

                <blockquote>
                  <p>
                    "The future of web development lies not just in writing code, but in creating seamless, accessible, and performant experiences that work for everyone, everywhere."
                  </p>
                  <cite>Emily Thompson, Web Performance Architect</cite>
                </blockquote>

                <div class="content-grid">
                  <div class="row g-4">
                    <div class="col-md-6">
                      <div class="info-card">
                        <i class="bi bi-speedometer2"></i>
                        <h4>Performance Metrics</h4>
                        <p>Focus on Core Web Vitals and user-centric performance metrics for better search rankings and user experience.</p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="info-card">
                        <i class="bi bi-universal-access"></i>
                        <h4>Accessibility</h4>
                        <p>Implementing WCAG guidelines and ensuring web applications are accessible to all users across different devices.</p>
                      </div>
                    </div>
                  </div>
                </div>

                <h2>Looking Forward</h2>
                <p>
                  As we continue through 2025, web development practices will further evolve, embracing new technologies while maintaining a strong foundation in performance, accessibility, and user experience. Staying updated with these trends and best practices is crucial for developers looking to build modern, scalable web applications.
                </p>
              </div>

              <div class="meta-bottom">
                <div class="tags-section">
                  <h4>Related Topics</h4>
                  <div class="tags">
                    <a href="#" class="tag">Web Development</a>
                    <a href="#" class="tag">Performance</a>
                    <a href="#" class="tag">Best Practices</a>
                    <a href="#" class="tag">Trends</a>
                    <a href="#" class="tag">2025</a>
                  </div>
                </div>

                <div class="share-section">
                  <h4>Share Article</h4>
                  <div class="social-links">
                    <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                    <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    <a href="#" class="copy-link" title="Copy Link"><i class="bi bi-link-45deg"></i></a>
                  </div>
                </div>
              </div>
            </div>

          </article>

        </div>
      </section><!-- /Blog Details Section -->

      <!-- Blog Author Section -->
      <section id="blog-author" class="blog-author section">

        <div class="container" data-aos="fade-up">
          <div class="author-box">
            <div class="row align-items-center">
              <div class="col-lg-3 col-md-4 text-center">
                <img src="{{ asset($book['image']) }}" class="author-img rounded-circle" alt="" loading="lazy">

                <div class="author-social-links mt-3">
                  <a href="https://twitter.com/#" class="twitter"><i class="bi bi-twitter-x"></i></a>
                  <a href="https://linkedin.com/#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                  <a href="https://github.com/#" class="github"><i class="bi bi-github"></i></a>
                  <a href="https://facebook.com/#" class="facebook"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>
              </div>

              <div class="col-lg-9 col-md-8">
                <div class="author-content">
                  <h3 class="author-name">{{ $book['author'] }}</h3>
                  <span class="author-title">Auteur &amp; Litterature</span>

                  <div class="author-bio mt-3">
                    {{ $book['description']}}
                  </div>

                  <div class="author-website mt-3">
                    <a href="#" class="website-link">
                      <i class="bi bi-globe"></i>
                      <span>{{ $book['author'] }}</span>
                    </a>
                    <a href="#" class="more-posts">
                      Read More from Sarah <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section><!-- /Blog Author Section -->

      <!-- Blog Comments Section -->
      <section id="blog-comments" class="blog-comments section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

          <div class="blog-comments-3">
            <div class="section-header">
              <h3>Discussion <span class="comment-count">(8)</span></h3>
            </div>

            <div class="comments-wrapper">
              <!-- Comment 1 -->
              <article class="comment-card">
                <div class="comment-header">
                  <div class="user-info">
                    <img src="{{ asset($book['image']) }}" alt="User avatar" loading="lazy">
                    <div class="meta">
                      <h4 class="name">{{ $book['author'] }}</h4>
                      <span class="date"><i class="bi bi-calendar3"></i> February 13, 2025</span>
                    </div>
                  </div>
                </div>
                <div class="comment-content">
                  <p>Bonjour Ce livre je les ecris avec patient et amour, Il s'instutile </p>
                  <p><strong> {{ $book['title'] }}</strong> </p>
                </div>
                <div class="comment-actions">
                  <button class="action-btn like-btn">
                    <i class="bi bi-hand-thumbs-up"></i>
                    <span>12</span>
                  </button>
                  <button class="action-btn reply-btn">
                    <i class="bi bi-reply"></i>
                    <span>Reply</span>
                  </button>
                </div>
              </article>
                @foreach ($book->reviews as $review)
                  <article class="comment-card">
                    <div class="comment-header">
                      <div class="user-info">
                        <img src="{{ asset('assets/img/person/person-m-9.webp') }}" alt="Avatar utilisateur">
                        <div class="meta">
                          <h4 class="name">{{ $review->user->name }}</h4>
                          <span class="date"><i class="bi bi-calendar3"></i> {{ $review->created_at->format('Y-m-d H:i:s') }}</span>
                        </div>
                      </div>
                    </div>
                    <div class="comment-content">
                      <p>{{ $review->comment }}</p>
                      <p><strong>Note : </strong>{{ $review->rating }}/5</p>
                    </div>
                  </article>
                @endforeach
            </div>
          </div>

        </div>

      </section><!-- /Blog Comments Section -->

      <!-- Blog Comment Form Section -->
      <section id="blog-comment-form" class="blog-comment-form section">

        <div class="container" data-aos="fade-up" data-aos-delay="100">

<form method="POST" action="{{ route('reviews.store', $book->id) }}" class="mt-4">
  @csrf

  <div class="section-header">
    <h3>Votre avis</h3>
    <p>Votre adresse email ne sera pas publiée.</p>
  </div>

  {{-- Sélection de l’utilisateur --}}
  <div class="col-12 form-group">
    <label for="user_id">Nom de l’utilisateur *</label>
    <select name="user_id" id="user_id" class="form-control" required>
      <option value="">Sélectionnez un utilisateur</option>
      @foreach ($users as $user)
        <option value="{{ $user->id }}">{{ $user->name }}</option>
      @endforeach
    </select>
  </div>

  {{-- Note --}}
  <div class="col-12 form-group">
    <label for="rating">Note *</label>
    <select name="rating" id="rating" class="form-control" required>
      <option value="">Choisir une note</option>
      @for ($i = 1; $i <= 5; $i++)
        <option value="{{ $i }}">{{ $i }}</option>
      @endfor
    </select>
  </div>

  {{-- Commentaire --}}
  <div class="col-12 form-group">
    <label for="comment">Votre commentaire *</label>
    <textarea class="form-control" name="comment" id="comment" rows="5" required></textarea>
  </div>

  {{-- Bouton --}}
  <div class="col-12 text-center">
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </div>
</form>


        </div>

      </section><!-- /Blog Comment Form Section -->

    </div>

    <div class="col-lg-4 sidebar">

      <div class="widgets-container" data-aos="fade-up" data-aos-delay="200">

        <!-- Search Widget -->
        <div class="search-widget widget-item">

          <h3 class="widget-title">Search</h3>
          <form action="">
            <input type="text">
            <button type="submit" title="Search"><i class="bi bi-search"></i></button>
          </form>

        </div><!--/Search Widget -->

        <!-- Categories Widget -->
        <div class="categories-widget widget-item">

          <h3 class="widget-title">Categories</h3>
          <ul class="mt-3">
            <li><a href="#">General <span>(25)</span></a></li>
            <li><a href="#">Lifestyle <span>(12)</span></a></li>
            <li><a href="#">Travel <span>(5)</span></a></li>
            <li><a href="#">Design <span>(22)</span></a></li>
            <li><a href="#">Creative <span>(8)</span></a></li>
            <li><a href="#">Educaion <span>(14)</span></a></li>
          </ul>

        </div><!--/Categories Widget -->

        <!-- Categories Widget -->
        <div class="categories-widget widget-item">

          <h3 class="widget-title">Categories</h3>
          <ul class="mt-3">
            <li><a href="#">General <span>(25)</span></a></li>
            <li><a href="#">Lifestyle <span>(12)</span></a></li>
            <li><a href="#">Travel <span>(5)</span></a></li>
            <li><a href="#">Design <span>(22)</span></a></li>
            <li><a href="#">Creative <span>(8)</span></a></li>
            <li><a href="#">Educaion <span>(14)</span></a></li>
          </ul>

        </div><!--/Categories Widget -->

        <!-- Recent Posts Widget -->
        <div class="recent-posts-widget widget-item">

          <h3 class="widget-title">Recent Posts</h3>

          <div class="post-item">
            <img src="assets/img/blog/blog-post-square-1.webp" alt="" class="flex-shrink-0">
            <div>
              <h4><a href="">Nihil blanditiis at in nihil autem</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>
          </div><!-- End recent post item-->

          <div class="post-item">
            <img src="assets/img/blog/blog-post-square-2.webp" alt="" class="flex-shrink-0">
            <div>
              <h4><a href="">Quidem autem et impedit</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>
          </div><!-- End recent post item-->

          <div class="post-item">
            <img src="assets/img/blog/blog-post-square-3.webp" alt="" class="flex-shrink-0">
            <div>
              <h4><a href="">Id quia et et ut maxime similique occaecati ut</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>
          </div><!-- End recent post item-->

          <div class="post-item">
            <img src="assets/img/blog/blog-post-square-4.webp" alt="" class="flex-shrink-0">
            <div>
              <h4><a href="">Laborum corporis quo dara net para</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>
          </div><!-- End recent post item-->

          <div class="post-item">
            <img src="assets/img/blog/blog-post-square-5.webp" alt="" class="flex-shrink-0">
            <div>
              <h4><a href="">Et dolores corrupti quae illo quod dolor</a></h4>
              <time datetime="2020-01-01">Jan 1, 2020</time>
            </div>
          </div><!-- End recent post item-->

        </div><!--/Recent Posts Widget -->

        <!-- Tags Widget -->
        <div class="tags-widget widget-item">

          <h3 class="widget-title">Tags</h3>
          <ul>
            <li><a href="#">App</a></li>
            <li><a href="#">IT</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Mac</a></li>
            <li><a href="#">Design</a></li>
            <li><a href="#">Office</a></li>
            <li><a href="#">Creative</a></li>
            <li><a href="#">Studio</a></li>
            <li><a href="#">Smart</a></li>
            <li><a href="#">Tips</a></li>
            <li><a href="#">Marketing</a></li>
          </ul>

        </div><!--/Tags Widget -->

      </div>

    </div>

  </div>
</div>

</main>            
@endsection
