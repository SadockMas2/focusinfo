
@include('layout.includes.head')
<style>
     #custom-slider .slider {
        height: 85vh;
        position: relative;
        overflow: hidden;
    }

    #custom-slider .slider .list .item {
        position: absolute;
        inset: 0;
        overflow: hidden;
        opacity: 0;
        transition: 0.5s;
    }

    #custom-slider .slider .list .item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #custom-slider .slider .list .item::after {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        left: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.1);
    }

    #custom-slider .slider .list .item .content {
        position: absolute;
        top: 40%;
        left: 30%;
        /* transform: translate(-50%, -50%); */
        margin-left:30px;
        width: 90%;
        max-width: 900px;
        z-index: 1;
        color: white;
        text-align: justify;
        padding: 20px;
    }

    #custom-slider .slider .list .item .content h2 {
        font-size: clamp(30px, 5vw, 40px);
        margin: 20px 20px 20px 20px;
        color: white;
        line-height: 1.2;
        font-weight: 700;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.8);
    }

    #custom-slider .slider .list .item .content p {
        font-size: clamp(20px, 3vw, 28px);
        top: 60%;
        left: 30%;
        line-height: 1.4;
        margin: 0;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.8);
        max-width: 800px;
        margin: 0 auto;
        color:white;
    }

    #custom-slider .slider .list .item.active {
        opacity: 1;
        z-index: 10;
    }

    @keyframes showContent {
        to {
            transform: translate(-50%, -50%) scale(1);
            filter: blur(0);
            opacity: 1;
        }
    }

    #custom-slider .slider .list .item.active .content h2,
    #custom-slider .slider .list .item.active .content p {
        /* transform: translate(-50%, -50%) scale(0.8); */
        filter: blur(10px);
        opacity: 0;
        animation: showContent 0.7s 0.5s ease-out 1 forwards;
    }

    #custom-slider .arrows {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 100%;
        display: flex;
        justify-content: space-between;
        padding: 0 20px;
        box-sizing: border-box;
        z-index: 100;
    }

    #custom-slider .arrows button {
        background-color: rgba(255, 255, 255, 0.3);
        border: none;
        width: 60px;
        height: 60px;
        border-radius: 50%;
        font-size: 28px;
        color: white;
        transition: 0.3s;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(5px);
    }

    #custom-slider .arrows button:hover {
        background-color: rgba(255, 255, 255, 0.7);
        color: #000;
        transform: scale(1.1);
    }

    #custom-slider .thumbnail {
        position: absolute;
        bottom: 30px;
        left: 0;
        right: 0;
        z-index: 11;
        display: flex;
        gap: 10px;
        height: 100px;
        padding: 0 20px;
        overflow-x: auto;
        justify-content: center;
        align-items: center;
        box-sizing: border-box;
    }

    #custom-slider .thumbnail::-webkit-scrollbar {
        height: 5px;
    }

    #custom-slider .thumbnail::-webkit-scrollbar-thumb {
        background: rgba(255, 255, 255, 0.5);
        border-radius: 5px;
    }

    #custom-slider .thumbnail .item {
        width: 80px;
        height: 60px;
        filter: brightness(0.5);
        transition: all 0.3s ease;
        flex-shrink: 0;
        position: relative;
        border-radius: 4px;
        overflow: hidden;
        cursor: pointer;
        border: 2px solid transparent;
    }

    #custom-slider .thumbnail .item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    #custom-slider .thumbnail .item:hover {
        filter: brightness(0.8);
    }

    #custom-slider .thumbnail .item.active {
        filter: brightness(1.2);
        border-color: white;
        transform: scale(1.15);
    }

    #custom-slider .thumbnail .item .content {
        position: absolute;        
        padding: 5px;
        color: white;
        font-size: 10px;
        text-align: justify;
        /* background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent); */
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    @media (max-width: 768px) {
        #custom-slider .slider .list .item .content h2 {
            font-size: clamp(28px, 6vw, 40px);
            margin-bottom: 15px;
        }

        #custom-slider .slider .list .item .content p {
            font-size: clamp(16px, 4vw, 20px);
            margin-left: 25px;
        }

        #custom-slider .thumbnail {
            height: 80px;
            bottom: 20px;
        }

        #custom-slider .thumbnail .item {
            width: 60px;
            height: 45px;
        }

        #custom-slider .arrows button {
            width: 50px;
            height: 50px;
            font-size: 24px;
        }
    }
</style>

<div id="custom-slider">
    <div class="slider">
        <!-- Slides -->
        <div class="list">
            @foreach ($slides as $index => $slide)
                <div class="item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $slide->s_image) }}" alt="{{ $slide->s_titre }}" />
                    <div class="content">
                        <h2>{{ $slide->s_titre }}</h2>
                        <p>{{ $slide->s_desc }}</p>

                    </div>
                    {{-- <a class="btn btn-primary">Details</a> --}}
                </div>
            @endforeach
        </div>

        <!-- Boutons -->
        <div class="arrows d-none">
            <button id="prev" aria-label="Previous slide">‹</button>
            <button id="next" aria-label="Next slide">›</button>
        </div>

        <!-- Thumbnails -->
        <div class="thumbnail">
            @foreach ($slides as $index => $slide)
                <div class="item {{ $loop->first ? 'active' : '' }}">
                    <img src="{{ asset('storage/' . $slide->s_image) }}" alt="{{ $slide->s_titre }}" />
                    <div class="content">{{ $slide->s_titre }}</div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<script>
(function() {
    const container = document.querySelector("#custom-slider");
    const slider = container.querySelector(".slider");
    const items = container.querySelectorAll(".slider .list .item");
    const thumbnails = container.querySelectorAll(".thumbnail .item");
    const nextBtn = container.querySelector("#next");
    const prevBtn = container.querySelector("#prev");

    let countItem = items.length;
    let itemActive = 0;
    let autoInterval;
    let isHovering = false;
    let hasCompletedCycle = false;

    function showSlider() {
        // Supprimer les classes active
        container.querySelector(".list .item.active")?.classList.remove("active");
        container.querySelector(".thumbnail .item.active")?.classList.remove("active");

        // Ajouter les classes active
        items[itemActive].classList.add("active");
        thumbnails[itemActive].classList.add("active");

        // Centrer le thumbnail actif
        scrollThumbnailIntoView();

        // Vérifier si nous avons terminé un cycle complet
        if (itemActive === countItem - 1) {
            hasCompletedCycle = true;
        } else if (itemActive === 0 && hasCompletedCycle) {
            // Si nous revenons au début après avoir terminé un cycle, arrêter le défilement
            stopAutoSlide();
            return;
        }

        // Réinitialiser l'intervalle seulement si le défilement automatique est actif
        if (!hasCompletedCycle) {
            resetInterval();
        }
    }

    function scrollThumbnailIntoView() {
        const activeThumb = thumbnails[itemActive];
        activeThumb.scrollIntoView({
            behavior: "smooth",
            inline: "center",
            block: "nearest"
        });
    }

    // Navigation
    nextBtn.onclick = () => {
        itemActive = (itemActive + 1) % countItem;
        showSlider();
    };

    prevBtn.onclick = () => {
        itemActive = (itemActive - 1 + countItem) % countItem;
        showSlider();
    };

    // Cliquer sur les thumbnails
    thumbnails.forEach((thumb, index) => {
        thumb.onclick = () => {
            itemActive = index;
            hasCompletedCycle = false; // Réactiver le défilement si l'utilisateur interagit
            showSlider();
            startInterval(); // Redémarrer le défilement automatique
        };
    });

    // Fonctions pour gérer le défilement automatique
    function startInterval() {
        if (hasCompletedCycle) return;
        
        autoInterval = setInterval(() => {
            if (!isHovering) {
                nextBtn.click();
            }
        }, 5000);
    }

    function resetInterval() {
        clearInterval(autoInterval);
        startInterval();
    }

    function stopAutoSlide() {
        clearInterval(autoInterval);
    }

    // Démarrer l'auto-slide
    startInterval();

    // Gestion du survol
    slider.addEventListener('mouseenter', () => {
        isHovering = true;
        clearInterval(autoInterval);
    });

    slider.addEventListener('mouseleave', () => {
        isHovering = false;
        if (!hasCompletedCycle) {
            resetInterval();
        }
    });

    // Navigation au clavier
    document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight') {
            nextBtn.click();
        } else if (e.key === 'ArrowLeft') {
            prevBtn.click();
        }
    });
})();
</script>
