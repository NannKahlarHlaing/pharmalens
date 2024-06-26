{{-- @props(['posts']) --}}
<div {{ $attributes->merge(['class'=> "swiper"]) }}>  
	<div class="swiper-wrapper mb-10">
   		{{ $slot }}
	</div>
	<!-- If we need pagination -->
	<div class="swiper-pagination"></div>
  
	<!-- If we need navigation buttons -->
	<div class="swiper-button-prev"></div>
	<div class="swiper-button-next"></div>
  
	<!-- If we need scrollbar -->
	<div class="swiper-scrollbar"></div>
</div>