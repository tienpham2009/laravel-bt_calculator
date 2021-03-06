<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/calculator.css">

</head>
<body>
<div class="container my-4">
    <form action="{{ route('calculator') }}" method="post">

        <div class="calculator card">
            @csrf
            <input type="text" class="calculator-screen z-depth-1" id="input" name="text" value="{{ $result }}"/>

            <div class="calculator-keys">

                <button type="button" class="operator btn btn-info" value="+" onclick="view('+')">+</button>
                <button type="button" class="operator btn btn-info" value="-" onclick="view('-')">-</button>
                <button type="button" class="operator btn btn-info" value="*" onclick="view('*')">&times;</button>
                <button type="button" class="operator btn btn-info" value="/" onclick="view('/')">&divide;</button>

                <button type="button" value="7" onclick="view('7')" class="btn btn-light waves-effect">7</button>
                <button type="button" value="8" onclick="view('8')" class="btn btn-light waves-effect">8</button>
                <button type="button" value="9" onclick="view('9')" class="btn btn-light waves-effect">9</button>


                <button type="button" value="4" onclick="view('4')" class="btn btn-light waves-effect">4</button>
                <button type="button" value="5" onclick="view('5')" class="btn btn-light waves-effect">5</button>
                <button type="button" value="6" onclick="view('6')" class="btn btn-light waves-effect">6</button>


                <button type="button" value="1" onclick="view('1')" class="btn btn-light waves-effect">1</button>
                <button type="button" value="2" onclick="view('2')" class="btn btn-light waves-effect">2</button>
                <button type="button" value="3" onclick="view('3')" class="btn btn-light waves-effect">3</button>


                <button type="button" value="0" onclick="view('0')" class="btn btn-light waves-effect">0</button>
                <button type="button" class="decimal function btn btn-secondary" value=".">.</button>
                <button type="button" onclick="destroy()" class="all-clear function btn btn-danger btn-sm" value="all-clear">AC</button>

                <button type="submit" class="equal-sign operator btn btn-default" value="=">=</button>

            </div>
        </div>
    </form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="{{ \Illuminate\Support\Facades\URL::asset('js/calculator.js')  }}"></script>
</body>
</html>
