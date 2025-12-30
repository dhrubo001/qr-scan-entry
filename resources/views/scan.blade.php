@extends('layout')


@section('content')
    <h2>Enter Password</h2>


    @if (session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif


    <form method="POST" action="/scan/verify">
        @csrf
        <input type="password" name="password" placeholder="Enter password" required>
        <button type="submit">Verify</button>
    </form>


    @if (session('name'))
        <script>
            function speak(name) {
                const msg = new SpeechSynthesisUtterance();
                msg.text = 'Welcome ' + name;
                msg.lang = 'en-IN';
                msg.volume = 1;
                msg.rate = 0.9;
                window.speechSynthesis.speak(msg);
            }


            speak("{{ session('name') }}");
        </script>
    @endif
@endsection
