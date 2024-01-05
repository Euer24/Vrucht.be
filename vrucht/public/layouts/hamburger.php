<script>
    document.querySelector('.hamburger').addEventListener('click', function() {
        var navbar = document.querySelector('.navbar');
        if (window.innerWidth <= 769) {
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
        if (window.innerWidth > 769) {
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
            dropdownContent.style.display = "none";
            dropdownContent.style.opacity = "0";
            document.querySelector('.dropdown-toggle').innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" height="16" width="12" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z"/></svg>';
        } else {
            event.preventDefault();
            dropdownContent.style.display = "block";
            setTimeout(function() {
            dropdownContent.style.opacity = "1";
            document.querySelector('.dropdown-toggle').innerHTML = "<svg xmlns=\"http://www.w3.org/2000/svg\" height=\"16\" width=\"12\" viewBox=\"0 0 384 512\"><path d=\"M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z\"/></svg>";
            }, 50);
        }
    });
});
</script>