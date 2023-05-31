<nav class='navbar'>
    <div class='nav-brand'>
        <a href="/" class='gameon-logo'>
            <img class='logo' src="<?php echo e(url('/images/LOGO/arcade-machine.png')); ?>" alt='logo'>
        </a>
        <a href="/" class='gameon-brand'>GAME-ON</a>
    </div>
    
    <div class='navbar-links'>
        <ul>
            <li><a class='links' href="/">STORE</a></li>
            <li><a class='links' href="/discover">DISCOVER</a></li>
            <li><a class='links' href="/about">ABOUT</a></li>
            <li>
              <?php if(Route::has('login')): ?>
                <div>
                  <?php if(auth()->guard()->check()): ?>
                      <a class="links" href="<?php echo e(url('/dashboard')); ?>" >Dashboard</a>
                  <?php else: ?>
                      <a class="links" href="<?php echo e(route('login')); ?>">Log in</a>
                  <?php endif; ?>
                </div>
              <?php endif; ?>
            </li>
        </ul>
    </div>
    <div class='toggle-button'>
        <span class='line'></span>
        <span class='line'></span>
        <span class='line'></span>
    </div>
</nav><?php /**PATH C:\Users\ploys\OneDrive\Documents\GitHub\gameon-laravel\resources\views/pages/navbar.blade.php ENDPATH**/ ?>