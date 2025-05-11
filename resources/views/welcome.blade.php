@extends('layouts.app')

@section('content')
      <main class="main">

    <!-- Blog Hero Section -->
    <section id="blog-hero" class="blog-hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="blog-grid">

          <!-- Featured Post (Large) -->
          <article class="blog-item featured" data-aos="fade-up">
            <img src="assets/img/blog/blog-post-3.webp" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14th, 2025</span>
                <span class="category">Technology</span>
              </div>
              <h2 class="post-title">
                <a href="" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
              </h2>
            </div>
          </article><!-- End Featured Post -->

          <!-- Regular Posts -->
          <article class="blog-item" data-aos="fade-up" data-aos-delay="100">
            <img src="assets/img/blog/blog-post-portrait-1.webp" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14th, 2025</span>
                <span class="category">Security</span>
              </div>
              <h3 class="post-title">
                <a href="" title="Sed do eiusmod tempor incididunt ut labore">Sed do eiusmod tempor incididunt ut labore</a>
              </h3>
            </div>
          </article><!-- End Blog Item -->

          <article class="blog-item" data-aos="fade-up" data-aos-delay="200">
            <img src="assets/img/blog/blog-post-9.webp" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14th, 2025</span>
                <span class="category">Career</span>
              </div>
              <h3 class="post-title">
                <a href="" title="Ut enim ad minim veniam, quis nostrud exercitation">Ut enim ad minim veniam, quis nostrud exercitation</a>
              </h3>
            </div>
          </article><!-- End Blog Item -->

          <article class="blog-item" data-aos="fade-up" data-aos-delay="300">
            <img src="assets/img/blog/blog-post-7.webp" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14th, 2025</span>
                <span class="category">Cloud</span>
              </div>
              <h3 class="post-title">
                <a href="" title="Adipiscing elit, sed do eiusmod tempor incididunt">Adipiscing elit, sed do eiusmod tempor incididunt</a>
              </h3>
            </div>
          </article><!-- End Blog Item -->

          <article class="blog-item" data-aos="fade-up" data-aos-delay="400">
            <img src="assets/img/blog/blog-post-6.webp" alt="Blog Image" class="img-fluid">
            <div class="blog-content">
              <div class="post-meta">
                <span class="date">Apr. 14th, 2025</span>
                <span class="category">Programming</span>
              </div>
              <h3 class="post-title">
                <a href="" title="Excepteur sint occaecat cupidatat non proident">Excepteur sint occaecat cupidatat non proident</a>
              </h3>
            </div>
          </article><!-- End Blog Item -->

        </div>

      </div>

    </section><!-- /Blog Hero Section -->

    <!-- Featured Posts Section -->
    <section id="featured-posts" class="featured-posts section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Featured Posts</h2>
        <div><span>Check Our</span> <span class="description-title">Featured Posts</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="blog-posts-slider swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 800,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 3,
              "spaceBetween": 30,
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 20
                },
                "768": {
                  "slidesPerView": 2,
                  "spaceBetween": 20
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 30
                }
              }
            }
          </script>

          <div class="swiper-wrapper">

              @foreach ($books as $book)
                <div class="swiper-slide">
                  <div class="blog-post-item">
                    <img src="{{ asset($book->image) }}" alt="Couverture de {{ $book->title }}" class="img-fluid">
                    <div class="blog-post-content">
                      <div class="post-meta">
                        <a href="{{ route('books.show', $book->id) }}"><span><i class="bi bi-person"></i>{{ $book->author }}</span></a> 
                        <span><i class="bi bi-clock"></i> {{ $book->published_at }}</span>
                        <span><i class="bi bi-chat-dots"></i> 6 Comments</span>
                      </div>
                      <h2><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></h2>
                      <p>{{ $book->description }}</p>
                      <a href="{{ route('books.show', $book->id) }}" class="read-more">Read More <i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div><!-- End slide item -->
              @endforeach
          </div>

        </div>

      </div>

    </section><!-- /Featured Posts Section -->

    <!-- Category Section Section -->
    <section id="category-section" class="category-section section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Category Section</h2>
        <div> <span class="description-title">Category Section</span></div>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <!-- Featured Posts -->
        <div class="row gy-4 mb-4">
          <div class="col-lg-4">
            <article class="featured-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-6.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Health</span>
                  <div class="author-meta">
                    <img src="assets/img/person/person-f-13.webp" alt="" class="author-img">
                    <span class="author-name">William G.</span>
                    <span class="post-date">28 April 2024</span>
                  </div>
                </div>
                <h2 class="title">
                  <a href="">Sed ut perspiciatis unde omnis iste natus error sit voluptatem</a>
                </h2>
              </div>
            </article>
          </div>

          <div class="col-lg-4">
            <article class="featured-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-7.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Education</span>
                  <div class="author-meta">
                    <img src="assets/img/person/person-m-10.webp" alt="" class="author-img">
                    <span class="author-name">Emma D.</span>
                    <span class="post-date">30 May 2024</span>
                  </div>
                </div>
                <h2 class="title">
                  <a href="">Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis</a>
                </h2>
              </div>
            </article>
          </div>

          <div class="col-lg-4">
            <article class="featured-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-5.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                  <div class="author-meta">
                    <img src="assets/img/person/person-f-14.webp" alt="" class="author-img">
                    <span class="author-name">James F.</span>
                    <span class="post-date">3 June 2024</span>
                  </div>
                </div>
                <h2 class="title">
                  <a href="">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit</a>
                </h2>
              </div>
            </article>
          </div>
        </div>

        <!-- List Posts -->
        <div class="row">
          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-6.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="">Quis autem vel eum iure reprehenderit qui in ea voluptate</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">6 April 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-9.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="">At vero eos et accusamus et iusto</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">12 June 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-10.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="">Et harum quidem rerum facilis est et expedita distinctio</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">9 May 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-2.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="">Nam libero tempore, cum soluta nobis est eligendi</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">15 July 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-1.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="">Temporibus autem quibusdam et aut officiis debitis</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">18 August 2026</span>
                </div>
              </div>
            </article>
          </div>

          <div class="col-xl-4 col-lg-6">
            <article class="list-post">
              <div class="post-img">
                <img src="assets/img/blog/blog-post-3.webp" alt="" class="img-fluid" loading="lazy">
              </div>
              <div class="post-content">
                <div class="category-meta">
                  <span class="post-category">Gaming</span>
                </div>
                <h3 class="title">
                  <a href="">Itaque earum rerum hic tenetur a sapiente delectus</a>
                </h3>
                <div class="post-meta">
                  <span class="read-time">2 mins read</span>
                  <span class="post-date">21 September 2026</span>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div>

    </section><!-- /Category Section Section -->

    <!-- Call To Action 2 Section -->
    <section id="call-to-action-2" class="call-to-action-2 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="advertise-1 d-flex flex-column flex-lg-row gap-4 align-items-center position-relative">

          <div class="content-left flex-grow-1" data-aos="fade-right" data-aos-delay="200">
            <span class="badge text-uppercase mb-2">Don't Miss</span>
            <h2>Revolutionize Your Digital Experience Today</h2>
            <p class="my-4">Strategia accelerates your business growth through innovative solutions and cutting-edge technology. Join thousands of satisfied customers who have transformed their operations.</p>

            <div class="features d-flex flex-wrap gap-3 mb-4">
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Premium Support</span>
              </div>
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Cloud Integration</span>
              </div>
              <div class="feature-item">
                <i class="bi bi-check-circle-fill"></i>
                <span>Real-time Analytics</span>
              </div>
            </div>

            <div class="cta-buttons d-flex flex-wrap gap-3">
              <a href="#" class="btn btn-primary">Start Free Trial</a>
              <a href="#" class="btn btn-outline">Learn More</a>
            </div>
          </div>

          <div class="content-right position-relative" data-aos="fade-left" data-aos-delay="300">
            <img src="assets/img/misc/misc-1.webp" alt="Digital Platform" class="img-fluid rounded-4">
            <div class="floating-card">
              <div class="card-icon">
                <i class="bi bi-graph-up-arrow"></i>
              </div>
              <div class="card-content">
                <span class="stats-number">245%</span>
                <span class="stats-text">Growth Rate</span>
              </div>
            </div>
          </div>

          <div class="decoration">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
          </div>

        </div>

      </div>

    </section><!-- /Call To Action 2 Section -->

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

    </section><!-- /Latest Posts Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-between align-items-center">
          <div class="col-lg-6">
            <div class="cta-content" data-aos="fade-up" data-aos-delay="200">
              <h2>Subscribe to our newsletter</h2>
              <p>Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit.</p>
              <form action="forms/newsletter.php" method="post" class="php-email-form cta-form" data-aos="fade-up" data-aos-delay="300">
                <div class="input-group mb-3">
                  <input type="email" class="form-control" placeholder="Email address..." aria-label="Email address" aria-describedby="button-subscribe">
                  <button class="btn btn-primary" type="submit" id="button-subscribe">Subscribe</button>
                </div>
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your subscription request has been sent. Thank you!</div>
              </form>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="cta-image" data-aos="zoom-out" data-aos-delay="200">
              <img src="assets/img/cta/cta-1.webp" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Call To Action Section -->

  </main>
@endsection