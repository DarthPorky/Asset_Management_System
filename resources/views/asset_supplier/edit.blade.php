<x-layout>
    <h1 class="text-center">Edit {{$vendor->name}} Vendor</h1>
    <form class="row g-3" method="POST" action="/vendors/{{$vendor->id}}">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label class="form-label" for="">
                Vendor Name:
            </label>
             
            <input type="text"
                class="form-control"
                name="name"
                value="{{$vendor->name}}"
            >
             
            @error('name')
                {{$message}}
            @enderror
             
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Contact Person Name:
            </label>
             
            <input type="text"
                class="form-control"
                name="contact_person"
                value="{{$vendor->contact_person}}"
            >
             
            @error('contact_person')
                {{$message}}
            @enderror
             
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Contact Person Email:
            </label>
             
            <input type="text"
                class="form-control"
                name="email"
                value="{{$vendor->email}}"
            >
             
            @error('email')
                {{$message}}
            @enderror
             
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Contact Person phoneNumber:
            </label>
            
             
            <input type="text"
                class="form-control"
                name="phone"
                value="{{$vendor->phone}}"
            >
             
            @error('phone')
                {{$message}}
            @enderror
             
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Designation (Role):
            </label>
            
             
            <input type="text" class="form-control"
                name="designation"
                value="{{$vendor->designation}}"
            >
             
            @error('designation')
                {{$message}}
            @enderror
             
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Country:
            </label>
            
             
            <input type="text" class="form-control"
                name="country"
                value="{{$vendor->country}}"
            >
             
            @error('country')
                {{$message}}
            @enderror
             
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                City:
            </label>
            
             
            <input type="text" class="form-control"
                name="city"
                value="{{$vendor->city}}"
            >
             
            @error('city')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-12">
            <label class="form-label" for="">
                Description:
            </label>
            
            <textarea name="description" class="form-control">{{$vendor->description}}</textarea>
             
            @error('description')
                {{$message}}
            @enderror
             
        </div>
        <div class="col-12">
            <button class="btn btn-dark" type="submit">Save</button>
        </div>
    </form>
</x-layout>