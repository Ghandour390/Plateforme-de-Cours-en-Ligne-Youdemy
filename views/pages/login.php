<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Youdemy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../src/Core/Utils/style.css" rel="stylesheet">
</head>
<body class="bg-light">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="index.html">Youdemy</a>
        </div>
    </nav>

    <!-- Login Section -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Connexion</h2>
                        
                        <!-- Social Login -->
                        <div class="d-grid gap-2 mb-4">
                            <button class="btn btn-outline-dark">
                                <img src="https://www.google.com/favicon.ico" alt="Google" style="width: 20px; margin-right: 8px;">
                                Continuer avec Google
                            </button>
                        </div>
                        
                        <div class="text-center mb-4">
                            <span class="bg-white px-2 text-muted">ou</span>
                            <hr class="mt-n3">
                        </div>
                        
                        <!-- Login Form -->
                        <form>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control form-control-lg" id="email" placeholder="votre@email.com" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control form-control-lg" id="password" required>
                            </div>
                            
                            <div class="mb-4 d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="remember">
                                    <label class="form-check-label" for="remember">Se souvenir de moi</label>
                                </div>
                                <a href="#" class="text-primary text-decoration-none">Mot de passe oublié ?</a>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Se connecter</button>
                            </div>
                        </form>
                        
                        <!-- Register Link -->
                        <p class="text-center mt-4 mb-0">
                            Pas encore de compte ? 
                            <a href="#" class="text-primary text-decoration-none">S'inscrire</a>
                        </p>
                    </div>
                </div>
                
                <!-- Additional Links -->
                <div class="text-center mt-4">
                    <a href="#" class="text-muted text-decoration-none me-3">Conditions d'utilisation</a>
                    <a href="#" class="text-muted text-decoration-none">Politique de confidentialité</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>