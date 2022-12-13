<x-layout>
    <br> <button class=""><a href="/assets/create">ADD ASSET</a></button> | <a href="/assign">ASSIGNED ASSETS</a>
    <table class="table">
        
            @unless ($assets->isEmpty())
            <thead>
                <tr>
                    <th>ASSET NAME</th>
                    <th>SERIAL NUMBER</th>
                    <th>PRICE</th>
                    <th>LOCATION</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($assets as $asset)
                <tr class="border-gray-300">
                    <td class=" ">
                        <a href="/assets/{{$asset->id}}">
                            {{$asset->name}}
                        </a>
                    </td>
                    <td class=" ">
                            {{$asset->serial_number}}
                    </td>
                    <td class=" ">
                        {{$asset->price}}
                    </td>
                    <td class=" ">
                        {{$asset->location}}
                    </td>
                    <td
                        class=" "
                    >
                        <a
                            href="/assets/{{$asset->id}}/edit"
                            class="text-blue-400 px-6 py-2 rounded-xl"
                            ><i
                                class="fa-solid fa-pen-to-square"
                            ></i>
                            Edit</a
                        >
                    </td>
                    <td
                        class=" "
                    >
                        <form method="POST" action="/assets/{{$asset->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600">
                                <i
                                    class="fa-solid fa-trash-can"
                                ></i>
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>    
            @endforeach
            @else
                <tr class="border-gray-300">
                    <p>No Assets Found...</p>
                </tr>    
            @endunless
            
        </tbody>
    </table>
    <div class="pagination">
        {{$assets->links()}}
    </div>
</x-layout>