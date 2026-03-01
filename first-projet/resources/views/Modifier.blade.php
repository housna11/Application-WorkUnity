<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Work Unity</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen flex items-center justify-center">

<div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md"> 
<form action="/employe/{{$employe->id}}" method="POST">
      @csrf
      @method('PUT')
      <div>
        <label class="block text-lg font-bold mb-1">Nom</label>
        <input type="text" name="nom" value="{{ $employe->nom }}" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer le nom">
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">Prénom</label>
        <input type="text" name="prenom" value="{{ $employe->prenom }}" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer le prénom">
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">Email</label>
        <input type="email" name="email" value="{{ $employe->email }}" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer l’email">
      </div>

      <div>
        <label class="block text-lg font-bold mb-1">Poste</label>
        <input type="text" name="poste" value="{{ $employe->poste }}" class="w-full px-3 py-2 border rounded-md" placeholder="Entrer le poste">
      </div>

      <div class="flex justify-between pt-4">
        <button type="submit" class=" mx-auto bg-[#C90184] text-white px-10 py-2 rounded-md transition hover:bg-[#e76abb] cursor-pointer">Modifier</button>
      </div>
    </form>
</div>
</body>
</html>
