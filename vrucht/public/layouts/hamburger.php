<script>
    document.querySelector('.hamburger').addEventListener('click', function() {
        var navbar = document.querySelector('.navbar');
        if (window.innerWidth <= 768) {
            navbar.classList.toggle('open');
            if (navbar.style.display === "none" || navbar.style.display === "") {
                navbar.style.display = "block";
            } else {
                navbar.style.display = "none";
            }
        }
    });

    function checkNavbar() {
        var navbar = document.querySelector('.navbar');
        if (window.innerWidth > 768) {
            navbar.style.display = "flex";
            navbar.classList.remove('open');
        } else if (!navbar.classList.contains('open')) {
            navbar.style.display = "none";
        }
    }

    window.addEventListener('resize', checkNavbar);
    window.addEventListener('load', checkNavbar);

    document.querySelectorAll('.dropdown-toggle, .dropdown-button').forEach(function(element) {
    element.addEventListener('click', function (event) {
        var dropdownContent = document.querySelector('.dropdown-content');
        if (dropdownContent.style.display === "block") {
            // If the dropdown is already visible, allow the default click action to occur
            return true;
        } else {
            // If the dropdown is not visible, show it and prevent the default click action
            event.preventDefault();
            dropdownContent.style.display = "block";
            setTimeout(function() {
                dropdownContent.style.opacity = "1";
            }, 50);
        }
    });
});
</script>