<!-- Pricing -->
<div id="pricing" class="cards-2">
    <div class="absolute bottom-0 h-40 w-full bg-white"></div>
    <div class="container px-4 pb-px sm:px-8">
        
        <!-- Card-->
        <div class="card" data-aos="flip-left"  data-aos-duration="1000">
            <div class="card-body">
                <div class="card-title">{{ $consolCardData?->console_card1_title }}</div>
                <p class="text-justify">
                {{ $consolCardData?->console_card1_description }}
                </p>
            </div>
        </div> <!-- end of card -->
        <!-- end of card -->

        <!-- Card-->
        <div class="card" data-aos="flip-left"  data-aos-duration="1000">
            <div class="card-body">
                <div class="card-title">{{ $consolCardData?->console_card2_title }}</div>
                <p class="text-justify">
                    {{ $consolCardData?->console_card2_description }}
                </p>
            </div>
        </div> <!-- end of card -->
        <!-- end of card -->

        <!-- Card-->
        <div class="card" data-aos="flip-left"  data-aos-duration="1000">
            <div class="card-body">
                <div class="card-title">{{ $consolCardData?->console_card3_title }}</div>
                <p class="text-justify">
                    {{ $consolCardData?->console_card3_description }}
                </p>
            </div>
        </div> <!-- end of card -->
        <!-- end of card -->

    </div> <!-- end of container -->
</div> <!-- end of cards-2 -->
<!-- end of pricing -->