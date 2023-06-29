<div>
    <div class="hero page-inner overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Category</h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('categories') }}">Categories</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            {{ $category->name }}
                        </li>
                    </ol>
                </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row text-left mb-5">
          <div class="col-12">
            <h2 class="font-weight-bold heading text-primary mb-4">{{ $category->name }}</h2>
          </div>
          <div class="col-lg-6">
            <div class="feature-h">
                <div class="feature-text">
                    <h3 class="heading">Meta Title</h3>
                    <p class="text-black-50">
                    {{ $category->meta_title }}
                    </p>
                </div>
                <div class="feature-text">
                    <h3 class="heading">Meta Description</h3>
                    <p class="text-black-50">
                    {{ $category->meta_description }}
                    </p>
                </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="feature-h">
                <div class="feature-text">
                    <h3 class="heading">Meta Keywords</h3>
                    <p class="text-black-50">
                        {{ $category->meta_keywords }}
                    </p>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
