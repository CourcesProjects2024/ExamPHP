<div style="display: flex; margin: 0; border: 5px solid yellow; border-radius: 35px 35px 35px 35px">
    <div style="width: 100%; height: 500px; background-color: black; color: white; border-radius: 30px 0 0 30px; opacity: 0.9; margin: 0">
        
    </div>
    <div style="height: 500px; background-color: black; color: white; border-radius: 0 30px 30px 0; opacity: 0.9">
        <video id="myVideo" width="300" height="300" autoplay muted style="margin: 20px 20px 0 10px">
            <source src="public/files/video.mp4" type="video/mp4">
        </video>
        <div style="width: 100%; height: 130px; background-color: black; color: white; border-radius: 0 30px 30px 0"></div>
    </div>
</div>
<script>
    window.onload = function() {
        var video = document.getElementById('myVideo');
        video.play();
        
        video.addEventListener('ended', function() {
            video.pause();
            video.currentTime = video.duration;
        });
    };
</script>