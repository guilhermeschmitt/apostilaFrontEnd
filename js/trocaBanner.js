var banners = ["img/destaque-home.jpg", "img/destaque-home-2.jpg"];
var bannerAtual = 0;
var controle = document.querySelector('.pause');
var timer = setInterval(trocaBanner, 4000);

function trocaBanner(){
	bannerAtual = (bannerAtual+1)%2;
	document.querySelector('.destaque img').src = banners[bannerAtual];
}

controle.onclick = function () {
    if (controle.className == 'pause') {
        clearInterval(timer);
        console.log("Pausou");
        controle.className = 'play';
    }
    else {
        timer = setInterval(trocaBanner, 4000);
        controle.className = 'pause';
        console.log("Deu o play")
    }

    return false;
};