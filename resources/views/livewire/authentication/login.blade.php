<div>
    <div class="hero page-inner overlay">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-9 text-center mt-5">
                <h1 class="heading" data-aos="fade-up">Login</h1>

                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb text-center justify-content-center">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active text-white-50" aria-current="page">
                        Login
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
                <div class="col-lg-6">
                    <form wire:submit.prevent="authUser">
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
                            <div class="col-12 mb-3">
                                <input type="email" class="form-control px-4" placeholder="Email" name="email" wire:model.defer="email">
                            </div>
                            <div class="col-12 mb-3">
                                <input type="password" class="form-control px-4" placeholder="Password" name="password" wire:model.defer="password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input type="submit" value="Login" class="btn btn-primary"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
