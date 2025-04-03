<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('style'); ?>/dekstop.css">
  <title>Document</title>
</head>

<body>
  <nav id="navbar" class="navbar  transparent">
    <h2 class="navigation-h">Biodata</h2>
    <ul>
      <li><a class="navigation" href="#content">Home</a></li>
      <li><a class="navigation" href="#card">Project</a></li>
      <li><a class="navigation" href="#faq">Tentang</a></li>
    </ul>
  </nav>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const navbar = document.getElementById("navbar");

      window.addEventListener("scroll", function() {
        const scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
        const viewportHeight = window.innerHeight;


        if (scrollPosition >= viewportHeight * 0.95) {
          navbar.classList.add("solid");
          navbar.classList.remove("transparent");
        } else {
          navbar.classList.add("transparent");
          navbar.classList.remove("solid");
        }
      });

      window.dispatchEvent(new Event('scroll'));
    });
  </script>
</body>

</html>