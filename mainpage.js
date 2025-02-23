function searchFunction() {
    let input = document.getElementById("searchInput").value.toLowerCase();
    let items = document.querySelectorAll(".item");


    items.forEach(item => {
        let treeName = item.textContent.toLowerCase();
       
        if (treeName.includes(input)) {
            item.style.display = "block"; // Show matching items
        } else {
            item.style.display = "none";  // Hide non-matching items
        }
    });
}
