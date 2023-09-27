var thoiGianBanDau = 5;
var time =thoiGianBanDau * 60;
var itemCountDown = document.querySelector('.countdown-item')
console.log(itemCountDown);
setInterval(function(){
      let giay =time % 60;
      let phut = Math.floor(time /60);
      itemCountDown.innerHTML =`${phut}:${giay}`;
      time--;
},1000)