@extends('layouts.app')

@section('content')
    <div class="container">
        <header>
            <div style="text-align:center"><p>
        </header>
        <div class ="tableouter">
            <form action="işlem.php" method="post">
                <div style="text-align:center"><p>
                        <a href="{{ route('loginPage') }}">
                            Müşteri Giriş
                        </a>
                        <input type="button" class="sub" id="müşteri" onClick="" value="müşteri giriş" />
                        <input type="button" class="sub" id="personel" onClick="location.href='personel.php'" value="personel giriş" />
                    <form action="login.php" method="POST">
                        <br>
                    </form>
                </div>
                <img src="https://r.resimlink.com/5hKMF9R.png"width="1850" height="950" >
    </div>
@endsection