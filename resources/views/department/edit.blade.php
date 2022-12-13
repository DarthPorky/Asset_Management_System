<x-layout>
    <h1 class="text-center">Edit {{$department->name}} Department</h1>
    <form class="row g-3" method="POST" action="/departments/{{$department->id}}">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label class="form-label" for="">
                Department Name:
            </label>
            <input type="text"
                class="form-control"
                name="name"
                value="{{$department->name}}">
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
                name="contact_person_name"
                value="{{$department->contact_person_name}}" >
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
                value="{{$department->contact_person_email}}">
            @error('contact_person_email')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Contact Person phoneNumber:
            </label>
            <input type="text"
                class="form-control"
                name="contact_person_phoneNumber"
                value="{{$department->contact_person_phoneNumber}}">
            @error('contact_person_phoneNumber')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Status:
            </label>
                <select class="form-select" name="status" id="">
                    <option value="active">Active</option>
                    <option value="deactivated">Deactivated</option>
                </select>
            @error('status')
                {{$message}}
            @enderror
        </div>
        <div class="col-12">
            <button class="btn btn-dark" type="submit">Save</button>
        </div>
    </form>
</x-layout>