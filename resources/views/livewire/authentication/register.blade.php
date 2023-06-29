<div>
    <div class="hero page-inner overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Register</h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-center justify-content-center">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active text-white-50" aria-current="page">
                        Register
                    </li>
                    </ol>
                </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">
                    <form wire:submit.prevent="saveUser">
                        <div class="row">
                            <div class="col-md-12">
                                @if($errors->any())
                                <div class="alert alert-danger">
                                    <span>{{ $errors->first() }}</span>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control px-4" placeholder="Name*" name="name" wire:model.defer="name">
                            </div>
                            <div class="col-6 mb-3">
                                <input type="email" class="form-control px-4" placeholder="Email" name="email" wire:model.defer="email">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="password" class="form-control px-4" placeholder="Password*" name="password" wire:model.defer="password">
                            </div>
                            <div class="col-md-6 mb-3">
                                <input type="password"class="form-control px-4" placeholder="Confirm Password*" name="password_confirmation" wire:model.defer="password_confirmation">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" value="Register" class="btn btn-primary"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
