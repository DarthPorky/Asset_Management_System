<x-layout>
    <h1 class="text-center">Edit {{$location->name}} Location</h1>
    <form class="row g-3" method="POST" action="/locations/{{$location->id}}">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label class="form-label" for="">
                Location Name:
            </label>
            <input type="text"
                class="form-control"
                name="name"
                value="{{$location->name}}"
            >
            @error('name')
                {{$message}}
            @enderror
        </div>
        
        <div class="col-md-6">
            <label class="form-label" for="">
                Address Line 1:
            </label>
            <input type="text"
                class="form-control"
                name="address_line_one"
                value="{{$location->address_line_one}}"
            >
            @error('address_line_one')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Address Line 2:
            </label>
            <input type="text"
                class="form-control"
                name="address_line_two"
                value="{{$location->address_line_two}}"
            >
            @error('address_line_two')
                {{$message}}
            @enderror
        </div>
        
        <div class="col-md-6">
            <label class="form-label" for="">
                Country:
            </label>
            <input type="text"
                class="form-control"
                name="country"
                value="{{$location->country}}"
            >
            @error('country')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                City:
            </label>
            <input type="text"
                class="form-control"
                name="city"
                value="{{$location->city}}"
            >
            @error('city')
                {{$message}}
            @enderror
        </div>
        
        <div class="col-md-6">
            <label class="form-label" for="">
                Contact Person Name:
            </label>
            <input type="text"
                class="form-control"
                name="contact_person_name"
                value="{{$location->contact_person_name}}"
            >
            @error('contact_person_name')
                {{$message}}
            @enderror
        </div>
        
        <div class="col-md-6">
            <label class="form-label" for="">
                Contact Person Email:
            </label>
            <input type="text"
                class="form-control"
                name="contact_person_email"
                value="{{$location->contact_person_email}}"
            >
            @error('contact_person_email')
                {{$message}}
            @enderror
        </div>
        
        <div class="col-md-6">
            <label class="form-label" for="">
                Contact Person PhoneNumber:
            </label>
            <input type="text"
                class="form-control"
                name="contact_person_phoneNumber"
                value="{{$location->contact_person_phoneNumber}}"
            >
            @error('contact_person_phoneNumber')
                {{$message}}
            @enderror
        </div>
        <div class="col-12">
            <button class="btn btn-dark" type="submit">Save</button>
        </div>    
    </form>
</x-layout>