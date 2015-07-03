jQuery(document).ready(function($) {
  var $sidebar = $('#sidebar'),
  $menuToggle = $('#menu-toggle');

  // Attaches event handler when #menu-toggle is clicked
  $menuToggle.on('click', function(event) {
    event.preventDefault();
    $sidebar.toggleClass('open');
  });
});