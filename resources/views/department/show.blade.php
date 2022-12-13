<x-layout>
    <div class="card mt-4 text-center">
        <div class="card-header">
            <h3 class="card-title">Department Name: {{$department->name}}</h3>
        </div>
        <div class="card-body">
            <p class="card-text">Contact Person Name: {{$department->contact_person_name}} | Contact Person Email: {{$department->contact_person_email}} | Contact Person PhoneNumber: {{$department->contact_person_phoneNumber}}</p>
            <p class="card-text">Status: {{$department->status}}</p>
            <p> <a
                    href="/departments/{{$department->id}}/edit"
                    class="text-blue-400 px-6 py-2 rounded-xl"
                    ><i
                        class="fa-solid fa-pen-to-square"
                    ></i>
                    Edit</a
                > | <form method="POST" action="/departments/{{$department->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600">
                        <i
                            class="fa-solid fa-trash-can"
                        ></i>
                        Delete
                    </button>
                </form>
            </p>
        </div>
     </div>
 </x-layout>