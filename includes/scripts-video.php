<script src="/assets/js/vimeoPlayer.min.js"></script>
<script>
    // Video functionality
    const videos = document.querySelectorAll('.js-video');
    if(videos.length) {

        videos.forEach(video => {
            const iframeOverlay = video.querySelector('.js-iframe-blocker');
            iframeOverlay.addEventListener('click', vimeoFunctions);
            iframeOverlay.iframe = video.querySelector('iframe');
        })
    }

    function vimeoFunctions(event) {

        const iframe = event.currentTarget.iframe;
        let iframeOverlay = event.currentTarget;

        var player = new Vimeo.Player(iframe);
        var sectionVideo = iframe.closest('.js-video');

        player.getPaused().then(function (paused) {
            if (paused) {
                player.setMuted(false);
                player.setVolume(1);

                player.play();
                sectionVideo.classList.remove('video--paused');
                iframeOverlay.style.opacity = "0";

            } else {
                if (!sectionVideo.classList.contains('hide-sound')) {
                    player.setMuted(false);
                    player.setVolume(1);
                    player.setCurrentTime(0);
                    sectionVideo.classList.add('hide-sound');
                    iframeOverlay.style.opacity = "0";
                } else {
                    player.pause();
                    iframeOverlay.style.opacity = "1";
                    sectionVideo.classList.add('video--paused');
                }
            }
        }).catch(function (error) {
            console.log(error);
        });
    }
</script>