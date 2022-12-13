<x-layout>
    <h1 class="text-center">ASSIGN ASSET</h1>
    <form class="row g-3" method="POST" action="/assign">
        @csrf
        <div class="col-md-6">
            <label class="form-label" for="">
                Vendor:
            </label>

            <select class="form-select" name="vendor" id="">
                @foreach ($vendors as $vendor)
                    <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                @endforeach
            </select>

            @error('vendor')
                {{$message}}
            @enderror
        </div>
        
        <div class="col-md-6">
            <label class="form-label" for="">
                Location:
            </label>

            <select class="form-select" name="location" id="">
                @foreach ($locations as $location)
                    <option value="{{$location->id}}">{{$location->name}}</option>
                @endforeach
            </select>

            @error('location')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Asset:
            </label>
             
            <select class="form-select" name="asset_name" id="">
                @foreach ($assets as $asset)
                    <option value="{{$asset->id}}">{{$asset->name}}</option>
                @endforeach
            </select>
             
            @error('asset_name')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Department:
            </label>
             
            <select class="form-select" name="department" id="">
                @foreach ($departments as $department)
                    <option value="{{$department->id}}">{{$department->name}}</option>
                @endforeach
            </select>
             
            @error('department')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Employee:
            </label>
             
            <select class="form-select" name="assign_to" id="">
                @foreach ($employees as $employee)
                    <option value="{{$employee->id}}">{{$employee->name}}</option>
                @endforeach
            </select>
             
            @error('assign_to')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-12">
            <label class="form-label" for="">
                Description:
            </label>
             
            <textarea class="form-control" name="description">{{old('description')}}</textarea>
             
            @error('description')
                {{$message}}
            @enderror
        </div>
        <div class="col-12">
            <button class="btn btn-dark" type="submit">Save</button>
        </div>
    </form>
</x-layout>