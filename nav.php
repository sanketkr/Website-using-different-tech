

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="jquery.js"></script>

  <link rel="stylesheet" href="nav.css">




  <nav>

    <div class="logo">
      <img src="logo.png" alt="">
    </div>
    <a href="#" class="button">
      <span class="bar"></span>
      <span class="bar"></span>
      <span class="bar"></span>
    </a>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Blogs</a></li>
      <li><a href="#">Explore</a></li>
      <li><a href="contact.php">Contact</a></li>
    </ul>


  </nav>


  <script type="text/javascript">
    $(document).ready(function() {
      $(".button").click(function() {
        $("ul").toggleClass("show");
      });
    });
  </script>
