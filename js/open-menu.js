jQuery(document).ready(function($) {
  var $container = $('.container'),
  $menuToggle = $('#menu-toggle');

  // Attaches event handler when #menu-toggle is clicked
  $menuToggle.on('click', function(event) {
    event.preventDefault();
    $container.toggleClass('open-menu');
  });
});