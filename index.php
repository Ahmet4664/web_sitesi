<?php
/*
//gettype veri türünü gösterir.
//settype veri türünü değiştirir.
//var_dump içeriğini ve türünü öğrenmek için kullanılır

//integer tam sayı
//float kesirli
//string yazı değeri
//bool true=1 false=0

//is_string değer string mi ona bakar
//is_int değer int mi ona bakar
//is_float değer float mı ona bakar
//is_numeric değer numara mı ona bakar
//is_array değer array mı ona bakar
//is_object değer obje mi ona bakar.

//gettype veri türünü gösterir.
//settype veri türünü değiştirir.
//var_dump içeriğini ve türünü öğrenmek için kullanılır

//integer tam sayı
//float kesirli
//string yazı değeri
//bool true=1 false=0

//is_string değer string mi ona bakar
//is_int değer int mi ona bakar
//is_float değer float mı ona bakar
//is_numeric değer numara mı ona bakar
//is_array değer array mı ona bakar
//is_object değer obje mi ona bakar.

//unset o değeri tnaımsız yapar ortadan kaldırır.
//isset değişken var mı yok mu onu kontrol eder.
//strval değeri string yapar
//intval değeri integer yapar.
//empty değerin boş olup olmadığını gösterir.
/
//array diziler
//print_r tüm verileri ekrana yazdırır.
//count dizilerin sayısı verir
//range istediğiniz kadar dizi oluşturur
//list dizin içerisindeki değerlere değişken atıyor.
//array_key_exists dizinde id var mı yok mu onu kontrol ediyor.
//array_keys dizindeki idleri ekrana yazdırmaya yarıyor.
//array_values dizindeki isimleri yazdırıyor.
//array_rand dizilerin içindeki idleri rastgele veriyor.
//array_pop dizi içerisindeki son veriyi siliyor.

//define sabit bir değişken ekler
//defined sabit değişken tanımlı mı değil mi onu gösterir

//arimatik operatörler (+,-,*,/,%)
// -=, += *= /= %= .=

/*
1- == (eşittir.)
2- === (denktir.)
3- != (eşit değildir.)
4- !== (denk değildir.)
5- <= (küçük ve eşittir.)
6- >= (büyük ve eşittir.)
7- <> (eşit değildir.)
8- < (küçüktür.)
9- > (büyüktür.)
*/



/*
Mantıksal operatörler

! (olumsuzca) $a = false; 
&& (ve)
|| (yada)
*/

//hata bastırma oparatörü (@)
//is_array:dizi olup olmadığını kontrol eder.
//unset($isim[0]) diziyi kaldırır.
 //print_r tüm verileri ekrana yazdırır.
//count dizilerin sayısı verir
//range istediğiniz kadar dizi oluşturur
//list dizin içerisindeki değerlere değişken atıyor.
//array_key_exists dizinde id var mı yok mu onu kontrol ediyor.
//array_keys dizindeki idleri ekrana yazdırmaya yarıyor.
//array_values dizindeki isimleri yazdırıyor.
//array_rand dizilerin içindeki idleri rastgele veriyor.
//array_pop dizi içerisindeki son veriyi siliyor.
//array_count_values dizi içerisindeki elemanların kaçar tane olduğunu belirtiyor örnek: 2 tane "A" | 4 tane "B".
//array_unshift dizinin başına yeni bir veri ekliyor.
//array_search dizi içerisinde veri araması yapar bulursa idisini bulamazsa da  false döndürür.
//array_shift dizinin ilk verisini ekrana yazdırıyor.
//array_sum dizi içerisindeki inteeger değerleri topluyor.
//array_product dizi içerisindeki sayıları çarpıyor.
//shuffle dizilerin içerisindeki verileri karıştırıyor.
//array_chunk dizi içerisindeki verileri gruplandırmak için kullanılır.
//array_combine dizi birleştirir.
//array_fill boş diziye veri ekliyor.
//array_fill_keys dizi içerisindeki verilere id atar.
//array_flip anahtar ile id yerlerini değiştirir.
//array_push dizi içerisinde son bölüme eleman ekler.
//array_slice dizide bir kısımdan itibaren ekrana yazdırır.
//array_unique dizi içerisindeki aynı verileri 1 defa yazdırır.


//explode strinkleri parçalamaya yarıyor.
//implode strinkleri birleştirmeye  yarıyor.
//ltrim bir karakter dizisini baştaki karekteri silmeye yarar.
//rtrim bir karkter dizisini sondaki karekteri silmeye  yarar.
//strlen bir karakter dizsinin uzunluğunu belirlemeye yarar.
//strrev bir karakter dizisini ters çevirmeye yarar.
//strstr bir karakter dizisinin belirlenen ifadeden sonrasını alır.
//nl2br \n işaretini <br> olayına çevirir.
//ucfirst değişkenin  sadece başharfini büyük yapar.
//ucwords kelimelerin baş harflerini büyük yapar.
//md5 veri tabanındaki şifreyi md5 türünde şifreler.
//sha1 veri tabanındaki şifreyi sha1 türünde şifreler.
//switch rütbe sistemi yapma
//require:dışarıdan dosya dahil etme olanağı sağlar
//require_one:dışardan dosya dahil edilince sadece 1 tane yazmasını sağlar.
//function: belirli bir işlemi yapar ve programda çağrıldı yere değer döndürür
//return:gelen işlemi geri çevirir.
//while: Önceden belirlenmiş bir koşul bozulana kadar devam eder
//for: kod blokunu belirli bir sayıda ve üst üste çalıştırmak için kullanılan bir döngüdür.
//foreach:sayısal veya metinsel dizi içindeki verileri sırasıyla değişkene atama işlemi yaparak dizi içindeki elemanların hepsini sırasıyla listeleme işlemi yapar.
//static:fonksiyonu kaçkere çağrıldığını gösterir.

//file_exists:dosya ve dizinin olup olmadığını kontrol eder.
//is_file:bir dosyanın dosya   olup olmadığına bakar.
//is_dir: belirtilen dosya normal bir dosya olup olmadığını kontrol etmek için kullanılan bir dahili fonksiyondur.
//mkdir:dosya açmaya yarar.
//rmdir:klasörü silmeye yarar.
//touch:aynı isimde dosyadan sadece 1 tane oluşturuyor.
//unlink:dosya siler.
//fopen:dosyayı açmaya yarar.
//fclose:açılmış klasörü kapatır.
//fwrite:başka bir dosyaya yazı yazmaya yarar.
//r sadece okuma için işlem yapar
//r+ okuma ve yazma işlemi yapar


//$session:verileri depolar.
//date_default_timezone_set:tarih ve saati ayarlamaya yarar.
//strtotime:ileri veya geri zamanları bulmaya yarar.
//setlocale:tarihleri türkçeye çevirir.









/*
if($_POST){

$adminemail="ahmet@gmail.com";
$adminşifre=123;
$email=$_POST["email"];
$şifre=$_POST["şifre"];



if($email=="" && $şifre=="")
{
echo " lütfen heryeri doldurun";
}
else
{

if($email==$adminemail && $şifre==$adminşifre)
{
echo "kayıt başarılı";
}
else
{
    echo "kayıt başarısız";
}
}
}



?>
<form action="" method="post"> 
<input type="text" name="email" placeholder="email">
<input type="text" name="şifre" placeholder="şifre">
<input type="submit" value="kayıt et">



</form>
*/





//str_replace=bi metinin içideki kelimeleri değiştirmeye yarar.
//rand: rasgele sayılar verir.
//die: kodları siler.

/*
try
{
    $db = new PDO("mysql:host=localhost;dbname=uyelik;charset=utf8;", "root", "");
}
catch(PDOException $e)
{
echo $e->getMessage();
}


 
    $sorgu = $db->prepare("INSERT INTO uyelik SET isim=?, soyisim=?, email=?, şifre=?, kayıt_tarihi=?");
    $ekle = $sorgu->execute(array("ahmet", "öztürk", "ahmet@gmail.com", "123" , date("Y-m-d")));
    
    if($ekle)
    {
        echo "eklendi";
    }
    else
    {
        echo "eklenemedi";
    }
*/




try
{
    $db = new PDO("mysql:host=localhost;dbname=uyelik;charset=utf8;", "root", "");
    $db->query("SET CHARACTER SET utf8");
}   
catch(PDOException $e)
{
echo $e->getMessage();
}


if($_POST){

$isim = $_POST["isim"];
$soyisim =  $_POST["soyisim"];
$email = $_POST["email"];
$şifre = $_POST["şifre"];




$ekle = $db->prepare("INSERT INTO uyelik SET isim = ?, soyisim = ?, email = ?, şifre = ? , kayıt_tarihi = ?");
$ekle = $ekle->execute(array($isim,$soyisim,$email,$şifre,date("y-m-d")));

if($ekle)
{
 echo "başarıyla eklendi";
}
else{
    echo "başarısız";
}















}





























?>
<form action="" method="POST">
<input type="text" name="isim" placeholder="isim">
<input type="text" name="soyisim" placeholder="soyisim">
<input type="text" name="email" placeholder="email">
<input type="text" name="şifre" placeholder="şifre">
<input type="submit" value="kayıt">


</form>
    




