<x-layout>
   <div class="mt-4 card text-center">
        <div class="mb-3 card-header">
            <h3 class="card-title">Location Name: {{$location->name}}</h3>
        </div>
        <div class="card-body">
            <p class="card-text">Address 1: {{$location->address_line_one}} | Address 2: {{$location->address_line_two}} | Country: {{$location->country}} | City: {{$location->city}}</p>
            <p class="card-text">Contact Person Name: {{$location->contact_person_name}} | Contact Person Email: {{$location->contact_person_email}} | Contact Person PhoneNumber: {{$location->contact_person_phoneNumber}}</p>
            <p class="card-text"> <a
                    href="/locations/{{$location->id}}/edit"
                    class="text-blue-400 px-6 py-2 rounded-xl"
                    ><i
                        class="fa-solid fa-pen-to-square"
                    ></i>
                    Edit</a
                > | <form method="POST" action="/locations/{{$location->id}}">
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