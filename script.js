function showPage(page) {
    let pages = document.querySelectorAll(".page");

    pages.forEach(p => p.style.display = "none");

    document.getElementById(page).style.display = "block";
}