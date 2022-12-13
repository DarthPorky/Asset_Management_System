<x-layout>
        <div class="card mt-4 text-center">
            <div class="card-header">
                <h3 class="card-title">{{$asset->name}}</h3>
            </div>
            <div class="card-body">
                <p class="card-text"> Serial Numner: {{$asset->serial_number}}</p>
                <p class="card-text">Price: MWK {{$asset->price}} |  Depriciation Type: {{$asset->depriciation_type}}</p>
                <p class="card-text">vendor: {{$vendor->name}} | Location: {{$location->name}} </p>
                <p class="card-text">Description: {{$asset->description}} </p>
                <p> <a
                        href="/assets/{{$asset->id}}/edit"
                        class="text-blue-400 px-6 py-2 rounded-xl"
                        ><i
                            class="fa-solid fa-pen-to-square"
                        ></i>
                        Edit</a
                    > | <form method="POST" action="/assets/{{$asset->id}}">
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