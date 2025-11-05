@if($users->isEmpty())
    <!-- Default Table Row -->
    <tr class="border-b border-gray-700 hover:bg-blue-900/40 transition">
        <td class="py-3 px-4">1</td>
        <td class="py-3 px-4">John</td>
        <td class="py-3 px-4">30</td>
        <td class="py-3 px-4">Male</td>
        <td class="py-3 px-4 text-sm text-gray-400">2-10-5</td>
        <td class="py-3 px-4 text-sm text-gray-400">2-10-5</td>
        <td class="py-3 px-4">
            <button class="px-3 py-1 bg-blue-500 hover:bg-blue-600 rounded text-white text-sm transition">
                UPDATE
            </button>
        </td>
        <td class="py-3 px-4">
            <button class="px-3 py-1 bg-red-500 hover:bg-red-600 rounded text-white text-sm transition">
                DELETE
            </button>
        </td>
    </tr>
    <!-- Default Table Row End  -->
     
@else
    @foreach($users as $user)
    <!-- Start Table Row -->
    <tr class="border-b border-gray-700 hover:bg-blue-900/40 transition">
        <!-- Update Form -->
        <form method="POST" action="/update" class="contents">
            @csrf
            <td class="py-3 px-4">{{ $user->id }}</td>
            <td class="py-3 px-4">{{ $user->Name }}</td>
            <td class="py-3 px-4">{{ $user->Age }}</td>
            <td class="py-3 px-4">{{ $user->Gender }}</td>
            <td class="py-3 px-4 text-sm text-gray-400">{{ $user->updated_at }}</td>
            <td class="py-3 px-4 text-sm text-gray-400">{{ $user->created_at }}</td>
            <td class="py-3 px-4">

            <input type=hidden name="id" value="{{ $user->id }}">
            <input type=hidden name="Name" value="{{ $user->Name }}">
            <input type=hidden name="Age" value="{{ $user->Age }}">         
            <input type=hidden name="Gender" value="{{ $user->Gender }}">

                <button type="submit" class="px-3 py-1 bg-blue-500 hover:bg-blue-600 rounded text-white text-sm transition">
                    UPDATE
                </button>
            </td>
        </form>

        <!-- Delete Form -->
        <form method="POST" action="/delete_record" class="contents">
            @csrf
            @method('DELETE')

            <td class="py-3 px-4">
                <button type="submit" name="id" value="{{ $user->id }}"  class="px-3 py-1 bg-red-500 hover:bg-red-600 rounded text-white text-sm transition">
                    DELETE
                </button>
            </td>

        </form>
    </tr>
    <!-- End Table Row -->
    @endforeach
@endif