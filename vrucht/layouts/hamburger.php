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



document.querySelector('.dropdown-button').addEventListener('click', function (event) {
    event.preventDefault();
    var dropdownContent = document.querySelector('.dropdown-content');
    dropdownContent.classList.toggle('show');
    if (dropdownContent.style.display === "none" || dropdownContent.style.display === "") {
        dropdownContent.style.display = "block";
        setTimeout(function() {
            dropdownContent.style.opacity = "1";
        }, 50);
    } else {
        dropdownContent.style.opacity = "0";
        setTimeout(function() {
            dropdownContent.style.display = "none";
        }, 500);
    }
});
</script>