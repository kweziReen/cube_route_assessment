<div>
    <div class="hero page-inner overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Categories</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                        <li class="breadcrumb-item active text-white-50" aria-current="page">
                            Categories
                        </li>
                    </ol>
                </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-5">
                <div class="d-flex">
                    @if($errors->any())
                        <div class="alert alert-danger">
                            <span>{{ $errors->first() }}</span>
                        </div>
                    @endif
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>
            </div>
            @if($cur_view == "list")
                <div class="col-md-12">
                    <div class="d-flex">
                        <h5></h5>
                        <span class="ms-auto">
                            <a href="#" class="btn btn-primary" wire:click.prevent="showForm">Add Category</a>
                        </span>
                    </div>
                </div>
                @include('livewire.categories.views.list')
            @elseif($cur_view == "form")
                <div class="col-md-12">
                    <div class="d-flex">
                        <h5></h5>
                        <span class="ms-auto">
                            <a href="#" class="btn btn-primary" wire:click.prevent="cancelForm">Cancel</a>
                        </span>
                    </div>
                </div>
                @include('livewire.categories.views.form')
            @endif
        </div>
    </div>
</div>
