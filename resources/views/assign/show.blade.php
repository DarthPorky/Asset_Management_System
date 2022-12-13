@php
    use chillerlan\QRCode\QRCode;
    use chillerlan\QRCode\QROptions;

    require_once('../vendor/autoload.php');
            $options = new QROptions([
                'eccLevel' => QRCode::ECC_L,
                'outputType' => QRCode::OUTPUT_MARKUP_SVG
            ]);
            
            $data = [
                'name' => $asset->name,
                'assignedTo' => $assign->name,
                'Serial Number' => $asset->serial_number,
                'location' => $location->name,
                'department' => $department->name
            ];
            
            $qrcode = (new QRCode($options))->render(json_encode($data));  
@endphp
<x-layout>
    <div class="card mt-4 text-center">
            <div class="card-header">
                <h3 class="card-title">Asset Name: {{$asset->name}} | Assigned To: {{$assign->name}}</h3>
            </div>
            <img src="{{$qrcode}}" width="100" height="100" class="card-img-top" alt="...">
            
         
         <p>Location: {{$location->name}} |  Department Name: {{$department->name}} | vendor: {{$vendor->name}}</p>
         <p>Description: {{$desc->description}} </p>
         <p> <button class="btn btn-dark"><a
                 href="/assign/{{$assign->id}}/edit"
                 class="text-blue-400 px-6 py-2 rounded-xl"
                 >Edit</a></button> | <button class="btn btn-dark"><a href="{{$qrcode}}" download>Download QR</a></button>
                 <form method="POST" action="/assign/{{$assign->id}}">
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
 </x-layout>