document.querySelectorAll(".custom-file-upload").forEach(function (upload) {
    upload.addEventListener("click", function () {
        this.querySelector('input[type="file"]').click();
    });
});

// Add event listener to the "Use Current Location" button
document.getElementById("useLocation").addEventListener("click", function () {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            function (position) {
                const latitude = position.coords.latitude;
                const longitude = position.coords.longitude;
                const locationText = `Latitude: ${latitude}, Longitude: ${longitude}`;
                document.getElementById("bookTitle").value = locationText;
            },
            function (error) {
                console.error("Error getting location: " + error.message);
            }
        );
    } else {
        console.error("Geolocation is not supported by this browser.");
    }
});
