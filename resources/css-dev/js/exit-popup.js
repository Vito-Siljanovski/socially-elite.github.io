const popupId = "exit-popup";

function openPopup() {
    Fancybox.show([{ src: `#${popupId}`, type: "inline", dragToClose: false, click: "next" }]);
}

/**
 * Trigger popup on exit
 */
function popupTrigger() {
    Bounceback.init({
        aggressive: !0,
        storeName: "bounceback-popup",
        maxDisplay: 0,
        onBounce: function () {
            if (Fancybox.getInstance() === null) {
                openPopup();
            }
        }
    });
}

popupTrigger();