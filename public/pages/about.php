<div style="display: flex; margin: 0; border: 5px solid darkblue; border-radius: 35px 35px 35px 35px; 
background-color: black">
    <div style="width: 100%; background-color: black; color: white; 
    border-radius: 30px 0 0 30px; opacity: 0.9; padding: 30px; text-align: left">
        <h1 style="margin-left: 80px">Про сайт</h1>
        <br>
        <p>Вітаємо на "<span style="font-weight: 500; color: yellow">Волонтерському порталі</span>" – вашому партнері у світі волонтерства! 
            Наш сайт створений для всіх, хто прагне змінити світ на краще, приєднатися до 
            програм або ж потребує допомоги від волонтерів. Тут ви знайдете все необхідне для того, щоб 
            стати активною частиною волонтерського руху або отримати підтримку у скрутну хвилину.
        </p>
        <p>
            На нашому порталі є окрема сторінка, де звичайні користувачі можуть залишати свої прохання 
            щодо допомоги. Ви потребуєте підтримки у проведенні заходу, допомоги у догляді за тваринами, 
            або ж маєте інші потреби? Просто залиште своє прохання, і наші волонтери відгукнуться. Ми 
            прагнемо, щоб кожен, хто потребує допомоги, отримав її вчасно і в повному обсязі.
        </p>
        <p>
            Приєднуйтеся до нас сьогодні і станьте частиною великої спільноти людей, 
            які щодня роблять світ кращим. Ваш час, знання та доброта можуть змінити життя багатьох людей. 
            Разом ми зможемо більше!
        </p>
    </div>
    <div style="height: 100%; background-color: black; color: white; border-radius: 0 30px 30px 0;
        opacity: 0.9; margin: 0">
        <video id="myVideo" width="90%" height="90%" autoplay muted style="margin: 20px 20px 0 10px">
            <source src="public/assets/img/video.mp4" type="video/mp4">
        </video>
        <div style="width: 90%; background-color: #97D4FF;
            color: black; border-radius: 10px; margin: 3%; padding: 10%; text-align: center">
            <h5 style="margin-bottom: 5%">Контактна інформація</h5>
            <div style="display: flex">
                <p style="margin: auto">Телефон: </p>
                <p style="margin: auto; font-style: italic">+38 050 ХХХ ХХ ХХ</p>
            </div>
            <div style="display: flex">
                <p style="margin: auto">Пошта: </p>
                <p style="margin: auto; font-style: italic">volunteer@gmail.com</p>
            </div>
        </div>
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