<x-layout>
    <h1 class="text-center">CREATE A LOCATION</h1>
    <form class="row g-3" method="POST" action="/locations">
        @csrf
        <div class="col-md-6">
            <label class="form-label" for="">
                Location Name:
            </label>
            <input type="text"
                class="form-control"
                name="name"
                value="{{old('name')}}"
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
                value="{{old('address_line_one')}}"
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
                value="{{old('address_line_two')}}"
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
                value="{{old('country')}}"
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
                value="{{old('city')}}"
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
                value="{{old('contact_person_name')}}"
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
                value="{{old('contact_person_email')}}"
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
                value="{{old('contact_person_phoneNumber')}}"
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