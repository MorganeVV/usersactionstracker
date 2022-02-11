@extends('master')

@section('main')
    <form action="" method="post">
    @csrf
    <label for="naam">Naam</label>
    <input type="text" id="naam" name="naam" placeholder="Uw naam..">

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Uw email adres..">

    <label for="reden">Reden</label>
    <textarea name="reden" id="reden" cols="30" rows="5" placeholder="Uw reden van contact.."></textarea>

    <input type="submit" value="Verzend" class="klikker">
</form>
@endsection