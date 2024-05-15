<!-- form for making reservations -->
<x-form-layout>
    <form action="/reservation" method="post">
        @csrf
        <div class="form-container flex flex-col sm:justify-center items-center overflow-hidden">
            <h2>Vul hier je gegevens in en kies een pakket!</h2>
            <P>Na het gegevens opsturen krijgt u een email met de betaling gegevens</P>
            @session('success')
            <p class="succes">{{ session('success') }}</p>
            @endsession
            <div>
                <input type="text" placeholder="Voornaam" class="input mt-4" value="{{ $user->firstname }}">
                <input type="text" placeholder="Achternaam" class="input mt-4" value="{{ $user->lastname }}">
            </div>
            <input type="email" placeholder="E-mail" class="block mt-1 w-full" value="{{ $user->email }}">
            @error('phone_number')
            <p class="error">{{ $message }}</p>
            @enderror
            <input name="phone_number" type="text" placeholder="Telefoon Nummer" class="block mt-1 w-full">
            @error('address')
            <p class="error">{{ $message }}</p>
            @enderror
            <input name="address" type="text" placeholder="Adres" class="block mt-1 w-full">
            @error('package')
            <p class="error">{{ $message }}</p>
            @enderror
            <input name="package" type="text" placeholder="Pakket 1-2-3-4" class="block mt-1 w-full">
            @error('location')
            <p class="error">{{ $message }}</p>
            @enderror
            <input name="location" type="text" placeholder="Surf Locatie" class="block mt-1 w-full">

            <button type="submit" class="buttoncontainer">Verzend!</button>
        </div>
    </form>
</x-form-layout>