<x-layout>
    <br><button><a href="/vendors/create">ADD VENDOR</a></button>
    <table class="table">
            @unless ($vendors->isEmpty())
            <thead>
                <tr>
                    <th>NAME</th>
                    <th>COUNTRY</th>
                    <th>CITY</th>
                    <th>CONTACT PERSON NAME</th>
                    <th>CONTACT PERSON EMAIL</th>
                    <th>CONTACT PERSON PHONE #</th>
                    <th>EDIT</th>
                    <th>DELETE</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($vendors as $vendor)
                <tr class="border-gray-300">
                    <td>
                        <a href="/vendors/{{$vendor->id}}">
                            {{$vendor->name}}
                        </a>
                    </td>
                    <td>
                        {{$vendor->country}}
                    </td>
                    <td>
                        {{$vendor->city}}
                    </td>
                    <td>
                        {{$vendor->contact_person}}
                    </td>
                    <td>
                        {{$vendor->email}}
                    </td>
                    <td>
                        {{$vendor->phone}}
                    </td>
                    <td
                        class="px-4 py-8 border-t border-b border-gray-300 text-lg"
                    >
                        <a
                            href="/vendors/{{$vendor->id}}/edit"
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
                        <form method="POST" action="/vendors/{{$vendor->id}}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>    
            @endforeach
            @else
                <tr class="border-gray-300">
                    <p>No Vendors Found...</p>
                </tr>    
            @endunless
            
        </tbody>
    </table>
    <div class="pagination">
        {{$vendors->links()}}
    </div>
</x-layout>