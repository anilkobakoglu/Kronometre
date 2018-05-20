
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>javascript</title>
	<link rel="stylesheet" href="">
	


</head>
<style type="text/css" media="screen">
 body{

background: #f1f1f1;

 }
.banner{

  height: 30px;
  background-color: #22414e;
  width: 100%;
  text-align: center;
  font-size: 27px;
  color:white;
  font-weight: bolder;
  font-family: monospace;
}





.kronometre{

  margin-top: 5px;
  text-align: center;
  padding: 25px 5px;
  background: #152f3c;


  
}
font{

margin:auto;

font-family: sans-serif;
font-size: 90px;

color:#fff;
font-weight: bolder;
display: inline;



}
#dugmeler{

  margin-top:20px;

  width: 100%;
  text-align: center;
}


#startKronometre{

margin:auto;
border:0.5px solid #969696;
background: #3e9bbb;
text-align: center;
font-family: sans-serif;
font-size: 25px;
color:white;
line-height: 50px;
height: 50px;
width: 100px;
border-radius: 3px;

}

#turKronometre{

margin:auto;
border:0.5px solid #969696;
background: #01aa63;
text-align: center;
font-family: sans-serif;
font-size: 25px;
color:white;
line-height: 50px;
height: 50px;
width: 100px;
border-radius: 3px;
opacity: 0.3;

}
#tur{

margin:auto;
text-align: center;
  
margin-top: 15px;


}

#tur p{
  
  margin:auto;
  margin-top:7px;
  font-size: 20px;
  height: 26px;
  color:#fff;
  background: #152f3c;
  width: 210px;

  border-radius:3px;
}



</style>

<script>

var dakikasayi="00";

var saniyesayi="00";

var salisesayi="00";

var saatsayi="00"; 

var tursayac=0;

var sls;

var basla=2;



function startKronometre(){

basla++;



if(basla%2==1){//bir kere daha tıklandığında başlat olsun BU İF KOŞULU KRONOMETRETNİN ÇALIŞMASINI SAĞLAR

    document.getElementById("startKronometre").innerHTML="Durdur";
    document.getElementById("turKronometre").innerHTML="Sırala";

    var sirala=document.getElementById("turKronometre");

    sirala.style.background="#01aa63";

    sirala.style.opacity="1";

    var baslat=document.getElementById("startKronometre");

    baslat.style.background="#e00032";

    sls=setInterval(salise,10);
    


  }



if(basla%2==0){//eğer bir kere tıklandığında durdur olsun ARTIK BU İF KOŞULUNUN KRONOMETREYİ DURDURMASI LAZIM
  
   document.getElementById("startKronometre").innerHTML="Başlat";
   document.getElementById("turKronometre").innerHTML="Sıfırla";

   var sifirla=document.getElementById("turKronometre");

   sifirla.style.background="#bc6e00";

   var dur = document.getElementById("startKronometre");


   dur.style.background="#0099cc";

   clearInterval(sls);


}





}//end kronometre main function



function salise(){//SALİSE FONKSYİONU SALİSE SAYIMINI YAPARAK KRONOMERTENİN ASIL İŞLEMLERİ AŞAĞIDA YAZPILIR

  salisesayi++;

  if((salisesayi<10)){
     salisesayi="0"+salisesayi;
     document.getElementById("salise").innerHTML=salisesayi; }//eğer salise 10 dan küçükse 01 02 03.. gibi gözüksün diye
 

 if(salisesayi>=10){

     document.getElementById("salise").innerHTML=salisesayi;}//10 dan büyükse iki haneli oluyor zaten 0 koymaya gerek yok

  

if(salisesayi==99){

      saniyesayi++;
      salisesayi=00;

                    if((saniyesayi<10)){

                      document.getElementById("saniye").innerHTML="0"+saniyesayi;
                      }

                    if(saniyesayi>=10){
                      document.getElementById("saniye").innerHTML=saniyesayi;
                      }

                   if(saniyesayi==60){

                      dakikasayi++;
                      saniyesayi=0;
                                    if((dakikasayi<10)){

                                      document.getElementById("dakika").innerHTML="0"+dakikasayi;
                                    }
                                    if(dakikasayi>=10){

                                      document.getElementById("dakika").innerHTML=dakikasayi;

                                    }if(dakikasayi==60){

                                        
                                        saatsayi++;
                                        dakikasayi=0;

                                                    if((saatsayi<10)){

                                                      document.getElementById("saat").innerHTML="0"+saatsayi;
                                                    }
                                                    if(saatsayi>=10){

                                                      document.getElementById("dakika").innerHTML=dakikasayi;
                                                    }
                                                    if(saatsayi==24){

                                                        alert("! gün oldu");
                                                    }
                                        
                                    }

      }   

    }//end kronometre gösterilen bölümü

  }//end salise function


function turKronometre(){

   
   if(basla%2==1){//bu koşullar ne zaman sıralama ne zaman sıfırlama yapmasını belirlemek için, bir butona iki özellik katmış oluruz
         tursayac++;
         
         var alan = document.getElementById("tur");

         var tur=tursayac+". "+saatsayi+":"+dakikasayi+":"+saniyesayi+":"+salisesayi;

         var tur=document.createTextNode(tur);

         var p = document.createElement("p");

         p.appendChild(tur);

         alan.appendChild(p);
    }

 if((basla%2==0)&&(basla!=2)) {

  window.location.reload(1);//eğer sayfa yenilenirse bilgiler sıfırlanmış olur.
 }  

      

  
}//end tur kronometre
  



</script>





<div class="banner">KRONOMETRE</div>
  


<div class="kronometre">
  
  <font id="saat">00</font> <font >:</font> <font id="dakika">00</font> <font>:</font> <font id="saniye">00</font><font>,</font> <font id="salise" style="font-size: 20px;">00</font>

</div>




<div id="dugmeler">
  
   <table align="center">
    <tr>
      <td align="center"><div id="startKronometre" onclick="startKronometre()"> Başlat</div></td>
     
      <td align="center"><div id="turKronometre" onclick=" turKronometre()"> Sırala</div></td>
    </tr>
  </table>
</div>


<div id="tur">
    

</div>
 




</body>
</html>