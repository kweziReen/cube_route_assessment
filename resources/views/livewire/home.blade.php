<div>
    <div class="hero page-inner overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Home</h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Categories & Products
                        </li>
                    </ol>
                </nav>
                </div>
            </div>
        </div>
    </div>

    <section class="features-1">
      <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-2">
                <h2 class="font-weight-bold text-primary heading">
                    Categories
                </h2>
            </div>
            @foreach($categories as $category)
                <div class="col-6 col-lg-3">
                    <div class="box-feature">
                        <h3 class="mb-3">{{ $category->name }}</h3>
                        <span class="d-block mb-2 text-black-50">{{ $category->meta_title }}</span>
                        <p><a href="{{ url('category/'.$category->id) }}" class="learn-more">Read More</a></p>
                    </div>
                </div>
            @endforeach
        </div>
      </div>
    </section>

    <div class="section">
      <div class="container">
        <div class="row mb-5 align-items-center">
          <div class="col-lg-6">
            <h2 class="font-weight-bold text-primary heading">
              Products
            </h2>
          </div>
          <div class="col-lg-6 text-lg-end">
            <p>
              <a href="{{ url('products') }}" class="btn btn-primary text-white py-3 px-4">View all products</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="property-slider-wrap">
              <div class="property-slider">
              @foreach($products as $product)
                <div class="property-item">

                  <div class="property-content">
                    <div class="price mb-2"><span>$1,291,000</span></div>
                    <div>
                      <span class="city d-block mb-3">{{ $product->name }}</span>

                      <div class="specs d-flex mb-4">
                        <span class="d-block d-flex align-items-center me-3">
                          <span class="caption">{{ $product->slug }}</span>
                        </span>
                      </div>
                      <a href="{{ url('product/'.$product->id) }}" class="btn btn-primary py-2 px-3">See details</a>
                    </div>
                  </div>
                </div>
              @endforeach
              </div>

              <div id="property-nav" class="controls" tabindex="0" aria-label="Carousel Navigation">
                <span class="prev" data-controls="prev" aria-controls="property" tabindex="-1">Prev</span>
                <span class="next" data-controls="next" aria-controls="property" tabindex="-1">Next</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
