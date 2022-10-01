<section>

    @livewire('user.partials.header')

    <section class="container grid md:grid-cols-3 gap-5 my-5 ">

            @livewire("user.dashboard.messages.partials.show")

            @livewire("user.dashboard.messages.partials.inbox")

    </section>

</section>