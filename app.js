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

 }, 5000);