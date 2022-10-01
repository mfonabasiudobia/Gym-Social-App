<main class="page-wrapper bg-white">
    <div class="container-fluid flex flex-col justify-start items-center h-full space-y-8 py-2">
        <header class="w-full">
            <img src="{{asset('images/logo/logo-dark.png')}}" class="h-[80px]" />
        </header>
        <section class="space-y-3 rounded-lg p-5 shadow-lg border md:w-1/3">
            <header class="space-y-2">
                <h1 class="font-title font-medium text-3xl">Forgot password?</h1>
                <p class="text-sm">Reset password in two quick steps</p>
            </header>

            <form class="space-y-5">

             <x-forms.floating-input-text 
                label="Email address"  
                model="" 
                type="email" 
             />

              <div class="floating-form-group">
                  <button type="submit" class="btn-sq btn-block rounded-full bg-primary text-white btn-lg">
                      Reset Password
                  </button>
              </div>

              <div class="text-center">
                  <a href="{{ route('auth.login') }}">Back</a>
              </div>

            </form>

    </section>

    </div>
</main>