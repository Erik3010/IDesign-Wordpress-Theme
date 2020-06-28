let open = document.querySelector('.hamburger');
let close = document.querySelector('.close-btn');
let sidebar = document.querySelector('.sidebar')

open.onclick = function() {
    sidebar.classList.toggle('active');
}

// close.onclick = function() {
//     sidebar.classList.remove('active');
// }