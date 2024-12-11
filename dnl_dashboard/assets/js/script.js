$(document).ready(function() {
    // Function to load content and update the active menu item
    function loadContent(page, menuItem) {
        $('.content').load('includes/' + page);
        $('.nav-menu li').removeClass('active'); // Remove the 'active' class from all menu items
        menuItem.addClass('active'); // Add the 'active' class to the clicked menu item
    }
    // Load the "Contact" content by default
    loadContent('contact.php', $('#contact'));

    // Handle menu item clicks
    $('#contact').click(function() {
        loadContent('contact.php', $(this));
    });

    $('#company').click(function() {
        loadContent('company.php', $(this));
    });

    $('#social-media').click(function() {
        loadContent('social-media.php', $(this));
    });
});
