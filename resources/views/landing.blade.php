<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>HandymanMS</title>
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs" defer></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    html {
      scroll-behavior: smooth;
    }
  </style>
</head>
<body
x-data="{
  darkMode: false,
  showLogin: false,
  showRegister: false,
  currentSlide: 0,
  slides: [
    {
      img: '{{ asset('images/ac.jpeg') }}',
      title: 'AC Repair',
      subtitle: 'Quick and efficient air conditioning service'
    },
    {
      img: '{{ asset('images/e1.jpeg') }}',
      title: 'Electrical Solutions',
      subtitle: 'Certified electricians at your service'
    },
    {
      img: '{{ asset('images/gardening.png') }}',
      title: 'Gardening',
      subtitle: 'Professional garden maintenance & care'
    },
    {
      img: '{{ asset('images/paint.png') }}',
      title: 'Painting Services',
      subtitle: 'Transform your home inside and out'
    },
    {
      img: '{{ asset('images/Pantry_Cubed.jpeg') }}',
      title: 'Pantry Cubed',
      subtitle: 'Smart, space-saving pantry solutions for modern living'
    }
  ],
  next() { this.currentSlide = (this.currentSlide + 1) % this.slides.length },
  prev() { this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length },
  goTo(i) { this.currentSlide = i },
  init() { setInterval(() => this.next(), 4000) }
}"
x-init="init"
:class="darkMode ? 'bg-gray-900 text-gray-100' : 'bg-gray-100 text-gray-900'"
class="transition-colors duration-500 min-h-screen flex flex-col"
>
  @include('sections.navbar')
  @include('sections.slider')
  @include('sections.about')
  @include('sections.services')
  @include('sections.gallery')
  @include('sections.contact')
  @include('sections.login-modal')
  @include('sections.register-modal')
  @include('sections.footer')
</body>
</html>