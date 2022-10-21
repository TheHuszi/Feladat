<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kapcsolatfelvételi űrlap</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <div id="div1">
        <h3>írj nekünk!</h3>

        @if( Session::has('uzenet') )
            <p>{{Session::get('uzenet')}}</p>

        @endif

        <form action="/processing" method="post">
            <div>
                <input class="firstRow" type="text" name="name" placeholder="Neved" value="{{ old('name') }}">
                <input class="firstRow" type="text" name="email" placeholder="E-mail címed" value="{{ old('email') }}">
                <div>
                @error('name') <div class="errors" id="nameError"> {{ $message}} </div> @enderror
                @error('email') <div class="errors" id="emailError"> {{ $message}} </div> @enderror
                </div>
            </div>
            <input type="text" name="subject" placeholder="Megkeresésed tárgya (opcionális)" value="{{ old('subject') }}">
            <br>
            <textarea name="textarea" id="" cols="30" rows="5" placeholder="Üzeneted">{{ old('textarea') }}</textarea>
            @error('textarea') <div class="errors" id="testareaError"> {{ $message}} </div> @enderror
            <br>
            <button>Küldés</button>
            @csrf
        </form>
    </div>
</body>

</html>