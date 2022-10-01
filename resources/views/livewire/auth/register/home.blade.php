<main class="page-wrapper bg-white">
    <x-loading />
    <div class="container-fluid flex flex-col justify-start items-center h-full space-y-8 py-2">
        <header class="w-full">
            <img src="{{asset('images/logo/logo-dark.png')}}" class="h-[80px]" />
        </header>

        <div class="space-y-3 rounded-lg p-5 shadow-lg border md:w-1/3">
                <section class="space-y-3">
                    <header class="space-y-2">
                        <h1 class="font-title font-medium text-3xl">Sign Up</h1>
                        <p class="text-sm">Stay updated on your professional world</p>
                    </header>
                    <form class="space-y-5" wire:submit.prevent="submit">

                         <div class="floating-form-group group">
                                <input 
                                    type="text"  
                                    class="floating-form-control peer" 
                                    placeholder=" " 
                                    wire:model.defer="form.name" 
                                />
                                <label class="floating-label">Name</label>
                            @error('form.name') <span class="error">{{ $message }}</span>@endError
                        </div>

                        <div class="floating-form-group group">
                                <input 
                                    type="email"  
                                    class="floating-form-control peer" 
                                    placeholder=" " 
                                    wire:model.defer="form.email" 
                                />
                                <label class="floating-label">Email address</label>
                            @error('form.email') <span class="error">{{ $message }}</span>@endError
                        </div>

                        <div class="floating-form-group group">
                                <input 
                                    type="password"  
                                    class="floating-form-control peer" 
                                    placeholder=" " 
                                    wire:model.defer="form.password" 
                                />
                                <label class="floating-label">Password</label>
                            @error('form.password') <span class="error">{{ $message }}</span>@endError
                        </div>


                      <div class="floating-form-group text-xs text-center">
                          By clicking signup, or continuing with the other options below, you agree to Tumblr’s Terms of Service and have read the Privacy Policy
                      </div>

                      <div class="floating-form-group">
                          <button type="submit" class="btn-sq btn-block btn-rounded rounded-full bg-primary text-white btn-lg">
                              Sign Up
                          </button>
                      </div>

                    </form>


                    <div class="or">
                        <div class="relative px-5 bg-white z-10 text-sm">or</div>
                    </div>

                   @include("livewire.auth.register.inc.social")
            </section>

            <section class="text-center">
                Already on Spotmate? <a href="{{ route('auth.login') }}" class="font-semibold text-blue-link">Login</a>
            </section>
        </div>
    </div>
</section>