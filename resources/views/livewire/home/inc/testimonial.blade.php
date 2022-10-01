<wrapper class="bg-black text-white py-16">
    		<container-fluid class="space-y-28">
    			<h5 class="subtitle text-white">What Our Users Say</h5>
                 <div class="swiper testimonial w-full overflow-hidden">
                  <div class="swiper-wrapper items-end">
                            <testimonial-item class="swiper-slide space-y-3">
                                <div>
                                    <Icon6xl class="inline-block las la-quote-left" />
                                </div>

                                <p class="font-title font-bold text-xl md:text-3xl leading-snug text-white md:w-1/2">Other dating apps were like shooting fish in a barrel. But my girlfriend and I clicked right away on Hinge, and the conversation was effortless. We’ve been together for over a year.</p>

                                <h2 class="text-sm md:text-base">Random Name #1</h2>
                            </testimonial-item>

                            <testimonial-item class="swiper-slide space-y-3">
                                <div>
                                    <Icon6xl class="inline-block las la-quote-left" />
                                </div>

                                <p class="font-title font-bold text-xl md:text-3xl leading-snug text-white md:w-1/2">Thank you Hinge! We’re getting married in a few months!</p>

                                <h2 class="text-sm md:text-base">Random Name #2</h2>
                            </testimonial-item>


                            <testimonial-item class="swiper-slide space-y-3">
                                <div>
                                    <Icon6xl class="inline-block las la-quote-left" />
                                </div>

                                <p class="font-title font-bold text-xl md:text-3xl leading-snug text-white md:w-1/2">Hinge’s prompts really made the difference—I felt like I got a good sense of a guy’s vibe from his answers, and it was easy to jump right into</p>

                                <h2 class="text-sm md:text-base">Random Name #3</h2>
                            </testimonial-item>
                  </div>

                  <section class="mt-10">
                      <div class="swiper-pagination"></div>
                  </section>
                </div>

        	</container-fluid>
</wrapper>

@push('script') 
  <script>
    new Swiper(".testimonial", {
        speed: 500,
        slidesPerView : 1,
        effect : 'fade',
        fadeEffect : { crossFade : true },
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          renderBullet: function (index, className) {
              return `<span class="h-0.5 ${className} w-[30%] md:w-[32%] lg:w-[32.5%] bg-white"></span>`;
            },
        },
      });
    </script>
@endpush