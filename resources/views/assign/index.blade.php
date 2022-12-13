<x-layout>
    <br><button><a href="/assign/create">ASSIGN ASSET</a></button>
    <table class="">
        
            @unless ($assigns->isEmpty())
            <thead>
                <th>
                    ASSET NAME
                </th>
                <th>
                    EMPLOYEE NAME
                </th>
                <th>
                    DEPARTMENT
                </th>
                <th>
                    LOCATION
                </th>
                <th>
                    VENDOR NAME
                </th>
                <th>
                    EDIT
                </th>
                <th>
                    DELETE
                </th>
            </thead>
            <tbody>
            @foreach ($assigns as $assign)
                <tr class="border-gray-300">
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                        <a href="/assign/{{$assign->id}}">
                            {{$assign->asset_name}}
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                            {{$assign->assign_to}}
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                   
                            {{$assign->department}}
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                       
                            {{$assign->location}}
                        </a>
                    </td>
                    <td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
                     
                            {{$assign->vendor}}
                        </a>
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a
                            href="/assign/{{$assign->id}}/edit"
                            class="text-blue-400 px-6 py-2 rounded-xl"
                            ><i
                                class="fa-solid fa-pen-to-square"
                            ></i>
                            Edit</a
                        >
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <form method="POST" action="/assign/{{$assign->id}}">
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
            <table>
                <thead>
                    <th>
                        ASSET NAME
                    </th>
                    <th>
                        EMPLOYEE NAME
                    </th>
                    <th>
                        DEPARTMENT
                    </th>
                    <th>
                        LOCATION
                    </th>
                    <th>
                        VENDOR NAME
                    </th>
                    <th>
                        EDIT
                    </th>
                    <th>
                        DELETE
                    </th>
                </thead>
                <tbody>
                    <tr class="border-gray-300">
                        <td>No Asset Assignments Found...</td>
                    </tr>   
                </tbody>   
            </table>
            @endunless
            
        </tbody>
    </table>
    <div class="pagination">
        {{$assigns->links()}}
    </div>
</x-layout>