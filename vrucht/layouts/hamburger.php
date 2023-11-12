<script>
    function toggleNavbar() {
    var navbar = document.querySelector('.navbar');
    if (navbar.style.display === "none") {
        navbar.style.display = "flex";
    } else {
        navbar.style.display = "none";
    }
}

    function toggleNavbar() {
    var navbar = document.querySelector('.navbar');
    navbar.classList.toggle('open');
}
</script>