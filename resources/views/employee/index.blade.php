<x-layout>
    <br><button><a href="/employees/create">ADD EMPLOYEE</a></button>
    <div class="table-responsive">
        

    <table class="table table-hover">
       
            @unless ($employees->isEmpty())
            <thead>
                <tr>
                    <th scope="col">
                        EMPLOYEE NAME
                    </th>
                    <th scope="col">
                        EMAIL
                    </th>
                    <th scope="col">
                        PHONE NUMBER
                    </th>
                    <th scope="col">
                        DEPARTMENT
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach ($employees as $employee)
                <tr class="border-gray-300">
                    <td
                        class=" "
                    >
                        <a href="/employees/{{$employee->id}}">
                            {{$employee->name}}
                        </a>
                    </td>
                    <td
                        class=" "
                    >
                            {{$employee->email}}
                        </a>
                    </td>
                    <td
                        class=" "
                    >
                            {{$employee->phone_number}}
                        </a>
                    </td>
                    <td
                        class=" "
                    >
                            @if ($employee->department_name == 0)
                                No Department
                            @endif
                            {{$employee->department_name}}
                        </a>
                    </td>
                    <td
                        class=" "
                    >
                        <a
                            href="/employees/{{$employee->id}}/edit"
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
                        <form method="POST" action="/employees/{{$employee->id}}">
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
                    <p>No Employees Found...</p>
                </tr>    
            @endunless
            
        </tbody>
    </table>
</div>
<div class="pagination">
    {{$employees->links()}}
</div>
</x-layout>