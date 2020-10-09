<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&display=swap" rel="stylesheet">
    <title>
        <?php bloginfo( 'name'); ?>
    </title>
    <?php wp_head(); ?>
    <script>        
        $('.carousel.carousel-multi-item.v-2 .carousel-item').each(function () {
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));
        
          for (var i = 0; i < 4; i++) {
            next = next.next();
            if (!next.length) {
              next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));
          }
        });
        </script>
</head>
<body data-spy="scroll" data-target="#navbar-example" data-offset="85">