<script>
    document.addEventListener('DOMContentLoaded', function() {
        const body = document.querySelector('body');

        // Function to update the content of the popup based on the clicked button's data
        function updatePopupContent(box) {
            // Extract data from the clicked element
            const title = box.querySelector('.js-creator-fn').innerText;
            const statistics = box.querySelector('.js-creator-statistics').innerHTML;
            const text = box.querySelector('.js-creator-txt').innerHTML;
            const imgElement = box.querySelector('.js-creator-img');
            const imgSrc = imgElement.getAttribute('data-src');
            const imgWidth = imgElement.getAttribute('width');
            const imgHeight = imgElement.getAttribute('height');
            const imgAlt = imgElement.getAttribute('alt');

            // Select the popup container
            const popupContainer = document.querySelector('.js-popup-creator');

            // Update the content in the popup with the extracted data
            popupContainer.querySelector('.js-popup-creator-fn').innerText = title;
            popupContainer.querySelector('.js-popup-creator-statistics').innerHTML = statistics;
            popupContainer.querySelector('.js-popup-creator-txt').innerHTML = text;

            // Update the image in the popup
            const imgElementPopup = popupContainer.querySelector('.js-popup-creator-img');
            imgElementPopup.setAttribute('src', imgSrc);
            imgElementPopup.setAttribute('width', imgWidth);
            imgElementPopup.setAttribute('height', imgHeight);
            imgElementPopup.setAttribute('alt', imgAlt);

            // Extract link text from the clicked button
            const linkText = box.querySelector('.js-creator-btn').innerHTML;

            // Select all popup buttons and update their text and href attribute
            const popupButton = document.querySelectorAll('.js-popup-creator-btn');
            popupButton.forEach(button => {
                button.innerHTML = linkText;
            });
            
        }

        // Add click event listeners to all elements with class 'js-trigger-creator-popup'
        document.querySelectorAll('.js-trigger-creator-popup').forEach(button => {
            button.addEventListener('click', event => {
                event.preventDefault();

                // Find the closest box-creator element
                const box = button.closest('.box-creator');

                // Update the popup content based on the clicked button's data
                updatePopupContent(box);

                // Show the popup using Fancybox with specific settings
                Fancybox.show([
                    {
                        src: "#creator-popup",
                        type: "inline",
                        dragToClose: false
                    }
                ]);
            });
        });
    });

</script>