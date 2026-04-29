<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hamza ❤️ Hiba</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            margin: 0;
            background: linear-gradient(135deg, #ff9a9e, #fad0c4, #fbc2eb);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            overflow: hidden;
        }

        .love-wrapper {
            text-align: center;
            color: white;
        }

        .heart {
            position: relative;
            width: 220px;
            height: 220px;
            background: #ff1744;
            transform: rotate(-45deg);
            animation: heartbeat 1.2s infinite;
            box-shadow: 0 0 40px rgba(255, 23, 68, 0.8);
            margin: 80px auto 50px;
        }

        .heart::before,
        .heart::after {
            content: "";
            position: absolute;
            width: 220px;
            height: 220px;
            background: #ff1744;
            border-radius: 50%;
        }

        .heart::before {
            top: -110px;
            left: 0;
        }

        .heart::after {
            left: 110px;
            top: 0;
        }

        .heart-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(45deg);
            z-index: 2;
            text-align: center;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.35);
            width: 260px;
        }

        .heart-text h1 {
            font-size: 2.2rem;
            margin: 0;
        }

        .heart-text p {
            font-size: 1.4rem;
            margin: 8px 0 0;
        }

        @keyframes heartbeat {
            0% {
                transform: rotate(-45deg) scale(1);
            }
            14% {
                transform: rotate(-45deg) scale(1.15);
            }
            28% {
                transform: rotate(-45deg) scale(1);
            }
            42% {
                transform: rotate(-45deg) scale(1.15);
            }
            70% {
                transform: rotate(-45deg) scale(1);
            }
            100% {
                transform: rotate(-45deg) scale(1);
            }
        }

        .floating-heart {
            position: absolute;
            color: rgba(255, 255, 255, 0.75);
            font-size: 28px;
            animation: floatUp 6s linear infinite;
        }

        @keyframes floatUp {
            0% {
                transform: translateY(100vh) scale(0.8);
                opacity: 0;
            }
            20% {
                opacity: 1;
            }
            100% {
                transform: translateY(-120px) scale(1.5);
                opacity: 0;
            }
        }

        .message-card {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(12px);
            border-radius: 20px;
            padding: 25px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }

        .subtitle {
            font-size: 1.2rem;
            letter-spacing: 1px;
        }
    </style>
</head>
<body>

<span class="floating-heart" style="left: 10%; animation-delay: 0s;">❤️</span>
<span class="floating-heart" style="left: 25%; animation-delay: 1s;">💕</span>
<span class="floating-heart" style="left: 45%; animation-delay: 2s;">💖</span>
<span class="floating-heart" style="left: 65%; animation-delay: 3s;">💘</span>
<span class="floating-heart" style="left: 85%; animation-delay: 4s;">❤️</span>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 love-wrapper">

            <div class="message-card">
                <h2 class="mb-3">A Love Story</h2>
                <p class="subtitle mb-4">Made with love in Laravel</p>

                <div class="heart">
                    <div class="heart-text">
                        <h1>Hamza</h1>
                        <p>❤️</p>
                        <h1>Hiba</h1>
                    </div>
                </div>

                <h3 class="mt-4">Forever Together</h3>
                <p class="mt-2 mb-0">
                    Two names, one heart, one beautiful journey.
                </p>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
