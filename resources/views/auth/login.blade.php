<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html, body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #065F46 0%, #0E7A4F 50%, #10B981 100%);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
            perspective: 1200px;
        }

        #particleCanvas {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            pointer-events: none;
        }

        /* Main Container */
        .auth-container {
            position: relative;
            z-index: 10;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .auth-card {
            width: 100%;
            max-width: 480px;
            background: rgba(255, 255, 255, 0.99);
            backdrop-filter: blur(30px);
            border-radius: 32px;
            box-shadow: 0 30px 90px rgba(0, 0, 0, 0.12), 0 0 100px rgba(16, 185, 129, 0.15);
            border: 1.5px solid rgba(255, 255, 255, 0.6);
            padding: 70px 50px;
            transition: all 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            animation: cardSlideIn 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
            will-change: transform, box-shadow;
        }

        .auth-card:hover {
            transform: translateY(-12px) scale(1.01);
            box-shadow: 0 40px 120px rgba(0, 0, 0, 0.15), 0 0 150px rgba(16, 185, 129, 0.3);
        }

        @keyframes cardSlideIn {
            from {
                opacity: 0;
                transform: translateY(50px) rotateX(-10deg);
            }
            to {
                opacity: 1;
                transform: translateY(0) rotateX(0deg);
            }
        }

        /* Tab Buttons */
        .tab-buttons {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-bottom: 40px;
            padding: 8px;
            background: linear-gradient(135deg, rgba(16, 185, 129, 0.05) 0%, rgba(16, 185, 129, 0.02) 100%);
            border-radius: 20px;
        }

        .tab-btn {
            flex: 1;
            padding: 16px 28px;
            font-weight: 700;
            font-size: 14px;
            letter-spacing: 0.6px;
            border-radius: 16px;
            border: 2px solid transparent;
            cursor: pointer;
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            background: transparent;
            color: #9CA3AF;
            text-transform: uppercase;
            position: relative;
            overflow: hidden;
            will-change: all;
        }

        .tab-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, #0E7A4F 0%, #10B981 100%);
            transition: left 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
            z-index: -1;
            border-radius: 16px;
        }

        .tab-btn.active {
            color: white;
            border-color: rgba(16, 185, 129, 0.3);
            box-shadow: 0 10px 30px rgba(16, 185, 129, 0.25);
            transform: scale(1.05);
        }

        .tab-btn.active::before {
            left: 0;
        }

        .tab-btn:hover:not(.active) {
            color: #0E7A4F;
            transform: translateY(-3px);
        }

        /* Divider */
        .divider {
            height: 1.5px;
            background: linear-gradient(90deg, transparent 0%, rgba(16, 185, 129, 0.2) 25%, rgba(16, 185, 129, 0.2) 75%, transparent 100%);
            margin: 40px 0;
            position: relative;
            animation: expandWidth 0.8s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        @keyframes expandWidth {
            from {
                width: 0;
                margin-left: 50%;
                margin-right: 50%;
            }
            to {
                width: 100%;
                margin-left: 0;
                margin-right: 0;
            }
        }

        .divider::before {
            content: '';
            position: absolute;
            width: 6px;
            height: 6px;
            background: linear-gradient(135deg, #0E7A4F, #10B981);
            border-radius: 50%;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            box-shadow: 0 0 20px rgba(16, 185, 129, 0.5);
            animation: pulseDot 2s ease-in-out infinite;
        }

        @keyframes pulseDot {
            0%, 100% {
                transform: translate(-50%, -50%) scale(1);
                box-shadow: 0 0 20px rgba(16, 185, 129, 0.5);
            }
            50% {
                transform: translate(-50%, -50%) scale(1.2);
                box-shadow: 0 0 30px rgba(16, 185, 129, 0.8);
            }
        }

        /* Form Styles */
        form {
            animation: fadeInForm 0.6s ease-out 0.2s backwards;
        }

        @keyframes fadeInForm {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        .form-group {
            margin-bottom: 28px;
            animation: slideInField 0.5s ease-out forwards;
            opacity: 0;
        }

        .form-group:nth-child(1) { animation-delay: 0.25s; }
        .form-group:nth-child(2) { animation-delay: 0.35s; }
        .form-group:nth-child(3) { animation-delay: 0.45s; }
        .form-group:nth-child(4) { animation-delay: 0.55s; }

        @keyframes slideInField {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        /* Labels */
        label {
            display: block;
            margin-bottom: 12px;
            color: #1F2937;
            font-weight: 700;
            font-size: 13px;
            letter-spacing: 0.4px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        /* Inputs */
        input[type="email"],
        input[type="password"],
        input[type="text"] {
            width: 100%;
            padding: 16px 18px;
            border: 2px solid #E5E7EB;
            border-radius: 14px;
            font-size: 14px;
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            background: linear-gradient(135deg, #F9FAFB 0%, #F3F4F6 100%);
            font-family: 'Poppins', sans-serif;
            color: #1F2937;
            will-change: border-color, box-shadow, background;
        }

        input[type="email"]::placeholder,
        input[type="password"]::placeholder,
        input[type="text"]::placeholder {
            color: #D1D5DB;
            transition: all 0.3s ease;
        }

        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="text"]:focus {
            outline: none;
            border-color: #10B981;
            background: linear-gradient(135deg, #F0FFFE 0%, #F0FFFE 100%);
            box-shadow: 0 0 0 6px rgba(16, 185, 129, 0.08), inset 0 2px 4px rgba(0, 0, 0, 0.03);
            transform: translateY(-2px);
        }

        /* Checkbox */
        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 14px;
            margin: 32px 0;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            will-change: transform;
        }

        .checkbox-group:hover {
            transform: translateX(6px);
        }

        input[type="checkbox"] {
            width: 22px;
            height: 22px;
            cursor: pointer;
            accent-color: #0E7A4F;
            border-radius: 8px;
            border: 2.5px solid #D1FAE5;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            flex-shrink: 0;
        }

        input[type="checkbox"]:hover {
            border-color: #10B981;
            box-shadow: 0 0 12px rgba(16, 185, 129, 0.3);
            transform: scale(1.1);
        }

        input[type="checkbox"]:checked {
            background: linear-gradient(135deg, #0E7A4F, #10B981);
            border-color: #10B981;
            box-shadow: 0 0 12px rgba(16, 185, 129, 0.4);
        }

        .checkbox-label {
            color: #6B7280;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            text-transform: none !important;
            user-select: none;
        }

        /* Button Container */
        .button-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            margin-top: 36px;
            flex-wrap: wrap;
            animation: slideInField 0.5s ease-out 0.65s backwards;
        }

        .forgot-link {
            color: #0E7A4F;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            position: relative;
            letter-spacing: 0.3px;
            text-transform: uppercase;
        }

        .forgot-link::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2.5px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(90deg, #0E7A4F, #10B981);
            transition: width 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            border-radius: 2px;
        }

        .forgot-link:hover {
            color: #10B981;
            transform: translateX(2px);
        }

        .forgot-link:hover::after {
            width: 100%;
        }

        /* Buttons */
        button[type="submit"],
        .btn-submit {
            padding: 16px 40px;
            background: linear-gradient(135deg, #0E7A4F 0%, #10B981 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-weight: 800;
            font-size: 13px;
            letter-spacing: 0.6px;
            cursor: pointer;
            transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
            box-shadow: 0 8px 25px rgba(16, 185, 129, 0.25);
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            will-change: all;
        }

        button[type="submit"]::before,
        .btn-submit::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.15);
            transition: left 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        button[type="submit"]:hover,
        .btn-submit:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 15px 45px rgba(16, 185, 129, 0.35);
        }

        button[type="submit"]:hover::before,
        .btn-submit:hover::before {
            left: 100%;
        }

        button[type="submit"]:active,
        .btn-submit:active {
            transform: translateY(-2px) scale(0.98);
        }

        /* Form Footer */
        .form-footer {
            margin-top: 32px;
            text-align: center;
            padding-top: 32px;
            border-top: 2px solid #F3F4F6;
            animation: slideInField 0.5s ease-out 0.75s backwards;
        }

        .form-footer p {
            color: #6B7280;
            font-size: 14px;
            font-weight: 500;
        }

        .form-footer a {
            color: #0E7A4F;
            text-decoration: none;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            position: relative;
            letter-spacing: 0.2px;
        }

        .form-footer a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background: #10B981;
            transition: width 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
        }

        .form-footer a:hover {
            color: #10B981;
            transform: translateX(2px);
        }

        .form-footer a:hover::after {
            width: 100%;
        }

        /* Responsive */
        @media (max-width: 640px) {
            .auth-card {
                padding: 50px 35px;
                border-radius: 28px;
            }

            .tab-btn {
                padding: 14px 22px;
                font-size: 12px;
            }

            .button-container {
                flex-direction: column;
                gap: 14px;
            }

            .forgot-link {
                order: 3;
                width: 100%;
                text-align: center;
            }

            button[type="submit"],
            .btn-submit {
                width: 100%;
            }

            label {
                font-size: 12px;
            }

            input[type="email"],
            input[type="password"],
            input[type="text"] {
                padding: 14px 16px;
                font-size: 13px;
            }

            .tab-buttons {
                gap: 12px;
                margin-bottom: 30px;
            }

            .divider {
                margin: 32px 0;
            }

            .form-group {
                margin-bottom: 22px;
            }
        }

        @media (max-width: 480px) {
            .auth-container {
                padding: 15px;
            }

            .auth-card {
                padding: 40px 25px;
                border-radius: 24px;
            }

            .auth-card:hover {
                transform: translateY(-8px) scale(1);
            }

            .divider {
                margin: 28px 0;
            }

            .form-group {
                margin-bottom: 18px;
            }

            .button-container {
                margin-top: 28px;
                gap: 12px;
            }

            .form-footer {
                margin-top: 24px;
                padding-top: 24px;
            }

            button[type="submit"],
            .btn-submit {
                padding: 14px 32px;
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <canvas id="particleCanvas"></canvas>

    <div class="auth-container">
        <div class="auth-card" x-data="{ activeForm: 'login' }">
            
            <div class="tab-buttons">
                <button 
                    type="button"
                    @click="activeForm = 'login'"
                    :class="{'active': activeForm === 'login'}"
                    class="tab-btn"
                >
                    Login
                </button>
                <button 
                    type="button"
                    @click="activeForm = 'register'"
                    :class="{'active': activeForm === 'register'}"
                    class="tab-btn"
                >
                    Register
                </button>
            </div>

            <div class="divider"></div>

            <form 
                method="POST" 
                action="{{ route('login') }}"
                x-show="activeForm === 'login'" 
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
            >
                @csrf

                <div class="form-group">
                    <label for="login_email">Email</label>
                    <input id="login_email" type="email" name="email" value="" required autofocus autocomplete="username" placeholder="your@email.com" />
                </div>

                <div class="form-group">
                    <label for="login_password">Password</label>
                    <input id="login_password" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
                </div>

                <div class="checkbox-group">
                    <input id="remember_me" type="checkbox" name="remember">
                    <label for="remember_me" class="checkbox-label">Remember me</label>
                </div>

                <div class="button-container">
                    <a href="#" class="forgot-link">Forgot Password?</a>
                    <button type="submit" class="btn-submit">Login</button>
                </div>
                
                <div class="form-footer">
                    <p>Don't have an account? <a href="#" @click.prevent="activeForm = 'register'">Register now</a></p>
                </div>
            </form>

            <form 
                method="POST" 
                action="{{ route('register') }}"
                x-show="activeForm === 'register'" 
                x-cloak
                x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
            >
                @csrf

                <div class="form-group">
                    <label for="register_name">Full Name</label>
                    <input id="register_name" type="text" name="name" value="" required autofocus autocomplete="name" placeholder="Your name" />
                </div>

                <div class="form-group">
                    <label for="register_email">Email</label>
                    <input id="register_email" type="email" name="email" value="" required autocomplete="username" placeholder="your@email.com" />
                </div>

                <div class="form-group">
                    <label for="register_password">Password</label>
                    <input id="register_password" type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Confirm Password</label>
                    <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" />
                </div>

                <div class="button-container">
                    <a href="#" @click.prevent="activeForm = 'login'" class="forgot-link">Back to login</a>
                    <button type="submit" class="btn-submit">Register</button>
                </div>

                <div class="form-footer">
                    <p>Already registered? <a href="#" @click.prevent="activeForm = 'login'">Login here</a></p>
                </div>
            </form>
        </div>
    </div>

    <script>
        const canvas = document.getElementById('particleCanvas');
        const ctx = canvas.getContext('2d');
        
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;

        const particles = [];
        const particleCount = 40;

        class Particle {
            constructor() {
                this.x = Math.random() * canvas.width;
                this.y = canvas.height + 10;
                this.size = Math.random() * 2.5 + 0.8;
                this.speedY = Math.random() * 0.4 + 0.15;
                this.speedX = (Math.random() - 0.5) * 0.3;
                this.opacity = Math.random() * 0.4 + 0.25;
                this.decay = Math.random() * 0.0008 + 0.0003;
            }

            update() {
                this.y -= this.speedY;
                this.x += this.speedX;
                this.opacity -= this.decay;
            }

            draw() {
                ctx.fillStyle = `rgba(16, 185, 129, ${this.opacity})`;
                ctx.beginPath();
                ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                ctx.fill();
            }

            isAlive() {
                return this.opacity > 0 && this.y > 0;
            }
        }

        function initParticles() {
            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);

            for (let i = particles.length - 1; i >= 0; i--) {
                particles[i].update();
                particles[i].draw();

                if (!particles[i].isAlive()) {
                    particles.splice(i, 1);
                }
            }

            if (particles.length < particleCount * 0.75) {
                particles.push(new Particle());
            }

            requestAnimationFrame(animateParticles);
        }

        window.addEventListener('resize', () => {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        });

        initParticles();
        animateParticles();
    </script>
</body>
</html>