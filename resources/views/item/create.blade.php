<x-layout>
    <h1>ADD AN ASSET</h1>
    <form class="row g-3" enctype="multipart/form-data" method="POST" action="/assets">
        @csrf
        <div class="col-md-6">
            <label class="form-label" for="">
                Asset Name:
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
                Serial Number:
            </label>

            <input type="text"
                class="form-control"
                name="serial_number"
                value="{{old('serial_number')}}"
            >

            @error('serial_number')
                {{$message}}
            @enderror

       </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Price:
            </label>

            <input type="text"
                class="form-control"
                name="price"
                value="{{old('price')}}"
            >

            @error('price')
                {{$message}}
            @enderror
        </div>
        <div class="col-md-6">
            <label class="form-label" for="">
                Depriciation Type:
            </label>

            <select class="form-select" name="depriciation_type" id="">
                <option value="straight line" selected>Straight Line</option>
            </select>

            @error('depriciation_type')
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
        <div class="col-md-12">
            <label class="form-label" for="">
                Description:
            </label>

           <textarea class="form-control" name="description">{{old('description')}}</textarea>

            @error('description')
                {{$message}}
            @enderror
        </div>
        {{-- <label for="image" class="inline-block text-lg mb-2">
            Image of Asset
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="image"
        />
        @error('image')
            <p>{{$message}}</p>
        @enderror
        <br> --}}
        <div class="col-12">
            <button class="btn btn-dark" type="submit">Save</button>
        </div>
        
    </form>
</x-layout>