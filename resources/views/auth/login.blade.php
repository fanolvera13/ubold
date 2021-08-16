<!DOCTYPE html>
<html lang="en">
    @include('auth.partials.head')

    <body class="loading auth-fluid-pages pb-0">
        
    
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />       
        <div class="auth-fluid">
            <!--Auth fluid left content -->
            <div class="auth-fluid-form-box">
                <div class="align-items-center d-flex h-100">
                    <div class="card-body">

                        <!-- Logo -->
                        <div class="auth-brand text-center text-lg-start">
                            <div class="auth-logo">
                                <a href="index.html" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="../assets/images/logo.png" alt="" height="22">
                                    </span>
                                </a>
            
                                <a href="index.html" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="../assets/images/logo.png" alt="" height="22">
                                    </span>
                                </a>
                            </div>
                        </div>

                        <!-- title-->
                        <h4 class="mt-0">Login</h4>
                        <p class="text-muted mb-4">Ingresa tu email y password para acceder.</p>

                        <!-- form -->
                        <form action="{{route('login')}}" method='POST'>
                            @csrf
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email </label>
                                <input name="email" class="form-control" type="email" id="emailaddress" required="" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <a href="auth-recoverpw-2.html" class="text-muted float-end"><small>Olvidaste tu contraseña?</small></a>
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input name="password" type="password" id="password" class="form-control" placeholder="Enter your password">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-check">
                                    <input name="remeberme" type="checkbox" class="form-check-input" id="checkbox-signin">
                                    <label class="form-check-label" for="checkbox-signin">Recordar</label>
                                </div>
                            </div>
                            <div class="text-center d-grid">
                                <button class="btn btn-primary" type="submit">Log In </button>
                            </div>
                            <!-- social-->
                            <div class="text-center mt-4">
                                <p class="text-muted font-16">Encuentranos en redes sociales</p>
                                <ul class="social-list list-inline mt-3">
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                        <!-- end form-->

                        <!-- Footer-->
                        <footer class="footer footer-alt">
                            <p class="text-muted">Aún no eres cliente? <a href="{{ route('register') }}" class="text-muted ms-1"><b>Primero regístrate</b></a></p>
                        </footer>

                    </div> <!-- end .card-body -->
                </div> <!-- end .align-items-center.d-flex.h-100-->
               
            </div>

            @include('auth.partials.right') 
       
        
      

        @include('auth.partials.footer-scripts')
        
    </body>
</html>