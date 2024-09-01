// Handle menu item clicks
$(".custom-menu > ul > li").click(function (e) {
    // Remove active class from already active items
    $(this).siblings().removeClass("custom-active");
    // Toggle active class on the clicked item
    $(this).toggleClass("custom-active");
    // Toggle the visibility of the sub-menu
    $(this).find("ul").slideToggle();
    // Close other sub-menus if any are open
    $(this).siblings().find("ul").slideUp();
    // Remove active class from sub-menu items
    $(this).siblings().find("ul").find("li").removeClass("custom-active");
});

// Handle sidebar toggle button clicks
$(".custom-menu-btn").click(function () {
    $(".custom-sidebar").toggleClass("custom-active");
    $(".custom-main").toggleClass("custom-sidebar-active"); // Update this selector if your content class is different
    
    // Toggle scroll on .custom-nav based on sidebar visibility
    if ($(".custom-sidebar").hasClass("custom-active")) {
        $(".custom-nav").removeClass("scroll-disabled"); // Reactivate scroll
    } else {
        $(".custom-nav").addClass("scroll-disabled"); // Deactivate scroll
    }
});