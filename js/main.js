// preloader

var myVar;

function myFunction() {
myVar = setTimeout(showPage, 1000);
}

function showPage() {
document.getElementById("loader").style.display = "none";
document.getElementById("myDiv").style.display = "block";
}


function scrollImage(element) {
    const img = element.querySelector('img');
    const containerHeight = element.querySelector('.port-post-img').clientHeight;
    const imgHeight = img.clientHeight;

    if (imgHeight > containerHeight) {
        const scrollDistance = imgHeight - containerHeight;
        img.style.transform = `translateY(-${scrollDistance}px)`;
    }
}

function resetImage(element) {
    const img = element.querySelector('img');
    img.style.transform = 'translateY(0)';
}

document.addEventListener("DOMContentLoaded", function () {
    const projectItems = document.querySelectorAll('.port-posts .item');
    const menuItems = document.querySelectorAll('.port-menu a');
    
    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener('click', function (event) {
            event.preventDefault();

            const selectedCategory = menuItem.getAttribute('data-category');

            // Toggle active class for menu items
            menuItems.forEach(function (item) {
                item.classList.remove('active');
            });
            menuItem.classList.add('active');

            // Hide all project items with a smooth transition
            projectItems.forEach(function (projectItem) {
                projectItem.classList.add('hidden');
            });

            // Show project items based on the selected category
            projectItems.forEach(function (projectItem) {
                const itemCategory = projectItem.getAttribute('data-category');

                if (selectedCategory === 'all' || selectedCategory === itemCategory) {
                    projectItem.classList.remove('hidden');
                }
            });
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    const techitems = document.querySelectorAll('.tech-menu-items .item');
    const techmenu = document.querySelectorAll('.tech-menu li a');
    
    techmenu.forEach(function (techMenuItem) {
        techMenuItem.addEventListener('click', function (event) {
            event.preventDefault();

            const selectedCategory = techMenuItem.getAttribute('data-category');

            // Toggle active class for menu items
            techmenu.forEach(function (item) {
                item.classList.remove('active');
            });
            techMenuItem.classList.add('active');

            // Hide all project items with a smooth transition
            techitems.forEach(function (techItem) {
                techItem.classList.add('hidden');
            });

            // Show project items based on the selected category
            techitems.forEach(function (techItem) {
                const itemCategory = techItem.getAttribute('data-category');

                if (selectedCategory === 'all' || selectedCategory === itemCategory) {
                    techItem.classList.remove('hidden');
                }
            });
        });
    });
});


document.addEventListener("DOMContentLoaded", function () {
    // Get the current page URL
    var currentUrl = window.location.href;

    // Select the navigation links
    var navLinks = document.querySelectorAll("#navMenus a");

    // Loop through each link and compare its href with the current URL
    navLinks.forEach(function (link) {
        if (link.href === currentUrl) {
            // Add a class to the matching link for styling
            link.classList.add("active");
        }
    });
});




