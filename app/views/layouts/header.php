<!DOCTYPE html>
<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title><?= isset($data['title']) ? htmlspecialchars($data['title']) : 'Pristine LMS' ?></title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<script id="tailwind-config">
tailwind.config = {
    darkMode: "class",
    theme: {
        extend: {
            colors: {
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
            borderRadius: {
                "DEFAULT": "0.125rem",
                "lg": "0.25rem",
                "xl": "0.5rem",
                "full": "0.75rem"
            },
            fontFamily: {
                "headline": ["Inter", "sans-serif"],
                "body": ["Inter", "sans-serif"],
                "label": ["Inter", "sans-serif"]
            },
            backgroundImage: {
                'primary-gradient': 'linear-gradient(135deg, #00288e 0%, #1e40af 100%)'
            }
        }
    }
}
</script>
<style>
    body { background-color: theme('colors.surface'); }
    .workspace-bg { background-color: theme('colors.surface-container-low'); }
    .ambient-shadow { box-shadow: 0 12px 40px rgba(26, 27, 34, 0.06); }
    .ghost-border { border: 1px solid theme('colors.outline-variant'); opacity: 0.15; }
</style>
</head>
<body class="font-body text-on-surface antialiased flex md:flex-row flex-col min-h-screen relative">
<?php require_once '../app/views/layouts/sidebar.php'; ?>
