<wrapper class="py-16">
			<container-fluid class="grid md:grid-cols-3 gap-16">
				<wrapper class="space-y-5 order-2 md:order-1">
					<h5 class="subtitle">Teamwork rocks</h5>
					<h1 class="title">Free to join</h1>

					<p class="lead-message">
							Create an account for free and start meeting people who share the same interests as you. Connect with someone who inspires you and helps each other through the challenges of getting into shape.
					</p>
					<button class="btn text-white btn-xl bg-black rounded-full hover:bg-primary">Join Us</button>
				</wrapper>

				<wrapper class="md:col-span-2 order-1 md:order-2 overflow-hidden flex flex-col justify-center">

					<wrapper class="swiper-container mySwiper1 bg-none">
                        <wrapper class="swiper-wrapper">
                            <wrapper class="swiper-slide">
                               <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            </wrapper>

                             <wrapper class="swiper-slide">
                               <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            </wrapper>

                             <wrapper class="swiper-slide">
                               <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            </wrapper>
                   	    </wrapper>
               		</wrapper>
				</wrapper>
			</container-fluid>
</wrapper>

@push('script')
	 <script>
	      var swiper = new Swiper(".mySwiper1", {
	        effect: "coverflow",
	        grabCursor: true,
	        spaceBetween : 30,
	        slidesPerView : 3,
	        loop: false,
	        autoplay: {
	        delay: 5000,
	        disableOnInteraction: false,
	      },
	        centeredSlides: false,
	        coverflowEffect: {
	            rotate: 0,
	            stretch: 0,
	            depth: 50,
	            modifier: 1,
	            slideShadows: false,
	          }
	      });
	</script>
@endpush