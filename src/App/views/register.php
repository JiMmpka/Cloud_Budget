<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Claud Budget</title>
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/registrations/registration-7/assets/css/registration-7.css">

  <link rel="stylesheet" href="/assets/css/auth.css">
  <link rel="stylesheet" href="/assets/css/main.css">
</head>

<body>

  <!-- Registration Component -->
  <section class="bg-light pt-3 p-md-4 p-xl-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6 col-xxl-5">
          <div class="card border border-light-subtle rounded-4">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="row">
                <div class="col-12">
                  <div class="mb-5">
                    <div class="text-center mb-3">
                      <a href="#!">
                        <img class="img-fluid" src="/assets/images/BC-logo.png" alt="Cloud Budget Logo">
                      </a>
                    </div>
                    <h2 class="h4 text-center">Registration</h2>
                    <h3 class="fs-6 fw-normal text-secondary text-center m-0">Enter your details to register</h3>
                  </div>
                </div>
              </div>

              <form method="POST">
                <?php include $this->resolve('partials/_csrf.php'); ?>
                <div class="row gy-3 overflow-hidden">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" name="name" id="name" placeholder="Name" required
                        value="<?php echo e($oldFormData['name'] ?? ''); ?>">
                      <label for="name" class="form-label">Name</label>

                      <?php if (array_key_exists('name', $errors)) : ?>
                        <div class="error">
                          <?php echo e($errors['name'][0]); ?>
                        </div>
                      <?php endif; ?>

                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required
                        value="<?php echo e($oldFormData['email'] ?? ''); ?>">
                      <label for="email" class="form-label">Email</label>

                      <?php if (array_key_exists('email', $errors)) : ?>
                        <div class="error">
                          <?php echo e($errors['email'][0]); ?>
                        </div>
                      <?php endif; ?>

                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="password"
                        class="form-control"
                        name="password"
                        id="password"
                        placeholder="Password"
                        required>
                      <label for="password" class="form-label">Password</label>

                      <?php if (array_key_exists('password', $errors)) : ?>
                        <div class="error">
                          <?php echo e($errors['password'][0]); ?>
                        </div>
                      <?php endif; ?>

                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">

                      <input type="password" class="form-control" name="confirmPassword" id="confirmPassword" placeholder="Confirm password" required>
                      <label for="confirmPassword" class="form-label">Confirm password</label>
                      <?php if (array_key_exists('confirmPassword', $errors)) : ?>
                        <div class="error">
                          <?php echo e($errors['confirmPassword'][0]); ?>
                        </div>
                      <?php endif; ?>

                    </div>
                  </div>

                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn bsb-btn-xl btn-primary" type="submit">Sign up</button>
                    </div>
                  </div>
                </div>
              </form>

              <div class="row">
                <div class="col-12">
                  <hr class="mt-4 mb-4 border-secondary-subtle">
                  <p class="m-0 text-secondary text-center">Already have an account? <a href="/" class="link-primary text-decoration-none">Sign in</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>