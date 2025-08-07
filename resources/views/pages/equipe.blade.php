@extends('layout.base')
@section('title', 'Notre Equipe')
@section('page_title', 'Notre Equipe')

@section('content')
    @include('layout.partials.banner')


    {{-- <div class="container content-space-2">
        <!-- Heading -->
        <div class="w-lg-65 text-center mx-lg-auto mb-5 mb-sm-7 mb-lg-9">
            <h2 class="display-5 mb-3">Notre Equipe</h2>
            <p class="lead">Rencontrez notre Equipe</p>
        </div>
        <!-- End Heading -->

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 g-4">
            @foreach ($members as $member)
                <div class="col">
                    <!-- Team Card -->
                    <div class="card card-transition h-100">
                        <div class="card-body text-center p-4">
                            <!-- Avatar -->
                            <div class="avatar avatar-xxl position-relative mb-3">
                                <img class="avatar-img rounded-3" src="{{ asset('storage/' . $member->photo) }}"
                                    alt="{{ $member->name }}">

                                <!-- Socials -->
                                <div
                                    class="position-absolute top-0 start-0 w-100 h-100 bg-dark rounded-3 opacity-0 d-flex justify-content-center align-items-center transition-all team-socials">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a class="btn btn-icon btn-sm btn-soft-light rounded-circle"
                                                href="{{ $member->facebook ?? '#' }}">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn btn-icon btn-sm btn-soft-light rounded-circle"
                                                href="{{ $member->twitter ?? '#' }}">
                                                <i class="bi bi-twitter-x"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn btn-icon btn-sm btn-soft-light rounded-circle"
                                                href="{{ $member['socials']['instagram'] ?? '#' }}">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="btn btn-icon btn-sm btn-soft-light rounded-circle"
                                                href="{{ $member->linkedin ?? '#' }}">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End Socials -->
                            </div>
                            <!-- End Avatar -->

                            <h5 class="mb-1">{{ $member->noms }}</h5>
                            <span class="d-block text-body">{{ $member->fonction }}</span>
                        </div>
                    </div>
                    <!-- End Team Card -->
                </div>
            @endforeach
        </div>
        <!-- End Row -->
    </div>

    <style>
        .card-transition {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        .card-transition:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        .team-socials {
            transition: opacity 0.3s ease;
            background: rgba(0, 0, 0, 0.7) !important;
        }

        .avatar:hover .team-socials {
            opacity: 1;
        }

        .btn-soft-light {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.1);
            border-color: transparent;
        }

        .btn-soft-light:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }
    </style> --}}

    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Notre Équipe - Design Épuré</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Inter', sans-serif;
                background-color: #f8fafc;
                color: #334155;
                line-height: 1.6;
                padding: 20px;
            }

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
    </head>

    <body>
        <section class="team-section">
            <div class="section-header">
                <h2>Notre Équipe</h2>
                <p>Rencontrez notre équipe d'experts passionnés</p>
            </div>

            <div class="team-grid">
                <!-- Member 1 -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                            alt="Sophie Martin">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Sophie Martin</h3>
                        <p class="member-position">Directrice Créative</p>
                        <div class="social-links">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Member 2 -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                            alt="Thomas Dubois">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Thomas Dubois</h3>
                        <p class="member-position">Responsable Technique</p>
                        <div class="social-links">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Member 3 -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=776&q=80"
                            alt="Camille Bernard">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Camille Bernard</h3>
                        <p class="member-position">Cheffe de Projet</p>
                        <div class="social-links">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Member 4 -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                            alt="Alexandre Petit">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Alexandre Petit</h3>
                        <p class="member-position">Développeur Senior</p>
                        <div class="social-links">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Member 5 -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=776&q=80"
                            alt="Julie Moreau">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Julie Moreau</h3>
                        <p class="member-position">Designer UX/UI</p>
                        <div class="social-links">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Member 6 -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="https://images.unsplash.com/photo-1590086782792-42dd2350140d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=774&q=80"
                            alt="Marc Lefevre">
                    </div>
                    <div class="member-info">
                        <h3 class="member-name">Marc Lefevre</h3>
                        <p class="member-position">Directeur Marketing</p>
                        <div class="social-links">
                            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>

    </html>
@endsection
