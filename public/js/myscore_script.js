document.addEventListener('DOMContentLoaded', function() {
    const profilePicSelector = document.getElementById('profilePicSelector');
    const profilePic = document.getElementById('profilePic');
    
    // Load saved image from localStorage
    const savedImage = localStorage.getItem('profilePic');
    if (savedImage) {
        profilePic.src = savedImage;
        // Set the selected option to match the saved image
        Array.from(profilePicSelector.options).forEach(option => {
            if (option.getAttribute('data-img') === savedImage) {
                option.selected = true;
            }
        });
    }

    profilePicSelector.addEventListener('change', function() {
        const selectedImage = this.options[this.selectedIndex].getAttribute('data-img');
        profilePic.src = selectedImage;
        // Save selected image to localStorage
        localStorage.setItem('profilePic', selectedImage);
    });
});