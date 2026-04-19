<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sistem Informasi Manajemen Laundry - Login</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-surface-variant": "#444653",
                    "on-tertiary": "#ffffff",
                    "surface-tint": "#3755c3",
                    "surface-dim": "#dad9e3",
                    "surface-bright": "#fbf8ff",
                    "primary-fixed": "#dde1ff",
                    "inverse-surface": "#2f3037",
                    "surface-container-low": "#f4f2fc",
                    "outline": "#757684",
                    "on-secondary-fixed": "#002113",
                    "on-background": "#1a1b22",
                    "on-tertiary-fixed-variant": "#653e00",
                    "on-tertiary-container": "#ffa929",
                    "on-primary-fixed": "#001453",
                    "on-secondary-container": "#00714d",
                    "tertiary-container": "#6b4200",
                    "error": "#ba1a1a",
                    "secondary-fixed-dim": "#4edea3",
                    "on-surface": "#1a1b22",
                    "on-secondary-fixed-variant": "#005236",
                    "secondary-fixed": "#6ffbbe",
                    "inverse-on-surface": "#f1f0fa",
                    "tertiary": "#4c2e00",
                    "primary-container": "#1e40af",
                    "surface": "#fbf8ff",
                    "secondary-container": "#6cf8bb",
                    "primary": "#00288e",
                    "inverse-primary": "#b8c4ff",
                    "on-primary": "#ffffff",
                    "outline-variant": "#c4c5d5",
                    "on-primary-container": "#a8b8ff",
                    "on-secondary": "#ffffff",
                    "on-error-container": "#93000a",
                    "surface-variant": "#e3e1eb",
                    "background": "#fbf8ff",
                    "secondary": "#006c49",
                    "on-primary-fixed-variant": "#173bab",
                    "tertiary-fixed": "#ffddb8",
                    "on-tertiary-fixed": "#2a1700",
                    "surface-container-highest": "#e3e1eb",
                    "surface-container-high": "#e8e7f1",
                    "surface-container-lowest": "#ffffff",
                    "error-container": "#ffdad6",
                    "on-error": "#ffffff",
                    "primary-fixed-dim": "#b8c4ff",
                    "tertiary-fixed-dim": "#ffb95f",
                    "surface-container": "#eeedf7"
            },
            "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
            },
            "fontFamily": {
                    "headline": ["Inter"],
                    "body": ["Inter"],
                    "label": ["Inter"]
            }
          },
        },
      }
    </script>
<style>
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-surface-container-low min-h-screen flex items-center justify-center p-4">
<!-- Login Card -->
<main class="bg-surface-container-lowest w-full max-w-md p-8 rounded-xl shadow-[0_12px_40px_rgba(26,27,34,0.06)] relative overflow-hidden">
<!-- Decorative Header Element -->
<div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-primary to-primary-container"></div>
<!-- Logo & Title -->
<div class="text-center mb-8 pt-4">
<div class="w-16 h-16 bg-primary-container text-on-primary-container rounded-full flex items-center justify-center mx-auto mb-4">
<span class="material-symbols-outlined text-3xl" data-icon="local_laundry_service">local_laundry_service</span>
</div>
<h1 class="text-[1.75rem] font-semibold text-on-surface tracking-tight leading-tight">Sistem Informasi Manajemen Laundry</h1>
<p class="text-[0.875rem] text-on-surface-variant mt-2">Masuk ke akun Anda</p>
</div>

<?php if(isset($data['error'])): ?>
<div class="bg-error-container text-on-error-container p-3 rounded-md mb-4 text-sm text-center">
    <?= htmlspecialchars($data['error']) ?>
</div>
<?php endif; ?>

<!-- Login Form -->
<form class="space-y-6" method="POST" action="<?= BASE_URL ?>auth/login">
<!-- Username Input -->
<div class="space-y-2">
<label class="block text-[0.875rem] font-medium text-on-surface" for="username">Username</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-on-surface-variant">
<span class="material-symbols-outlined text-[1.25rem]" data-icon="person">person</span>
</div>
<input class="block w-full pl-10 pr-3 py-3 bg-surface-container-highest border-none rounded-md text-[0.875rem] text-on-surface placeholder-on-surface-variant/70 focus:bg-surface-container-lowest focus:ring-0 focus:outline-[rgba(0,40,142,0.4)] focus:outline focus:outline-2 transition-all duration-200" id="username" name="username" placeholder="Masukkan username" type="text" required/>
</div>
</div>
<!-- Password Input -->
<div class="space-y-2">
<label class="block text-[0.875rem] font-medium text-on-surface" for="password">Password</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none text-on-surface-variant">
<span class="material-symbols-outlined text-[1.25rem]" data-icon="lock">lock</span>
</div>
<input class="block w-full pl-10 pr-3 py-3 bg-surface-container-highest border-none rounded-md text-[0.875rem] text-on-surface placeholder-on-surface-variant/70 focus:bg-surface-container-lowest focus:ring-0 focus:outline-[rgba(0,40,142,0.4)] focus:outline focus:outline-2 transition-all duration-200" id="password" name="password" placeholder="Masukkan password" type="password" required/>
</div>
</div>
<!-- Remember Me & Forgot Password (Optional layout inclusion for professional look) -->
<div class="flex items-center justify-between">
<div class="flex items-center">
<input class="h-4 w-4 text-primary bg-surface-container-highest border-none rounded focus:ring-primary focus:ring-offset-surface-container-lowest" id="remember-me" name="remember-me" type="checkbox"/>
<label class="ml-2 block text-[0.875rem] text-on-surface-variant" for="remember-me">
                        Ingat saya
                    </label>
</div>
<div class="text-[0.875rem]">
<a class="font-medium text-primary hover:text-primary-container transition-colors" href="#">Lupa password?</a>
</div>
</div>
<!-- Submit Button -->
<div>
<button class="w-full flex justify-center py-3 px-4 border border-transparent rounded-md shadow-sm text-[0.875rem] font-semibold text-on-primary bg-gradient-to-br from-primary to-primary-container hover:from-primary-container hover:to-primary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all duration-300" type="submit">
                    Masuk
                </button>
</div>
</form>
</main>
</body></html>