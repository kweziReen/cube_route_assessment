<div>
    <div class="hero page-inner overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Product</h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('products') }}">Products</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            {{ $product->name }}
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
            <h2 class="font-weight-bold heading text-primary mb-4">{{ $product->name }}</h2>
          </div>
            @if($product->variants())
                @foreach($product->variants as $variant)
                    <h4 class="font-weight-bold heading text-primary mb-4">Variant</h4>
                    <div class="col-lg-6">
                        <div class="feature-h">
                            <div class="feature-text">
                                <h3 class="heading">Web Product Code</h3>
                                <p class="text-black-50">
                                {{ $variant->web_product_code }}
                                </p>
                            </div>
                            <div class="feature-text">
                                <h3 class="heading">Sap Product Code</h3>
                                <p class="text-black-50">
                                {{ $variant->sap_product_code }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="feature-h">
                            <div class="feature-text">
                                <h3 class="heading">Name</h3>
                                <p class="text-black-50">
                                    {{ $variant->name }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
      </div>
    </div>
</div>
