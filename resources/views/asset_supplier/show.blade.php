<x-layout>
    <div class="card mt-4 text-center">
        <div class="card-header">
            <h3 class="card-title">Vendor Name: {{$vendor->name}}</h3>
        </div>
        <div class="card-body">
            <p class="card-text">Email: {{$vendor->email}}</p>
            <p class="card-text">Phone: {{$vendor->phone}} |  Contact Person Name: {{$vendor->contact_person}} | Desination: {{$vendor->designation}}</p>
            <p class="card-text">Country: {{$vendor->country}} | City: {{$vendor->city}} </p>
            <p class="card-text">Description: {{$vendor->description}}</p>
            <p><button class="btn btn-secondary"> <a
                    href="/vendors/{{$vendor->id}}/edit"
                    class=""
                    >
                    Edit</a></button>
                    <form method="POST" action="/vendors/{{$vendor->id}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">
                        Delete
                    </button>
                </form>
            </p>
        </div>
     </div>
 </x-layout>