<div class="container content-space-1" id="faqs">
    <div class="row">
        <div class="col-lg-4 mb-5 mb-lg-0">
            <h3>Foire aux questions</h3>
            <img src="https://cdn-icons-png.flaticon.com/512/471/471664.png" alt="FAQ illustration" class="img-fluid mt-3"
                style="max-width: 100px;">
        </div>
        <!-- End Col -->

        <div class="col-lg-8">
            <!-- Accordion -->
            <div class="accordion accordion-flush" id="accordionFAQ">
                @foreach ($faqs as $index => $faq)
                    <!-- Accordion Item -->
                    <div class="accordion-item">
                        <div class="accordion-header" id="heading{{ $index }}">
                            <a class="accordion-button {{ $index !== 0 ? 'collapsed' : '' }}" role="button"
                                data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}"
                                aria-expanded="{{ $index === 0 ? 'true' : 'false' }}"
                                aria-controls="collapse{{ $index }}">
                                {{ $faq->question }}
                            </a>
                        </div>
                        <div id="collapse{{ $index }}"
                            class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                            aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionFAQ">
                            <div class="accordion-body">
                                {!! nl2br(e($faq->answer)) !!}
                            </div>
                        </div>
                    </div>
                    <!-- End Accordion Item -->
                @endforeach
            </div>
            <!-- End Accordion -->
        </div>
        <!-- End Col -->
    </div>
    <!-- End Row -->
</div>
