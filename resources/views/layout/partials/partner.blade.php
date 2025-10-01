<div class="container content-space-1">
    <!-- Heading -->
    <div class="w-lg-75 text-center mx-lg-auto mb-10">
        <h2 class="text-dark">Ils nous font confiance</h2>
    </div>
    <!-- End Heading -->

    <div class="row justify-content-center text-center">
        @foreach ($partners as $partner)
            <div class="col-4 col-sm-3 col-md-2 py-3 partner-item">
                <div class="partner-logo-container"
                     data-name="{{ $partner->name }}"
                     data-description="{{ $partner->description }}"
                     tabindex="0">
                    <img class="avatar avatar-lg avatar-4x3 avatar-centered"
                         src="{{ asset('storage/' . $partner->logo) }}"
                         style="height:100px; object-fit: contain;"
                         alt="{{ $partner->name }}">
                </div>
            </div>
        @endforeach
    </div>
</div>

<!-- Modal/Popup Template -->
<div class="partner-modal" id="partnerModal">
    <div class="partner-modal-content">
        <span class="partner-modal-close">&times;</span>
        <div class="partner-modal-header">
            <img class="partner-modal-logo" id="modalPartnerLogo" src="" alt="">
            <h3 id="modalPartnerName"></h3>
        </div>
        <div class="partner-modal-body">
            <p id="modalPartnerDescription"></p>
        </div>
    </div>
</div>

<style>
    /* Partner hover effect */
    .partner-logo-container {
        position: relative;
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .partner-logo-container:hover {
        transform: scale(1.05);
    }

    .partner-logo-container::after {
        content: attr(data-name);
        position: absolute;
        bottom: -25px;
        left: 0;
        right: 0;
        background: rgba(0,0,0,0.7);
        color: white;
        padding: 2px 5px;
        border-radius: 3px;
        font-size: 12px;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .partner-logo-container:hover::after {
        opacity: 1;
    }

    /* Modal styles */
    .partner-modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.7);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .partner-modal-content {
        background-color: #fefefe;
        margin: 5% auto;
        padding: 25px;
        border-radius: 8px;
        width: 80%;
        max-width: 600px;
        position: relative;
        transform: translateY(-20px);
        transition: transform 0.3s ease;
    }

    .partner-modal.show {
        display: block;
        opacity: 1;
    }

    .partner-modal.show .partner-modal-content {
        transform: translateY(0);
    }

    .partner-modal-close {
        position: absolute;
        right: 20px;
        top: 10px;
        font-size: 28px;
        font-weight: bold;
        cursor: pointer;
    }

    .partner-modal-close:hover {
        color: #aaa;
    }

    .partner-modal-header {
        text-align: center;
        margin-bottom: 20px;
    }

    .partner-modal-logo {
        max-height: 80px;
        max-width: 200px;
        margin-bottom: 15px;
        object-fit: contain;
    }

    .partner-modal-body {
        padding: 10px 0;
    }

    /* Mobile responsiveness */
    @media (max-width: 768px) {
        .partner-modal-content {
            width: 90%;
            margin: 10% auto;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('partnerModal');
    const modalName = document.getElementById('modalPartnerName');
    const modalDescription = document.getElementById('modalPartnerDescription');
    const modalLogo = document.getElementById('modalPartnerLogo');
    const closeBtn = document.querySelector('.partner-modal-close');

    // Get all partner items
    const partners = document.querySelectorAll('.partner-logo-container');

    // Add event listeners to each partner
    partners.forEach(partner => {
        // Click event
        partner.addEventListener('click', function() {
            const logoImg = this.querySelector('img');
            modalName.textContent = this.dataset.name;
            modalDescription.textContent = this.dataset.description;
            modalLogo.src = logoImg.src;
            modalLogo.alt = logoImg.alt;

            modal.classList.add('show');
            document.body.style.overflow = 'hidden'; // Prevent scrolling
        });

        // Keyboard accessibility
        partner.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' || e.key === ' ') {
                e.preventDefault();
                this.click();
            }
        });
    });

    // Close modal
    closeBtn.addEventListener('click', function() {
        modal.classList.remove('show');
        document.body.style.overflow = '';
    });

    // Close when clicking outside modal
    window.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.remove('show');
            document.body.style.overflow = '';
        }
    });

    // Close with ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('show')) {
            modal.classList.remove('show');
            document.body.style.overflow = '';
        }
    });
});
</script>
