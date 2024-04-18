document.addEventListener('DOMContentLoaded', function() {
    var buttons = document.querySelectorAll('.open-popup-btn');
    var popup = document.getElementById('popup');
    var popupText = document.getElementById('popup-text');
    var popupImage = document.getElementById('popup-image');
    var closeButton = document.querySelector('.close');

    buttons.forEach(button => {
        button.addEventListener('click', function() {
            var info = this.getAttribute('data-info');
            var imgSrc = this.getAttribute('data-image');
            popupText.textContent = info;
            popupImage.src = imgSrc;  
            popup.style.display = 'flex';
        });
    });

    closeButton.addEventListener('click', function() {
        popup.style.display = 'none';
    });
});
