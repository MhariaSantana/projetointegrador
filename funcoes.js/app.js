let fotos = ["Ellipse1.png", "Ellipse2.png"]

function TrocarFoto(foto){
    document.querySelector(".foto1").src = "imagens/" + fotos[foto];


}
 let fotoAtual = 0;
 TrocarFoto(fotoAtual);

 setInterval(function(){
    fotoAtual++;
    if(fotoAtual > 1){
        fotoAtual = 0
    }

    TrocarFoto(fotoAtual);

 }, 2000);
//função para troca de ft, video do Guto



 //função do jquery
$('.autoplay').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 1000, //velocidade do carrossel 
  arrows:false
});






