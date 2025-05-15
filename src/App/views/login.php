<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Claud Budget</title>
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-9/assets/css/login-9.css">
  <link rel="stylesheet" href="/assets/css/auth.css">
  <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>

  <!-- Login Component -->
  <section class="bg-primary d-flex align-items-center min-vh-100 py-4">
    <div class="container">
      <div class="row gy-4 justify-content-center align-items-center">
        <div class="col-12 col-md-6 col-xl-7">
          <div class="d-flex justify-content-center text-bg-primary">
            <div class="col-12 col-xl-9">
              <img class="mb-4 img-fluid" loading="lazy" src="/assets/images/BC-logo.png" alt="Cloud Budget Logo">
              <h2 class="h1 mb-4">Make your budget fly</h2>
              <p class="lead fw-normal bm-5">With Claud Budget you will take your budget to another level of management. Add incomes, expenses, check balance. Take control of your home budget lightly and comfortable.</p>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-xl-5">
          <div class="card border-0 rounded-4">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="row">
                <div class="col-12">
                  <div class="mb-4">
                    <h3>Sign in</h3>
                    <p>Don't have an account? <a href="/register">Sign up</a></p>
                  </div>
                </div>
              </div>

              <form method="POST">
                <?php include $this->resolve('partials/_csrf.php'); ?>
                <div class="row gy-3 overflow-hidden">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input
                        value="<?php echo e($oldFormData['email'] ?? ''); ?>"
                        name="email"
                        type="email"
                        class="form-control <?php echo array_key_exists('email', $errors) ? 'is-invalid' : ''; ?>"
                        placeholder="name@example.com"
                        required>
                      <label for="email" class="form-label">Email</label>
                      <?php if (array_key_exists('email', $errors)) : ?>
                        <div class="invalid-feedback">
                          <?php echo e($errors['email'][0]); ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input
                        type="password"
                        class="form-control <?php echo array_key_exists('password', $errors) ? 'is-invalid' : ''; ?>"
                        name="password"
                        id="password"
                        placeholder="Password"
                        required>
                      <label for="password" class="form-label">Password</label>
                      <?php if (array_key_exists('password', $errors)) : ?>
                        <div class="invalid-feedback">
                          <?php echo e($errors['password'][0]); ?>
                        </div>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-primary btn-lg" type="submit">Log in now</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>

</html>