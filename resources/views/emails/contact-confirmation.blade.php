<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de réception - {{ $settings->site_name }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #2563eb;
            --primary-light: #3b82f6;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #64748b;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background-color: #f1f5f9;
            color: var(--dark);
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 2rem auto;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .header {
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            padding: 2.5rem 2rem;
            text-align: center;
            color: white;
        }

        .logo {
            height: 50px;
            margin-bottom: 1rem;
        }

        .content {
            padding: 2.5rem;
        }

        h1 {
            color: var(--primary);
            margin-top: 0;
            font-size: 1.75rem;
            font-weight: 700;
        }

        p {
            color: var(--gray);
            margin-bottom: 1.5rem;
        }

        blockquote {
            background-color: #f8fafc;
            border-left: 4px solid var(--primary);
            padding: 1.25rem;
            margin: 1.5rem 0;
            font-style: italic;
            color: var(--dark);
            border-radius: 0 8px 8px 0;
        }

        .footer {
            background-color: #f1f5f9;
            padding: 2rem;
            text-align: center;
            border-top: 1px solid #e2e8f0;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin: 1.5rem 0;
        }

        .social-links a {
            color: var(--gray);
            font-size: 1.5rem;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .social-links a:hover {
            color: var(--primary);
            transform: translateY(-3px);
        }

        .copyright {
            color: var(--gray);
            font-size: 0.875rem;
            margin-top: 1rem;
        }

        .highlight {
            color: var(--primary);
            font-weight: 600;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <!-- Remplacez par votre logo -->
            <img src="{{ 'storage/' . $settings->logo }}" alt="Logo" class="logo">
            <h1>Confirmation de réception</h1>
        </div>

        <div class="content">
            <h1>Merci pour votre message, <span class="highlight">{{ $contact->noms }}</span> !</h1>
            <p>Nous avons bien reçu votre message et vous en remercions. Notre équipe va le traiter dans les plus brefs
                délais.</p>

            <p>Voici le contenu de votre message :</p>
            <blockquote>{{ $contact->message }}</blockquote>

            <p>Nous vous contacterons à l'adresse email ou par téléphone que vous nous avez communiqué.</p>
            <p>En attendant, vous pouvez explorer notre <a href="#"
                    style="color: var(--primary); text-decoration: none;">site web</a> ou consulter nos dernières
                actualités.</p>
        </div>

        <div class="footer">
            <div class="social-links">
                <a href="{{ $settings->facebook }}" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ $settings->twitter }}" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="{{ $settings->linkedin }}" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                <a href="{{ $settings->instagram }}" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            </div>

            <p>Restons connectés</p>
            <p><small>{{ $settings->site_name }}</small></p>

            <p class="copyright">
                © {{ date('Y') }} {{ $settings->site_name }}. Tous droits réservés.<br>
                <a href="#" style="color: var(--gray); text-decoration: none;">Politique de confidentialité</a> |
                <a href="#" style="color: var(--gray); text-decoration: none;">Conditions d'utilisation</a>
            </p>
        </div>
    </div>
</body>

</html>
