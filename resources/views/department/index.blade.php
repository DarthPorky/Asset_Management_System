<x-layout>
    <br><button><a href="/departments/create">ADD DEPARTMENT</a></button>
    <table class="table">
        <tbody>
            @unless ($departments->isEmpty())
            <thead>
                <tr>
                    <th scope="col">
                        DEPARTMENT NAME
                    </th>
                    <th scope="col">
                        CONTACT PERSON
                    </th>
                    <th scope="col">
                        EMAIL
                    </th>
                    <th scope="col">
                        PHONE NUMBER
                    </th>
                    <th scope="col">
                        EDIT
                    </th>
                    <th scope="col">
                        DELETE
                    </th>
                </tr>
            </thead>
            @foreach ($departments as $department)
                <tr class="border-gray-300">
                    <td class=" ">
                        <a href="/departments/{{$department->id}}">
                            {{$department->name}}
                        </a>
                    </td>
                    <td class=" ">
                        
                            {{$department->contact_person_name}}
                        </a>
                    </td>
                    <td class=" ">
                 
                            {{$department->contact_person_email}}
                        </a>
                    </td>
                    <td class=" ">
                        
                            {{$department->contact_person_phoneNumber}}
                        </a>
                    </td>

                    <td
                        class=" "
                    >
                        <a
                            href="/departments/{{$department->id}}/edit"
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
                        <form method="POST" action="/departments/{{$department->id}}">
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
    <div class="pagination">
        {{$departments->links()}}
    </div>
</x-layout>