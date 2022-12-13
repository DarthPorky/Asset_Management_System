<x-layout>
    <h1>Edit {{$employee->name}} Details</h1>
    <form class="row g-3" method="POST" action="/employees/{{$employee->id}}">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label class="form-label" for="">
                Employee Name:
            </label>
            <input type="text"
                class="form-control"
                name="name"
                value="{{$employee->name}}">
            @error('name')
                {{$message}}
            @enderror
        </div>
        
        <div class="col-md-6">
            <label class="form-label" for="">
                Employee Email:
            </label>
            <input type="email"
                class="form-control"
                name="email"
                value="{{$employee->email}}">
            @error('email')
                {{$message}}
            @enderror
        </div>
        
        <div class="col-md-6">
            <label class="form-label" for="">
                Phone Number:
            </label>
            <input type="text"
                class="form-control"
                name="phone_number"
                value="{{$employee->phone_number}}">
            @error('phone_number')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Reporting Manager:
            </label>
            <select class="form-select" name="reporting_manager" id="">
                <option value="{{$employee->reporting_manager}}" selected>-- {{$employee->reporting_manager}} --</option>
                @foreach ($employees as $employee)
                    <option value="{{$employee->name}}">{{$employee->name}}</option>
                @endforeach
            </select>
            @error('reporting_manager')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Department:
            </label>
            <br>
            <select class="form-select" name="department" id="">
                <option value="{{$department->id}}" selected>-- {{$department->name}} --</option>
                @foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                @endforeach
            </select>
            <br>
            @error('department')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Location:
            </label>
            <select class="form-select" name="location" id="">
                <option value="{{$location->id}}" selected>-- {{$location->name}} --</option>
                @foreach ($locations as $location)
                    <option value="{{$location->id}}">{{$location->name}}</option>
                @endforeach
            </select>
            @error('location')
                {{$message}}
            @enderror
        </div>  
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Save</button>
        </div>
        
    </form>
</x-layout>