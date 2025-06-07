<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4">
                <h1 class="text-center">Login Page</h1>
                <div class="card bg-light">
                    <div class="card-body">
                        <form id="loginForm">
                            <label>Email:</label>
                            <input class="form-control mb-2" type="email" name="email" placeholder="Email..." required>
                            <label>Password:</label>
                            <input class="form-control mb-2" type="password" name="password" placeholder="Password..." required>
                            <button type="submit" class="btn btn-primary" id="btn_submit">
                                <span class="spinner-border spinner-border-sm d-none" aria-hidden="true" id="loading_btn"></span>
                                <span role="status">Login</span>
                            </button>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#registerModal">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- register modal -->
<?= $view->add('login/registerModal/index');  ?>