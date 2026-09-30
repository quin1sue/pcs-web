<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pixel & Code Society - Where creativity meets technology.">
    <title>Pixel & Code Society</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Tailwind Play CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        white: '#FFFFFF',
                        bg: '#F8FAFF',
                        surface: '#EFF4FF',
                        blue: {
                            DEFAULT: '#2563EB',
                            light: '#3B82F6',
                            dark: '#1D4ED8'
                        },
                        cyan: {
                            DEFAULT: '#22D3EE',
                            dark: '#0891B2'
                        },
                        dark: {
                            DEFAULT: '#061225',
                            surface: '#0B1B35'
                        },
                        text: {
                            DEFAULT: '#0F172A',
                            muted: '#475569',
                            light: '#FFFFFF'
                        },
                        border: {
                            DEFAULT: '#BFDBFE',
                            strong: '#2563EB'
                        }
                    },
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                        mono: ['JetBrains Mono', 'monospace'],
                    }
                }
            }
        }
    </script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="public/assets/css/global.css">
</head>
