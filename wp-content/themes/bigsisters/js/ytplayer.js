// 2. This code loads the IFrame Player API code asynchronously.
  var tag = document.createElement('script');

  tag.src = 'https://www.youtube.com/iframe_api';
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  // 3. This function creates an <iframe> (and YouTube player)
  //    after the API code downloads.
  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('YTplayer', {
      height: '480',
      width: '640',
      playerVars: {
        autoplay: 1,
        loop: 1,
        controls: 1,
        showinfo: 0,
        autohide: 1,
        modestbranding: 1,
        vq: 'hd1080'},
        videoId: 'nNSrSozCeU4',
        events: {
          'onReady': onPlayerReady,
          'onStateChange': onPlayerStateChange
        }
      });
    }

    // 4. The API will call this function when the video player is ready.
    function onPlayerReady(event) {
      event.target.playVideo();
      player.mute();
    }

    var done = false;
    function onPlayerStateChange(event) {

    }
    function stopVideo() {
      player.stopVideo();
    }
