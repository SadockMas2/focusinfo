@extends('layout.base')
@section('title', 'Notre Equipe')
@section('page_title', 'Notre Equipe')
@section('active_page_desc', 'Rencontrez notre Equipe')
@section('content')
    @include('layout.partials.banner')




    <style>
        .team-section {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }

        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 16px;
            letter-spacing: -0.5px;
        }

        .section-header p {
            font-size: 1.25rem;
            color: #64748b;
            max-width: 600px;
            margin: 0 auto;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .team-member {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .team-member:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.1);
        }

        .member-photo {
            width: 100%;
            padding-top: 100%;
            position: relative;
            overflow: hidden;
        }

        .member-photo img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .team-member:hover .member-photo img {
            transform: scale(1.05);
        }

        .member-info {
            padding: 24px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .member-name {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 8px;
        }

        .member-position {
            color: #64748b;
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-top: auto;
            padding-top: 16px;
            border-top: 1px solid #f1f5f9;
            opacity: 0.7;
            transition: opacity 0.3s ease;
        }

        .team-member:hover .social-links {
            opacity: 1;
        }

        .social-icon {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f1f5f9;
            color: #475569;
            transition: all 0.3s ease;
        }

        .social-icon:hover {
            transform: translateY(-3px);
            background: #0ea5e9;
            color: white;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .team-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }

            .section-header h2 {
                font-size: 2rem;
            }

            .section-header p {
                font-size: 1.1rem;
            }
        }
    </style>
    <section class="team-section">
        <div class="section-header">
            <h2>Notre Équipe</h2>
            <p>Rencontrez notre équipe d'experts passionnés</p>
        </div>

        <div class="team-grid">
            <!-- Member 1 -->
            @foreach ($members as $membre)
                <div class="team-member">
                    <div class="member-photo">
                        <img src="{{ asset('storage/' . $membre->photo) }}" alt="{{ $membre->noms }}">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name text-center">{{ $membre->noms }}</h3>
                        <p class="member-position text-center">{{ $membre->fonction }}</p>
                        <div class="social-links">
                            <a href="{{ $membre->facebook }}" target="_blank" class="social-icon"><i
                                    class="bi-facebook"></i></a>
                            <a href="{{ $membre->twitter }}" target="_blank" class="social-icon"><i
                                    class="bi-twitter"></i></i></a>
                            <a href="{{ $membre->instagram }}" target="_blank" class="social-icon"><i
                                    class="bi-instagram"></i></i></a>
                            <a href="{{ $membre->linkedin }}" target="_blank"class="social-icon"><i
                                    class="bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>

    @include('layout.partials.newsletter')
@endsection
