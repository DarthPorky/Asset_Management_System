<x-layout>
    <div>
        <div class="card text-center" style="width: ;">
            <div class="card-body">
                <div class="card-header mb-5">
                    <h3 class="card-title">{{$employee->name}} </h3>
                </div>
                <p class="card-text">Phone Number: {{$employee->phone_number}} | Location Name: {{$location->name}} |  Email: {{$employee->email}}</p>
                <p class="card-text">Department: {{$department->name}} | Manager: {{$employee->reporting_manager}} </p>
                <p> <a
                        href="/employees/{{$employee->id}}/edit"
                        class="text-blue-400 px-6 py-2 rounded-xl"
                        ><i
                            class="fa-solid fa-pen-to-square"
                        ></i>
                        Edit</a
                    > | <form method="POST" action="/employees/{{$employee->id}}">
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
         
     </div>
 </x-layout>