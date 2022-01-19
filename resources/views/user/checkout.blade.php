@include('User.navbar')

<!DOCTYPE html>
<html>
<head>
<title>AeroStreet</title>
<link rel="stylesheet" href="./style/loginStyle.css">
</head>
<body style='background: black; color: white'>

<div class='container position-absolute text-center start-50 top-50 translate-middle'>
<h2>Bukti Pembayaran</h2>
<div class="text-center">
    Silahkan kirim bukti transfer <span class="text-warning"><b></b></span><br>
    Ke akun berikut ini <br>
    <span class="text-warning">6318x-xxxx-xxxxx</span> <br>
</div>
<div class="mb-3 row">
<!-- Insert Data Here -->

<form action="{{ route('createPayment') }}" method="GET" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="file" name="image" Required><br><br>
    <input type="submit" name="submit" value="Upload">
</form>
<center>*Note : Jika ada kesalahan upload pembayaran, silahkan upload ulang</center>
@error('image')
    <center class="text-danger mt-2"><h5>Format file tidak didukung</h5></center>
@enderror
@if (isset($msg))
    
<p>
    <center style="color: coral; font-size: 16px">
        {{ $msg }}        
    </center>
</p>
@endif

</div>
</div>
</body>
<style>
input{
    width: 300px;
}
</style>
</html>

      