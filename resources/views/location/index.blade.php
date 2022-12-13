<x-layout>
    <br><button><a href="/locations/create">ADD Location</a></button>
    <div class="table-responsive">

    
    <table class="table">
        <tbody>
            @unless ($locations->isEmpty())
            <thead>
                <tr>
                    <th>LOCATION NAME</th>
                    <th>CITY</th>
                    <th>COUNTRY</th>
                    <th>CONTACT PERSON</th>
                    <th>EMAIL</th>
                    <th>PHONE NUMBER</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            @foreach ($locations as $location)
                <tr class="border-gray-300">
                    <td class=" ">
                        <a href="/locations/{{$location->id}}">
                            {{$location->name}}
                        </a>
                    </td>
                    <td class=" ">
                         
                            {{$location->city}}
                        </a>
                    </td>
                    <td class=" ">
                         
                            {{$location->country}}
                        </a>
                    </td>
                    <td class=" ">
                         
                            {{$location->contact_person_name}}
                        </a>
                    </td>
                    <td class=" ">
                         
                            {{$location->contact_person_email}}
                        </a>
                    </td>
                    <td class=" ">
                         
                            {{$location->contact_person_phoneNumber}}
                        </a>
                    </td>
                    <td
                        class=" "
                    >
                        <a
                            href="/locations/{{$location->id}}/edit"
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
                        <form method="POST" action="/locations/{{$location->id}}">
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
                    <p>No Departments Found...</p>
                </tr>    
            @endunless
            
        </tbody>
    </table>
    </div>
    <div class="pagination">
        {{$locations->links()}}
    </div>
</x-layout>