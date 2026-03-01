<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Work Unity</title>
  @vite('resources/css/app.css')
</head>
<body>

<div class="flex justify-center items-center mt-30">
  <div class="w-full max-w-md">

    <form method="POST" action="/employe" class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md space-y-4">
      @csrf

      <div>
        <label class="block text-lg font-bold mb-1">Nom</label>
        <input type="text" name="nom" 
               class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2" 
               placeholder="Entrer le nom">
        @error('nom')
          <p class="mt-1 text-sm text-[#e76abb]">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">Prénom</label>
        <input type="text" name="prenom" 
               class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2" 
               placeholder="Entrer le prénom">
        @error('prenom')
          <p class="mt-1 text-sm text-[#e76abb]">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">Email</label>
        <input type="email" name="email" 
               class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2" 
               placeholder="Entrer l’email">
        @error('email')
          <p class="mt-1 text-sm text-[#e76abb]">{{ $message }}</p>
        @enderror
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">Poste</label>
        <input type="text" name="poste" 
               class="w-full px-3 py-2 border rounded-md focus:outline-none focus:ring-2" 
               placeholder="Entrer le poste">
        @error('poste')
          <p class="mt-1 text-sm text-[#e76abb]">{{ $message }}</p>
        @enderror
      </div>

      <div class="flex justify-center pt-4">
        <button type="submit" class="mx-auto bg-[#C90184] text-white px-10 py-2 rounded-md transition cursor-pointer">
           Ajouter
        </button>
      </div>

    </form>

  </div>
</div>

</body>
</html>