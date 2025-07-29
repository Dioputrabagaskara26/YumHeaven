<!DOCTYPE html>
<html>
<head>
    <title>YumHeaven - Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
        }

        .left-side {
            flex: 1;
            background: #7c5a3a;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .right-side {
            flex: 1;
            background: #f5d6b2;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .logo {
            max-width: 300px;
            width: 100%;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
        }

        .login-title {
            color: #7c5a3a;
            font-size: 2rem;
            margin-bottom: 1rem;
        }

        .welcome-text {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 2rem;
        }

        .form-label {
            color: #333;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-control {
            background: rgba(124, 90, 58, 0.2);
            border: none;
            border-radius: 12px;
            padding: 12px 20px;
            color: #333;
            margin-bottom: 1.5rem;
        }

        .form-control::placeholder {
            color: rgba(124, 90, 58, 0.5);
        }

        .form-control:focus {
            background: rgba(124, 90, 58, 0.2);
            box-shadow: none;
            border: 2px solid #7c5a3a;
        }

        .btn-login {
            width: 100%;
            background: #7c5a3a;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 12px;
            font-weight: 600;
            font-size: 1.1rem;
            margin-top: 1rem;
            transition: all 0.3s ease;
        }

        .btn-login:hover {
            background: #6a4c32;
            color: white;
        }

        .password-container {
            position: relative;
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #7c5a3a;
        }

        .alert {
            border-radius: 12px;
            margin-bottom: 1rem;
        }
    </style>
</head>
<body>
    <div class="left-side">     
        <img src="{{ asset('images/logo.png') }}" alt="YumHeaven Logo" class="logo">
    </div>
    <div class="right-side">
        <div class="login-container">
            <h1 class="login-title">Login</h1>
            <h2 class="welcome-text">Selamat Datang Mimin!</h2>
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" value="admin@yumheaven.com" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <div class="password-container">
                        <input type="password" class="form-control" name="password" id="password" value="admin123" required>
                        <span class="password-toggle" onclick="togglePassword()">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="12" cy="12" r="3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-login">LOGIN</button>
            </form>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        }
    </script>
</body>
</html>
