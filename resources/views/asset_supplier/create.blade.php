<x-layout>
    <h1 class="text-center">CREATE A VENDOR</h1>
    <form class="row g-3" method="POST" action="/vendors">
        @csrf
        <div class="col-md-6">
            <label class="form-label" for="">
                Vendor Name:
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
                Contact Person Name:
            </label>
             
            <input type="text"
                class="form-control"
                name="contact_person"
                value="{{old('contact_person')}}"
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
                value="{{old('email')}}"
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
                value="{{old('phone')}}"
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
                value="{{old('designation')}}"
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
            
             
            <input type="text" class="form-control"
                name="city"
                value="{{old('city')}}"
            >
             
            @error('city')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-12">
            <label class="form-label" for="">
                Description:
            </label>
            
            <textarea name="description" class="form-control">{{old('description')}}</textarea>
             
            @error('description')
                {{$message}}
            @enderror
             
        </div>
        <div class="col-12">
            <button class="btn btn-dark" type="submit">Save</button>
        </div>
    </form>
</x-layout>