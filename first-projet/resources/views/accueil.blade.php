<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  <title>WorkUnity</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 min-h-screen">

  <nav class="flex items-center justify-between px-10 py-4 bg-gray-100 ">
    <div class="text-[#C90184] text-2xl font-bold">
      Work<span class="text-[#e76abb] font-medium">Unity</span>
    </div>
  </nav>

 @if(session('success'))
<div id="successAlert"
     class="py-3 px-10 rounded-full mx-auto w-70 text-white text-xl bg-[#C90184] flex justify-between items-center transform transition-all duration-300 hover:scale-105 hover:shadow-lg">
    <span class="mx-auto">{{ session('success') }}</span>

    <button onclick="document.getElementById('successAlert').remove()"
      class="ml-2 font-bold hover:scale-110 transition">
    </button>
</div>

<script>
    setTimeout(() => {
        const alertBox = document.getElementById('successAlert');
        if (alertBox) {
            alertBox.remove();
        }
    }, 3000);
</script>
@endif

  <div class="container mx-auto px-8 py-10">
    <div class="flex justify-between items-center mb-6">
      <h2 class="text-2xl font-bold text-[#C90184]"><i class="fa-solid fa-list"></i> Liste des employés</h2>
      <a href="/employe" class="bg-[#C90184] text-white px-4 py-2 rounded-lg shadow hover:bg-[#e76abb]">
        <i class="fa-solid fa-plus"></i> Ajouter un employé
      </a>
    </div>

    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
      <table class="w-full text-left border-collapse">
        <thead class="bg-gray-100">
          <tr>
            <th class="px-6 py-3 text-[#C90184] font-semibold">Nom</th>
            <th class="px-6 py-3 text-[#C90184] font-semibold">Prénom</th>
            <th class="px-6 py-3 text-[#C90184] font-semibold">Email</th>
            <th class="px-6 py-3 text-[#C90184] font-semibold">Poste</th>
            <th class="px-6 py-3 text-[#C90184] font-semibold text-center">Actions</th>
          </tr>
        </thead>
       <tbody>
          @foreach($employees as $emp)
          <tr class="border-b hover:bg-gray-50">
              <td class="px-6 py-3">{{ $emp->nom }}</td>
              <td class="px-6 py-3">{{ $emp->prenom }}</td>
              <td class="px-6 py-3">{{ $emp->email }}</td>
              <td class="px-6 py-3">{{ $emp->poste }}</td>
              <td class="px-6 py-3 flex justify-center space-x-2">
<a href="/employe/{{$emp->id}}">
      <button class="bg-[#ED8ACF] text-white px-3 py-1 rounded-md cursor-pointer hover:bg-[#ecb2db] transition-colors duration-200"><i class="fa-solid fa-eye"></i> Détail</button>
<a href="/employe/{{$emp->id}}/edit">
<a href="/employe/{{$emp->id}}/edit" class="bg-[#F09FC2] text-white px-3 py-1 rounded-md cursor-pointer hover:bg-[#f082b0] transition-colors duration-200 inline-flex items-center gap-1">
  <i class="fa-solid fa-pen"></i> Modifier</a>        
        <form action="/employe/{{$emp->id}}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet employé ?');">
              @csrf
              @method('DELETE')
      <button type="submit" class="bg-[#EC9CCC] text-white px-3 py-1 rounded-md cursor-pointer hover:bg-[#cf68a6] transition-colors duration-200"><i class="fa-solid fa-trash"></i> Supprimer</button>         
        </form>
              </td>
          </tr>
          @endforeach
        </tbody>

      </table>
    </div>
  </div>

</body>
</html>
